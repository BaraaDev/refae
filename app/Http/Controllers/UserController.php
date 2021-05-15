<?php
namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Matrix\Exception;
use Modules\Contact\Models\Contact;
use Modules\FrontendController;
use Modules\User\Events\NewVendorRegistered;
use Modules\User\Events\SendMailUserRegistered;
use Modules\User\Models\Newsletter;
use Modules\User\Models\Subscriber;
use Modules\User\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Modules\Vendor\Models\VendorRequest;
use Validator;
use Modules\Booking\Models\Booking;
use App\Helpers\ReCaptchaEngine;
use App\Models\Contact as AppContact;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Modules\Booking\Models\Enquiry;
use App\Models\Property;
use App\Models\Review;
use App\Models\UserWishList;
use App\Order;
use Modules\Agencies\Models\BravoContactObject;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    use AuthenticatesUsers;

    protected $enquiryClass;



    public function dashboard(Request $request)
    {

        $user_id = Auth::id();
        $countProperty = Property::where("create_user", $user_id)->count();
        $countView     = Property::where("create_user", $user_id)->sum('view');
        $countWish     = UserWishList::where("user_id", $user_id)->count();
        $countReview   = Review::join("properties","properties.id","review.object_id")->where("properties.create_user", $user_id)->where("review.object_model","'property'")->count();
        $data = [
            'count_property' => $countProperty,
            'page_title'         => __("Agent Dashboard"),
            'count_view'         => $countView,
            'count_review'       => $countReview,
            'count_wish'         => $countWish,
            'breadcrumbs'        => [
                [
                    'name'  => __('Dashboard'),
                    'class' => 'active'
                ]
            ]
        ];
        return view('user.dashboard', $data);
    }

    public function reloadChart(Request $request)
    {
        $chart = $request->input('chart');
        $user_id = Auth::id();
        switch ($chart) {
            case "earning":
                $from = $request->input('from');
                $to = $request->input('to');
                return $this->sendSuccess([
                    'data' => Booking::getEarningChartDataForVendor(strtotime($from), strtotime($to), $user_id)
                ]);
                break;
        }
    }

    public function profile(Request $request)
    {

        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function profile_post(Request $request)
    {


        $user = \auth()->user();

        $input = $request->except(['file']);

        $file = $request->file('file');

        if($file){

            $filename = $file->getClientOriginalName();

            $filename = uniqid() . $filename;

            $file->move('images/', $filename);

            $input['avatar'] = $filename;

        }else{

            $input['avatar'] = $user->avatar;
        }

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name'  => 'required|max:255',
            'email'      => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
        ]);

        $user->fill($input);

        $user->birthday = date("Y-m-d", strtotime($user->birthday));
        $user->user_social = json_encode($user->user_social);
        $user->save();
        return redirect()->back()->with('success', __('Update successfully'));
    }

    public function changePassword(Request $request)
    {
        if(is_demo_mode()){
            return redirect()->back()->with("error", __("DEMO MODE: You can not change password."));
        }
        $data = [
            'breadcrumbs' => [
                [
                    'name' => __('Setting'),
                    'url'  => route("user.profile.index")
                ],
                [
                    'name'  => __('Change Password'),
                    'class' => 'active'
                ]
            ],
            'page_title'  => __("Change Password"),
        ];
        return view('user.changePassword', $data);
    }



    public function userLogin(Request $request)
    {
        $rules = [
            'email'    => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required'    => __('Email is required field'),
            'email.email'       => __('Email invalidate'),
            'password.required' => __('Password is required field'),
        ];
        if (ReCaptchaEngine::isEnable() and setting_item("user_enable_login_recaptcha")) {
            $codeCapcha = $request->input('g-recaptcha-response');
            if (!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)) {
                $errors = new MessageBag(['message_error' => __('Please verify the captcha')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors
                ], 200);
            }
        }
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors()
            ], 200);
        } else {
            $email = strip_tags($request->input('email'));
            $password = strip_tags($request->input('password'));
            if (Auth::attempt([
                'email'    => $email,
                'password' => $password
            ], $request->has('remember'))) {
                if (in_array(Auth::user()->status, ['blocked'])) {
                    Auth::logout();
                    $errors = new MessageBag(['message_error' => __('Your account has been blocked')]);
                    return response()->json([
                        'error'    => true,
                        'messages' => $errors,
                        'redirect' => false
                    ], 200);
                }
                $url =  $request->input('redirect') ? $request->input('redirect'): url('/');
                return response()->json([
                    'error'    => false,
                    'messages' => false,
                    'redirect' => strip_tags($url)
                ], 200);
            } else {
                $errors = new MessageBag(['message_error' => __('Username or password incorrect')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors,
                    'redirect' => false
                ], 200);
            }
        }
    }

    public function userRegister(Request $request)
    {
        $rules = [
            'first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'last_name'  => [
                'required',
                'string',
                'max:255'
            ],
            'email'      => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users'
            ],
            'password'   => [
                'required',
                'string'
            ],
            'term'       => ['required'],
        ];
        $messages = [
            'email.required'      => __('Email is required field'),
            'email.email'         => __('Email invalidate'),
            'password.required'   => __('Password is required field'),
            'first_name.required' => __('The first name is required field'),
            'last_name.required'  => __('The last name is required field'),
            'term.required'       => __('The terms and conditions field is required'),
        ];

        if (ReCaptchaEngine::isEnable() and setting_item("user_enable_register_recaptcha")) {
            $codeCapcha = $request->input('g-recaptcha-response');
            if (!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)) {
                $errors = new MessageBag(['message_error' => __('Please verify the captcha')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors
                ], 200);
            }
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors()
            ], 200);
        } else {

            $user = \App\User::create([
                'first_name' => strip_tags($request->input('first_name')),
                'last_name'  => strip_tags($request->input('last_name')),
                'email'      => strip_tags($request->input('email')),
                'password'   => Hash::make($request->input('password')),
                'publish'    => 'publish',
                'phone'    => strip_tags($request->input('phone')),
            ]);
            event(new Registered($user));
            Auth::loginUsingId($user->id);
            try {

                // event(new SendMailUserRegistered($user));

            } catch (Exception $exception) {

                Log::warning("SendMailUserRegistered: " . $exception->getMessage());
            }
            $user->assignRole('customer');
            $url =  $request->input('redirect') ? $request->input('redirect'): url('/');

            return response()->json([
                'error'    => false,
                'messages' => false,
                'redirect' => strip_tags($url)
            ], 200);
        }
    }




    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect(app_get_locale(false, '/'));
    }


    public function orders () {

        $orders = Order::where('user_id', '=', Auth::user()->id)->latest()->get();


        return view('user.orders', compact('orders'));
    }


}


