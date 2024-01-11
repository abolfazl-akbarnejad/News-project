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
                        <li class="breadcrumb-item active">جزئیات</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">جزئیات بنر {{ $banner->id }}</h3>
                        </div>
                        <!-- .nk-block-head-content -->

                    </div>
                    <!-- .nk-block-between -->
                </div>
                <div class="m-3">
                    <span class="m-3">
                        این بنر در تاریخ:   {{ $banner->created_at }}   ثبت شد      
                    </span>
                </div>


                <table class="table">
                    
                    <thead>
                        <tr>
                            <th>نام شرکت(یا شخص)</th>
                            <td>{{ $invoice->compani_name ?? 'ثبت نشده' }}</td>
                        </tr>
                        <tr>
                            <th>مبلغ پرداختی </th>
                            <td>{{ $invoice->price ?? 'ثبت نشده' }}</td>
                        </tr>
                        <tr>
                            <th>تاریخ شروع</th>
                            <td>{{ $invoice->date_start ?? 'ثبت نشده' }}</td>
                        </tr>
                        <tr>
                            <th>تاریخ پایان</th>
                            <td>{{ $invoice->date_end ?? 'ثبت نشده' }}</td>
                        </tr>
                        <tr>
                            <th>وضعیت</th>
                            <td>{{ $invoice->status == 0 ? 'غیر فعال' : 'فعال' }}</td>
                        </tr>
                        <tr>
                            <th>وضعیت پرداخت</th>
                            <td>{{ $invoice->status_paid == 0 ? 'پرداخت نشده' : 'پرداخت شده' }}</td>

                        </tr>
                        <tr>
                            <th>آدرس سایت آگهی دهنده</th>
                            <td>{{ $invoice->url ?? 'ثبت نشده' }}</td>
                        </tr>

                       
                    </thead>

                </table>
            @endsection
