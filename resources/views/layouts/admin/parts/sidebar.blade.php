<ul class="main-menu">

    <li class="dashboard_news">
        <a href="{{ route('dashboard.home')}}">
            <span class="icon text-center"><i class="fa fa-tachometer"></i></span>
            {{ __("Dashboard") }}
       </a>
   </li>

    <li class="has-children dashboard_news">
        <a href="{{ route('dashboard.hotel.index') }}">
            <span class="icon text-center"><i class="fa fa-home"></i></span>
            {{ __('Hotels') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">
            <li class="">
                <a href="{{ route('dashboard.hotel.index') }}">
                    <i class="fa fa-dot-circle-o"></i>
                    {{ __('All Hotels') }}
                 </a>
            </li>

            <li class="">
                <a href="{{ route('dashboard.hotel.create') }}">
                    <i class="fa fa-dot-circle-o"></i>
                    {{ __("Add New Hotel") }}
                 </a>
            </li>
        </ul>
    </li>


    <li class="has-children dashboard_news">
        <a href="{{ route('dashboard.tours.index') }}">
            <span class="icon text-center"><i class="fa fa-map-o"></i></span>
            {{ __('Tours') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">
                <li class="">
                    <a href="{{ route('dashboard.tours.index') }}">
                        <i class="fa fa-dot-circle-o"></i>
                        {{ __('All Tours') }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.tours.create') }}">
                        <i class="fa fa-dot-circle-o"></i>
                        {{ __("Add New Tour") }}
                     </a>
                </li>
        </ul>
    </li>

    <li class="has-children dashboard_news">
        <a href="{{ route('dashboard.matches.index') }}">
            <span class="icon text-center"><i class="fa fa-building-o"></i></span>
            {{ __('Matches') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">
            <li class="">
                <a href="{{ route('dashboard.matches.index') }}">
                    <i class="fa fa-dot-circle-o"></i>
                    {{ __('All Matches') }}
                 </a>
            </li>

            <li class="">
                <a href="{{ route('dashboard.matches.create') }}">
                    <i class="fa fa-dot-circle-o"></i>
                    {{ __("Add New Matche") }}
                 </a>
            </li>
        </ul>
    </li>

    {{-- // Location --}}

    <li class="dashboard_news">
        <a href="{{ route('dashboard.location.index') }}">
            <span class="icon text-center"><i class="fa fa-map-marker"></i></span>
            {{ __("Location") }}
       </a>
    </li>

    <li class="has-children dashboard_news">
        <a href="{{ route('dashboard.user.index') }}">
            <span class="icon text-center"><i class="fa fa-users"></i></span>
        {{ __('Users')}}
       </a>

    </li>

    <li class="has-children dashboard_news">
        <a href="{{ route('dashboard.orders.index') }}">
            <span class="icon text-center"><i class="fa fa-star-o"></i></span>
            {{ __("Orders") }}
       </a>
    </li>
</ul>
