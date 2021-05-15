@php  $translation = $row->translateOrOrigin(app()->getLocale());  @endphp

<div class="box pb-7 pt-2">
    <div class="card shadow-hover-2" data-animate="zoomIn">
        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
            <img src="{{ asset('images/' . $row->image_id)}}" alt="property image" style="width: 100%;max-height: 300px;">

            <div class="card-img-overlay p-2 d-flex flex-column">
                <div>
                    @if($row->is_featured)
                    <span class="badge badge-orange mr-2">{{__('Featured')}}</span>
                    @endif
                    @if($row->property_type == 1)
                    <span class="badge badge-primary">{{  _('For Buy') }}</span>
                    @else
                    <span class="badge badge-indigo">{{   _('For Rent') }}</span>
                    @endif
                </div>
                <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                        <a href="#" class="text-white hover-primary">
                            <i class="far fa-images"></i><span class="pl-1">9</span>
                        </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                        <a href="#" class="text-white hover-primary">
                            <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body pt-3">
            @if($row->Category)
            <p class="text-thm">{{$row->Category->name}}</p>
           @endif
            <h2 class="card-title fs-16 lh-2 mb-0">
                <a href="{{$row->getDetailUrl()}}" class="text-dark hover-primary">{{$translation->title}}</a>
            </h2>
            @if(!empty($row->location->name))
            @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp
            @endif

            <p class="card-text font-weight-500 text-gray-light mb-2">{{$location->name ?? ''}}</p>


            <ul class="list-inline d-flex justify-content-between mb-0 flex-wrap mr-n2">
                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2" data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                        <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    {{__('Beds:')}} {{$row->bed}}
                </li>
                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2" data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                        <use xlink:href="#icon-shower"></use>
                    </svg>
                    {{__('Baths:')}} {{$row->bathroom}}
                </li>
                <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2" data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                        <use xlink:href="#icon-square"></use>
                    </svg>
                    {{__('Sq:')}} {!! size_unit_format($row->square) !!}
                </li>
            </ul>
        </div>
        <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
            <p class="fs-17 font-weight-bold text-heading mb-0">
                {{ $row->display_price }}
            </p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">

                    @if($row->hasWishList)

                    <a href="#" class="w-40px h-40 border service-wishlist rounded-circle d-inline-flex align-items-center justify-content-center text-secondary " data-toggle="tooltip" title="Wishlist" data-id="{{$row->id}}" data-type="property">
                        <i class="fas fa-heart"></i>
                    </a>


                    @else

                    <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent" data-toggle="tooltip" title="" tabindex="0" data-original-title="Wishlist" data-id="{{$row->id}}" data-type="property">
                        <i class="far fa-heart"></i>
                    </a>

                    @endif

                </li>
                </li>
            </ul>
        </div>
    </div>
</div>
