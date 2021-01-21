@extends('admin.layout.app')


@section('page_head')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>اقسام الموقع
                            <small>تحديث محتوى قسم {{ $section->title_ar }}</small>
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
                            <label for="excerpt_ar" class="col-xl-3 col-md-4"><span>*</span>وصف مختصر بالعربية</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[excerpt_ar]" id="excerpt_ar">{{ $section->data['excerpt_ar']  }}</textarea>
                                @error('data.excerpt_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="excerpt_en" class="col-xl-3 col-md-4"><span>*</span>وصف مختصر بالانجليزية</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control " name="data[excerpt_en]" id="excerpt_en">{{ $section->data['excerpt_en']  }}</textarea>
                                @error('data.excerpt_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step1" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الاولى بالعربية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][1][title_ar]"
                                    id="step1"
                                    type="text"
                                    value="{{ $section->data['steps'][1]['title_ar'] }}">

                                @error('data.steps.1.title_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step2" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الاولى بالانجليزية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][1][title_en]"
                                    id="step2"
                                    type="text"
                                    value="{{ $section->data['steps'][1]['title_en'] }}">

                                @error('data.steps.1.title_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step3" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالعربية للخطوة الاولى</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][1][excerpt_ar]" id="step3">{{ $section->data['steps'][1]['excerpt_ar']  }}</textarea>
                                @error('data.steps.1.excerpt_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step4" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالانجليزية للخطوة الاولى</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][1][excerpt_en]" id="step4">{{ $section->data['steps'][1]['excerpt_en']  }}</textarea>
                                @error('data.steps.1.excerpt_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="step5" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الثانية بالعربية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][2][title_ar]"
                                    id="step5"
                                    type="text"
                                    value="{{ $section->data['steps'][2]['title_ar'] }}">

                                @error('data.steps.2.title_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step6" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الثانية بالانجليزية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][2][title_en]"
                                    id="step6"
                                    type="text"
                                    value="{{ $section->data['steps'][2]['title_en'] }}">

                                @error('data.steps.2.title_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step7" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالعربية للخطوة الثانية</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][2][excerpt_ar]" id="step7">{{ $section->data['steps'][2]['excerpt_ar']  }}</textarea>
                                @error('data.steps.2.excerpt_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step8" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالانجليزية للخطوة الثانية</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][2][excerpt_en]" id="step8">{{ $section->data['steps'][2]['excerpt_en']  }}</textarea>
                                @error('data.steps.2.excerpt_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="step9" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الثالثة بالعربية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][3][title_ar]"
                                    id="step9"
                                    type="text"
                                    value="{{ $section->data['steps'][3]['title_ar'] }}">

                                @error('data.steps.3.title_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step10" class="col-xl-3 col-md-4"><span>*</span>عنوان الخطوة الثالثة بالانجليزية</label>

                            <div class="col-md-8">
                                <input
                                    class="form-control "
                                    name="data[steps][3][title_en]"
                                    id="step10"
                                    type="text"
                                    value="{{ $section->data['steps'][3]['title_en'] }}">

                                @error('data.steps.3.title_en')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step11" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالعربية للخطوة الثالثة</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][3][excerpt_ar]" id="step11">{{ $section->data['steps'][3]['excerpt_ar']  }}</textarea>
                                @error('data.steps.3.excerpt_ar')
                                <span class="error">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="step12" class="col-xl-3 col-md-4"><span>*</span> وصف مختصر بالانجليزية للخطوة الثالثة</label>

                            <div class="col-md-8">
                                {{--                                <input class="form-control " name="title_en" id="title_en" type="text">--}}
                                <textarea class="form-control "  name="data[steps][3][excerpt_en]" id="step12">{{ $section->data['steps'][3]['excerpt_en']  }}</textarea>
                                @error('data.steps.3.excerpt_en')
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
