@extends('admin.layout.master')
@section('style')
    <title>
        زیر مجموعه دسته بندی {{ $category->name }}</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">دسته بندی ها</a></li>
                        <li class="breadcrumb-item active">زیر مجموعه ها</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">زیر مجموعه دسته بندی {{ $category->name }}</h3>
                            <h5>پست هایی که با این دسته بندی ثبت شده اند:</h5>
                        </div>
                   
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام پست</th>
                            <th scope="col">عکس پست</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->posts as $key => $post)
                            <tr>
                                <th scope="row">{{ $key += 1 }}</th>
                                <td> {{ $post->title }} </td>



                                <td><img src="{{ asset($post->image) }}" alt="image post"></td>
                                <td>
                                    <span class="text-{{ $post->status == 0 ? 'danger' : ' success' }}">
                                        {{ $post->status == 0 ? 'غیر فعال' : ' فعال' }}
                                    </span>
                                </td>
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
                                                                        href="{{ route('admin.content.category.edit', $category->slug) }}"><em
                                                                            class="icon ni ni-edit"></em><span>ویرایش
                                                                            دسته بندی</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em
                                                                            class="icon ni ni-eye"></em><span>مشاهده
                                                                            دسته بندی</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em
                                                                            class="icon ni ni-activity-round"></em><span>سفارشات
                                                                            دسته بندی</span></a>
                                                                </li>
                                                                <li>

                                                                    <form
                                                                        action="{{ route('admin.content.category.destroy', $category->id) }}"
                                                                        method="POST" class="deleteForm">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a href="#" class="deleteButton"><em
                                                                                class="icon ni ni-trash"></em><span>حذف
                                                                                دسته بندی</span></a>
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
                            if (confirm("آیا مطمئن هستید که می‌خواهید این دسته بندی را حذف کنید؟")) {

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
