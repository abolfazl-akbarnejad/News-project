@extends('admin.layout.master')
@section('style')
    <title>ساخت منو جدید</title>
    <link rel="stylesheet" href="{{ asset('admin_assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">منو ها</a></li>
                        <li class="breadcrumb-item active">ساخت منو جدید</li>
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
                    <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="upload_file">فایل تبلیغ</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control" name="upload_file"
                                    accept=".jpg, .png, .jpeg, .gif , .mp4 , .mov , .flv" id="file_banner-01"
                                    placeholder="سلامت" value="{{ old('upload_file') }}">
                            </div>
                            @error('upload_file')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label class="form-label" for="url_banner"> ادرس صفحه شرکت تبلیغ شونده</label>
                            <div class="form-control-wrap">
                                <input type="text" name="url" class="form-control" id="url_banner"
                                    placeholder="http://google.com/" value="{{ old('url') }}">
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
                            <label class="form-label">تاریخ شروع نمایش</label>
                            <div class="form-control-wrap">
                                <input type="text" id="date_start" style="display: none" name="date_start"
                                    class="form-control pull-right hidden" value="{{ old('date_start') }}">
                                <input type="text" id="start_date_view" class="form-control pull-right "
                                    value="{{ old('date_start') }}">
                            </div>
                            @error('date_start')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label class="form-label">تاریخ پایان نمایش</label>
                            <div class="form-control-wrap">
                                <input type="text" id="date_end" style="display: none" name="date_end"
                                    class="form-control pull-right hidden" value="{{ old('date_end') }}">
                                <input type="text" id="end_date_view" class="form-control pull-right "
                                    value="{{ old('date_end') }}">
                            </div>
                            <div class="m-2">
                                <label for="end_date_status" onclick="change_status_endDate()">فعلا به صورت دائم نمایش داده
                                    شود</label>
                                <input type="checkbox" id="end_date_status" onclick="change_status_endDate()"
                                    name="status_end_date">
                            </div>
                            @error('date_end')
                                <div class="show error text-danger m-2">
                                    <span>
                                        {{ $message }}
                                    </span>
                                </div>
                            @enderror
                        </div>




                        <div class="form-group">
                            <label class="form-label" for="priority_id"> نمایش در صفحه</label>
                            <div class="form-control-wrap">

                                {{-- for show text erorr empty priority --}}
                                @php
                                    $priority_count_full = 0;
                                @endphp


                                @php
                                    $error = 0;
                                @endphp

                                <select name="priority_id" id="priority_id">
                                    @foreach ($priorities as $priority)
                                        @if ($priority->banner == null)
                                            <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                                        @else
                                            @php
                                                $priority_count_full++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </select>

                                @if ($priority_count_full == $priorities->count())
                                    <div class="empty_error text-danger m-4">
                                        <span>مکانی برای قرار دادن این بنر بر روی سایت موجود نیست</span>
                                    </div>
                                    {{-- if $error > 0 button submit disabled --}}
                                    @php
                                        $error++;
                                    @endphp
                                @endif

                                {{-- {{dd($priorities->count())}} --}}

                            </div>
                        </div>

                        @error('url')
                            <div class="show error text-danger m-2">
                                <span>
                                    {{ $message }}
                                </span>
                            </div>
                        @enderror
                </div>


                <button class="btn btn-success m-3  {{ $error > 0 ? 'disabled' : '' }}">ثبت</button>

                </form>
            </div>
        @endsection
        {{-- alerts --}}
        @section('script')
            @include('admin.alerts.defult_alert.suucess')


            <script src="{{ asset('admin_assets/jalalidatepicker/persian-date.min.js') }}"></script>
            <script src="{{ asset('admin_assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>


            <script>
                function change_status_endDate() {
                    var checked_off = $('#end_date_status');

                    if (!checked_off.attr('checked')) {
                        checked_off.attr('checked', 'checked');
                    } else {
                        checked_off.removeAttr('checked');
                        // checked_off.attr('checked', 'checked');

                    }

                    if (checked_off.attr('checked')) {
                        $('#end_date_view').val(' ');

                        $('#end_date_view').attr('disabled', 'disabled');


                    } else {
                        $('#end_date_view').removeAttr('disabled');
                    }
                    console.log(checked_off);
                }
                //for start date
                $(document).ready(function() {
                    $('#start_date_view').persianDatepicker({
                        format: 'YYYY/MM/DD',
                        altField: '#date_start',
                        timePicker: {
                            enabled: true,
                            meridiem: {
                                enabled: true
                            }
                        }
                    });
                });


                //for end date show

                $(document).ready(function() {
                    $('#end_date_view').persianDatepicker({
                        format: 'YYYY/MM/DD',
                        altField: '#date_end',
                        timePicker: {
                            enabled: true,
                            meridiem: {
                                enabled: true
                            }
                        }
                    });
                });
            </script>

            {{-- delete  --}}
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


            <script>
                $(window).ready(function() {
                    $('.dropdown-menu').removeClass('*');

                    $('.dropdown-menu').attr('class', 'dropdown-menu dropdown-menu-end');
                    $('.dropdown-menu').attr('style',
                        'dropdown-menu dropdown-menu-end');
                });
            </script>
        @endsection
