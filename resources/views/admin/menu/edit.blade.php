@extends('admin.layout.master')
@section('style')
    <title>ویرایش منو جدید</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">منو ها</a></li>
                        <li class="breadcrumb-item active">ویرایش منو جدید</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">منو ها</h3>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">


                                        <li class="nk-block-tools-opt">

                                            <a href="{{ route('admin.menu.index') }}" class=" btn btn-primary"><em
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
                    <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="form-label" for="name_menu">نام منو</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="name" id="name_menu-01"
                                    placeholder="سلامت" value="{{ old('name', $menu->name) }}">
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
                            <label class="form-label" for="url_menu">ادرس صفحه</label>
                            <div class="form-control-wrap">
                                <input type="text" name="url" class="form-control" id="url_menu"
                                    placeholder="http://google.com/" value="{{ old('url', $menu->url) }}">
                            </div>
                            @error('url')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label class="form-label">زیر منو</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" name="parent_id">
                                    <option value="defult_option">اصلی</option>
                                    @foreach ($menus as $parent_menu)
                                        <option value="{{ $parent_menu->id }}"
                                            @if (old('parent_id', $menu->parent_id) == $parent_menu->id) selected @endif>

                                            {{ $parent_menu->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('parent_id')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-success">ثبت</button>

                    </form>
                </div>
            @endsection
