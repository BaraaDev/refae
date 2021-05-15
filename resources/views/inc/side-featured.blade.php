<div class="card property-widget mb-4">
    <div class="card-body px-6 pt-5 pb-6">
        <h4 class="card-title fs-16 lh-2 text-dark mb-3">{{ __('Featured Properties') }}</h4>
        <div class="slick-slider mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true}'>

            @foreach ($featured as $row)
            @php  $translation = $row->translateOrOrigin(app()->getLocale());  @endphp
            <div class="box px-0">
                <div class="card border-0">

                    <img src="{{ asset('images/' . $row->image_id)}}" class="card-img" alt="" style="height: 350px;">

                    <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">

                        <div class="d-flex mb-auto">
                            @if($row->is_featured)
                            <span class="badge badge-orange mr-2">{{__('Featured')}}</span>
                            @endif
                            @if($row->property_type == 1)
                            <span class="badge badge-primary">{{  _('For Buy') }}</span>
                            @else
                            <span class="badge badge-indigo">{{   _('For Rent') }}</span>
                            @endif
                        </div>

                        <div class="px-2 pb-2">
                            @if($row->Category)
                            <p class="text-thm">{{$row->Category->name}}</p>
                           @endif

                            <a href="{{$row->getDetailUrl()}}" class="text-white">
                                <h5 class="card-title fs-16 lh-2 mb-0">{{$translation->title}}</h5>
                            </a>
                            @if(!empty($row->location->name))
                             <p class="card-text text-gray-light mb-0 font-weight-500">
                                @php $location =  $row->location->translateOrOrigin(app()->getLocale()) @endphp
                           </p>
                           @endif
                            <p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
