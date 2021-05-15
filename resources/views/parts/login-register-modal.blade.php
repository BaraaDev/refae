{{-- <div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">{{__('Log In')}}</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                    <i class="input-icon field-icon fa">
                        <img src="{{url('images/ico_close.svg')}}" alt="close">
                    </i>
                </span>
            </div>
            <div class="modal-body relative">
                @include('auth/login-form')
            </div>
        </div>
    </div>
</div>
<div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">{{__('Sign Up')}}</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                    <i class="input-icon field-icon fa">
                        <img src="{{url('images/ico_close.svg')}}" alt="close">
                    </i>
                </span>
            </div>
            <div class="modal-body">
                @include('auth/register-form')
            </div>
        </div>
    </div>
</div> --}}

<div class="sign_up_modal modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body container pb20">
                <div class="tab-content container" id="myTabContent">
                      <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="col-lg-6 col-xl-6">
                              <div class="login_thumb">
                                  <img class="img-fluid w100" src="{{ asset('/images/resource/login.jpg') }}" alt="login.jpg">
                              </div>
                          </div>
                          <div class="col-lg-6 col-xl-6">
                            <div class="login_form">
                                <form class="bravo-form-login" method="POST" action="{{ route('login') }}">
                                    <input type="hidden" name="redirect" value="{{request()->query('redirect')}}">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}">
                                        <i class="input-icon fa fa-envelope-o"></i>
                                        <span class="invalid-feedback error error-email"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" autocomplete="off"  placeholder="{{__('Password')}}">
                                        <i class="input-icon fa fa-lock"></i>
                                        <span class="invalid-feedback error error-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="remember-me" class="mb0">
                                                <input type="checkbox" name="remember" id="remember-me" value="1"> {{__('Remember me')}} <span class="checkmark fcheckbox"></span>
                                            </label>
                                            <a href="{{ route("password.request") }}">{{__('Forgot Password?')}}</a>
                                        </div>
                                    </div>
                                    @if(setting_item("user_enable_login_recaptcha"))
                                        <div class="form-group">
                                            {{recaptcha_field($captcha_action ?? 'login')}}
                                        </div>
                                    @endif
                                    <div class="error message-error invalid-feedback"></div>
                                    <div class="form-group">
                                        <button class="btn btn-primary " type="submit">
                                            {{ __('Login') }}
                                            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
                                        <div class="advanced">
                                            <p class="text-center f14 c-grey">{{__('or continue with')}}</p>
                                            <div class="row">
                                                @if(setting_item('facebook_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('/social-login/facebook')}}"class="btn btn_login_fb_link" data-channel="facebook">
                                                            <i class="input-icon fa fa-facebook"></i>
                                                            {{__('Facebook')}}
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(setting_item('google_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('social-login/google')}}" class="btn btn_login_gg_link" data-channel="google">
                                                            <i class="input-icon fa fa-google"></i>
                                                            {{__('Google')}}
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(setting_item('twitter_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('social-login/twitter')}}" class="btn btn_login_tw_link" data-channel="twitter">
                                                            <i class="input-icon fa fa-twitter"></i>
                                                            {{__('Twitter')}}
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                    <div class="c-grey font-medium f14 text-center"> {{__('Do not have an account?')}} <a href="" data-target="#register" data-toggle="modal">{{__('Sign Up')}}</a>
                                    </div>
                                </form>

                            </div>
                          </div>
                      </div>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="sign_up_modal modal fade bd-example-modal-lg" id="register" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body container pb20">
                <div class="tab-content container" id="myTabContent">
                      <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="col-lg-6 col-xl-6">
                              <div class="login_thumb">
                                  <img class="img-fluid w100" src="{{ asset('/images/resource/login.jpg') }}" alt="login.jpg">
                              </div>
                          </div>
                          <div class="col-lg-6 col-xl-6">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h4>Register</h4>
                                </div>
                                <form class="form bravo-form-register" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="{{__("First Name")}}">
                                                <i class="input-icon field-icon fa"><img src="{{url('images/ico_fullname_signup.svg')}}"></i>
                                                <span class="invalid-feedback error error-first_name"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="{{__("Last Name")}}">
                                                <i class="input-icon field-icon fa"><img src="{{url('images/ico_fullname_signup.svg')}}"></i>
                                                <span class="invalid-feedback error error-last_name"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}">
                                        <i class="input-icon field-icon fa"><img src="{{url('images/ico_email_login_form.svg')}}"></i>
                                        <span class="invalid-feedback error error-email"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" autocomplete="off" placeholder="{{__('Password')}}">
                                        <i class="input-icon field-icon fa"><img src="{{url('images/ico_pass_login_form.svg')}}"></i>
                                        <span class="invalid-feedback error error-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="term">
                                            <input id="term" type="checkbox" name="term" class="mr5">
                                            {!! __("I have read and accept the <a href=':link' target='_blank'>Terms and Privacy Policy</a>",['link'=>get_page_url(setting_item('booking_term_conditions'))]) !!}
                                            <span class="checkmark fcheckbox"></span>
                                        </label>
                                        <div><span class="invalid-feedback error error-term"></span></div>
                                    </div>
                                    @if(setting_item("user_enable_register_recaptcha"))
                                        <div class="form-group">
                                            {{recaptcha_field($captcha_action ?? 'register')}}
                                        </div>
                                    @endif
                                    <div class="error message-error invalid-feedback"></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary form-submit">
                                            {{ __('Sign Up') }}
                                            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
                                        <div class="advanced">
                                            <p class="text-center f14 c-grey">{{__("or continue with")}}</p>
                                            <div class="row">
                                                @if(setting_item('facebook_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('/social-login/facebook')}}" class="btn btn_login_fb_link"
                                                           data-channel="facebook">
                                                            <i class="input-icon fa fa-facebook"></i>
                                                            {{__('Facebook')}}
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(setting_item('google_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('social-login/google')}}" class="btn btn_login_gg_link" data-channel="google">
                                                            <i class="input-icon fa fa-google"></i>
                                                            {{__('Google')}}
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(setting_item('twitter_enable'))
                                                    <div class="col-xs-12 col-sm-4">
                                                        <a href="{{url('social-login/twitter')}}" class="btn btn_login_tw_link" data-channel="twitter">
                                                            <i class="input-icon fa fa-twitter"></i>
                                                            {{__('Twitter')}}
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                    <div class="c-grey f14 text-center">
                                       {{__(" Already have an account?")}}
                                        <a href="#" data-target="#login" data-toggle="modal">{{__("Log In")}}</a>
                                    </div>
                                </form>
                            </div>
                          </div>
                      </div>
                </div>
              </div>
        </div>
    </div>
</div>



