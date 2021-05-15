@extends('layouts.main')

@section('content')



    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>{{ $blog->title }}</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>{{ $blog->title }}</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('images/destination-details.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section class="destinations-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ $blog->title}}</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-details-desc mb-30">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <div class="image mb-30">
                                    <img style="width: 100%;max-height: 376px;" src="{{ asset('images/' . $blog->image_id) }}" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div class="content mb-20">
                             <p>
                                {!! $blog->content !!}
                            </p>

                        </div>



                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection
