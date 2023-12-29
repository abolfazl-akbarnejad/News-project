{{--** file copy in index **--}}

@extends('admin.layout.master')
@section('style')
    <title>منو ها</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
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
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-04"
                                                    placeholder="جستجوی سریع بر اساس نام">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#"
                                                    class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                                    data-bs-toggle="dropdown">وضعیت</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#"><span>محصولات جدید</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>ویژه</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>ناموجود</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct"
                                                class="toggle btn btn-icon btn-primary d-md-none"><em
                                                    class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct"
                                                class="toggle btn btn-primary d-none d-md-inline-flex {{ $menus->where('parent_id', null)->count() >= 6 ? 'disabled' : '' }}  "><em
                                                    class="icon ni ni-plus"></em><span>ذخیره اطلاعات</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>
                <!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="pid">
                                                <label class="custom-control-label" for="pid"></label>
                                            </div>
                                        </div>
                                        {{-- <div class="nk-tb-col tb-col-sm"><span>نام</span></div>
                                    <div class="nk-tb-col"><span>شناسه محصول</span></div> --}}
                                        <div class="nk-tb-col"><span>نام</span></div>
                                        <div class="nk-tb-col"><span>لینک</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>زیر منو</span></div>
                                        <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            {{-- <ul class="nk-tb-actions gx-1 my-n1"> --}}
                                            <li class="me-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                        data-bs-toggle="dropdown disable"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#"><em class="icon ni ni-edit edit_menu" "></em><span>ویرایش
                                                                                                                                                                                                                                                                                                                                                انتخاب
                                                                                                                                                                                                                                                                                                                                                شده</span></a>
                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                        <a href="#"><em
                                                                                                                                                                                                                                                                                                                                                class="icon ni ni-trash"></em><span>حذف انتخاب
                                                                                                                                                                                                                                                                                                                                                شده</span></a>
                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                        <a href="#"><em
                                                                                                                                                                                                                                                                                                                                                class="icon ni ni-bar-c"></em><span>به روز رسانی
                                                                                                                                                                                                                                                                                                                                                موجودی</span></a>
                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                                                                        <a href="#"><em
                                                                                                                                                                                                                                                                                                                                                class="icon ni ni-invest"></em><span>به روز
                                                                                                                                                                                                                                                                                                                                                رسانی قیمت</span></a>
                                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                        <!-- .nk-tb-item -->
                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                          
                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                          
                                                                                                                                                                                                                              
                                                                                                                                                                                                                  
                                                                                                                                                                                                      
                                                                                                                                                                                          
                                                                                                                                                                              
                                                                                                                                                                  
                                                                                                                                                      
                                                                                                                                          
                                                                                                                              
                                                                                                                  
                                                                                                      
                                                                                          
                                                                        @foreach ($menus as $menu)
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        id="pid{{ $menu->id }}">
                                                                                    <label class="custom-control-label"
                                                                                        for="pid{{ $menu->id }}"></label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="nk-tb-col">
                                                                                <span
                                                                                    class="tb-lead">{{ $menu->name }}</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span
                                                                                    class="tb-sub">{{ substr($menu->url, 0, 100) }}</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span
                                                                                    class="tb-sub">{{ $menu->parent->name ?? 'منو اصلی' }}</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <div class="asterisk tb-asterisk">
                                                                                    <a href="#"><em
                                                                                            class="asterisk-off icon ni ni-star"></em><em
                                                                                            class="asterisk-on icon ni ni-star-fill"></em></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                                                    <li class="me-n1">
                                                                                        <div class="dropdown">
                                                                                            <a href="#"
                                                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                                data-bs-toggle="dropdown"><em
                                                                                                    class="icon ni ni-more-h"></em></a>
                                                                                            <div
                                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                                <ul
                                                                                                    class="link-list-opt no-bdr">
                                                                                                    <li>
                                                                                                        <a
                                                                                                            href="{{ route('admin.menu.edit', $menu->id) }}">test</a>
                                                                                                        {{-- <a href="#"
                                                                                                                class="edit_button"
                                                                                                                onclick="fetchEditData({{ $menu->id }})"
                                                                                                                data-urlEdit{{ $menu->id }}="{{ route('admin.menu.edit', $menu->id) }}"
                                                                                                                data-id="{{ $menu->id }}"><em
                                                                                                                    class="icon ni ni-edit "
                                                                                                                    data-editMenu="{{ $menu->slug }}">
                                                                                                                </em><span>ویرایش
                                                                                                                    محصول</span></a> --}}

                                                                                                        <a href="#"
                                                                                                            class="edit_button"
                                                                                                            id="{{ $menu->id }}"
                                                                                                            onclick="fetchEditData({{ $menu->id }})"
                                                                                                            data-url="{{ route('admin.menu.edit', $menu->id) }}"
                                                                                                            data-id="{{ $menu->id }}"><em
                                                                                                                class="icon ni ni-edit ">
                                                                                                            </em><span>ویرایش
                                                                                                                محصول</span></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"><em
                                                                                                                class="icon ni ni-eye"></em><span>مشاهده
                                                                                                                محصول</span></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"><em
                                                                                                                class="icon ni ni-activity-round"></em><span>سفارشات
                                                                                                                محصول</span></a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        {{-- <a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>حذف
                                                                                محصول</span></a> --}}
                                                                                                        <form
                                                                                                            action="{{ route('admin.menu.destroy', $menu->id) }}"
                                                                                                            method="POST"
                                                                                                            class="deleteForm">
                                                                                                            @csrf
                                                                                                            @method('DELETE')
                                                                                                            <a href="#"
                                                                                                                class="deleteButton"><em
                                                                                                                    class="icon ni ni-trash"></em><span>حذف
                                                                                                                    منو</span></a>
                                                                                                        </form>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>



                                                                        <div class="nk-add-product toggle-slide d-none toggle-slide-right toggle-screen-any content-active"
                                                                            id="menu_page_edit" data-content="editMenu"
                                                                            data-toggle-screen="any"
                                                                            data-toggle-overlay1="true"
                                                                            data-toggle-body="true" data-simplebar="init">
                                                                            <div class="simplebar-wrapper"
                                                                                style="margin: -24px;">
                                                                                <div
                                                                                    class="simplebar-height-auto-observer-wrapper">
                                                                                    <div
                                                                                        class="simplebar-height-auto-observer">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="simplebar-mask">
                                                                                    <div class="simplebar-offset"
                                                                                        style="left: 0px; bottom: 0px;">
                                                                                        <div class="simplebar-content-wrapper"
                                                                                            tabindex="0" role="region"
                                                                                            aria-label="scrollable content"
                                                                                            style="height: 100%; overflow: hidden scroll;">
                                                                                            <div class="simplebar-content"
                                                                                                style="padding: 24px;">
                                                                                                <div class="nk-block-head">
                                                                                                    <div
                                                                                                        class="nk-block-head-content">
                                                                                                        <h5
                                                                                                            class="nk-block-title">
                                                                                                            ویرایش منو</h5>
                                                                                                        <div
                                                                                                            class="nk-block-des">
                                                                                                            <p>منو جدید و
                                                                                                                اطلاعات آن
                                                                                                                را اضافه
                                                                                                                کنید.</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- .nk-block-head -->
                                                                                                <form
                                                                                                    action="{{ route('admin.menu.update', $menu->id) }}"
                                                                                                    id="update_menu_form"
                                                                                                    method="POST">
                                                                                                    <input type="hidden"
                                                                                                        name="_token"
                                                                                                        value="Hfu1jXTl4HVUCXOi99n6LbDFLutAJ13d2VGhVvCU"
                                                                                                        autocomplete="off">
                                                                                                    <input type="hidden"
                                                                                                        name="_method"
                                                                                                        value="put">
                                                                                                    <div class="nk-block">
                                                                                                        <div
                                                                                                            class="row g-3">
                                                                                                            <div
                                                                                                                class="col-12">
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="form-label"
                                                                                                                        for="product-title">نام
                                                                                                                        منو</label>
                                                                                                                    <div
                                                                                                                        class="form-control-wrap menu_name_input">
                                                                                                                        <input
                                                                                                                            type="text"
                                                                                                                            class="form-control"
                                                                                                                            id="menu-name"
                                                                                                                            name="name"
                                                                                                                            value="سلامت">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-12">
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="form-label"
                                                                                                                        for="menu-url">لینک
                                                                                                                        صفحه</label>
                                                                                                                    <div
                                                                                                                        class="form-control-wrap menu_url_input">
                                                                                                                        <input
                                                                                                                            type="url"
                                                                                                                            placeholder="مثال:https://www.google.com/"
                                                                                                                            class="form-control"
                                                                                                                            id="menu-url"
                                                                                                                            name="url"
                                                                                                                            value="https://www.google.com/">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-group">
                                                                                                                <label
                                                                                                                    class="form-label"
                                                                                                                    for="menu_parent">زیر
                                                                                                                    منو</label>
                                                                                                                <div
                                                                                                                    class="form-control-wrap">
                                                                                                                    <div
                                                                                                                        class="form-control-select ">
                                                                                                                        <select
                                                                                                                            class="form-control  for_menu"
                                                                                                                            id="menu_parent"
                                                                                                                            name="parent_id">
                                                                                                                            <option
                                                                                                                                value="default_option">
                                                                                                                                اصلی
                                                                                                                            </option>



                                                                                                                            <option
                                                                                                                                value="1"
                                                                                                                                class="option_class">
                                                                                                                                سیاسی
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="3"
                                                                                                                                class="option_class">
                                                                                                                                سلامت
                                                                                                                            </option>
                                                                                                                            <option
                                                                                                                                value="4"
                                                                                                                                class="option_class">
                                                                                                                                اقتصاد
                                                                                                                            </option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="col-12">
                                                                                                                <button
                                                                                                                    class="btn btn-primary"><em
                                                                                                                        class="icon ni ni-plus"></em><span>افزودن
                                                                                                                        جدید</span></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .nk-block -->

                                                                                                </form>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="simplebar-placeholder"
                                                                                    style="width: auto; height: 716px;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-track simplebar-horizontal"
                                                                                style="visibility: hidden;">
                                                                                <div class="simplebar-scrollbar"
                                                                                    style="width: 0px; display: none;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="simplebar-track simplebar-vertical"
                                                                                style="visibility: visible;">
                                                                                <div class="simplebar-scrollbar"
                                                                                    style="height: 219px; display: block; transform: translate3d(0px, 0px, 0px);">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach

                                                                        <!-- .nk-tb-item -->
                                                    </div>
                                                    <!-- .nk-tb-list -->
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- form insert -->
                                <div class="nk-add-product toggle-slide toggle-slide-right toggle-screen-any"
                                    data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true"
                                    data-toggle-body="true" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: -24px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="left: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: 100%; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 24px;">
                                                        <div class="nk-block-head">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">منو جدید</h5>
                                                                <div class="nk-block-des">
                                                                    <p>منو جدید و اطلاعات آن را اضافه کنید.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .nk-block-head -->
                                                        <form action="{{ route('admin.menu.store') }}" method="POST">
                                                            @csrf
                                                            <div class="nk-block">
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                for="product-title">نام
                                                                                منو</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="text" class="form-control"
                                                                                    id="menu-name" name="name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="menu-url">لینک
                                                                                صفحه</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="url"
                                                                                    placeholder="مثال:https://www.google.com/"
                                                                                    class="form-control" id="menu-url"
                                                                                    name="url">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-06">زیر
                                                                            منو</label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-control-select">
                                                                                <select class="form-control"
                                                                                    id="default-06" name="parent_id">
                                                                                    <option value="default_option">اصلی
                                                                                    </option>
                                                                                    @foreach ($menus->where('parent_id', null) as $insert_menu)
                                                                                        <option
                                                                                            value="{{ $insert_menu->id }}">
                                                                                            {{ $insert_menu->name }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button class="btn btn-primary"><em
                                                                                class="icon ni ni-plus"></em><span>افزودن
                                                                                جدید</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .nk-block -->

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 716px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 219px; display: block; transform: translate3d(0px, 0px, 0px);">
                                        </div>
                                    </div>
                                </div>


                                {{-- form update --}}
                                <div class="nk-edit-product toggle-slide toggle-slide-right toggle-screen-any"
                                    id="menu_page_edit" data-content="editMenu" data-toggle-screen="any"
                                    data-toggle-overlay1="true" data-toggle-body="true" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: -24px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="left: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: 100%; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 24px;">
                                                        <div class="nk-block-head">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">ویرایش منو</h5>
                                                                <div class="nk-block-des">
                                                                    <p>منو جدید و اطلاعات آن را اضافه کنید.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .nk-block-head -->
                                                        <form action="{{ route('admin.menu.update') }}"
                                                            id="update_menu_form" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="nk-block">
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                for="product-title">نام
                                                                                منو</label>
                                                                            <div class="form-control-wrap menu_name_input">
                                                                                <input type="text" class="form-control"
                                                                                    id="menu-name" name="name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="menu-url">لینک
                                                                                صفحه</label>
                                                                            <div class="form-control-wrap menu_url_input">
                                                                                <input type="url"
                                                                                    placeholder="مثال:https://www.google.com/"
                                                                                    class="form-control" id="menu-url"
                                                                                    name="url">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="menu_parent">زیر
                                                                            منو</label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-control-select ">
                                                                                <select class="form-control  for_menu"
                                                                                    id="menu_parent" name="parent_id">
                                                                                    <option value="default_option">اصلی
                                                                                    </option>
                                                                                    <div class="menu_parent_input"
                                                                                        id="menu_parent_input">
                                                                                        {{-- @foreach ($menus->where('parent_id', null) as $insert_menu)
                                                                                            <option
                                                                                                value="{{ $insert_menu->id }}">
                                                                                                {{ $insert_menu->name }}
                                                                                            </option> 
                                                                                        @endforeach --}}
                                                                                    </div>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button class="btn btn-primary"><em
                                                                                class="icon ni ni-plus"></em><span>افزودن
                                                                                جدید</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .nk-block -->

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 716px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 219px; display: block; transform: translate3d(0px, 0px, 0px);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toggle-overlay  d-none" id="edit_menu" data-target="editMenu"></div>
                    <button class="test btn btn-danger">click test</button>
                @endsection
                @section('script')
                    @include('admin.alerts.defult_alert.suucess')
                    <script>
                        $(document).ready(function() {

                        });
                    </script>
                    <script>
                        $(document).ready(function() {
                            $(".deleteButton").click(function(e) {
                                e.preventDefault();
                                if (confirm("آیا مطمئن هستید که می‌خواهید این منو را حذف کنید؟")) {

                                    $(this).closest("form").submit();
                                }
                            });
                        });
                    </script>



                    <script type="text/javascript">
                        // $(document).ready(function() {



                        $(document).ready(function() {


                            $('.edit_button').click(function(e) {
                                e.preventDefault();
                                // console.log($(this).attr('data-urlEdit'));
                                // fetchEditData()
                                // $('.menu_parent_input').empty();


                                page();

                            });
                        });


                        function fetchEditData(id) {
                            var element = $('#' + id);
                            var url = $(element).attr('data-url');
                            // console.log(url);


                            $.ajax({
                                type: "get",
                                url: url,
                                dataType: "json",
                                success: function(response) {
                                    // console.log(response.data);

                                    //change action form
                                    var id_value = response.data.id
                                    //  console.log(id_value);
                                    // $("#update_menu_form").attr('action', '{!! route('admin.menu.update', ['menu' => '+id_value+']) !!}');







                                    // input name

                                    var inpu_name =
                                        '<input type="text" class="form-control" id="menu-name" name="name" value="' + response
                                        .data.name + '">'


                                    $('.menu_name_input').empty();
                                    $('.menu_name_input').append(inpu_name);


                                    //input url

                                    var inpu_url =
                                        '<input type="url" placeholder="مثال:https://www.google.com/" class="form-control" id="menu-url" name="url"  value="' +
                                        response
                                        .data.url + '">'


                                    $('.menu_url_input').empty();
                                    $('.menu_url_input').append(inpu_url);





                                    console.log(response.parents);
                                    var parent_lenght = response.parents.length;


                                    // $('.for_menu').append($('<option>', {
                                    //     value: null,
                                    //     text: اصلی,

                                    // }));

                                    $(".option_class").remove();
                                    for (var i = 0; i < parent_lenght; i++) {

                                        var isSelected = response.parents[i].id == response.data.parent_id;

                                        $('.for_menu').append($('<option>', {
                                            value: response.parents[i].id,
                                            text: response.parents[i].name,
                                            selected: isSelected // افزودن ویژگی selected بر اساس شرط

                                        }).addClass('option_class')) //add class for remove option
                                    };


                                    // $('.for_menu').empty();

                                    // for()

                                }
                            });
                        }

                        // function fetchEditData(id) {
                        //     // console.log(id);
                        //     var url = $('.edit_button').attr('data-urlEdit' + id);
                        //     console.log(url);

                        //     var idValu = $('.edit_button').attr('data-id');


                        //     $.ajax({
                        //         type: "get",
                        //         url: url,
                        //         data: "",
                        //         dataType: "json",
                        //         success: function(response) {
                        //             console.log('s');
                        //         }
                        //     });

                        // }


                        function page() {

                            $('#menu_page_edit').attr('class',
                                'nk-add-product toggle-slide toggle-slide-right toggle-screen-any content-active');


                            $('#edit_menu').attr('class', 'toggle-overlay');



                        }
                        $('.toggle-overlay').click(function(event) {
                            $('#menu_page_edit').attr('class',
                                'nk-add-product toggle-slide toggle-slide-right toggle-screen-any'
                            );
                            $('#edit_menu').attr('class', 'd-none');


                        });
                        // });
                    </script>
                @endsection
