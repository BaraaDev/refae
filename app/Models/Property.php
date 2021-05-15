<?php

namespace App\Models;

use App\BaseModel;

use Illuminate\Http\Request;
use App\Models\Review;


class Property extends BaseModel
{

    protected $table = 'properties';

    public $type = 'property';
    public $checkout_booking_detail_file       = 'frontend/booking/detail';
    public $checkout_booking_detail_modal_file = 'frontend/booking/detail-modal';
    public $email_new_booking_file             = 'emails.new_booking_detail';

    protected $guarded = [];
    protected $slugField     = 'slug';
    protected $slugFromField = 'title';
    protected $seo_type = 'property';

    protected $casts = [
        'faqs'  => 'array',
        'extra_price'  => 'array',
    ];
    /**
     * @var Booking
     */
    protected $bookingClass;
    /**
     * @var Review
     */
    protected $reviewClass;

    /**
     * @var PropertyDate
     */
    protected $propertyDateClass;

    /**
     * @var propertyTerm
     */
    protected $propertyTermClass;

    /**
     * @var propertyTerm
     */
    protected $propertyTranslationClass;
    protected $userWishListClass;

    /**
     * @var agencies
     */
    protected $agenciesAgentClass;
    protected $agenciesClass;

    protected $tmp_dates = [];

    /**
     * const feature
     */
    const IS_FEATURE = 1;
    const IS_NOT_FEATURE = 0;


}
