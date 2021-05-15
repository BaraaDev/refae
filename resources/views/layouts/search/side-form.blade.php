<div class="sidebar_listing_list dn-991">
    <div class="sidebar_advanced_search_widget">
        <ul class="sasw_list mb0">
            <form action="{{ route("property.search") }}" class="form bravo_form" method="get">

                @php

                $property_search_fields =  $sear;

                $zzzz = json_decode($sear, true);

                $response[0]['title'] =  $zzzz['val'];

                $list_number = [
                    (object)['id' => 1,'name' => '1'],
                    (object)['id' => 2,'name' => '2'],
                    (object)['id' => 3,'name' => '3'],
                    (object)['id' => 4,'name' => '4'],
                    (object)['id' => 5,'name' => '5'],
                    (object)['id' => 6,'name' => '6'],
                    (object)['id' => 7,'name' => '7'],
                    (object)['id' => 8,'name' => '8']
                ];

                $list_garages_value = [
                    (object)['id' => 1,'name' => 'Yes'],
                    (object)['id' => 2,'name' => 'No'],
                    (object)['id' => 3,'name' => 'Others']
                ];

                $current_year = (int)date("Y");

                $list_year = [];

                for($year = $current_year;$year >= ($current_year - 8);$year--) {
                    $list_year[] = (object)['id' => $year,'name' => $year];
                }

                @endphp

                <li class="search_area">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="service name" value="{{Request::input('service_name')}}">
                    </div>
                </li>


                @include('layouts.search.fields.option',['list' => $list_location, 'holder' => 'dsfsdfsd', 'name' => 'location_id'])


                @include('layouts.search.fields.option',['list' => [(object)['id' => 1,'name' => 'For Buy'],(object)['id' => 2,'name' => 'For Rent']],'holder' => 'title', 'name' => 'category_id'])

                @include('layouts.search.fields.option',['list' => $list_number,'holder' =>'bathroom', 'name' => 'bathroom'])

                @include('layouts.search.fields.option',['list' => $list_number,'holder' => 'bedroom', 'name' => 'bedroom'])

                @include('layouts.search.fields.option',['list' => $list_number,'holder' => 'garage', 'name' => 'garage'])

                @include('layouts.search.fields.option',['list' => $list_year,'holder' => 'year built', 'name' => 'year_built'])

                @include('layouts.search.fields.price',['list' => $list_year,'holder' => 'price', 'name' => 'price'])

                @include('layouts.search.fields.attribute',['key' => 'title','holder' => 'title'])




                <li>
                    <div class="search_option_button">
                        <button type="submit" class="btn btn-block btn-thm">Search</button>
                    </div>
                </li>
            </form>
        </ul>
    </div>
</div>
