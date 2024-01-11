@extends('admin.layout.master')
@section('style')
    <title>
        بنر ها</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">بنر ها</a></li>
                        <li class="breadcrumb-item active">نمایش</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">بنر ها</h3>
                            {{-- {{ dd($errors) }} --}}
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
                                            <a href="{{ route('admin.banner.create') }}" class=" btn btn-primary   "><em
                                                    class="icon ni ni-plus"></em><span>ساخت بنر جدید</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">کد</th>
                            <th scope="col">نمایش تبلیغ</th>
                            <th scope="col">سطح اولویت / محل نمایش</th>
                            <th scope="col">تاریخ شروع</th>
                            <th scope="col">تاریخ پایان</th>
                            <th scope="col">تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $key => $banner)
                            <tr>
                                <th scope="row">{{ $key += 1 }}</th>
                                <td>{{ $banner->id }}</td>

                                <td>
                                    @if ($banner->file_type == 'image')
                                        <img src="{{ asset($banner->file_show) }}" width="{{ $banner->prioriry->width }}"
                                            height="{{ $banner->prioriry->height }}" alt=""
                                            title="اندازه این عکس در زمان نمایش به همین ابعاد خواهد بود">
                                    @else
                                        {{-- این فایل ویدیو است --}}
                                        <video width="320" height="240" autoplay loop muted>
                                            <source src="{{ asset($banner->file_show) }}" type="video/mp4">
                                        </video>
                                    @endif
                                </td>

                                <td>{{ $banner->prioriry->name }}</td>
                                <td>{{ $banner->date_start }}</td>
                                <td>{{ $banner->date_end }}</td>
                                <td>
                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-icon btn-trigger show"
                                                            data-bs-toggle="dropdown" aria-expanded="true"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end show"
                                                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -38px);"
                                                            data-popper-placement="top-start">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a
                                                                        href="{{ route('admin.banner.edit', $banner->id) }}"><em
                                                                            class="icon ni ni-edit"></em><span>ویرایش
                                                                            محصول</span></a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="{{ route('admin.banner.show', $banner->id) }}"><em
                                                                            class="icon ni ni-eye"></em><span>جزئیات
                                                                            بنر</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em
                                                                            class="icon ni ni-activity-round"></em><span>سفارشات
                                                                            محصول</span></a>
                                                                </li>
                                                                <li>

                                                                    <form
                                                                        action="{{ route('admin.banner.destroy', $banner->id) }}"
                                                                        method="POST" class="deleteForm">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a href="#" class="deleteButton"><em
                                                                                class="icon ni ni-trash"></em><span>حذف
                                                                                بنر</span></a>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endsection
            {{-- alerts --}}
            @section('script')
                @include('admin.alerts.defult_alert.suucess')


                {{-- delete  --}}
                <script>
                    $(document).ready(function() {
                        $(".deleteButton").click(function(e) {
                            e.preventDefault();
                            if (confirm("آیا مطمئن هستید که می‌خواهید این بنر را حذف کنید؟")) {

                                $(this).closest("form").submit();
                            }
                        });
                    });
                </script>


                <script>
                    $(window).ready(function() {
                        $('.dropdown-menu').removeClass('*');

                        $('.dropdown-menu').attr('class', 'dropdown-menu dropdown-menu-end');
                        $('.dropdown-menu').attr('style',
                            'dropdown-menu dropdown-menu-end');
                    });
                </script>
            @endsection
