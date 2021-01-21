@extends('admin.layout.app')


@section('page_head')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>اقسام الموقع
                            <small>عرض جميع الاقسام</small>
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
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم بالعربية</th>
                    <th>الاسم بالانجليزية</th>
                    <th>التحكم</th>
                </tr>
                </thead>

                <tbody>
                @if($sections)
                    @foreach($sections as $section)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td> {{ $section->title_ar }} </td>
                            <td> {{ $section->title_en }} </td>
                            <td>
                                <a href="{{ action('Admin\SectionsController@edit', $section->id) }}"
                                   class="btn btn-info">تحديث المحتوى</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>

            </table>
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
