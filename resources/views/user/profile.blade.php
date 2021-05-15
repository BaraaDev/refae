@extends('layouts.usermain')


@section('content')



    <main id="content" class="bg-gray-01">
        <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
            <div class="mb-6">
                <h2 class="mb-0 text-heading fs-22 lh-15">{{__("Personal Information")}}  </h2>
             </div>
            <form action="{{route('user.profile.profile_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-6">
                    <div class="col-lg-6">
                        <div class="card mb-6">
                            <div class="card-body px-6 pt-6 pb-5">
                                <div class="row">
                                    <div class="col-sm-4 col-xl-12 col-xxl-7 mb-6">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">{{__("Avatar")}}</h3>
                                        <p class="card-text">Upload your profile photo.</p>
                                    </div>
                                    <div class="col-sm-8 col-xl-12 col-xxl-5">
                                        <img src="{{ asset('images/' . $user->avatar )}}" width="150" alt="My Profile" name="avatar_id">
                                        <div class="custom-file mt-4 h-auto">
                                            <input type="file" class="custom-file-input" hidden id="customFile" name="file">
                                            <label class="btn btn-secondary btn-lg btn-block" for="customFile">
                                                <span class="d-inline-block mr-1"><i class="fal fa-cloud-upload"></i></span>Upload</label>
                                        </div>
                                        <p class="mb-0 mt-2">
                                            *minimum 500px x 500px
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-6">
                            <div class="card-body px-6 pt-6 pb-5">
                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Contact information</h3>
                                <div class="form-row mx-n4">
                                    <div class="form-group col-md-6 px-4">
                                        <label for="firstName" class="text-heading">{{__("First name")}}</label>
                                        <input type="text" class="form-control form-control-lg border-0" id="firstName" value="{{ $user->first_name}}" name="first_name" placeholder="{{__("First name")}}">
                                    </div>
                                    <div class="form-group col-md-6 px-4">
                                        <label for="lastName" class="text-heading">{{__("Last name")}}</label>
                                        <input type="text" class="form-control form-control-lg border-0" id="lastName" value="{{old('last_name',$user->last_name)}}" name="last_name" placeholder="{{__("Last name")}}" >
                                    </div>
                                </div>
                                <div class="form-row mx-n4">
                                    <div class="form-group col-md-12 px-4 mb-md-0">
                                        <label for="email" class="text-heading">{{__("E-mail")}}</label>
                                        <input type="email" class="form-control form-control-lg border-0" value="{{old('email',$user->email)}}" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-row mx-n4">
                                    <div class="form-group col-md-6 px-4">
                                        <label for="phone" class="text-heading">{{__("Phone Number")}}</label>
                                        <input type="text" class="form-control form-control-lg border-0" id="phone" value="{{old('phone',$user->phone)}}" name="phone" placeholder="{{__("Phone Number")}}">
                                    </div>
                                    <div class="form-group col-md-6 px-4 mb-md-0">
                                        <label for="skype" class="text-heading">{{__("Birthday")}}</label>
                                        <input type="text" class="form-control form-control-lg border-0" id="skype" value="{{ old('birthday',$user->birthday? display_date($user->birthday) :'') }}" name="birthday" placeholder="{{__("Birthday")}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card mb-6 mb-lg-0">
                            <div class="card-body px-6 pt-6 pb-5">
                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">{{__("About Yourself")}}</h3>
                                <div class="form-group mb-0">
                                    <textarea name="bio" rows="5" class="form-control form-control-lg border-0">{{old('bio',$user->bio)}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-6">
                            <div class="card-body px-6 pt-6 pb-5">
                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">{{__("Location Information")}}</h3>
                                <div class="form-group">
                                    <label for="facebook" class="text-heading">{{__("Country")}}</label>
                                    <select name="country" class="form-control">
                                        <option value="">{{__('-- Select --')}}</option>
                                        @foreach(get_country_lists() as $id=>$name)
                                            <option @if((old('country',$user->country ?? '')) == $id) selected @endif value="{{$id}}">{{$name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                <div class="form-group">
                                    <label for="city" class="text-heading">{{__("City")}}</label>
                                    <input type="text" value="{{old('city',$user->city)}}" name="city" placeholder="{{__("City")}}" class="form-control form-control-lg border-0" id="city" >
                                </div>
                                <div class="form-group">
                                    <label for="state" class="text-heading">{{__("State")}}</label>
                                    <inputtype="text" value="{{old('state',$user->state)}}" name="state" placeholder="{{__("State")}}" class="form-control form-control-lg border-0" id="state">
                                </div>
                                <div class="form-group">
                                    <label for="twitter" class="text-heading">{{__("Address")}}</label>
                                    <input  type="text" value="{{old('address',$user->address)}}" name="address" placeholder="{{__("Address")}}" class="form-control form-control-lg border-0" id="twitter">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body px-6 pt-6 pb-5">
                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Change password</h3>
                                <div class="form-group">
                                    <label for="oldPassword" class="text-heading">Old Password</label>
                                    <input type="password" class="form-control form-control-lg border-0" id="oldPassword" name="oldPassword">
                                </div>
                                <div class="form-row mx-n4">
                                    <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                        <label for="newPassword" class="text-heading">New Password</label>
                                        <input type="password" class="form-control form-control-lg border-0" id="newPassword" name="newPassword">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                        <label for="confirmNewPassword" class="text-heading">Confirm New Password</label>
                                        <input type="password" class="form-control form-control-lg border-0" id="confirmNewPassword" name="confirmNewPassword">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end flex-wrap">
                    <button class="btn btn-lg btn-primary ml-4 mb-3">Update Profile</button>
                </div>
            </form>
        </div>
    </main>
</div>


@endsection

