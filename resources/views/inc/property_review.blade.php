<?php
   $reviewData = App\Models\Review::getTotalViewAndRateAvg($row['id'], 'Property');    ?>


   @include('admin.message')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
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
                                <li class="list-inline-item"><a href="#">   <i class="fas fa-star"></i></a></li>
                            @else
                                <li class="list-inline-item"><a href="#">   <i style="color:gray" class="fas fa-star"></i></a></li>
                            @endif
                        @endfor
                    </ul>
                </ul>
            </li>
            <li class="list-inline-item avrg_review">{{ __("(:rate_agv out of 5)",["rate_agv"=>$reviewData['score_total'] ]) }}</li>

        </ul>
        @if($review_list)
            @foreach($review_list as $item)
                @php $userInfo = $item->author; @endphp
                <div class="mbp_first media">

                        <img class="mr-3" src="{{ asset('images/' . $userInfo->avatar )}}" style="max-width: 50px;" alt="{{$userInfo->getDisplayName()}}">

                    <div class="media-body">
                        <h4 class="sub_title mt-0">{{$userInfo->getDisplayName()}}
                            <div class="sspd_review dif">
                                @if($item->rate_number)
                                    <ul class="ml10">
                                        @for( $i = 0 ; $i < 5 ; $i++ )
                                            @if($i < $item->rate_number)
                                                <li class="list-inline-item"><a href="#">   <i class="fas fa-star"></i></a></li>
                                            @else
                                                <li class="list-inline-item"><a href="#"> <i style="color:gray" class="fas fa-star"></i></a></li>
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

            <form class="comments_form review-form" id="review-form" action="{{ route('review.store') }}" method="post">
                @csrf

                <div class="form-group review-items sspd_review">
                    <div class="item">
                        <input class="review_rate" type="hidden" name="review_rate">
                        <div class="rates rate-input">



                                    <input type="radio" id="star5" name="review_rate" value="5">
                                    <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="fas fa-star"></i>
                                    </label>
                                    <input type="radio" id="star4" name="review_rate" value="4">
                                    <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="fas fa-star"></i>
                                    </label>
                                    <input type="radio" id="star3" name="review_rate" value="3">
                                    <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="fas fa-star"></i>
                                    </label>
                                    <input type="radio" id="star2" name="review_rate" value="2">
                                    <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="fas fa-star"></i>
                                    </label>
                                    <input type="radio" id="star1" name="review_rate" value="1">
                                    <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                        <i class="fas fa-star"></i>
                                    </label>


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
                <input type="hidden" name="review_service_type" value="Property">
                <button type="submit" class="btn btn-thm btn-primary">Submit Review <span class="flaticon-right-arrow-1"></span>
                </button>
            </form>
        </div>
    </div>
</div>
