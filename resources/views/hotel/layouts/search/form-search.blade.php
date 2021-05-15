<div class="sidebar_listing_list dn-991">
    <div class="sidebar_advanced_search_widget">
        <ul class="sasw_list mb0">
            <form action="{{ route("property.search") }}" class="form bravo_form" method="get">
                @php $property_search_fields = setting_item_array('property_search_fields');
                $property_search_fields = array_values(\Illuminate\Support\Arr::sort($property_search_fields, function ($value) {
                    return $value['position'] ?? 0;
                }));
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
                @if(!empty($property_search_fields))
                    @foreach($property_search_fields as $field)
                        @switch($field['field'])
                            @case ('service_name')
                                @include('property.layouts.search.fields.service_name', ['holder' => $field['title'], 'name' => 'service_name'])
                            @break
                            @case ('location')
                                @include('property.layouts.search.fields.option',['list' => $list_location, 'holder' => $field['title'], 'name' => 'location_id'])
                            @break
                            @case ('category')
                                @include('property.layouts.search.fields.option',['list' => $list_category,'holder' => $field['title'], 'name' => 'category_id'])
                            @break
                            @case ('property_type')
                                @include('property.layouts.search.fields.option',['list' => [(object)['id' => 1,'name' => 'For Buy'],(object)['id' => 2,'name' => 'For Rent']],'holder' => $field['title'], 'name' => 'property_type'])
                            @break
                            @case ('bathrooms')
                                @include('property.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bathroom'])
                            @break
                            @case ('bedrooms')
                                @include('property.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bedroom'])
                            @break
                            @case ('garages')
                                @include('property.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'garage'])
                            @break
                            @case ('year_built')
                                @include('property.layouts.search.fields.option',['list' => $list_year,'holder' => $field['title'], 'name' => 'year_built'])
                            @break
                            @case ('price')
                                @include('property.layouts.search.fields.price',['list' => $list_year,'holder' => $field['title'], 'name' => 'price'])
                            @break
                            @case (null)
                            @break
                            @default
                                @include('property.layouts.search.fields.attribute',['key' => $field['field'],'holder' => $field['title']])
                            @break
                        @endswitch
                    @endforeach
                @endif
                <li>
                    <div class="search_option_button">
                        <button type="submit" class="btn btn-block btn-thm">Search</button>
                    </div>
                </li>
            </form>
        </ul>
    </div>
</div>
