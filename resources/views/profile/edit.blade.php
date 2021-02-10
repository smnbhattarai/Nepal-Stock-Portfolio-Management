@extends('layout.app', [
    'breadcrum' => [route('profile.edit', $profile) => 'Profile Settings']
    ])

@section('content')

    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">

            <form action="{{ route('profile.update', $profile) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                         data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                                <div id="general-info" class="section general-info">
                                    <div class="info">
                                        <h6 class="">General Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input type="file" name="avatar" id="input-file-max-fs"
                                                                   class="dropify"
                                                                   data-default-file="{{ $profile->avatar() }}"
                                                                   data-max-file-size="1M"/>
                                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                Upload Picture</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text"
                                                                               class="form-control mb-4 @error('name') is-invalid @enderror"
                                                                               id="fullName" name="name"
                                                                               placeholder="Full Name"
                                                                               value="{{ old('name', $profile->name) }}">
                                                                        @error('name')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="dob-input">Date of Birth</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control"
                                                                                    id="exampleFormControlSelect1"
                                                                                    name="birth_day">
                                                                                <option value="">Day</option>
                                                                                @for($i = 1; $i <=32; $i++)
                                                                                    <option value="{{ $i }}"
                                                                                            @if($i == old('birth_day', $profile->birth_day)) selected @endif>{{ $i }}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control" id="month"
                                                                                    name="birth_month">
                                                                                <option value="">Month</option>
                                                                                <option value="1"
                                                                                        @if(old('birth_month', $profile->birth_month) == 1) selected @endif>
                                                                                    Jan
                                                                                </option>
                                                                                <option value="2"
                                                                                        @if(old('birth_month', $profile->birth_month) == 2) selected @endif>
                                                                                    Feb
                                                                                </option>
                                                                                <option value="3"
                                                                                        @if(old('birth_month', $profile->birth_month) == 3) selected @endif>
                                                                                    Mar
                                                                                </option>
                                                                                <option value="4"
                                                                                        @if(old('birth_month', $profile->birth_month) == 4) selected @endif>
                                                                                    Apr
                                                                                </option>
                                                                                <option value="5"
                                                                                        @if(old('birth_month', $profile->birth_month) == 5) selected @endif>
                                                                                    May
                                                                                </option>
                                                                                <option value="6"
                                                                                        @if(old('birth_month', $profile->birth_month) == 6) selected @endif>
                                                                                    Jun
                                                                                </option>
                                                                                <option value="7"
                                                                                        @if(old('birth_month', $profile->birth_month) == 7) selected @endif>
                                                                                    Jul
                                                                                </option>
                                                                                <option value="8"
                                                                                        @if(old('birth_month', $profile->birth_month) == 8) selected @endif>
                                                                                    Aug
                                                                                </option>
                                                                                <option value="9"
                                                                                        @if(old('birth_month', $profile->birth_month) == 9) selected @endif>
                                                                                    Sep
                                                                                </option>
                                                                                <option value="10"
                                                                                        @if(old('birth_month', $profile->birth_month) == 10) selected @endif>
                                                                                    Oct
                                                                                </option>
                                                                                <option value="11"
                                                                                        @if(old('birth_month', $profile->birth_month) == 11) selected @endif>
                                                                                    Nov
                                                                                </option>
                                                                                <option value="12"
                                                                                        @if(old('birth_month', $profile->birth_month) == 12) selected @endif>
                                                                                    Dec
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control" id="year"
                                                                                    name="birth_year">
                                                                                <option value="">Year</option>
                                                                                @for($i = date('Y'); $i >= (date('Y') - 100); $i--)
                                                                                    <option value="{{ $i }}"
                                                                                            @if($i == old('birth_year', $profile->birth_year)) selected @endif>{{ $i }}</option>
                                                                                @endfor
                                                                            </select>
                                                                            @if($errors->has('birth_day') || $errors->has('birth_month') || $errors->has('birth_year'))
                                                                                <small class="text-danger">
                                                                                    {{ $errors->first('birth_day') }} {{ $errors->first('birth_month') }} {{ $errors->first('birth_year') }}
                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="profession">Profession</label>
                                                                <input type="text" name="profession"
                                                                       class="form-control mb-4 @error('profession') is-invalid @enderror"
                                                                       id="profession"
                                                                       placeholder="Business Man"
                                                                       value="{{ old('profession', $profile->profession) }}">
                                                                @error('profession')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="about" class="section about">
                                    <div class="info">
                                        <h5 class="">About</h5>
                                        <div class="row">
                                            <div class="col-md-11 mx-auto">
                                                <div class="form-group">
                                                    <label for="aboutBio">Bio</label>
                                                    <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" id="aboutBio"
                                                              placeholder="Tell something interesting about yourself"
                                                              rows="10">{{ old('bio', $profile->bio) }}</textarea>
                                                    @error('bio')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="contact" class="section contact">
                                    <div class="info">
                                        <h5 class="">Contact</h5>
                                        <div class="row">
                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <input type="text" name="country" class="form-control mb-4 @error('country') is-invalid @enderror"
                                                                   id="country" placeholder="Eg: Nepal"
                                                                   value="{{ old('country', $profile->country) }}">
                                                            @error('country')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control mb-4 @error('address') is-invalid @enderror" name="address"
                                                                   id="address" placeholder="Address"
                                                                   value="{{ old('address', $profile->address) }}">
                                                            @error('address')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" name="phone" class="form-control mb-4 @error('phone') is-invalid @enderror"
                                                                   id="phone"
                                                                   placeholder="Write your mobile number here"
                                                                   value="{{ old('phone', $profile->phone) }}">
                                                            @error('phone')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control mb-4" id="email"
                                                                   placeholder="Write your email here"
                                                                   value="{{ $profile->user->email }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="website1">Website</label>
                                                            <input type="text" name="website" class="form-control mb-4 @error('website') is-invalid @enderror"
                                                                   id="website1" value="{{ old('website', $profile->website) }}" placeholder="Write your website here">
                                                            @error('website')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="social" class="section social">
                                    <div class="info">
                                        <h5 class="">Social</h5>
                                        <div class="row">

                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-linkedin mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="linkedin"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-linkedin"><path
                                                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect
                                                                        x="2" y="9" width="4" height="12"></rect><circle
                                                                        cx="4" cy="4" r="2"></circle></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                                                                   placeholder="linkedin profile url"
                                                                   aria-label="Username"
                                                                   aria-describedby="linkedin"
                                                                   value="{{ old('linkedin', $profile->linkedin) }}">
                                                            @error('linkedin')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group social-tweet mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="tweet"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-twitter"><path
                                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                                                   placeholder="Twitter profile url" name="twitter"
                                                                   aria-label="Username" aria-describedby="tweet"
                                                                   value="{{ old('twitter', $profile->twitter) }}">
                                                            @error('twitter')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group social-fb mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                            <span class="input-group-text" id="fb"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-facebook"><path
                                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                            </div>
                                                            <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                                                   placeholder="Facebook profile/page url"
                                                                   name="facebook"
                                                                   aria-label="Username" aria-describedby="fb"
                                                                   value="{{ old('facebook', $profile->facebook) }}">
                                                            @error('facebook')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group social-github mb-3">
                                                            <div class="input-group-prepend mr-3">
                                                        <span class="input-group-text" id="fb"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="feather feather-youtube">
                                                        <path
                                                            d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                                        <polygon
                                                            points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                                                    </svg></span>
                                                            </div>
                                                            <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                                                   placeholder="Youtube channel url" name="youtube"
                                                                   aria-label="Username" aria-describedby="yt"
                                                                   value="{{ old('youtube', $profile->youtube) }}">
                                                            @error('youtube')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="account-settings-footer">
                    <div class="as-footer-container">
                        <button id="multiple-messages" class="btn btn-dark float-right">Save Changes</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .form-control.is-invalid {
            margin-bottom: 5px !important;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
    <script src="{{ asset('assets/js/users/account-settings.js') }}"></script>
    <script>
        $(document).ready(function() {
            var $container = $("html,body");
            var $scrollTo = $('.is-invalid');
            $container.animate({scrollTop: $scrollTo.offset().top - 200, scrollLeft: 0}, 500);
        });

    </script>
@endpush
