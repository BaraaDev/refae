<div class="sidebar_listing_list dn-991">
    <div class="sidebar_advanced_search_widget">
        <ul class="sasw_list mb0">
            <form action="{{ route("property.search") }}" class="form bravo_form" method="get">

                @php

                $property_search_fields =  $sear;

                $zzzz = json_decode($sear, true);


                $response[0]['title'] =   $zzzz['val'];

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

                    @foreach($response as $field)
                        @switch($field['title'])
                            @case ('service_name')
                                @include('layouts.search.fields.service_name', ['holder' => $field['title'], 'name' => 'service_name'])
                            @break
                            @case ('location')
                                @include('layouts.search.fields.option',['list' => $list_location, 'holder' => $field['title'], 'name' => 'location_id'])
                            @break
                            @case ('category')
                                @include('layouts.search.fields.option',['list' => $list_category,'holder' => $field['title'], 'name' => 'category_id'])
                            @break
                            @case ('property_type')
                                @include('layouts.search.fields.option',['list' => [(object)['id' => 1,'name' => 'For Buy'],(object)['id' => 2,'name' => 'For Rent']],'holder' => $field['title'], 'name' => 'property_type'])
                            @break
                            @case ('bathrooms')
                                @include('layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bathroom'])
                            @break
                            @case ('bedrooms')
                                @include('layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bedroom'])
                            @break
                            @case ('garages')
                                @include('layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'garage'])
                            @break
                            @case ('year_built')
                                @include('layouts.search.fields.option',['list' => $list_year,'holder' => $field['title'], 'name' => 'year_built'])
                            @break
                            @case ('price')
                                @include('layouts.search.fields.price',['list' => $list_year,'holder' => $field['title'], 'name' => 'price'])
                            @break
                            @case (null)
                            @break
                            @default
                                @include('layouts.search.fields.attribute',['key' => $field['title'],'holder' => $field['title']])
                            @break
                        @endswitch
                    @endforeach

                <li>
                    <div class="search_option_button">
                        <button type="submit" class="btn btn-block btn-thm">Search</button>
                    </div>
                </li>
            </form>
        </ul>
    </div>
</div>
