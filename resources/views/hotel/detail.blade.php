@extends('layouts.site')

@section('content')



    <main id="content">

        <section class="shadow-5">

            <div class="container">
                <ul class="nav nav-pills z-index-3 nav-gallery justify-content-end mb-n10 position-relative mr-n2" style="top: 85px;right: -68px;" id="pills-tab" role="tablist">
                    <li class="nav-item mr-2" role="presentation">
                        <a class="nav-link p-0 active d-flex align-items-center justify-content-center w-48px h-48 bg-white text-heading bg-hover-primary hover-white rounded-circle fs-18" data-toggle="pill" href="#image" role="tab" aria-selected="true">
                            <i class="fal fa-camera"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <a class="nav-link p-0 d-flex align-items-center justify-content-center w-48px h-48 bg-white text-heading bg-hover-primary hover-white rounded-circle fs-18" data-toggle="pill" href="#map-view" role="tab" aria-selected="false">
                            <i class="fal fa-map-marked-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content p-0 shadow-none">
                <div class="tab-pane fade show active" id="image" role="tabpanel">

                    <div style="background-image: url({{ asset('images/' . $row->image_id) }})" class="pt-17 pb-10 bg-cover">

                        <div class="container">
                            <h2 class="mb-3 pt-lg-17 mt-17"><a href="#" class="fs-48 fs-md-64 font-weight-bold text-white hover-primary">{{ $translation->title ?? '' }}</a></h2>
                            <p class="fs-18 text-white mb-0">{{ $translation->address }}</p>
                            <p class="fs-34 font-weight-bold text-white mb-lg-1"> {{ $row['display_price'] ? $row['display_price'] : '' }} </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="map-view" role="tabpanel">
                    <div id="map-01" style="height:720px;" class="mapbox-gl" data-mapbox-access-token="pk.eyJ1IjoiZHVvbmdsaCIsImEiOiJjanJnNHQ4czExMzhyNDVwdWo5bW13ZmtnIn0.f1bmXQsS6o4bzFFJc8RCcQ" data-mapbox-options='{"center":[-73.981566, 40.739011],"setLngLat":[-73.981566, 40.739011],"container":"map-01"}'>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-md-flex justify-content-md-between py-4">
                    <ul class="list-inline d-sm-flex align-items-sm-center mb-0">
                        @if($row->is_featured)
                        <li class="list-inline-item badge badge-orange mr-2">{{__('Featured')}} </li>
                        @endif
                        @if($row->property_type == 1)
                        <li class="list-inline-item badge badge-primary mr-3">{{  _('For Buy') }}  </li>
                        @else
                        <li class="list-inline-item badge badge-indigo">{{   _('For Rent') }}  </li>
                        @endif


                        <li class="list-inline-item mr-2"><i class="fal fa-clock mr-1"></i>{{ $row->created_at->diffForHumans() }}</li>
                    </ul>

                </div>
            </div>
        </section>



        <div class="primary-content pt-8">
            <div class="container">
                <div class="row">
                    <article class="col-lg-8 pr-xl-4">
                        <section class="pb-7 border-bottom">

                            <div class="d-sm-flex justify-content-sm-between mb-6">
                                <div>
                                    <h2 class="fs-35 font-weight-600 lh-15 text-heading">{{ $translation->title ?? '' }}</h2>
                                    <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>{{ $row->address }}</p>
                                </div>
                                <div class="mt-2 text-lg-right">
                                    <p class="fs-22 text-heading font-weight-bold mb-0">{{ $row['display_price'] ? $row['display_price'] : '' }}</p>
                                </div>
                            </div>


                            @if ($row->getGallery())

                            <div class="galleries position-relative">

                                <?php $listGallery = $row->getGallery(); ?>

                                <div class="position-absolute pos-fixed-top-right z-index-3">
                                    <ul class="list-inline pt-4 pr-5">

                    <li class="list-inline-item mr-2">
                        <a href="#" data-toggle="tooltip" title="Favourite" class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                            <i class="far fa-heart"></i></a>
                    </li>
                <li class="list-inline-item mr-2">
          <button type="button" class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content=' <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i  class="fab fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item ">
                            <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i  class="fab fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i  class="fab fa-youtube"></i></a>
                          </li>
                        </ul>
                        '>
                         <i class="far fa-share-alt"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-toggle="tooltip" title="Print" class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                                                <i class="far fa-print"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="slick-slider slider-for-01 arrow-haft-inner mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":true,"asNavFor": ".slider-nav-01"}'>


                                    @foreach (explode(',', $row->gallery) as $key => $item)

                                        <div class="box px-0">
                                            <div class="item item-size-3-2">
                                                <div class="card p-0 hover-change-image">
                                                    <a href="{{ asset('images/' . $item) }}" class="card-img" data-gtf-mfp="true" data-gallery-id="{{ $key }}" style="background-image:url({{ asset('images/' . $item) }})">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                    @endforeach

                                </div>
                                <div class="slick-slider slider-nav-01 mt-4 mx-n1 arrow-haft-inner" data-slick-options='{"slidesToShow": 5, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for-01","focusOnSelect": true,"responsive":[{"breakpoint": 768,"settings": {"slidesToShow": 4}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>


                                    @foreach (explode(',', $row->gallery) as $key => $item)

                                    <div class="box pb-6 px-0">
                                        <div class="bg-hover-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                                            <img src="{{ asset('images/' . $item) }}" alt="Gallery" class="h-100 w-100 rounded-lg">
                                        </div>
                                    </div>
                                @endforeach

                                </div>
                            </div>


                            @endif
                            <h4 class="fs-22 text-heading my-2">{{ __("Description") }}</h4>
                            <p class="mb-0 lh-214">{!! $translation->content !!}</p>
                        </section>
                        <section class="pt-6 border-bottom">
                            <h4 class="fs-22 text-heading mb-6">Facts and Features</h4>
                            <div class="row">
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-family fs-32 text-primary">
                                                <use xlink:href="#icon-family"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Type</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading">Single Family</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-year fs-32 text-primary">
                                                <use xlink:href="#icon-year"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Year Built") }} :</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading">{{ $row->year_built ? $row->year_built : __('None') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-heating fs-32 text-primary">
                                                <use xlink:href="#icon-price"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Property Size") }} :</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading">{{ !empty($row['square']) ? size_unit_format($row['square']) : 0}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-price fs-32 text-primary">
                                                <use xlink:href="#icon-price"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Sq Ft") }}:</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading"> {{ !empty($row['square']) ? $row['square'] : ''}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-bedroom fs-32 text-primary">
                                                <use xlink:href="#icon-bedroom"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Beds") }}:</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading"> {{ !empty($row['bed']) ? $row['bed'] : ''}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-sofa fs-32 text-primary">
                                                <use xlink:href="#icon-sofa"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Baths") }}:</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading"> {{ !empty($row['bathroom']) ? $row['bathroom'] : '' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-Garage fs-32 text-primary">
                                                <use xlink:href="#icon-Garage"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{ __("Garage") }} :</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading">{{ $row->garages ? $row->garages : 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 mb-6">
                                    <div class="media">
                                        <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                            <svg class="icon icon-status fs-32 text-primary">
                                                <use xlink:href="#icon-status"></use>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">{{__('Property Status')}} :</h5>
                                            <p class="mb-0 fs-13 font-weight-bold text-heading">{{$row->property_type == 1 ? __('For Buy') : __('For Rent')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="pt-6 border-bottom pb-4">
                            <h4 class="fs-22 text-heading mb-4">{{__('Additional details')}}</h4>
                            <div class="row">
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Property ID") }} :</dt>
                                    <dd>{{ $row->id ? $row->id : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Price") }} :</dt>
                                    <dd>{{ $row->display_price ? $row->display_price : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Property Size") }} :</dt>
                                    <dd>{{ !empty($row['square']) ? size_unit_format($row['square']) : 0}}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Year Built") }} :</dt>
                                    <dd>{{ $row->year_built ? $row->year_built : __('None') }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{__('Property Type')}} :</dt>
                                    <dd>{{$row->category ? $row->category->name : ''}}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Bedrooms") }} :</dt>
                                    <dd>{{ $row->bed ? $row->bed : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Bathrooms") }} :</dt>
                                    <dd>{{ $row->bathroom ? $row->bathroom : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __("Garage") }} :</dt>
                                    <dd>{{ $row->garages ? $row->garages : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Deposit') }} :</dt>
                                    <dd>{{ $row->deposit ? $row->deposit : 0 }}%</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Pool Size') }} :</dt>
                                    <dd>{{ $row->pool_size ? size_unit_format($row->pool_size) : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Additional Rooms') }} :</dt>
                                    <dd>{{ $row->additional_zoom ? $row->additional_zoom : 0 }}</dd>
                                </dl>
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Last remodel year') }} :</dt>
                                    <dd>{{ $row->remodal_year ? $row->remodal_year : __('None') }}</dd>
                                </dl>
                                <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Equipment') }} :</dt>
                                    <dd>{{ $row->equipment ? $row->equipment : 0 }}</dd>
                                </dl>
                            </div>
                        </section>

{{--
                        <section class="pt-6 border-bottom pb-4">
                            <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
                            <ul class="list-unstyled mb-0 row no-gutters">
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
                            </ul>
                        </section> --}}

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










                        @if (!empty($row['video']))

                        <section class="py-6 border-bottom">
                            <h4 class="fs-22 text-heading mb-6">Virtual Tour</h4>

                            <iframe height="430" src="{{ $row['video'] }}" allowfullscreen="" class="w-100"></iframe>
                        </section>

                        @endif

                        @include('inc.property_review')
                    </article>
                    <aside class="col-lg-4 primary-sidebar sidebar-sticky" id="sidebar">
                        <div class="primary-sidebar-inner">
                            <div class="card border-0 widget-request-tour">
                                <ul class="nav nav-tabs d-flex" role="tablist">

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link px-3 active" data-toggle="tab" href="#request-info" role="tab" aria-selected="false">Request
                                            Info</a>
                                    </li>

                                </ul>
                                <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0">
                                    <form>
                                        <div class="tab-content pt-1 pb-0 px-0 shadow-none">

                                            <div class="tab-pane fade pt-5  show active" id="request-info" role="tabpanel">
                                                <div class="form-group mb-2">
                                                    <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <textarea class="form-control border-0" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>



        <section>
            <div class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
                <div class="media align-items-center">
                    <img src="images/irene-wallace.png" alt="Irene Wallace" class="mr-4 rounded-circle">
                    <div class="media-body">
                        <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
                        <span class="fs-13 lh-2">Sales Excutive</span>
                    </div>
                </div>
                <div class="ml-auto">
                    <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none" data-toggle="modal" data-target="#modal-messenger"><i class="fal fa-comment"></i></button>
                    <a href="tel:(+84)2388-969-888" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target="_blank"><i class="fal fa-phone"></i></a>
                </div>
            </div>
            <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <h4 class="modal-title text-heading" id="exampleModalLabel">Contact Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pb-6">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
                            </div>
                            <div class="form-group mb-2">
                                <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
                            </div>
                            <div class="form-group mb-2">
                                <textarea class="form-control border-0" rows="4">Hello, I'm interested in {{ $translation->title ?? '' }}</textarea>
                            </div>
                            <div class="form-group form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus faucibus scelerisque eleifend donec.</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="d-none" id="template-properties">
            <div class="marker-item" data-icon-marker="images/googlle-market-01.png" data-position="[-73.9927227, 40.6734035]" data-marker-style='{"className":"marker","style":{"width":"30px","height":"40px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
                <div class="card border-0 ">
                    <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img src="images/properties-grid-73.jpg" alt="Home in Metric Way">
                        <div class="card-img-overlay d-flex flex-column">
                            <div><span class="badge badge-primary">For Sale</span></div>
                            <div class="mt-auto d-flex hover-image">
                                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                                    <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i class="far fa-images"></i><span class="pl-1">9</span></a></li>
                                    <li class="list-inline-item"><a href="#" class="text-white hover-primary"><i class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                                </ul>
                                <ul class="list-inline mb-0 d-flex mr-n3">
                                    <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#" class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#" class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2 py-1">
                        <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                                Way</a></h2>
                        <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
                        <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$1.250.000</p>
                    </div>
                    <div class="card-footer bg-transparent px-2 py-2">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-bedroom"></use>
                                </svg>
                                3 Br
                            </li>
                            <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                                <svg class="icon icon-shower fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-shower"></use>
                                </svg>
                                3 Ba
                            </li>
                            <li class="list-inline-item text-gray font-weight-500 fs-13">
                                <svg class="icon icon-square fs-18 text-primary mr-1">
                                    <use xlink:href="#icon-square"></use>
                                </svg>
                                2300 Sq.Ft
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
