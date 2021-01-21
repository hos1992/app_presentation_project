@extends('admin.layout.app')


@section('page_head')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>اقسام الموقع

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        تحديث محتوى قسم {{ $section->title_ar }}
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ action("Admin\SectionsController@update", $section->id) }}"
                          class="needs-validation" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')


                        <div class="form-group row">
                            <div class="col-sm-12">
                                @if($section->aboutUsImage)
                                    <a href="{{ $section->aboutUsImage->url }}" target="_blank">
                                        <img width="70" src="{{ $section->aboutUsImage->url }}" alt="image"/>
                                    </a>
                                @endif
                            </div>
                            <label for="image" class="col-xl-3 col-md-4">الصورة</label>
                            <div class="col-md-8">
                                <input class="form-control " name="image" id="image" type="file" accept="image/*" >

                                @error('image')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="title_ar" class="col-xl-3 col-md-4"><span>*</span>العنوان بالعربية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="title_ar"
                                    id="title_ar"
                                    type="text"
                                    value="{{ $section->title_ar }}">

                                @error('title_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="title_en" class="col-xl-3 col-md-4"><span>*</span>العنوان بالانجليزية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="title_en"
                                    id="title_en"
                                    type="text"
                                    value="{{ $section->title_en }}">

                                @error('title_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="content_ar" class="col-xl-3 col-md-4"><span>*</span>المحتوى بالعربية</label>

                            <div class="col-md-8">
{{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[content_ar]" id="content_ar">{{ $section->data['content_ar']  }}</textarea>
                                @error('data.content_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content_en" class="col-xl-3 col-md-4"><span>*</span>المحتوى بالانجليزية</label>

                            <div class="col-md-8">
{{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control " name="data[content_en]" id="content_en">{{ $section->data['content_en']  }}</textarea>
                                @error('data.content_en')
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
