@extends('layouts.main')

@section('content')

<style>
    .navbar-dark .navbar-nav .nav-link {
        color: #fff;
    }
</style>
<main id="content">
    <section class="d-flex flex-column">
        <div style="background-image: url('images/properties-slider-04.jpg')" class="bg-cover d-flex align-items-center custom-vh-100">
            <div class="container pt-lg-15 py-8" data-animate="zoomIn">
                <p class="text-white fs-md-22 fs-18 font-weight-500 letter-spacing-367 mb-6 text-center text-uppercase">Let
                    us guide your home</p>
                <h2 class="text-white display-2 text-center mb-sm-13 mb-8">Find Your Dream Home</h2>
                <form class="property-search py-lg-0 z-index-2 position-relative d-none d-lg-block">
                    <div class="row no-gutters">
                        <div class="col-md-5 col-lg-4 col-xl-3">
                            <input class="search-field" type="hidden" name="status" value="for-sale" data-default-value="">
                            <ul class="nav nav-pills property-search-status-tab">
                                <li class="nav-item bg-secondary rounded-top" role="presentation">
                                    <a href="#" role="tab" aria-selected="true" class="nav-link btn shadow-none rounded-bottom-0 text-white text-btn-focus-secondary text-uppercase d-flex align-items-center fs-13 rounded-bottom-0 bg-active-white text-active-secondary letter-spacing-087 flex-md-1 px-4 py-2 active" data-toggle="pill" data-value="for-sale">
                                        <svg class="icon icon-villa fs-22 mr-2">
                                            <use xlink:href="#icon-villa"></use>
                                        </svg>
                                        for sale
                                    </a>
                                </li>
                                <li class="nav-item bg-secondary rounded-top" role="presentation">
                                    <a href="#" role="tab" aria-selected="true" class="nav-link btn shadow-none rounded-bottom-0 text-white text-btn-focus-secondary text-uppercase d-flex align-items-center fs-13 rounded-bottom-0 bg-active-white text-active-secondary letter-spacing-087 flex-md-1 px-4 py-2" data-toggle="pill" data-value="for-rent">
                                        <svg class="icon icon-building fs-22 mr-2">
                                            <use xlink:href="#icon-building"></use>
                                        </svg>
                                        for rent
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-white px-6 rounded-bottom rounded-top-right pb-6 pb-lg-0">
                        <div class="row align-items-center" id="accordion-4">
                            <div class="col-md-6 col-lg-3 col-xl-3 pt-6 pt-lg-0 order-1">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Home Type</label>
                                <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input" title="Select" data-style="p-0 h-24 lh-17 text-dark" name="type">
                                    <option>Condominium</option>
                                    <option>Single-Family Home</option>
                                    <option>Townhouse</option>
                                    <option>Multi-Family Home</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-5 pt-6 pt-lg-0 order-2">
                                <label class="text-uppercase font-weight-500 letter-spacing-093">Search</label>
                                <div class="position-relative">
                                    <input type="text" name="search" class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 pl-0 pr-4 font-weight-600 border-color-input placeholder-muted" placeholder="Find something...">
                                    <i class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 mt-n3"></i>
                                </div>
                            </div>
                            <div class="col-sm pr-lg-0 pt-6 pt-lg-0 order-3">
                                <a href="#advanced-search-filters-4" class="btn advanced-search btn-accent h-lg-100 w-100 shadow-none text-secondary rounded-0 fs-14 fs-sm-16 font-weight-600 text-left d-flex align-items-center collapsed" data-toggle="collapse" data-target="#advanced-search-filters-4" aria-expanded="true" aria-controls="advanced-search-filters-4">
                                    Advanced Search
                                </a>
                            </div>
                            <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-5">
                                <button type="submit" class="btn btn-primary shadow-none fs-16 font-weight-600 w-100 py-lg-2 lh-213">
                                    Search
                                </button>
                            </div>
                            <div id="advanced-search-filters-4" class="col-12 pt-4 pb-sm-4 order-sm-5 order-4 collapse" data-parent="#accordion-4">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3 pt-6">
                                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bedrooms</label>
                                        <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input" name="bedroom" title="All Bedrooms" data-style="p-0 h-24 lh-17 text-dark">
                                            <option>All Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 pt-6">
                                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bathrooms</label>
                                        <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input" title="All Bathrooms" data-style="p-0 h-24 lh-17 text-dark" name="bathroom">
                                            <option>All Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 pt-6">
                                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">All
                                            Cities</label>
                                        <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input" name="city" title="All Cities" data-style="p-0 h-24 lh-17 text-dark">
                                            <option>All Cities</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                            <option>San Diego</option>
                                            <option>Las Vegas</option>
                                            <option>Las Vegas</option>
                                            <option>Atlanta</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 pt-6">
                                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">All
                                            Areas</label>
                                        <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input" name="areas" title="All Areas" data-style="p-0 h-24 lh-17 text-dark">
                                            <option>All Areas</option>
                                            <option>Albany Park</option>
                                            <option>Altgeld Gardens</option>
                                            <option>Andersonville</option>
                                            <option>Beverly</option>
                                            <option>Brickel</option>
                                            <option>Central City</option>
                                            <option>Coconut Grove</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                        <label for="price-1-4" class="mb-4 text-gray-light">Price Range</label>
                                        <div data-slider="true" data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'></div>
                                        <div class="text-center mt-2">
                                            <input id="price-1-4" type="text" readonly name="price" class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                        <label for="area-size-4" class="mb-4 text-gray-light">Area Size</label>
                                        <div data-slider="true" data-slider-options='{"min":0,"max":15000,"values":[0,13000],"type":"currency"}'></div>
                                        <div class="text-center mt-2">
                                            <input id="area-size-4" type="text" readonly name="area" class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3 pt-6">
                                        <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Property
                                            ID</label>
                                        <input type="text" name="search" class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 font-weight-600 border-color-input" placeholder="Enter ID...">
                                    </div>
                                    <div class="col-12 pt-6 pb-2">
                                        <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse" href="#other-feature-4" role="button" aria-expanded="false" aria-controls="other-feature-4">
                                            <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
                                        </a>
                                    </div>
                                    <div class="collapse row mx-0 w-100" id="other-feature-4">
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check1-4" name="features[]">
                                                <label class="custom-control-label" for="check1-4">Air Conditioning</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check2-4" name="features[]">
                                                <label class="custom-control-label" for="check2-4">Laundry</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check4-4" name="features[]">
                                                <label class="custom-control-label" for="check4-4">Washer</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check5-4" name="features[]">
                                                <label class="custom-control-label" for="check5-4">Barbeque</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check6-4" name="features[]">
                                                <label class="custom-control-label" for="check6-4">Lawn</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check7-4" name="features[]">
                                                <label class="custom-control-label" for="check7-4">Sauna</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check8-4" name="features[]">
                                                <label class="custom-control-label" for="check8-4">WiFi</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check9-4" name="features[]">
                                                <label class="custom-control-label" for="check9-4">Dryer</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check10-4" name="features[]">
                                                <label class="custom-control-label" for="check10-4">Microwave</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check11-4" name="features[]">
                                                <label class="custom-control-label" for="check11-4">Swimming Pool</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check12-4" name="features[]">
                                                <label class="custom-control-label" for="check12-4">Window Coverings</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check13-4" name="features[]">
                                                <label class="custom-control-label" for="check13-4">Gym</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check14-4" name="features[]">
                                                <label class="custom-control-label" for="check14-4">Outdoor Shower</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check15-4" name="features[]">
                                                <label class="custom-control-label" for="check15-4">TV Cable</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check16-4" name="features[]">
                                                <label class="custom-control-label" for="check16-4">Refrigerator</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="property-search property-search-mobile d-lg-none z-index-2 position-relative bg-white rounded mx-md-10">
                    <div class="row align-items-lg-center" id="accordion-4-mobile">
                        <div class="col-12">
                            <div class="form-group mb-0 position-relative">
                                <a href="#advanced-search-filters-4-mobile" class="text-secondary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed" data-toggle="collapse" data-target="#advanced-search-filters-4-mobile" aria-expanded="true" aria-controls="advanced-search-filters-4-mobile">
                                </a>
                                <input type="text" class="form-control form-control-lg border shadow-none pr-9 pl-11 bg-white placeholder-muted" name="key-word" placeholder="Search...">
                                <button type="submit" class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left">
                                    <i class="far fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div id="advanced-search-filters-4-mobile" class="col-12 pt-2 px-7 collapse" data-parent="#accordion-4-mobile">
                            <div class="row mx-n2">
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" title="Select" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                        <option>All status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" title="All Types" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                        <option>Condominium</option>
                                        <option>Single-Family Home</option>
                                        <option>Townhouse</option>
                                        <option>Multi-Family Home</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" name="bedroom" title="Bedrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                        <option>All Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" name="bathrooms" title="Bathrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                        <option>All Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" title="All Cities" data-style="btn-lg py-2 h-52 bg-transparent" name="city">
                                        <option>All Cities</option>
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>San Diego</option>
                                        <option>Las Vegas</option>
                                        <option>Las Vegas</option>
                                        <option>Atlanta</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pt-4 px-2">
                                    <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent" name="areas" title="All Areas" data-style="btn-lg py-2 h-52 bg-transparent">
                                        <option>All Areas</option>
                                        <option>Albany Park</option>
                                        <option>Altgeld Gardens</option>
                                        <option>Andersonville</option>
                                        <option>Beverly</option>
                                        <option>Brickel</option>
                                        <option>Central City</option>
                                        <option>Coconut Grove</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                    <label for="price-4-mobile" class="mb-4 text-white">Price Range</label>
                                    <div data-slider="true" data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'></div>
                                    <div class="text-center mt-2">
                                        <input id="price-4-mobile" type="text" readonly class="border-0 amount text-center bg-transparent font-weight-500" name="price">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                    <label for="area-size-4-mobile" class="mb-4">Area Size</label>
                                    <div data-slider="true" data-slider-options='{"min":0,"max":15000,"values":[0,12000],"type":"sqrt"}'></div>
                                    <div class="text-center mt-2">
                                        <input id="area-size-4-mobile" type="text" readonly class="border-0 amount text-center bg-transparent font-weight-500" name="area">
                                    </div>
                                </div>
                                <div class="col-12 pt-4 pb-2">
                                    <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse" href="#other-feature-4-mobile" role="button" aria-expanded="false" aria-controls="other-feature-4-mobile">
                                        <span class="fs-15 font-weight-500 hover-primary">Other Features</span>
                                    </a>
                                </div>
                                <div class="collapse row mx-0 w-100" id="other-feature-4-mobile">
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check1-4-mobile">
                                            <label class="custom-control-label" for="check1-4-mobile">Air
                                                Conditioning</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check2-4-mobile">
                                            <label class="custom-control-label" for="check2-4-mobile">Laundry</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check4-4-mobile">
                                            <label class="custom-control-label" for="check4-4-mobile">Washer</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check5-4-mobile">
                                            <label class="custom-control-label" for="check5-4-mobile">Barbeque</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check6-4-mobile">
                                            <label class="custom-control-label" for="check6-4-mobile">Lawn</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check7-4-mobile">
                                            <label class="custom-control-label" for="check7-4-mobile">Sauna</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check8-4-mobile">
                                            <label class="custom-control-label" for="check8-4-mobile">WiFi</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check9-4-mobile">
                                            <label class="custom-control-label" for="check9-4-mobile">Dryer</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check10-4-mobile">
                                            <label class="custom-control-label" for="check10-4-mobile">Microwave</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check11-4-mobile">
                                            <label class="custom-control-label" for="check11-4-mobile">Swimming
                                                Pool</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check12-4-mobile">
                                            <label class="custom-control-label" for="check12-4-mobile">Window
                                                Coverings</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check13-4-mobile">
                                            <label class="custom-control-label" for="check13-4-mobile">Gym</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check14-4-mobile">
                                            <label class="custom-control-label" for="check14-4-mobile">Outdoor
                                                Shower</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check15-4-mobile">
                                            <label class="custom-control-label" for="check15-4-mobile">TV Cable</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="features[]" id="check16-4-mobile">
                                            <label class="custom-control-label" for="check16-4-mobile">Refrigerator</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- Featured Properties '--}}

    <section class="pt-10">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-heading">Featured Properties</h2>
                    <span class="heading-divider"></span>
                 </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ url('property?featured=1')}}" class="btn btn-lg text-secondary btn-accent rounded-lg">See all properties
                        <i class="far fa-long-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="slick-slider slick-dots-mt-0" data-slick-options='{"slidesToShow": 4, "dots":false,"arrows":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"dots":true}},{"breakpoint": 992,"settings": {"slidesToShow":2 ,"dots":true}},{"breakpoint": 768,"settings": {"slidesToShow": 2 ,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"dots":true}}]}'>

                @foreach($feautured as $row)

                @include('inc.featured')

                @endforeach

            </div>
        </div>
    </section>



    {{-- sale Section ' --}}
    <section class="pt-lg-12 pb-lg-10 py-11">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-heading">Best Properties For Sale</h2>
                    <span class="heading-divider"></span>

                </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ url('property?property_type=1') }}" class="btn fs-14 text-secondary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">See all properties
                        <i class="far fa-long-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>


            <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30" data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>

                @foreach ($forsale as $row)

                @include('inc.property-loop')

                @endforeach

            </div>
        </div>
    </section>
    <section>
        <div class="bg-gray-02 py-lg-13 pt-11 pb-6">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-lg-4 pr-xl-13" data-animate="fadeInLeft">
                        <h2 class="text-heading lh-1625">Explore <br>
                            by Property Type</h2>
                        <span class="heading-divider"></span>
                        <p class="mb-6">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                        <a href=" " class="btn btn-lg text-secondary btn-accent">+2300 Available Properties
                            <i class="far fa-long-arrow-right ml-1"></i>
                        </a>
                    </div>
                    <div class="col-lg-8" data-animate="fadeInRight">
                        <div class="slick-slider arrow-haft-inner custom-arrow-xxl-hide mx-0" data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false,"autoplay":true}}]}'>
                            <div class="box px-0 py-6">
                                <a href=" " class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                    <img src="images/verified.png" class="card-img-top" alt="Apartment">
                                    <div class="card-body px-0 pt-5 pb-0">
                                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Apartment</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="box px-0 py-6">
                                <a href=" " class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                    <img src="images/sofa.png" class="card-img-top" alt="House">
                                    <div class="card-body px-0 pt-5 pb-0">
                                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">House</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="box px-0 py-6">
                                <a href=" " class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                    <img src="images/architecture-and-city.png" class="card-img-top" alt="Office">
                                    <div class="card-body px-0 pt-5 pb-0">
                                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Office</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="box px-0 py-6">
                                <a href=" " class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                    <img src="images/eco-house.png" class="card-img-top" alt="Villa">
                                    <div class="card-body px-0 pt-5 pb-0">
                                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Villa</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="box px-0 py-6">
                                <a href=" " class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                    <img src="images/verified.png" class="card-img-top" alt="Apartment">
                                    <div class="card-body px-0 pt-5 pb-0">
                                        <h4 class="card-title fs-16 lh-2 text-dark mb-0">Apartment</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-lg-12 pb-lg-11 py-11">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-heading">Best Properties For Rent</h2>
                    <span class="heading-divider"></span>
                 </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ url('property?property_type=2') }}" class="btn fs-14 text-secondary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">See all properties
                        <i class="far fa-long-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30" data-slick-options='{"slidesToShow": 4,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>

                @foreach ($forrent as $row)

                @include('inc.property-loop')

                @endforeach


            </div>
        </div>
    </section>

        <section>
            <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
                <div class="container">
                    <h2 class="text-white text-center lh-1625 mxw-589 font-weight-normal">Looking to Buy a new property or Sell
                        an existing
                        one?</h2>
                    <span class="heading-divider mx-auto"></span>
                    <div class="row info-box-3 mt-7 no-gutters mx-auto">
                        <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                            <a href="  " class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                                <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                                    <div class=" position-relative">
                                        <img src="images/verified.png" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
                                        <img src="images/white-verified.png" class="image" alt="Apartment">
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-5 pb-0">
                                    <h4 class="card-title fs-16 lh-2 text-white mb-0">Apartment</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                            <a href="  " class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                                <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                                    <div class=" position-relative">
                                        <img src="images/sofa.png" class="hover-image position-absolute pos-fixed-top" alt="House">
                                        <img src="images/white-sofa.png" class="image" alt="House">
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-5 pb-0">
                                    <h4 class="card-title fs-16 lh-2 text-white mb-0">House</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                            <a href="  " class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                                <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                                    <div class=" position-relative">
                                        <img src="images/architecture-and-city.png" class="hover-image position-absolute pos-fixed-top" alt="Office">
                                        <img src="images/white-architecture-and-city.png" class="image" alt="Office">
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-5 pb-0">
                                    <h4 class="card-title fs-16 lh-2 text-white mb-0">Office</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                            <a href="  " class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                                <div class="card-img-top d-flex align-items-center justify-content-center  rounded-0">
                                    <div class=" position-relative">
                                        <img src="images/eco-house.png" class="hover-image position-absolute pos-fixed-top" alt="Villa">
                                        <img src="images/white-eco-house.png" class="image" alt="Villa">
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-5 pb-0">
                                    <h4 class="card-title fs-16 lh-2 text-white mb-0">Villa</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    {{-- Locations  --}}

    <section class="pt-lg-12 pb-lg-15 py-11">
        <div class="container container-xxl">
            <h2 class="text-heading">Destinations We Love The Most</h2>
            <span class="heading-divider"></span>
             <div class="slick-slider mx-n2" data-slick-options='{"slidesToShow": 5,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>

                @foreach ($locations  as $location)
                @include('inc.locations')
                @endforeach




            </div>
        </div>
    </section>

    {{-- End Locations  --}}

    <section class="bg-accent pt-10 pb-lg-11 pb-8 bg-patten-04">
        <div class="container container-xxl">
            <h2 class="text-dark text-center mxw-751 fs-26 lh-184 px-md-8">
                We have the most listings and constant updates.
                So you’ll never miss out.</h2>
            <span class="heading-divider mx-auto"></span>
            <div class="row mt-8">
                <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                        <div class="row no-gutters">
                            <div class="col-sm-3">
                                <img src="images/group-16.png" alt="Buy a new home">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href=" " class="d-flex align-items-center text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">Buy a new home </h4>
                                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                            <svg class="icon icon-long-arrow">
                                                <use xlink:href="#icon-long-arrow"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                        <div class="row no-gutters">
                            <div class="col-sm-3">
                                <img src="images/group-17.png" alt="Sell a home">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href=" " class="d-flex align-items-center text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">Sell a home </h4>
                                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                            <svg class="icon icon-long-arrow">
                                                <use xlink:href="#icon-long-arrow"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0" data-animate="zoomIn">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                        <div class="row no-gutters">
                            <div class="col-sm-3">
                                <img src="images/group-21.png" alt="Rent a home">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href=" " class="d-flex align-items-center text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">Rent a home </h4>
                                        <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                            <svg class="icon icon-long-arrow">
                                                <use xlink:href="#icon-long-arrow"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-lg-13 py-11">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pr-xl-17" data-animate="fadeInLeft">
                    <h2 class="text-heading lh-163">Why Do People Love Us?</h2>
                    <span class="heading-divider"></span>
                    <p class="mb-6">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                    <a href="#" class="btn btn-lg text-secondary btn-accent rounded-lg mb-8 mb-lg-0">View all reviews
                        <i class="far fa-long-arrow-right ml-1"></i>
                    </a>
                </div>
                <div class="col-lg-7" data-animate="fadeInRight">
                    <div class="slick-slider custom-vertical mx-0" data-slick-options='{"slidesToShow": 1,"vertical":true,"verticalSwiping":true,"centerMode":true,"swipeToSlide":true,"focusOnSelect":true,"centerPadding":"120px","infinite":true,"autoplay":false,"dots":false,"arrows":false}'>
                        <div class="box px-sm-8">
                            <div class="card border-0 shadow-lg-3 px-3 pl-md-9 pr-md-9 pt-8 pb-7">
                                <div class="card-body p-0">
                                    <h5 class="card-title fs-18 text-secondary mb-3 lh-17">Amazing customer support so far!</h5>
                                    <p class="card-text fs-18 lh-2 text-heading mb-5">
                                        Working with @homeID is like having a family member who can fix everything. They know what you need, exactly when you need it.
                                    </p>
                                    <div class="media align-items-center">
                                        <div class="rounded-circle mr-4 w-70px h-70">
                                            <img src="images/testimonial-2.jpg" alt="Oliver Beddows">
                                        </div>
                                        <div class="media-body">
                                            <p class="fs-17 lh-1 text-heading font-weight-600 mb-2">Oliver Beddows</p>
                                            <p class="fs-15 lh-12 mb-0">/ Reporter, Insights</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box px-sm-8">
                            <div class="card border-0 shadow-lg-3 px-3 pl-md-9 pr-md-9 pt-8 pb-7">
                                <div class="card-body p-0">
                                    <h5 class="card-title fs-18 text-secondary mb-3 lh-17">Very good and fast</h5>
                                    <p class="card-text fs-18 lh-2 text-heading mb-5">
                                        Working with @homeID is like having a family member who can fix everything. They know what you need, exactly when you need it.
                                    </p>
                                    <div class="media align-items-center">
                                        <div class="rounded-circle mr-4 w-70px h-70">
                                            <img src="images/testimonial-1.png" alt="Oliver Beddows">
                                        </div>
                                        <div class="media-body">
                                            <p class="fs-17 lh-1 text-heading font-weight-600 mb-2">Oliver Beddows</p>
                                            <p class="fs-15 lh-12 mb-0">/ Reporter, Insights</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box px-sm-8">
                            <div class="card border-0 shadow-lg-3 px-3 pl-md-9 pr-md-9 pt-8 pb-7">
                                <div class="card-body p-0">
                                    <h5 class="card-title fs-18 text-secondary mb-3 lh-17">Very good and fast</h5>
                                    <p class="card-text fs-18 lh-2 text-heading mb-5">
                                        Working with @homeID is like having a family member who can fix everything. They know what you need, exactly when you need it.
                                    </p>
                                    <div class="media align-items-center">
                                        <div class="rounded-circle mr-4 w-70px h-70">
                                            <img src="images/testimonial-3.jpg" alt="Oliver Beddows">
                                        </div>
                                        <div class="media-body">
                                            <p class="fs-17 lh-1 text-heading font-weight-600 mb-2">Oliver Beddows</p>
                                            <p class="fs-15 lh-12 mb-0">/ Reporter, Insights</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Agents ' --}}

    <section class="pt-lg-13 pb-lg-10 py-11 bg-gray-02">
        <div class="container">
             <h2 class="text-primary text-center letter-spacing-263 mb-9 lh-16">Meet our agents</h2>
            <div class="slick-slider mx-0 custom-arrow-spacing-30" data-slick-options='{"slidesToShow": 4,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>

                @foreach ($agents as $agent)


                <div class="box" data-animate="fadeInUp">
                    <div class="card border-0 shadow-hover-3 px-4">
                        <div class="card-body text-center pt-6 pb-3 px-0">
                            <a href="{{ route('agent.detail', $agent->id)}}" class="d-inline-block mb-2">
                                <img src="{{ asset('images/' . $agent->avatar )}}" alt=" ">
                            </a>
                            <a href="{{ route('agent.detail', $agent->id)}}" class="d-block fs-16 text-dark mb-0 font-weight-500 hover-primary lh-15">  {{ $agent->name }}</a>
                            <p class="mb-0">    {{ $agent->email }}</p>

                        </div>

                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section>



    {{-- News Section '  --}}
    <section class="bg-gray-02 pt-10 pb-10">
        <div class="container">
            <p class="text-primary letter-spacing-263 text-uppercase lh-186 text-center mb-0">new & articles</p>
            <h2 class="text-center lh-1625 text-dark pb-1">
                Check Out Recent News & Articles
            </h2>
            <div class="mx-n2">
                <div class="slick-slider mt-6 mx-n1 slick-dots-mt-0" data-slick-options='{"slidesToShow": 3, "autoplay":false,"arrows":false,"dots":true,"infinite": true,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>

                    @foreach($news as $row)
                    @php $translation = $row->translateOrOrigin(app()->getLocale()); @endphp




                    <div class="item py-4" data-animate="fadeInUp">
                        <div class="card border-0 shadow-xxs-3">
                            <div class="position-relative d-flex align-items-end card-img-top">


                                @if(get_file_url($row->image_id,'thumb'))

                                <a href="{{$row->getDetailUrl()}}" class="hover-shine">
                                    <img src="{{get_file_url($row->image_id,'thumb')}}" alt="The Interior Design The Hall On str. Filimonovo">
                                </a>
                                @php $category = $row->getCategory; @endphp
                                @if(!empty($category))
                                @php $t = $category->translateOrOrigin(app()->getLocale()); @endphp

                                <a href="{{$category->getDetailUrl(app()->getLocale())}}" class="badge pos-fixed-bottom text-white bg-dark-opacity-04 fs-13 font-weight-500 bg-hover-primary hover-white mx-2 my-4 position-absolute">
                                    {{$t->name ?? ''}}
                                </a>
                                @endif
                                @endif
                            </div>
                            <div class="card-body px-5 pt-3 pb-5">
                                <p class="mb-1 fs-13">Dec 16, 2020</p>
                                <h3 class="fs-18 text-heading lh-194 mb-1">
                                    <a href="{{$row->getDetailUrl()}}" class="text-heading hover-primary">{{$translation->title}}</a>
                                </h3>
                                <p class="mb-3">{!! get_exceprt($translation->content) !!}</p>
                                <a class="text-heading font-weight-500" href="{{$row->getDetailUrl()}}">{{ __('Read More')}}
                                    <i class="far fa-long-arrow-right text-primary ml-1"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="bg-single-image-02 bg-accent py-lg-13 py-11">
        <div class="container">
            <div class="row">
                <div class="col-ld-6 col-sm-7" data-animate="fadeInLeft">
                    <div class="pl-6 border-4x border-left border-primary">
                        <h2 class="text-heading lh-15 fs-md-32 fs-25">For more information about our services,<span class="text-primary"> get in touch</span> with our expert consultants</h2>
                        <p class="lh-2 fs-md-15 mb-0">10 new offers every day. 350 offers on site, Trusted by a community of thousands of users.</p>
                    </div>
                </div>
                <div class="col-ld-6 col-sm-5 text-center mt-sm-0 mt-8" data-animate="fadeInRight">
                    <i class="fal fa-phone fs-40 text-primary"></i>
                    <p class="fs-13 font-weight-500 letter-spacing-173 text-uppercase lh-2 mt-3">Call for help now!</p>
                    <p class="fs-md-42 fs-32 font-weight-600 text-secondary lh-1">01013033465</p>
                    <a href="{{ route('contact.index') }}" class="btn btn-lg btn-primary mt-2 px-10">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container container-xxl">
            <div class="py-lg-8 py-6 border-top">
                <div class="slick-slider mx-0 partners" data-slick-options='{"slidesToShow": 6, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item position-relative hover-change-image">
                            <img src="images/partner-hover-1.png" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                            <img src="images/partner-1.png" alt="Partner 1" class="image">
                        </a>
                    </div>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item position-relative hover-change-image">
                            <img src="images/partner-hover-2.png" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                            <img src="images/partner-2.png" alt="Partner 2" class="image">
                        </a>
                    </div>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item position-relative hover-change-image">
                            <img src="images/partner-hover-3.png" class="hover-image position-absolute pos-fixed-top" alt="Partner 3">
                            <img src="images/partner-3.png" alt="Partner 3" class="image">
                        </a>
                    </div>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item">
                            <img src="images/partner-4.png" alt="" class="image">
                        </a>
                    </div>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item position-relative hover-change-image">
                            <img src="images/partner-hover-5.png" class="hover-image position-absolute pos-fixed-top" alt="Partner 5">
                            <img src="images/partner-5.png" alt="Partner 5" class="image">
                        </a>
                    </div>
                    <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                        <a href="#" class="item">
                            <img src="images/partner-6.png" alt="" class="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
