<?php
$dataUser = Auth::user();

?>

 <div class="sidebar-user">
      <div class="bravo-close-menu-user"><i class="icofont-scroll-left"></i></div>
    <div class="logo">

     <div class="sidebar-menu">
        <ul class="sidebar-menu">
            <li class="header">
                <img src="{{ asset('images/mainlogo.png') }}" style="max-width: 222px;margin-top: -50px;">
            </li>



            <li class="treeview">
                <a href="{{ route('user.dashboard')}}">
                    <span class="icon text-center"><i class="fa fa-home"></i></span>
                    {{  __("Dashboard") }}
               </a>
           </li>

           <li class="treeview">
            <a href="{{ route('user.profile.index')}}">
                <span class="icon text-center"><i class="fa fa-cogs"></i></span>
                {{ __("My Profile") }}
           </a>
          </li>

           <li class="treeview">
            <a href="{{ route('user.change_password')}}">
                <span class="icon text-center"><i class="fa fa-lock"></i></span>
                {{  __("Change password") }}
           </a>
          </li>

           <li class="treeview">
            <a href="{{ route('user.wishList.index')}}">
                <span class="icon text-center"><i class="fa fa-heart-o"></i></span>
                {{ __("Wishlist") }}
           </a>
          </li>

            <li class="treeview has-children active">
                <a href="#">
                    <span class="icon text-center"><i class="fa fa-home"></i></span>
                    {{ __('Property') }}
                    <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
               </a>

                <ul class="treeview-menu">

                        <li class="treeview">
                            <a href="{{ route('user.property.index') }}">   <i class="fa fa-dot-circle-o"></i>
                              {{ __('All Properties') }}
                             </a>
                        </li>

                        <li class="">
                            <a href="{{ route('user.property.create') }}">   <i class="fa fa-dot-circle-o"></i>
                              {{ __("Add New Property") }}
                             </a>
                            </li>

                </ul>
        </li>
        <li class="treeview">
            <a href="{{ route('user.wishList.index')}}">
                <span class="icon text-center"><i class="fa fa-heart-o"></i></span>
                {{ __("Manage Contacts") }}
           </a>
          </li>
          <li class="treeview">
            <a href="  " style="color: #1ABC9C">
                <span class="icon text-center"><i class="fa fa-user"></i></span>
                {{ __("Become a vendor") }}</a>
         </li>

          <li class="treeview">
             <a href="{{url('/')}}" style="color: #1ABC9C"><i class="fa fa-long-arrow-left"></i> {{__("Back to Homepage")}}</a>
         </li>

          <li class="treeview">
           <form id="logout-form-vendor" action="{{ route('logout') }}" method="POST" style="display: none;">
        <form id="logout-form-vendor" action="" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();"><i class="fa fa-sign-out"></i> {{__("Log Out")}}
        </a>
         </li>
        </ul>
 </div>

