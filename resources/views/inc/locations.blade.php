@php $translation = $location->translateOrOrigin(app()->getLocale()); @endphp

<div class="box px-2" data-animate="fadeInUp">
    <a href="{{route('property.search', ['location_id' => $location->id])}}" style="min-height: 100%;">
    <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="height: 100%;">
        <img src="{{asset('images/' . $location->image_id ) }}" class="card-img" alt="{{$translation->name}}" style="min-height: 100%;">
        <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
            <h2 class="card-title mb-0 fs-20 lh-182">
                <a href="{{route('property.search', ['location_id' => $location->id])}}" class="text-white"{{$translation->name}}</a>
            </h2>
            <p class="card-text fs-13 font-weight-500 letter-spacing-087">
                @php $count = $location->getDisplayNumberServiceInLocation('property') @endphp
                <span class="ml-2 fs-15 font-weight-bold">  {{$count}} </span></p>
        </div>
    </div>
    </a>
</div>
