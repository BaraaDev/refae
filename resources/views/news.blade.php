@extends('layouts.main')

@section('content')

    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>News</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>News</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('images/contact.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section id="blog" class="blog-section blog-style-two ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2> </h2>
             </div>
            <div class="row">
                @foreach ($news as $blog)


                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="{{ asset('images/' . $blog->image_id ) }}" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <ul class="info-list">
                                <li><i class='bx bx-calendar'></i> {{ date('Y M D', Strtotime($blog->created_at))}}</li>
                            </ul>
                            <h3>
                                <a href="{{ route('blog', $blog->slug)}}">{{ $blog->title }}</a>
                            </h3>
                            <p>
                                {{ strip_tags(substr($blog->content, 0, 100))}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>



@endsection
