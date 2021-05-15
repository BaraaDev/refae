<?php
namespace App\Http\Controllers;

use App\User;
use App\Models\Page;
use App\Models\NewsCategory;
use App\Models\Tag;
use App\Models\News;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Helpers\AppHelper;
use App\Models\Location;
use App\Models\Matches;
use App\Models\Tours;
use Darryldecode\Cart\Cart;

class HomeController extends Controller
{

    public function index()
    {



        $locations = Location::whereStatus('publish')->get();

        $feautured = Property::whereIs_featured(1)->whereStatus('publish')->get();

        $feauturedtours = Tours::whereIs_featured(1)->whereStatus('publish')->get();

        $matches = Matches::whereIs_featured(1)->whereStatus('publish')->take(3)->get();

        $allmatches = Matches::whereStatus('publish')->latest()->get();
        $alltours   = Tours::whereStatus('publish')->latest()->get();
        $allhotels  = Property::whereStatus('publish')->latest()->get();

        $news = News::whereStatus('publish')->latest()->take(3)->get();

        return view('home', compact('feautured', 'news', 'locations', 'feauturedtours', 'matches', 'allmatches', 'alltours', 'allhotels'));

    }




    public function locations(){

        $locations = Location::whereStatus('publish')->get();

        return view('locations', compact('locations'));
    }

    public function tour($slug){

        $tour = Tours::where('slug', $slug)->first();

        if(!$tour){

            abort('404');
        }

        $tour->increment('views', 1);

        return view('tour', compact('tour'));
    }


    public function match($slug){

        $match = Matches::where('slug', $slug)->first();

        if(!$match){

            abort('404');
        }

        $match->increment('views', 1);

        return view('match', compact('match'));
    }

    public function hotel($slug){

        $hotel = Property::where('slug', $slug)->first();

        if(!$hotel){

            abort('404');
        }

        $hotel->increment('views', 1);

        return view('hotel', compact('hotel'));
    }

    public function matches(){

        $matches = Matches::where('status', 'publish')->latest()->get();

        return view('matches', compact('matches'));
    }

    public function hotels (){

        $hotels = Property::where('status', 'publish')->latest()->get();

        return view('hotels', compact('hotels'));
    }

    public function tours (){

        $tours = Tours::where('status', 'publish')->latest()->get();

        return view('tours', compact('tours'));
    }



    public function news(){

        $news = News::whereStatus('publish')->get();

        return view('news', compact('news'));
    }

    public function blog($slug){

        $blog = News::where('slug', $slug)->first();

        if(!$blog){

            abort('404');
        }

        $blog->increment('views', 1);

        return view('blog', compact('blog'));
    }


    public function addtocart(Request $request) {

        $request->validate([

            'id'   => 'required',
            'type' => 'required',
        ]);


            if($request->type == 'tour'){

                $item  = Tours::findOrFail($request->id);

                $model = 'App\Models\Tours';

            }elseif($request->type == 'hotel'){

                $item  = Property::findOrFail($request->id);

                $model = 'App\Models\Property';

            }elseif($request->type == 'match'){

               $item  = Matches::findOrFail($request->id);

               $model = 'App\Models\Matches';

            }else{

                return 'not';
            }


        \Cart::add(array(
            'id'         => $item->id,
            'name'       => $item->title,
            'price'      => $item->price,
            'quantity'   => 1,
            'attributes' => array(),
            'associatedModel' => $model
        ));



        return  \Cart::getTotalQuantity();


    }

    public function cart (){

        $items = \Cart::getContent();


        return view('cart', compact('items'));
    }

}
