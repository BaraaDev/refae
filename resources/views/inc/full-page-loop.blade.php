
@php  $translation = $row->translateOrOrigin(app()->getLocale()); @endphp

<div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
    <div class="media flex-column flex-sm-row no-gutters">
        <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">

            @if($row->image_id)

            <img src="{{ asset('images/' . $row->image_id ) }}" class="card-img" alt="{{ $translation->name }}">

                @else

                <span class="avatar-text-large">NO Image</span>

                @endif


            <div class="card-img-overlay p-2">
                <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                        <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                            <i class="far fa-heart"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                            <i class="fas fa-exchange-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="media-body mt-3 mt-sm-0">
            <h2 class="my-0">

                <a href="{{$row->getDetailUrl()}}" class="fs-16 lh-2 text-dark hover-primary d-block">
                    {{$translation->title}}
                </a>
            </h2>

            @if(!empty($row->location->name))
            @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp
           @endif

            <p class="mb-1 font-weight-500 text-gray-light"> {{$location->name ?? ''}}</p>
            @if($row->Category)
            <p class="mb-1 font-weight-500 text-gray-light">{{$row->Category->name}}</p>
           @endif
            <p class="fs-17 font-weight-bold text-heading mb-1">
               {{ $row->display_price }}
            </p>
            <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
        </div>
    </div>
    <div class="d-sm-flex justify-content-sm-between">
        <ul class="list-inline d-flex mb-0 flex-wrap">
            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                    <use xlink:href="#icon-bedroom"></use>
                </svg>
                {{__('Beds:')}} {{$row->bed}}
            </li>
            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                    <use xlink:href="#icon-shower"></use>
                </svg>
                {{__('Baths:')}} {{$row->bathroom}}
            </li>
            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                    <use xlink:href="#icon-square"></use>
                </svg>
                {{__('Sq:')}} {!! size_unit_format($row->square) !!}
            </li>

            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Year">
                <svg class="icon icon-year fs-18 text-primary mr-1">
                    <use xlink:href="#icon-year"></use>
                </svg>
                {{ date('Y', strtotime($row->updated_at))}}
            </li>
        </ul>
        @if($row->is_featured)
        <span class="badge badge-orange mr-2">{{__('Featured')}}</span>
        @endif
        @if($row->property_type == 1)
        <span class="badge badge-primary">{{  _('For Buy') }}</span>
        @else
        <span class="badge badge-indigo">{{   _('For Rent') }}</span>
        @endif


    </div>
</div>
