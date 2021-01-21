@extends('admin.layout.app')
@section('page_head')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>الاعدادات
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')

    @if(session('success'))
        <div class="alert alert-success text-center alert-msg">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        تحديث اعدادات النظام
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ action("Admin\SettingsController@update") }}"
                          class="needs-validation" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group row">
                            <label for="phone" class="col-xl-3 col-md-4"><span>*</span>رقم الهاتف</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[phone]"
                                    id="phone"
                                    type="text"
                                    value="{{ $settings->data['phone'] ?? "" }}">

                                @error('data.phone')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-xl-3 col-md-4"><span>*</span>البريد الالكترونى</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[email]"
                                    id="email"
                                    type="email"
                                    value="{{ $settings->data['email'] ?? "" }}">

                                @error('data.email')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ios" class="col-xl-3 col-md-4"><span>*</span>رابط Ios</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[ios_link]"
                                    id="ios"
                                    type="text"
                                    value="{{ $settings->data['ios_link'] ?? "" }}">

                                @error('data.ios_link')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="android_link" class="col-xl-3 col-md-4"><span>*</span>رابط Android</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[android_link]"
                                    id="android_link"
                                    type="text"
                                    value="{{ $settings->data['android_link'] ?? "" }}">

                                @error('data.android_link')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook_link" class="col-xl-3 col-md-4"><span>*</span>رابط Facebook</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[facebook_link]"
                                    id="facebook_link"
                                    type="text"
                                    value="{{ $settings->data['facebook_link'] ?? "" }}">

                                @error('data.facebook_link')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter_link" class="col-xl-3 col-md-4"><span>*</span>رابط Twitter</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[twitter_link]"
                                    id="twitter_link"
                                    type="text"
                                    value="{{ $settings->data['twitter_link'] ?? "" }}">

                                @error('data.twitter_link')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram_link" class="col-xl-3 col-md-4"><span>*</span>رابط Instagram</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[instagram_link]"
                                    id="instagram_link"
                                    type="text"
                                    value="{{ $settings->data['instagram_link'] ?? "" }}">

                                @error('data.instagram_link')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary d-block">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@push('script')

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $(document).find('.alert-msg').hide();
            }, 3000);
        });
    </script>

@endpush
