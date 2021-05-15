<div class="preloader d-none"></div>
	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu @if(!(isset($is_homepage) && $is_homepage == true)) style2 @endif">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
					@if($logo_id = setting_item("logo_id"))
						<?php $logo = get_file_url($logo_id,'full') ?>
						<img class="nav_logo_img img-fluid" src="{{$logo}}" alt="{{setting_item("site_title")}}">
					@endif
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
				<a href="{{asset('/')}}" class="navbar_brand float-left dn-smd">
			     <img class="logo1 img-fluid" src="{{ asset('images/logoblack.png')}}" style="max-width: 197px;margin-top: -50px;" alt="{{setting_item("site_title")}}">
		        </a>

                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
					<li class="active depth-0"><a target="" href="/">Home</a>
                    </li>



                    {{-- <?php generate_menu('primary') ?> --}}


					@include('inc.currency-switcher')
                    @include('inc.switcher')

					@if(!Auth::id())


                         <li class="login-item">

							<a href="{{ route('login') }}"  class="login">{{__('Login')}}</a>
						</li>

						<li class="signup-item">
							<a href="{{ route('register') }}" class="signup">{{__('Sign Up')}}</a>
						</li>

					@else
						<li class="login-item dropdown">
							<a href="#" data-toggle="dropdown" class="is_login @if(!($avatar_url = Auth::user()->getAvatarUrl())) no_avatar @endif">
								@if($avatar_url = Auth::user()->getAvatarUrl())
									<img class="avatar" src="{{$avatar_url}}" alt="{{ Auth::user()->getDisplayName()}}">
								@else
									<span class="avatar-text">{{ucfirst( Auth::user()->getDisplayName()[0])}}</span>
								@endif
								{{__("Hi, :Name",['name'=>Auth::user()->getDisplayName()])}}
							</a>
							<ul class="dropdown-menu dropdown-menu-right text-left">
								@if(Auth::user()->hasPermissionTo('dashboard_agent_access'))
									{{--  <li class=" menu-hr"><a href="{{route('vendor.dashboard')}}"><i class="fa fa-line-chart"></i> {{__("Agent Dashboard")}}</a></li>  --}}
								@endif
								<li class="@if(Auth::user()->hasPermissionTo('dashboard_agent_access')) menu-hr @endif">
									<a href="{{route('user.profile.index')}}"><i class="fa fa-user"></i> {{__("My profile")}}</a>
								</li>
								<li class="menu-hr"><a href="{{route('user.change_password')}}"><i class="fa fa-lock"></i> {{__("Change password")}}</a></li>


									<li class="menu-hr"><a href="{{ route('dashboard.home')}}"><i class="fa fa-cog"></i> {{__("Admin Dashboard")}}</a></li>


								<li class="menu-hr">
									<a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{__('Logout')}}</a>
								</li>
							</ul>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					@endif
					@if(!Auth::check() or Auth::user()->hasPermissionTo('dashboard_agent_access'))
						{{--  <li class="list-inline-item add_listing"><a href="{{route("vendor.dashboard")}}"><span class="flaticon-plus"></span><span class="dn-lg"> {{ __('Create Listing') }}</span></a></li>  --}}
					@endif
                </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
					 <a href="{{asset('/')}}" class="navbar_brand float-left dn-smd"> --}}
						@if($logo_id = setting_item("logo_id_mb"))
							<?php $logo = get_file_url($logo_id,'full') ?>
							<img class="nav_logo_img img-fluid mt20" src="{{$logo}}" alt="{{setting_item("site_title")}}">
							<span class="mt20">{{setting_item("site_title")}}</span>
						@endif
					 </a>
				</div>
				<ul class="menu_bar_home2">
	                  <li class="list-inline-item list_s">
                          {{-- <a href="{{route('vendor.dashboard')}}"><span class="flaticon-user"></span></a></li> --}}
                          <a href=" "><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1 mm-menu_offcanvas">
			<ul>
				<?php generate_menu('primary') ?>
				@if(!Auth::id())
					<li><a href="{{route('login')}}" ><span class="flaticon-user"></span> {{__('Login')}}</a></li>
					<li><a href="{{route('register')}}"><span class="flaticon-edit"></span> {{__('Register')}}</a></li>
				@endif
					<li>@include('inc.currency-switcher',['mobile'=>true])</li>
					<li>@include('inc.switcher',['mobile'=>true])</li>
			</ul>
		</nav>
    </div>
