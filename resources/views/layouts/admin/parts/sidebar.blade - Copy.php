<?php
{{-- $menus = [




    'general'=>[
        "position"=>80,
        'url'        => 'admin/module/core/settings/index/general',
        'title'      => __('Setting'),
        'icon'       => 'icon ion-ios-cog',
        'permission' => 'setting_update',
        'children'   => \App\Models\Settings::getSettingPages()
    ],
    'tools'=>[
        "position"=>90,
        'url'      => 'admin/module/core/tools',
        'title'    => __("Tools"),
        'icon'     => 'icon ion-ios-hammer',
        'children' => [
            'language'=>[
                'url'        => 'admin/module/language',
                'title'      => __('Languages'),
                'icon'       => 'icon ion-ios-globe',
                'permission' => 'language_manage',
            ],
            'translations'=>[
                'url'        => 'admin/module/language/translations',
                'title'      => __("Translation Manager"),
                'icon'       => 'icon ion-ios-globe',
                'permission' => 'language_translation',
            ],
            'logs'=>[
                'url'        => 'admin/logs',
                'title'      => __("System Logs"),
                'icon'       => 'icon ion-ios-nuclear',
                'permission' => 'system_log_view',
            ],
        ]
    ],

];





$currentUrl = url(\App\Walkers\MenuWalker::getActiveMenu());

$user = \Illuminate\Support\Facades\Auth::user();

if (!empty($menus)){
    foreach ($menus as $k => $menuItem) {

        if (!empty($menuItem['permission']) and !$user->hasPermissionTo($menuItem['permission'])) {
            unset($menus[$k]);
            continue;
        }
        $menus[$k]['class'] = $currentUrl == url($menuItem['url']) ? 'active' : '';
        if (!empty($menuItem['children'])) {
            $menus[$k]['class'] .= ' has-children';
            foreach ($menuItem['children'] as $k2 => $menuItem2) {
                if (!empty($menuItem2['permission']) and !$user->hasPermissionTo($menuItem2['permission'])) {
                    unset($menus[$k]['children'][$k2]);
                    continue;
                }
                $menus[$k]['children'][$k2]['class'] = $currentUrl == url($menuItem2['url']) ? 'active' : '';
            }
        }
    }

    //@todo Sort Menu by Position
    $menus = array_values(\Illuminate\Support\Arr::sort($menus, function ($value) {
        return $value['position'] ?? 100;
    }));
}

?>
<ul class="main-menu">
    {{-- @foreach($menus as $menuItem)
        @php $menuItem['class'] .= " ".str_ireplace("/","_",$menuItem['url']) @endphp
        <li class="{{$menuItem['class']}}"><a href="{{ url($menuItem['url']) }}">
                @if(!empty($menuItem['icon']))
                    <span class="icon text-center"><i class="{{$menuItem['icon']}}"></i></span>
                @endif
                {!! clean($menuItem['title'],[
                    'Attr.AllowedClasses'=>null
                ]) !!}
            </a>
            @if(!empty($menuItem['children']))
                <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
                <ul class="children">
                    @foreach($menuItem['children'] as $menuItem2)
                        <li class="{{$menuItem['class']}}"><a href="{{ url($menuItem2['url']) }}">
                                @if(!empty($menuItem2['icon']))
                                    <i class="{{$menuItem2['icon']}}"></i>
                                @endif
                                {!! clean($menuItem2['title'],[
                                    'Attr.AllowedClasses'=>null
                                ]) !!}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li> --}}
    {{-- @endforeach --}} --}}



    <li class="dashboard_news">
        <a href="{{ route('dashboard.')}}">
            <span class="icon text-center"><i class="fa fa-tachometer"></i></span>
            {{ __("Dashboard") }}
       </a>
</li>


{{-- // Properties --}}

    <li class="has-children dashboard_news">
        <a href="#">
            <span class="icon text-center"><i class="fa fa-home"></i></span>
            {{ __('Property') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">

                <li class="">
                    <a href="{{ route('dashboard.property.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __('All Properties') }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.property.create') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Add New Property") }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.attribute.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Attributes") }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.category.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{  __("Categories") }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.property.contact') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{  __("Property Contact") }}
                     </a>
                </li>

        </ul>
</li>


{{-- // Agencies --}}

    <li class="has-children dashboard_news">
        <a href="#">
            <span class="icon text-center"><i class="fa fa-building-o"></i></span>
            {{ __('Agencies') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">

                <li class="">
                    <a href="{{ route('dashboard.agency.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __('All Agencies') }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.agency.create') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Add New Agency") }}
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


{{-- // Reviews --}}


    <li class="dashboard_news">
        <a href="#">
        {{-- <a href="{{ route('dashboard.review.index') }}"> --}}
            <span class="icon text-center"><i class="fa fa-comment-o"></i></span>
            {{ __("Reviews") }}
       </a>
</li>




{{-- // News --}}

    <li class="has-children dashboard_news">
        <a href="#">
            <span class="icon text-center"><i class="fa fa-newspaper-o"></i></span>
            {{ __('News') }}
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">

                <li class="">
                    <a href="{{ route('dashboard.news.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __('All news') }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.news.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Add New news") }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.news.category.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Categories") }}
                     </a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard.news.tag.index') }}">   <i class="fa fa-dot-circle-o"></i>
                      {{ __("Tags") }}
                     </a>
                </li>


        </ul>
</li>



    <li class="has-children dashboard_news">
        <a href="">
            <span class="icon text-center"><i class="fa fa-users"></i></span>
        users
       </a>
        <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
        <ul class="children">

                <li class="">
                    <a href="">   <i class="fa fa-user"></i>
                      All Users
                     </a>
                </li>
        </ul>
</li>

<li class="has-children dashboard_news">
    <a href="">
        <span class="icon text-center"><i class="fa fa-handshake-o"></i></span>
    Agents
   </a>
    <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
    <ul class="children">

            <li class="">
                <a href="">   <i class="fa fa-user"></i>
                  All Users
                 </a>
            </li>
    </ul>
</li>

 {{-- Contact  --}}
<li class="dashboard_news">
    <a href="">
        <span class="icon text-center"><i class="fa fa-envelope-o"></i></span>
        {{ __("Contact") }}
   </a>
</li>

 {{-- Translations  --}}

<li class="has-children dashboard_news">
    <a href="">
        <span class="icon text-center"><i class="fa fa-globe"></i></span>
        {{ __("Translations") }}
   </a>
    <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
    <ul class="children">

            <li class="">
                <a href="">   <i class="fa fa-user"></i>
                  All Users
                 </a>
            </li>
    </ul>
</li>

 {{-- Settings  --}}

<li class="has-children dashboard_news">
    <a href="">
        <span class="icon text-center"><i class="fa fa-gears"></i></span>
        {{ __("Settings") }}
   </a>
    <span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span>
    <ul class="children">

            <li class="">
                <a href="">   <i class="fa fa-user"></i>
                  All Users
                 </a>
            </li>
    </ul>
</li>

</ul>
