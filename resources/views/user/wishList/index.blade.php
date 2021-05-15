@extends('layouts.usermain')
@section('content')
@include('admin.message')
                <main id="content" class="bg-gray-01">
                    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
                        <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                            <div class="mr-0 mr-md-auto">
                                <h2 class="mb-0 text-heading fs-22 lh-15">My Favorites
                                    <span class="badge badge-white badge-pill text-primary fs-18 font-weight-bold ml-2">{{ $rows->count()}} </span>
                                </h2>
                             </div>
   
                        </div>
                        <div class="row">

                            @if($rows->count() > 0)

                            @foreach($rows as $proprty)

                              @php $row = App\Models\property::where('id', $proprty->object_id)->first(); @endphp

                            @include('inc.property-loop')
                            @endforeach

                            @endif
 
 
                        </div>
                    </div>
                </main>
            </div>
        </div>
    @endsection
