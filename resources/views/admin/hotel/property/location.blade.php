<div class="panel">
    <div class="panel-title"><strong>{{__("Locations")}}</strong></div>
    <div class="panel-body">
        @if(is_default_lang())
            <div class="form-group">
                <label class="control-label">{{__("Location")}}</label>
                @if(!empty($is_smart_search))
                    <div class="form-group-smart-search">
                        <div class="form-content">
                            <?php
                            $location_name = "";
                            $list_json = [];
                            $traverse = function ($locations, $prefix = '') use (&$traverse, &$list_json , &$location_name,$row) {
                                foreach ($locations as $location) {
                                    $translate = $location->translateOrOrigin(app()->getLocale());
                                    if ($row->location_id == $location->id){
                                        $location_name = $translate->name;
                                    }
                                    $list_json[] = [
                                        'id' => $location->id,
                                        'title' => $prefix . ' ' . $translate->name,
                                    ];
                                    $traverse($location->children, $prefix . '-');
                                }
                            };
                            $traverse($property_location);
                            ?>
                            <div class="smart-search">
                                <input type="text" class="smart-search-location parent_text form-control" placeholder="{{__("-- Please Select --")}}" value="{{ $location_name }}" data-onLoad="{{__("Loading...")}}"
                                       data-default="{{ json_encode($list_json) }}">
                                <input type="hidden" class="child_id" name="location_id" value="{{$row->location_id ?? Request::query('location_id')}}">
                            </div>
                        </div>
                    </div>
                @else
                    <div class="">
                        <select name="location_id" class="form-control">
                            <option value="">{{__("-- Please Select --")}}</option>
                                @foreach(get_country_lists() as $id=>$name)
                                    {{dd($id)}}
                                    <option @if((old('country',$user->country ?? '')) == $id) selected @endif value="{{$id}}">{{$name}}</option>
                                @endforeach
                        </select>
                    </div>
                @endif
            </div>
        @endif
        <div class="form-group">
            <label class="control-label">{{__("Real address")}}</label>
            <input type="text" name="address" class="form-control" placeholder="{{__("Real address")}}" value="{{$row->address}}">
        </div>

    </div>
</div>
