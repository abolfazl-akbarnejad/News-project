@extends('admin.layout.master')
@section('style')
    <title>خانه</title>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">مدیریت کمپین</h3>
                            <div class="nk-block-des text-soft">
                                <p>به داشبورد مدیریت کمپین خوش آمدید.</p>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <a href="#"
                                                class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                data-bs-toggle="dropdown">
                                                <em class="icon ni ni-plus"></em><span><span
                                                        class="d-md-none">افزودن</span><span
                                                        class="d-none d-md-block">افزودن
                                                        کمپین</span></span>
                                            </a>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a href="#" class="btn btn-primary"><em
                                                    class="icon ni ni-reports"></em><span>گزارش
                                                    ها</span></a>
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
                    <div class="row g-gs">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">56.8هزار</span>
                                                    <span class="align-self-end fs-14px pb-1"><em
                                                            class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                                </div>
                                                <h6 class="text-white">کمپین در حال اجرا</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="active"><span>15
                                                                        روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>30 روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>3 ماه</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                id="runningCampaign"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-info">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">857.6هزار</span>
                                                    <span class="align-self-end fs-14px pb-1"><em
                                                            class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                                </div>
                                                <h6 class="text-white">کل مخاطبان</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="active"><span>15
                                                                        روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>30 روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>3 ماه</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="nk-cmwg1-ck mt-auto">
                                        <canvas class="campaign-line-chart-s1 rounded-bottom" id="totalAudience"></canvas>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-warning">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">9.3هزار</span>
                                                    <span class="align-self-end fs-14px pb-1"><em
                                                            class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                                </div>
                                                <h6 class="text-white">میانگین امتیازدهی</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="active"><span>15
                                                                        روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>30 روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>3 ماه</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-bar-chart-s1 rounded-bottom" id="avgRating"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-danger">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">175.2هزار</span>
                                                    <span class="align-self-end fs-14px pb-1"><em
                                                            class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                                </div>
                                                <h6 class="text-white">مشترک</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="active"><span>15
                                                                        روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>30 روز</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>3 ماه</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                id="newSubscriber"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-cmwg -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-8 col-lg-7">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">نمای کلی عملکرد</h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="card-tools-nav">
                                                <li>
                                                    <a href="#"><span>هفته</span></a>
                                                </li>
                                                <li class="active">
                                                    <a href="#"><span>ماه</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <ul class="d-flex justify-content-center flex-wrap gx-3 mb-2">
                                        <li class="align-center"><span class="dot" data-bg="#733AEA"></span><span
                                                class="ms-1">شبکه های
                                                اجتماعی</span></li>
                                        <li class="align-center"><span class="dot" data-bg="#0FCA7A"></span><span
                                                class="ms-1">ایمیل</span>
                                        </li>
                                        <li class="align-center"><span class="dot" data-bg="#F2426E"></span><span
                                                class="ms-1">دوره
                                                ها</span>
                                        </li>
                                        <li class="align-center"><span class="dot" data-bg="#FD9722"></span><span
                                                class="ms-1">تبلیغات
                                                گوگل</span></li>
                                    </ul>
                                    <div class="nk-cmwg2-ck">
                                        <canvas class="campaign-line-chart-s2" id="performanceOverview"></canvas>
                                    </div>
                                    <div class="chart-label-group ms-5">
                                        <div class="chart-label">01 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">10 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">17 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">24 فروردین</div>
                                        <div class="chart-label">31 فروردین</div>
                                    </div>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-4 col-lg-5">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">کانال های برتر</h6>
                                        </div>
                                        <div class="card-tools">
                                            <a href="#" class="link">مشاهده همه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <ul class="gy-4">
                                        <li class="justify-between align-center border-bottom border-0 border-dashed">
                                            <div class="align-center">
                                                <div class="user-avatar sq bg-transparent"><img src="images/google.png"
                                                        alt=""></div>
                                                <div class="ms-2">
                                                    <div class="lead-text">گوگل</div>
                                                    <div class="sub-text">سئو و پرداخت برای هر کلیک</div>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="sub-text me-2">70%</div>
                                                <div class="progress rounded-pill w-80px">
                                                    <div class="progress-bar bg-success rounded-pill" data-progress="70">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li class="justify-between align-center border-bottom border-0 border-dashed">
                                            <div class="align-center">
                                                <div class="user-avatar sq bg-transparent"><img src="images/instagram.png"
                                                        alt=""></div>
                                                <div class="ms-2">
                                                    <div class="lead-text">اینستاگرام</div>
                                                    <div class="sub-text">شبکه های اجتماعی</div>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="sub-text me-2">86%</div>
                                                <div class="progress rounded-pill w-80px">
                                                    <div class="progress-bar bg-primary rounded-pill" data-progress="86">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li class="justify-between align-center border-bottom border-0 border-dashed">
                                            <div class="align-center">
                                                <div class="user-avatar sq bg-transparent"><img src="images/linkedin.png"
                                                        alt=""></div>
                                                <div class="ms-2">
                                                    <div class="lead-text">لینکدین</div>
                                                    <div class="sub-text">شبکه های اجتماعی</div>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="sub-text me-2">75%</div>
                                                <div class="progress rounded-pill w-80px">
                                                    <div class="progress-bar bg-danger rounded-pill" data-progress="75">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li class="justify-between align-center border-bottom border-0 border-dashed">
                                            <div class="align-center">
                                                <div class="user-avatar sq bg-transparent"><img src="images/slack.png"
                                                        alt=""></div>
                                                <div class="ms-2">
                                                    <div class="lead-text">اسلک</div>
                                                    <div class="sub-text">پیام رسان</div>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="sub-text me-2">64%</div>
                                                <div class="progress rounded-pill w-80px">
                                                    <div class="progress-bar bg-info rounded-pill" data-progress="64">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li class="justify-between align-center">
                                            <div class="align-center">
                                                <div class="user-avatar sq bg-transparent"><img src="images/twitter.png"
                                                        alt=""></div>
                                                <div class="ms-2">
                                                    <div class="lead-text">توییتر</div>
                                                    <div class="sub-text">شبکه های اجتماعی</div>
                                                </div>
                                            </div>
                                            <div class="align-center">
                                                <div class="sub-text me-2">54%</div>
                                                <div class="progress rounded-pill w-80px">
                                                    <div class="progress-bar bg-warning rounded-pill" data-progress="54">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                    </ul>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-8">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">کمپین فعال</h6>
                                        </div>
                                        <div class="card-tools">
                                            <a href="#" class="link">مشاهده همه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner py-0 mt-n2">
                                    <div class="nk-tb-list nk-tb-flush nk-tb-dashed">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>موضوع</span></div>
                                            <div class="nk-tb-col tb-col-mb"><span>کانال ها</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>وضعیت</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>نمایندگان</span></div>
                                            <div class="nk-tb-col text-end"><span>محدوده تاریخ</span>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-head -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">کریسمس مبارک <span
                                                        class="dot dot-success d-sm-none ms-1"></span></span>
                                                <span class="tb-sub">ایجاد شده در 21 آبان 1402</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <ul class="d-flex gx-1">
                                                    <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                                    <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                                    <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                                    <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                                    <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="badge badge-dim bg-success">زنده</div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <div class="user-avatar-group">
                                                    <div class="user-avatar xs">
                                                        <img src="images/e-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/f-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/g-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <span>2+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end"><span>21 آبان - 30 آبان</span>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">جمعه سیاه <span
                                                        class="dot dot-success d-sm-none ms-1"></span></span>
                                                <span class="tb-sub">ایجاد شده در 21 آبان 1402</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <ul class="d-flex gx-1">
                                                    <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                                    <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                                    <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                                    <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="badge badge-dim bg-success">زنده</div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <div class="user-avatar-group">
                                                    <div class="user-avatar xs">
                                                        <img src="images/h-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/i-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/j-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <span>7+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end"><span>21 آبان - 30 آبان</span>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">درختکاری <span
                                                        class="dot dot-warning d-sm-none ms-1"></span></span>
                                                <span class="tb-sub">ایجاد شده در 23 آبان 1402</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <ul class="d-flex gx-1">
                                                    <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                                    <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                                    <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="badge badge-dim bg-warning">مکث شده</div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <div class="user-avatar-group">
                                                    <div class="user-avatar xs">
                                                        <img src="images/k-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs bg-pink">
                                                        <span>ر‌ر</span>
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/e-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <span>3+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end"><span>21 آبان - 30 آبان</span>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">پیش نمایش فیلم فرار <span
                                                        class="dot dot-success d-sm-none ms-1"></span></span>
                                                <span class="tb-sub">ایجاد شده در 22 مهر 1402</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-mb">
                                                <ul class="d-flex gx-1">
                                                    <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                                    <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                                    <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                                    <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <div class="badge badge-dim bg-success">زنده</div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <div class="user-avatar-group">
                                                    <div class="user-avatar xs">
                                                        <img src="images/i-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/k-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/e-sm.jpg" alt="">
                                                    </div>
                                                    <div class="user-avatar xs">
                                                        <img src="images/g-sm.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end"><span>21 آبان - 30 آبان</span>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                    </div>
                                    <!-- .nk-tb-list -->
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">آمار کلیدی</h6>
                                        </div>
                                        <div class="card-tools me-n1 mt-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#" class="active"><span>15
                                                                    روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>30 روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>3 ماه</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <ul class="gy-4">
                                        <li class="border-bottom border-0 border-dashed">
                                            <div class="mb-1">
                                                <span class="fs-2 lh-1 mb-1 text-head">85.6هزار</span>
                                                <div class="sub-text">میانگین ​​لایک ها</div>
                                            </div>
                                            <div class="align-center">
                                                <div class="small text-primary me-2">54%</div>
                                                <div class="progress progress-md rounded-pill w-100 bg-primary-dim">
                                                    <div class="progress-bar bg-primary rounded-pill" data-progress="54">
                                                    </div>
                                                </div>
                                                <div class="dropdown ms-3">
                                                    <a class="dropdown-toggle dropdown-indicator sub-text" href="#"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-bs-offset="0, 10">دی 21 - فروردین 21</a>
                                                    <div class="dropdown-menu dropdown-menu-end text-right">
                                                        <ul class="link-list-opt">
                                                            <li>
                                                                <a href="#"><span>فروردین 21 - تیر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>تیر 21 - مهر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>مهر 21 - دی
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>دی 21 - فروردین
                                                                        21</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li class="border-bottom border-0 border-dashed">
                                            <div class="mb-1">
                                                <span class="fs-2 lh-1 mb-1 text-head">42.7هزار</span>
                                                <div class="sub-text">میانگین ​​نظرات</div>
                                            </div>
                                            <div class="align-center">
                                                <div class="small text-danger me-2">84%</div>
                                                <div class="progress progress-md rounded-pill w-100 bg-danger-dim">
                                                    <div class="progress-bar bg-danger rounded-pill" data-progress="84">
                                                    </div>
                                                </div>
                                                <div class="dropdown ms-3">
                                                    <a class="dropdown-toggle dropdown-indicator sub-text" href="#"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-bs-offset="0, 10">دی 21 - فروردین 21</a>
                                                    <div class="dropdown-menu dropdown-menu-end text-right">
                                                        <ul class="link-list-opt">
                                                            <li>
                                                                <a href="#"><span>فروردین 21 - تیر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>تیر 21 - مهر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>مهر 21 - دی
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>دی 21 - فروردین
                                                                        21</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                        <li>
                                            <div class="mb-1">
                                                <span class="fs-2 lh-1 mb-1 text-head">25.4هزار</span>
                                                <div class="sub-text">میانگین ​​اشتراک گذاری ها</div>
                                            </div>
                                            <div class="align-center">
                                                <div class="small text-success me-2">62%</div>
                                                <div class="progress progress-md rounded-pill w-100 bg-success-dim">
                                                    <div class="progress-bar bg-success rounded-pill" data-progress="62">
                                                    </div>
                                                </div>
                                                <div class="dropdown ms-3">
                                                    <a class="dropdown-toggle dropdown-indicator sub-text" href="#"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-bs-offset="0, 10">دی 21 - فروردین 21</a>
                                                    <div class="dropdown-menu dropdown-menu-end text-right">
                                                        <ul class="link-list-opt">
                                                            <li>
                                                                <a href="#"><span>فروردین 21 - تیر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>تیر 21 - مهر
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>مهر 21 - دی
                                                                        21</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span>دی 21 - فروردین
                                                                        21</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- li -->
                                    </ul>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">کمپین اینستاگرام</h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="d-flex gx-2">
                                                <li>
                                                    <button class="btn btn-icon btn-sm btn-outline-light rounded-pill"><em
                                                            class="icon ni ni-chevron-left"></em></button>
                                                </li>
                                                <li>
                                                    <button
                                                        class="btn btn-icon btn-sm btn-outline-primary rounded-pill"><em
                                                            class="icon ni ni-chevron-right"></em></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <div class="rounded px-2 py-4 bg-primary">
                                        <div class="d-flex">
                                            <div class="w-50 px-4">
                                                <span class="fs-2 lh-1 mb-1 text-white">24.6هزار</span>
                                                <div class="fs-14px text-white text-opacity-75">فالوور
                                                    جدید
                                                </div>
                                            </div>
                                            <div class="border-start opacity-50"></div>
                                            <div class="w-50 px-4">
                                                <span class="fs-2 lh-1 mb-1 text-white">120هزار</span>
                                                <div class="fs-14px text-white text-opacity-75">هدف فالوور
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-cmwg3-ck mt-3">
                                        <canvas class="campaign-line-chart-s3" id="instagramCampaign"></canvas>
                                    </div>
                                    <div class="chart-label-group ms-5 mt-0">
                                        <div class="chart-label">01 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">10 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">17 فروردین</div>
                                        <div class="chart-label d-none d-sm-block">24 فروردین</div>
                                        <div class="chart-label">31 فروردین</div>
                                    </div>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">کلیک بر اساس مکان</h6>
                                        </div>
                                        <div class="card-tools me-n1 mt-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#" class="active"><span>15
                                                                    روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>30 روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>3 ماه</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <ul class="my-n2">
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">ایالات متحده آمریکا</div>
                                            <div class="sub-text">14,356</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">ایرلند</div>
                                            <div class="sub-text">11,203</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">انگلستان</div>
                                            <div class="sub-text">10,653</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">کانادا</div>
                                            <div class="sub-text">7,215</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">استرالیا</div>
                                            <div class="sub-text">6,653</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">ژاپن</div>
                                            <div class="sub-text">3,945</div>
                                        </li>
                                        <!-- li -->
                                        <li
                                            class="align-center justify-between py-1 gx-1 border-bottom border-0 border-dashed">
                                            <div class="lead-text">چین</div>
                                            <div class="sub-text">2,945</div>
                                        </li>
                                        <!-- li -->
                                        <li class="align-center justify-between py-1 gx-1">
                                            <div class="lead-text">فرانسه</div>
                                            <div class="sub-text">954</div>
                                        </li>
                                        <!-- li -->
                                    </ul>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">نرخ تبدیل وب</h6>
                                        </div>
                                        <div class="card-tools me-n1 mt-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#" class="active"><span>15
                                                                    روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>30 روز</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>3 ماه</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner pt-0">
                                    <div class="">
                                        <span class="fs-2 lh-1 mb-1 text-head">3.86%</span>
                                        <div class="fs-14px">این ماه</div>
                                    </div>
                                    <div class="nk-cmwg4-ck mt-4">
                                        <canvas class="campaign-line-chart-s3" id="webConvRate"></canvas>
                                    </div>
                                    <div class="chart-label-group ms-5 mt-0">
                                        <div class="chart-label">فروردین</div>
                                        <div class="chart-label d-none d-sm-block">اردیبهشت</div>
                                        <div class="chart-label d-none d-sm-block">خرداد</div>
                                        <div class="chart-label d-none d-sm-block">تیر</div>
                                        <div class="chart-label d-none d-sm-block">مرداد</div>
                                        <div class="chart-label">شهریور</div>
                                    </div>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
