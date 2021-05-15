@extends('layouts.app')
@section('head')
@endsection
@section('content')

@if ($row->getGallery())
     <div class="single_page_listing_style">
         <?php $listGallery = $row->getGallery(); ?>
         <div class="container-fluid p0">
             <div class="row">
                 <div class="col-sm-6 col-lg-6 p0">
                     <div class="row m0">
                         <div class="col-lg-12 p0">
                             <div class="spls_style_one pr1 1px">
                                 <img class="img-fluid w100" src="{{ $listGallery[0]['large'] }}">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-lg-6 p0">
                     <div class="row m0">
                         @php $large = $listGallery[0]; unset($listGallery[0]); $i = 1; @endphp
                         @foreach ($listGallery as $key => $item)
                             <?php if ($key > 4) {
                             break;
                             } ?>
                             <div class="col-sm-6 col-lg-6 p0">
                                 <div class="row m0">
                                     <div class="col-lg-12 p0">
                                         <div class="spls_style_one">
                                             <img class="img-fluid w100" src="{{ $item['large'] }}">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <section class="p0">
         <div class="container">
             <div class="row listing_single_row">
                 <div class="col-sm-6 col-lg-7 col-xl-8">
                     <div class="single_property_title">
                         <a data-toggle="modal" data-target="#galleryModal" class="upload_btn"><span
                                 class="flaticon-photo-camera"></span> {{ __('View Photos') }}</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <div class="sign_up_modal modal fade" id="galleryModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <div class="fullscreen-gallery">
                    <div class="fotorama"
                        data-width="100%"
                        data-maxwidth="100%"
                        data-fit="cover"
                        data-ratio="16/9"
                        data-allowfullscreen="true"
                        data-nav="thumbs">
                        @foreach ($listGallery as $key => $item)
                            <img src="{{ $item['large'] }}">
                        @endforeach
                    </div>
                </div>
            </div>
          </div>
        </div>
     </div>
 @endif


    <!-- Agent Single Grid View -->
    <section class="our-agent-single bgc-f7 pb30-991">
        <div class="container">

            @include('layouts.search_mobile')

            <div class="row">
                <div class="col-md-12 col-lg-8 mt50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="listing_single_description2 mt30-767 mb30-767">
                                <div class="single_property_title">
                                    <h2>{{ $translation->title ?? '' }}</h2>
                                    <p>{{ $translation->address }}</p>
                                </div>
                                <div class="single_property_social_share style2">
                                    <div class="price">
                                        <h2>{{ $row['display_price'] ? $row['display_price'] : '' }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="listing_single_description style2">
                                <div class="lsd_list">
                                    <ul class="mb0">
                                        @if(!empty($row['Category'])) <li class="list-inline-item"><a href="#">{{  $row['Category']->name}}</a></li> @endif
                                        <li class="list-inline-item"><a href="#">{{ __("Beds") }}: {{ !empty($row['bed']) ? $row['bed'] : ''}}</a></li>
                                        <li class="list-inline-item"><a href="#">{{ __("Baths") }}: {{ !empty($row['bathroom']) ? $row['bathroom'] : '' }}</a></li>
                                        <li class="list-inline-item"><a href="#">{{ __("Sq Ft") }}: {{ !empty($row['square']) ? $row['square'] : ''}}</a></li>
                                    </ul>
                                </div>
                                <h4 class="mb30">{{ __("Description") }}</h4>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <p class="mt10 mb10">{!! clean($translation->content) !!}</p>
                                    </div>
                                </div>
                                <p class="overlay_close">
                                    <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        {{__('Show More')}} <span class="flaticon-download-1 fz12"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15">{{ __("Property Details") }}</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li><p>{{ __("Property ID") }} :</p></li>
                                            <li><p>{{ __("Price") }} : </p></li>
                                            <li><p>{{ __("Property Size") }} :</p></li>
                                            <li><p>{{ __("Year Built") }} :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $row->id ? $row->id : 0 }}</span></p></li>
                                            <li><p><span>{{ $row->display_price ? $row->display_price : 0 }}</span></p></li>
                                            <li><p><span>{{ !empty($row['square']) ? size_unit_format($row['square']) : 0}}</span></p></li>
                                            <li><p><span>{{ $row->year_built ? $row->year_built : __('None') }}</span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li><p>{{ __("Bedrooms") }} :</p></li>
                                            <li><p>{{ __("Bathrooms") }} :</p></li>
                                            <li><p>{{ __("Garage") }} :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $row->bed ? $row->bed : 0 }}</span></p></li>
                                            <li><p><span>{{ $row->bathroom ? $row->bathroom : 0 }}</span></p></li>
                                            <li><p><span>{{ $row->garages ? $row->garages : 0 }}</span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li><p>{{__('Property Type')}} :</p></li>
                                            <li><p>{{__('Property Status')}} :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{$row->category ? $row->category->name : ''}}</span></p></li>
                                            <li><p><span>{{$row->property_type == 1 ? __('For Buy') : __('For Rent')}}</span></p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15">{{__('Additional details')}}</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="list-inline-item">
                                            <li><p>{{ __('Deposit') }} :</p></li>
                                            <li><p>{{ __('Pool Size') }} :</p></li>
                                            <li><p>{{ __('Additional Rooms') }} :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $row->deposit ? $row->deposit : 0 }}%</span></p></li>
                                            <li><p><span>{{ $row->pool_size ? size_unit_format($row->pool_size) : 0 }}</span></p></li>
                                            <li><p><span>{{ $row->additional_zoom ? $row->additional_zoom : 0 }}</span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="list-inline-item">
                                            <li><p>{{ __('Last remodel year') }} :</p></li>
                                            <li><p>{{ __('Amenities') }} :</p></li>
                                            <li><p>{{ __('Equipment') }} :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $row->remodal_year ? $row->remodal_year : __('None') }}</span></p></li>
                                            <li><p><span>{{ $row->amenities ? $row->amenities : 0 }}</span></p></li>
                                            <li><p><span>{{ $row->equipment ? $row->equipment : 0 }}</span></p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                        $terms_ids = $row->terms->pluck('term_id');
                        $attributes = \App\Models\Terms::getTermsById($terms_ids);
                    @endphp
                    @if(!empty($terms_ids) and !empty($attributes))
                        @foreach($attributes as $attribute )
                            @php $translate_attribute = $attribute['parent']->translateOrOrigin(app()->getLocale()) @endphp
                            @if(empty($attribute['parent']['hide_in_single']))
                                <div class="col-lg-12">
                                    <div class="application_statics mt30 g-attributes {{$attribute['parent']->slug}} attr-{{$attribute['parent']->id}}" >
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="mb10">{{ $translate_attribute->name }}</h4>
                                            </div>
                                            @php $terms = $attribute['child'] @endphp
                                            @foreach($terms as $term )
                                                @php $translate_term = $term->translateOrOrigin(app()->getLocale()) @endphp
                                                <div class="col-sm-6 col-md-6 col-lg-4">
                                                    <ul class="order_list list-inline-item">
                                                        <li><a href="#"><span class="flaticon-tick"></span>{{$translate_term->name}}</a></li>
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                        @if(!empty($row->location->name))
                            @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp
                        @endif
                        <div class="col-lg-12">
                            <div class="application_statics mt30">
                                <h4 class="mb30">{{ __("Location") }} <small class="float-right">{{ !empty($location->name) ? $location->name : '' }}</small></h4>
                                <div class="property_video p0">
                                    <div class="thumb">
                                        <div class="h400" id="map-canvas"></div>
                                        <div class="overlay_icon">
                                            <a href="#"><img class="map_img_icon" src="{{asset('images/logo.png')}}" alt="header-logo.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (!empty($row['video']))
                        <div class="col-lg-12">
                            <div class="shop_single_tab_content style2 mt30">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="property_video">
                                            <div class="thumb">
                                                <img class="pro_img img-fluid w100" src="{{ get_file_url($row['banner_image_id'], 'full')}}" alt="video">
                                                <div class="overlay_icon">
                                                    <a class="video_popup_btn red popup-youtube" href="{{ $row['video'] }}"><span class="flaticon-play"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif


                        <div class="col-lg-12">

                            {{--  @include('Agencies::frontend.detail.review', ['review_service_id' => $row['id'], 'review_service_type' => 'property'])  --}}
                            <?php
                            $reviewData = App\Models\Review::getTotalViewAndRateAvg($row['id'], 'property');
                            ?>

                            <div class="product_single_content">
                                <div class="mbp_pagination_comments">
                                    <ul class="total_reivew_view">
                                        <li class="list-inline-item sub_titles">
                                            @if($reviewData['total_review'] > 1)
                                                {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
                                            @else
                                                {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
                                            @endif
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="star_list">
                                                <ul>
                                                    @for( $i = 0 ; $i < 5 ; $i++ )
                                                        @if($i < (int)$reviewData['score_total'])
                                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        @else
                                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </ul>
                                        </li>
                                        <li class="list-inline-item avrg_review">{{ __("(:rate_agv out of 5)",["rate_agv"=>$reviewData['score_total'] ]) }}</li>
                                        <li class="list-inline-item write_review">{{ __("Write a Review") }}</li>
                                    </ul>
                                    @if($review_list)
                                        @foreach($review_list as $item)
                                            @php $userInfo = $item->author; @endphp
                                            <div class="mbp_first media">
                                                @if($avatar_url = $userInfo->getAvatarUrl())
                                                    <img class="mr-3" src="{{$avatar_url}}" alt="{{$userInfo->getDisplayName()}}">
                                                @else
                                                    <span class="avatar-text">{{ucfirst($userInfo->getDisplayName()[0])}}</span>
                                                @endif
                                                <div class="media-body">
                                                    <h4 class="sub_title mt-0">{{$userInfo->getDisplayName()}}
                                                        <div class="sspd_review dif">
                                                            @if($item->rate_number)
                                                                <ul class="ml10">
                                                                    @for( $i = 0 ; $i < 5 ; $i++ )
                                                                        @if($i < $item->rate_number)
                                                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                                        @else
                                                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                                        @endif
                                                                    @endfor
                                                                </ul>
                                                            @endif
                                                        </div>
                                                    </h4>
                                                    <a class="sspd_postdate fz14" href="#">{{display_datetime($item->created_at)}}</a>
                                                    <p class="mt10">{{$item->content}}</p>
                                                </div>
                                            </div>
                                            <div class="custom_hr"></div>
                                        @endforeach
                                    @endif
                                    <div class="mbp_comment_form style2">
                                        <h4>{{__("Write a review")}}</h4>
                                        @include('admin.message')
                                        <form class="comments_form review-form" id="review-form" action="{{ route('review.store') }}" method="post">
                                            @csrf

                                            <div class="form-group review-items sspd_review">
                                                <div class="item">
                                                    <input class="review_rate" type="hidden" name="review_rate">
                                                    <div class="rates">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <label class="review_rating_para">{{ __('Your Rating & Review') }}</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="review_title" name="review_title"
                                                       aria-describedby="textHelp" placeholder="Review Title">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="review_content" rows="12" placeholder="Your Review"></textarea>
                                            </div>
                                            <input type="hidden" name="review_service_id" value="{{ $row['id'] }}">
                                            {{-- <input type="hidden" name="review_service_type" value="{{ $review_service_type }}"> --}}
                                            <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>

                        @if(count($property_related) > 0)
                        <div class="col-lg-12">
                            <h4 class="mt30 mb30">{{ __("Similar Properties") }}</h4>
                        </div>
                        @foreach($property_related as $k => $item)
                            <div class="col-lg-6">
                                @include('property.layouts.search.loop-gird',['row'=> $item,'include_param'=>0])
                            </div>
                        @endforeach
                    @endif

                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 mt50">
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <div class="sl_creator">
                                <h4 class="mb25">{{ __("Listed By") }}</h4>
                                <div class="media">
                                    <a href="{{route('agent.detail',['id'=>$row->user->id])}}" class="c-inherit">
                                    @if($avatar_url = $row->user->getAvatarUrl())
                                        <img class="mr-3" src="{{$avatar_url}}" alt="{{$row->user->getDisplayName()}}">
                                    @else
                                        <span class="mr-3">{{ucfirst($row->user->getDisplayName()[0])}}</span>
                                    @endif
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb0"><a href="{{route('agent.detail',['id'=>$row->user->id])}}" class="c-inherit">{{ $row->user->getDisplayName() }}</a></h5>
                                        <p class="mb0">{{ !empty($row->user->phone) ? $row->user->phone : '' }}</p>
                                        <p class="mb0">{{ !empty($row->user->email) ? $row->user->email : '' }}</p>
                                        <a class="text-thm" href="{{route('agent.detail',['id'=>$row->user->id])}}">{{ __("View My Listing") }}</a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('agent.contact') }}" method="POST" class="agent_contact_form">
                                @csrf
                                <ul class="sasw_list mb0">
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="{{ __('Your Name') }}" name="name">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="number" class="form-control"  placeholder="{{ __('Phone') }}" name="phone">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="{{ __('Email') }}" name="email">
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="{{ __('Your Message') }}"></textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <input type="hidden" name="vendor_id" value="{{ $row->user->id }}">
                                        <input type="hidden" name="object_id" value="{{ $row->id }}">
                                        <input type="hidden" name="object_model" value="property">
                                    </li>
                                    <li>
                                        <div class="search_option_button">
                                            <button type="submit" class="btn btn-block btn-thm">{{ __('Contact') }}</button>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-mess"></div>
                            </form>
                        </div>
                    </div>
                    @include('layouts.search.side-form')
                    @include('property.sidebar.FeatureProperty')
                    @include('property.sidebar.categoryProperty')
                    @include('property.sidebar.recentViewdProperty')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <link href="{{ asset('libs/fotorama/fotorama.css') }}" rel="stylesheet">
    <script src="{{ asset('libs/fotorama/fotorama.js') }}"></script>
    {!! App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            new BravoMapEngine('map-canvas', {
                fitBounds: true,
                center: [{{$row->map_lat ?? "51.505"}}, {{$row->map_lng ?? "-0.09"}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    @if($row->map_lat && $row->map_lng)
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {}
                    });
                    @endif
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    });
                    engineMap.searchBox($('.bravo_searchbox'),function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                }
            });
        })
    </script>
@endsection
