@extends('layouts.usermain')

@section('content')

                <main id="content" class="bg-gray-01">

  <?php  $reviews = \App\Models\Review::query()->where([
                        'vendor_id'=>$user->id,
                        'status'=>'approved'
                    ])
                        ->orderBy('id','desc')
                        ->with('author')
                        ->paginate(10);
                    ?>

                    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
                        <div class="mb-6">
                            <h2 class="mb-0 text-heading fs-22 lh-15"> {{__('Reviews from guests')}}  </h2>
                            <p class="mb-1"> {{ __("Showing :from - :to of :total total",["from"=>$reviews->firstItem(),"to"=>$reviews->lastItem(),"total"=>$reviews->total()]) }}</p>
                        </div>
                        <div class="card border-0 mb-4">

                            <div class="card-body p-0 p-sm-8 p-4">
                                <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">{{ $reviews->total() }} {{__('Reviews')}}</h3>

                                @if($reviews)

                                @foreach($reviews as $item)

                                    @php $userInfo = $item->author; @endphp

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">

                                    <img src="{{ asset('images/' . $userInfo->avatar_id) }}" alt="{{$userInfo->getDisplayName()}}" class="mr-sm-8 mb-4 mb-sm-0">

                                    <div class="media-body">
                                        <div class="row mb-1 align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h4 class="mb-0 text-heading fs-14">{{$userInfo->getDisplayName()}}</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                @if($item->rate_number)
                                                <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">

                                                    @for( $i = 0 ; $i < 5 ; $i++ )
                                                    <li class="list-inline-item mr-1">
                                                        @if($i < $item->rate_number)


                                                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>


                                                        @else
                                                        <span class="text-warning fs-12 lh-2"><i class="fas fa-star-o"></i></span>
                                                        @endif
                                                    </li>
                                                    @endfor
                                                </ul>
                                            @endif

                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-3 pr-xl-17">{{$item->title}}</p>
                                        <p class="mb-3 pr-xl-17">  {{$item->content}}</p>
                                        <div class="d-flex justify-content-sm-start justify-content-center">
                                            <p class="mb-0 text-muted fs-13 lh-1">{{display_datetime($item->created_at)}}</p>
                                            {{-- <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a> --}}
                                        </div>
                                    </div>
                                </div>
                                   @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                </main>
            </div>


@endsection
