<!DOCTYPE html>
<html lang="fa" class="js">

<head>
    {{-- head tag --}}
    @include('admin.layout.head_tag')
    @yield('style')

</head>

<body class="has-rtl nk-body ui-rounder has-sidebar" dir="rtl">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- sidebar @s -->
            @include('admin.layout.sidbar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap">
                <!-- main header @s -->
                @include('admin.layout.navbar')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">© تمام حقوق محفوظ است. فارسی و راستچین سازی شده توسط <a
                                    target="_blank" rel="nofollow"
                                    href="https://www.rtl-theme.com/author/farshid_tarnian">فرشید ترنیان</a></div>

                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->


    <!-- JavaScript -->
    @include('admin.layout.script')
    @yield('script')
    <!-- <script src="js/demo-settings.js"></script> -->

</body>

</html>
