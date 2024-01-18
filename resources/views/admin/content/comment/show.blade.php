@extends('admin.layout.master')
@section('style')
    <title>
        جزئیات</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">نظر ها</a></li>
                        <li class="breadcrumb-item active">جزئیات</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">جزئیات نظر :{{ $comment->id }}</h3>
                        </div>
                        <!-- .nk-block-head-content -->

                    </div>
                    <!-- .nk-block-between -->
                </div>
                <div class="m-3">
                    <span class="m-3">
                        این نظر در تاریخ: {{ $comment->created_at }} ثبت شد
                    </span>
                </div>


                <table class="table">

                    <thead>
                        <tr>
                            <th>شناسه نظر</th>
                            <td>{{ $comment->id }}</td>
                        </tr>
                        <tr>
                            <th>نام کاربر </th>
                            <td>{{ $comment->user_name }}</td>
                        </tr>
                        <tr>
                            <th>ایمیل کاربر</th>
                            <td>{{ $comment->user_email }}</td>
                        </tr>
                        <tr>
                            <th>وضعیت</th>
                            <td>{{ $comment->approved == 0 ? 'غیر فعال' : 'فعال' }}</td>
                        </tr>

                        <tr>
                            <th>درج شده روی پست:</th>
                            <td>{{ $post_id->title  . ' -' .$post_id->id }}</td>
                        </tr>


                        <tr>
                            <th>متن نظر</th>
                            <td>{{ $comment->comment }}</td>
                        </tr>




                    </thead>

                </table>
            @endsection
