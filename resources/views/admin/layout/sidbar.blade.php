<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="./index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="images/logo.png" srcset="images/logo2x.png 2x" alt="لوگو">
                <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x"
                    alt="لوگوی تاریک">
                <img class="logo-small logo-img logo-img-small" src="images/logo-small.png"
                    srcset="images/logo-small2x.png 2x" alt="لوگوی کوچک">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
    <!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="">
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">پیش نمایش مورد استفاده</h6>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.home') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-bag"></em>
                            </span>
                            <span class="nk-menu-text">خانه</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">چیدمان ها</h6>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.menu.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                            <span class="nk-menu-text">منو ها</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.banner.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2"></em></span>
                            <span class="nk-menu-text">بنر ها(تبلیغات)</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./index-invest.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">داشبورد سرمایه گذاری</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./index-crypto.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                            <span class="nk-menu-text">داشبورد ارز دیجیتال</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./index-analytics.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                            <span class="nk-menu-text">داشبورد تجزیه و تحلیل</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">اپلیکیشن ها</h6>
                    </li>
                    <!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">پروژه ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./project-card.html" class="nk-menu-link"><span class="nk-menu-text">کارت های
                                        پروژه</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./project-list.html" class="nk-menu-link"><span class="nk-menu-text">لیست پروژه
                                        ها</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">مدیریت کاربران</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">لیست
                                        کاربران - عادی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">لیست
                                        کاربران - فشرده</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./user-details-regular.html" class="nk-menu-link"><span
                                        class="nk-menu-text">مشخصات کاربر - عادی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./user-profile-regular.html" class="nk-menu-link"><span
                                        class="nk-menu-text">پروفایل کاربر - عادی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./user-card.html" class="nk-menu-link"><span class="nk-menu-text">تماس با
                                        کاربر - کارت</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                            <span class="nk-menu-text">مشتریان</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./customer-list.html" class="nk-menu-link"><span class="nk-menu-text">لیست
                                        مشتریان</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./customer-details.html" class="nk-menu-link"><span
                                        class="nk-menu-text">مشخصات مشتری</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">احراز هویت مشتریان</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./kyc-list-regular.html" class="nk-menu-link"><span
                                        class="nk-menu-text">لیست احراز هویت مشتریان - عادی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./kyc-details-regular.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جزئیات احراز هویت مشتری - عادی</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">تراکنش ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./transaction-basic.html" class="nk-menu-link"><span
                                        class="nk-menu-text">لیست تراکنش ها - پایه</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./transaction-crypto.html" class="nk-menu-link"><span
                                        class="nk-menu-text">لیست تراکنش ها - ارز دیجیتال</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                            <span class="nk-menu-text">اپلیکیشن ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">پیام
                                        ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">صندوق
                                        ورودی / ایمیل</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./apps-file-manager.html" class="nk-menu-link"><span
                                        class="nk-menu-text">مدیریت فایل ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">گفتگوها /
                                        پیام رسان</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./apps-calendar.html" class="nk-menu-link"><span
                                        class="nk-menu-text">تقویم</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">تابلوی
                                        کانبان</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">فاکتورها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">لیست
                                        فاکتورها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./invoice-details.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جزئیات فاکتور</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                            <span class="nk-menu-text">محصولات</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./product-list.html" class="nk-menu-link"><span class="nk-menu-text">لیست
                                        محصولات</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./product-card.html" class="nk-menu-link"><span class="nk-menu-text">کارت
                                        های محصول</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./product-details.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جزئیات محصول</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./pricing-table.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span>
                            <span class="nk-menu-text">جداول قیمت گذاری</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./gallery.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>
                            <span class="nk-menu-text">گالری تصاویر</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">صفحه های متفرقه</h6>
                    </li>
                    <!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                            <span class="nk-menu-text">صفحه های احراز هویت</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">ورود</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">ثبت نام / عضویت</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">فراموشی رمز عبور</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">موفقیت آمیز /
                                        تایید</span></a>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">نسخه
                                        کلاسیک - نسخه 2</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-login-v2.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">ورود</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-register-v2.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">ثبت نام /
                                                عضویت</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-reset-v2.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">فراموشی رمز
                                                عبور</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-success-v2.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">موفقیت آمیز /
                                                تایید</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">نسخه
                                        بدون اسلایدر - نسخه 3</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-login-v3.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">ورود</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-register-v3.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">ثبت نام /
                                                عضویت</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-reset-v3.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">فراموشی رمز
                                                عبور</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./pages/auths/auth-success-v3.html" class="nk-menu-link"
                                            target="_blank"><span class="nk-menu-text">موفقیت آمیز /
                                                تایید</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">صفحه های خطا</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">404 کلاسیک</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">504 کلاسیک</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">404 مدرن</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span
                                        class="nk-menu-text">504 مدرن</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">سایر صفحه ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./_blank.html" class="nk-menu-link"><span class="nk-menu-text">خالی
                                        / راه اندازی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">سوالات
                                        متداول / راهنمایی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/terms-policy.html" class="nk-menu-link"><span
                                        class="nk-menu-text">شرایط و ضوابط / سیاست</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/regular-v1.html" class="nk-menu-link"><span
                                        class="nk-menu-text">صفحه عادی - نسخه 1</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./pages/regular-v2.html" class="nk-menu-link"><span
                                        class="nk-menu-text">صفحه عادی - نسخه 2</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">کامپوننت ها</h6>
                    </li>
                    <!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                            <span class="nk-menu-text">عناصر رابط کاربری</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/elements/alerts.html" class="nk-menu-link"><span
                                        class="nk-menu-text">هشدارها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/accordions.html" class="nk-menu-link"><span
                                        class="nk-menu-text">آکاردئون ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/avatar.html" class="nk-menu-link"><span
                                        class="nk-menu-text">آواتار</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/badges.html" class="nk-menu-link"><span
                                        class="nk-menu-text">نشان ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/buttons.html" class="nk-menu-link"><span
                                        class="nk-menu-text">دکمه ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/buttons-group.html" class="nk-menu-link"><span
                                        class="nk-menu-text">گروه های
                                        دکمه</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/breadcrumb.html" class="nk-menu-link"><span
                                        class="nk-menu-text">بردکرامب ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/cards.html" class="nk-menu-link"><span
                                        class="nk-menu-text">کارت ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/carousel.html" class="nk-menu-link"><span
                                        class="nk-menu-text">کاروسل ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/list-dropdown.html" class="nk-menu-link"><span
                                        class="nk-menu-text">لیست های
                                        کشویی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/modals.html" class="nk-menu-link"><span
                                        class="nk-menu-text">مودال ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/pagination.html" class="nk-menu-link"><span
                                        class="nk-menu-text">صفحه بندی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/popover.html" class="nk-menu-link"><span
                                        class="nk-menu-text">پاپ اورها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/progress.html" class="nk-menu-link"><span
                                        class="nk-menu-text">پیشرفت</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/preloader.html" class="nk-menu-link"><span
                                        class="nk-menu-text">پیش بارگذارنده</span><span
                                        class="nk-menu-badge">جدید</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/placeholders.html" class="nk-menu-link"><span
                                        class="nk-menu-text">نگهدارنده
                                        مکان</span><span class="nk-menu-badge">جدید</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/spinner.html" class="nk-menu-link"><span
                                        class="nk-menu-text">اسپینرها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/tabs.html" class="nk-menu-link"><span
                                        class="nk-menu-text">زبانه ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/toast.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Toast ها</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/tooltip.html" class="nk-menu-link"><span
                                        class="nk-menu-text">راهنمای ابزار</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/elements/typography.html" class="nk-menu-link"><span
                                        class="nk-menu-text">تایپوگرافی</span></a>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-text">ابزارها</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-border.html" class="nk-menu-link"><span
                                                class="nk-menu-text">خط
                                                حاشیه</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-colors.html" class="nk-menu-link"><span
                                                class="nk-menu-text">رنگ
                                                ها</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-display.html" class="nk-menu-link"><span
                                                class="nk-menu-text">نمایش</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-embeded.html" class="nk-menu-link"><span
                                                class="nk-menu-text">جاسازی</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-flex.html" class="nk-menu-link"><span
                                                class="nk-menu-text">فلکس</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-text.html" class="nk-menu-link"><span
                                                class="nk-menu-text">متن</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-sizing.html" class="nk-menu-link"><span
                                                class="nk-menu-text">سایزبندی</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-spacing.html" class="nk-menu-link"><span
                                                class="nk-menu-text">فاصله
                                                گذاری</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/elements/util-others.html" class="nk-menu-link"><span
                                                class="nk-menu-text">سایر</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-dot-box"></em></span>
                            <span class="nk-menu-text">آیکون های ساخته شده</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/misc/svg-icons.html" class="nk-menu-link">
                                    <span class="nk-menu-text">آیکون های SVG - انحصاری</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/misc/nioicon.html" class="nk-menu-link">
                                    <span class="nk-menu-text">Nioicon - دست ساز</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./components/misc/icons.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                            <span class="nk-menu-text">کتابخانه های آیکون</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                            <span class="nk-menu-text">جداول</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/tables/table-basic.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جداول پایه</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/tables/table-special.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جداول
                                        انحصاری</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/tables/table-datatable.html" class="nk-menu-link"><span
                                        class="nk-menu-text">جدول داده
                                        ها</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                            <span class="nk-menu-text">فرم ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/forms/form-elements.html" class="nk-menu-link"><span
                                        class="nk-menu-text">عناصر فرم</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/checkbox-radio.html" class="nk-menu-link"><span
                                        class="nk-menu-text">چک باکس و
                                        رادیو</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/advanced-controls.html" class="nk-menu-link"><span
                                        class="nk-menu-text">کنترل های
                                        پیشرفته</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/input-group.html" class="nk-menu-link"><span
                                        class="nk-menu-text">گروه های ورودی</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/form-upload.html" class="nk-menu-link"><span
                                        class="nk-menu-text">فرم آپلود</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/datetime-picker.html" class="nk-menu-link"><span
                                        class="nk-menu-text">انتخابگر تاریخ و
                                        زمان</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/number-spinner.html" class="nk-menu-link"><span
                                        class="nk-menu-text">اسپینر عدد</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/nouislider.html" class="nk-menu-link"><span
                                        class="nk-menu-text">noUiSlider</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/form-layouts.html" class="nk-menu-link"><span
                                        class="nk-menu-text">طرح بندی های فرم</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/forms/form-validation.html" class="nk-menu-link"><span
                                        class="nk-menu-text">اعتبارسنجی
                                        فرم</span></a>
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">چند
                                        مرحله ای</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/form-wizard.html" class="nk-menu-link"><span
                                                class="nk-menu-text">دموی
                                                پایه</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/wizard/create-project.html"
                                            class="nk-menu-link"><span class="nk-menu-text">ایجاد
                                                پروژه</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/wizard/create-profile.html"
                                            class="nk-menu-link"><span class="nk-menu-text">ایجاد
                                                پروفایل</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/wizard/two-factor-auth.html"
                                            class="nk-menu-link"><span class="nk-menu-text">احراز هویت دو
                                                مرحله ای</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a target="_blank" href="./components/forms/wizard/survey-v1.html"
                                            class="nk-menu-link"><span class="nk-menu-text">نظرسنجی</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a target="_blank" href="./components/forms/wizard/survey-v2.html"
                                            class="nk-menu-link"><span class="nk-menu-text">نظرسنجی نسخه
                                                2</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                        class="nk-menu-text">ویرایشگر توانمند</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/form-summernote.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Summernote</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/form-quill.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Quill</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="./components/forms/form-tinymce.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Tinymce</span></a>
                                    </li>
                                </ul>
                                <!-- .nk-menu-sub -->
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-pie"></em></span>
                            <span class="nk-menu-text">نمودارها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/charts/chartjs.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Chart JS</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="./components/charts/knob.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Knob JS</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-puzzle"></em></span>
                            <span class="nk-menu-text">ابزارک ها</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/widgets/cards.html" class="nk-menu-link"><span
                                        class="nk-menu-text">ابزارک های کارت</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/widgets/charts.html" class="nk-menu-link"><span
                                        class="nk-menu-text">ابزارک های نمودار</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/widgets/ratings.html" class="nk-menu-link"><span
                                        class="nk-menu-text">ابزارک های امتیازدهی</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                            <span class="nk-menu-text">متفرقه</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="./components/misc/slick-sliders.html" class="nk-menu-link"><span
                                        class="nk-menu-text">اسلایدر اسلیک</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/toastr.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Toastr</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/sweet-alert.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Sweet Alert</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/js-tree.html" class="nk-menu-link"><span
                                        class="nk-menu-text">jsTree</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/dual-listbox.html" class="nk-menu-link"><span
                                        class="nk-menu-text">لیست باکس دوتایی</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/dragula.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Dragula</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="./components/misc/map.html" class="nk-menu-link"><span
                                        class="nk-menu-text">نقشه گوگل</span></a>
                            </li>
                            <!-- .nk-menu-item -->
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="./email-templates.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                            <span class="nk-menu-text">قالب ایمیل</span>
                        </a>
                    </li>
                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
    <!-- .nk-sidebar-element -->
</div>
