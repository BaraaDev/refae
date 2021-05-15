<div class="card mb-4">
    <div class="card-body px-6 py-4">
        <h4 class="card-title fs-16 lh-2 text-dark mb-3">Find your home</h4>

        <form action="{{ route("property.search") }}"  method="get">

            <div class="form-group">
                <label for="key-word" class="sr-only">Key Word</label>
                <input type="text" class="form-control form-control-lg border-0 shadow-none" id="key-word" name="search" placeholder="Enter keyword...">
            </div>

            {{-- Location  --}}

            <div class="form-group">
                <label for="location" class="sr-only">Location</label>
                <select class="form-control border-0 shadow-none form-control-lg selectpicker" name="location_id" title="Location" data-style="btn-lg py-2 h-52" id="location">

                    <option value="0">Choose Location </option>

                    @foreach($list_location as $item)

                    <option value="{{$item->id}}"  @if(Request::input('location_id') == $item->id) selected @endif>{{$item->name}}</option>

                   @endforeach

                </select>
            </div>


            <div class="form-group">
                <label for="type" class="sr-only">Type</label>
                <select class="form-control border-0 shadow-none form-control-lg selectpicker" name="type" title="All Types" data-style="btn-lg py-2 h-52" id="type">
                    <option>Apartment</option>
                    <option>Condo</option>
                    <option>Lot</option>
                    <option>Multi Family Home</option>
                    <option>Office</option>
                    <option>Shop</option>
                </select>
            </div>

            {{-- Proprty Type --}}


            <div class="form-group">
                <label for="status" class="sr-only">Status</label>
                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="All Status" data-style="btn-lg py-2 h-52" id="status" name="status">
                    <option>For Rent</option>
                    <option>For Sale</option>
                </select>
            </div>

            <div class="form-row mb-4">
                <div class="col">
                    <label for="bed" class="sr-only">Beds</label>
                    <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Beds" data-style="btn-lg py-2 h-52" id="bed" name="beds">
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col">
                    <label for="baths" class="sr-only">Baths</label>
                    <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Baths" data-style="btn-lg py-2 h-52" id="baths" name="baths">
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group slider-range slider-range-secondary">
                <label for="price" class="mb-4 text-gray-light">Price Range</label>
                <div data-slider="true" data-slider-options='{"min":0,"max":8000000,"values":[1000000,5000000],"type":"currency"}'></div>
                <div class="text-center mt-2">
                    <input id="price" type="text" readonly name="price" class="border-0 amount text-center text-body font-weight-500">
                </div>
            </div>
            <div class="form-group slider-range slider-range-secondary">
                <label for="area-size" class="mb-4 text-gray-light">Area Size</label>
                <div data-slider="true" data-slider-options='{"min":0,"max":15000,"values":[50,15000],"type":"sqrt"}'></div>
                <div class="text-center mt-2">
                    <input id="area-size" type="text" readonly name="area" class="border-0 amount text-center text-body font-weight-500">
                </div>
            </div>
            <a class="lh-17 d-inline-block" data-toggle="collapse" href="#other-feature" role="button" aria-expanded="false" aria-controls="other-feature">
                <span class="text-primary d-inline-block mr-1"><i class="far fa-plus-square"></i></span>
                <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
            </a>
            <div class="collapse" id="other-feature">
                <div class="card card-body border-0 px-0 pb-0 pt-3">
                    <ul class="list-group list-group-no-border">
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check1">
                                <label class="custom-control-label" for="check1">Air
                                    Conditioning</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check2">
                                <label class="custom-control-label" for="check2">Laundry</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check3">
                                <label class="custom-control-label" for="check3">Refrigerator</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check4">
                                <label class="custom-control-label" for="check4">Washer</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check5">
                                <label class="custom-control-label" for="check5">Barbeque</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check6">
                                <label class="custom-control-label" for="check6">Lawn</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check7">
                                <label class="custom-control-label" for="check7">Sauna</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check8">
                                <label class="custom-control-label" for="check8">WiFi</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check9">
                                <label class="custom-control-label" for="check9">Dryer</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check10">
                                <label class="custom-control-label" for="check10">Microwave</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check11">
                                <label class="custom-control-label" for="check11">Swimming
                                    Pool</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check12">
                                <label class="custom-control-label" for="check12">Window
                                    Coverings</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check13">
                                <label class="custom-control-label" for="check13">Gym</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check14">
                                <label class="custom-control-label" for="check14">Outdoor
                                    Shower</label>
                            </div>
                        </li>
                        <li class="list-group-item px-0 pt-0 pb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]" id="check15">
                                <label class="custom-control-label" for="check15">TV Cable</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">Search
            </button>
        </form>
    </div>
</div>
