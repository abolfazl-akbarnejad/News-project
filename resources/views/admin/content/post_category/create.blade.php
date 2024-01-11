@extends('admin.layout.master')
@section('style')
    <title>ساخت دسته بندی جدید</title>
    <link rel="stylesheet" href="{{ asset('admin_assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.content.category.index') }}">دسته بندی ها</a></li>
                        <li class="breadcrumb-item active">ساخت دسته بندی جدید</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">ساخت دسته بندی</h3>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">


                                        <li class="nk-block-tools-opt">

                                            <a href="{{ route('admin.content.category.index') }}" class=" btn btn-primary"><em
                                                    class="icon ni ni-plus"></em><span>برگشت</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>


                <div class="form create">
                    <form action="{{ route('admin.content.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label class="form-label" for="name_category"> نام دسته بندی</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control" id="name_category"
                                    placeholder="مثال:اقتصادی" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="image_category">تصویر دسته بندی</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control" name="image"
                                    accept=".jpg, .png, .jpeg, .gif " id="image_category" placeholder="سلامت"
                                    value="{{ old('image') }}">
                            </div>
                            @error('image')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>







                        <div class="form-group">
                            <label class="form-label" for="category_status"> وضعیت</label>
                            <div class="form-control-wrap">

                                <select name="status" id="category_status">
                                    <option value="0" @if (old('status') == 0) selected @endif>غیر فعال
                                    </option>
                                    <option value="1" @if (old('status') == 1) selected @endif>فعال</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>


                </div>


                <button class="btn btn-success m-3 ">ثبت</button>

                </form>
            </div>
        @endsection
