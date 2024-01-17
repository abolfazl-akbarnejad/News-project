@extends('admin.layout.master')
@section('style')
    <title>ویرایش پست </title>
    <link rel="stylesheet" href="{{ asset('admin_assets/jalalidatepicker/persian-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/select2/css/select2.min.css') }}">

    <style>
        .optimized-title {
            position: relative;
        }

        /* for title mini */
        .hover-text {
            position: absolute;
            bottom: 69px;
            right: 113px;
            display: none;
            background-color: #ffffff;
            padding: 5px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* for atl image */
        .hover-text2 {
            position: absolute;
            bottom: 69px;
            right: 113px;
            display: none;
            background-color: #ffffff;
            padding: 5px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body ">
                <nav class="mb-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">پنل مدیریت</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.content.post.index') }}">پست ها</a></li>
                        <li class="breadcrumb-item active">ساخت پست جدید</li>
                    </ul>
                </nav>
                <div class="nk-block-head nk-block-head-sm">

                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">پست ها</h3>
                        </div>
                        {{-- @foreach ($errors->all() as $error)
                            {{ dd($error) }}

                            <div class="erorrs text-danger bg-danger m-5">
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach --}}
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
                            {{-- {{ dd($errors)->all()}} --}}
                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>
                {{-- {{dd($errors->all)}} --}}


                <div class="form create">
                    <form action="{{ route('admin.content.post.store') }}" method="POST" enctype="multipart/form-data"
                        id="form">
                        @csrf


                        <div class="row">
                            <div class="form-group col-6">
                                <label class="form-label" for="title_post"> تایتل پست</label>
                                <div class="form-control-wrap">
                                    <input type="text" name="title" class="form-control" id="title_post"
                                        placeholder=" مثال:ادعا ترکیه به بمب گزاری در شهر بزرس سوریه"
                                        value="{{ old('title') }}">
                                </div>
                                @error('title')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group col-6">
                                <label class="form-label" for="title_post_mini"> تایتل بهینه شده</label>
                                <em class="icon ni ni-info info-title-mini"></em>

                                <div class="form-control-wrap optimized-title">
                                    <input type="text" name="title_mini" class="form-control" id="title_post_mini"
                                        placeholder="مثال: ادعا ترکیه به بمب گزاری" value="{{ old('title_mini') }}">
                                    <span class="hover-text">این متن باید به صورت بهینه انتخاب شوند و در سئو سایت بسیار
                                        تاثیر دارد</span>
                                </div>
                                @error('title_mini')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group col-6">
                                <label class="form-label" for="image_post">تصویر عنوان پست</label>
                                <div class="form-control-wrap">
                                    <input type="file" class="form-control" name="image"
                                        accept=".jpg, .png, .jpeg, .gif " id="image_post" placeholder="سلامت"
                                        value="{{ old('image') }}">
                                </div>
                                @error('image')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group col-6">
                                <label class="form-label" for="alt_post_image"> alt عکس</label>
                                <em class="icon ni ni-info info-alt-image"></em>

                                <div class="form-control-wrap optimized-title">
                                    <input type="text" name="alt_image" class="form-control" id="alt_post_image"
                                        placeholder="مثال: عکسی از یک آهو" value="{{ old('alt_image') }}">
                                    <span class="hover-text2">این بخش باید متن هم موضوع عکسی که وارد کردید باشد(در سئو سایت
                                        بسیار موثر است)
                                    </span>
                                </div>
                                @error('alt_image')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="form-label" form="published_at_view">زمان نمایش بر روی سایت</label>
                                <div class="form-control-wrap">
                                    <input type="text" id="published_at" style="display:none " name="published_at"
                                        class="form-control pull-right hidden" value="{{ old('published_at') }}">
                                    <input type="text" id="published_at_view" class="form-control pull-right "
                                        value="{{ old('published_at') }}">
                                </div>
                                @error('published_at')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>





                            <div class="form-group col-6">
                                <label class="form-label" for="post_status"> وضعیت</label>
                                <div class="form-control-wrap">

                                    <select name="status" id="post_status">
                                        <option value="0" @if (old('status') == 0) selected @endif>غیر فعال
                                        </option>
                                        <option value="1" @if (old('status') == 1) selected @endif>فعال
                                        </option>
                                    </select>
                                </div>
                                @error('status')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group col-6">
                                <label class="form-label" for="commentable_status"> امکان درج کامنت در پست</label>
                                <div class="form-control-wrap">

                                    <select name="commentable" id="commentable_status">
                                        <option value="0" @if (old('commentable') == 0) selected @endif>غیر فعال
                                        </option>
                                        <option value="1" @if (old('commentable') == 1) selected @endif>فعال
                                        </option>
                                    </select>
                                </div>
                                @error('commentable')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                            <section class="col-12 col-6 ">
                                <div class="form-group">
                                    <label for="tags">تگ ها</label>
                                    <input type="hidden" class="form-control form-control-sm" name="tags"
                                        id="tags" value="{{ old('tags') }}">
                                    <select class="select2 form-control form-control-sm" id="select_tags" multiple>

                                    </select>
                                </div>
                                @error('tags')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </section>


                            <div class="form-group col-6 mt-4">
                                <label class="form-label" for="category_option_post"> انتخاب دسته بندی</label>
                                <div class="form-control-wrap">
                                    @if ($categories->count() != 0)
                                        <select name="category_id" id="category_option_post"
                                            onclick="fetch_categories()">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if (old('category_id') == 0) selected @endif
                                                    class="category_option">{{ $category->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    @else
                                        <span class="text-danger"> ابتدا باید یک دسته بندی <a
                                                href="{{ route('admin.content.category.create') }}"
                                                target="_blank">بسازید</a></span>
                                    @endif

                                </div>
                                @error('category_id')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>




                            <div class="form-group ">
                                <label class="form-label" for="summary_post"> خلاصه محتوا</label>

                                <div class="form-control-wrap optimized-title">

                                    <textarea name="summary" id="summary_post">{{ old('summary') }}</textarea>

                                </div>
                                @error('summary')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group ">
                                <label class="form-label" for="body_post"> متن کامل محتوا</label>

                                <div class="form-control-wrap optimized-title">

                                    <textarea name="body" id="body_post">{{ old('body') }}</textarea>

                                </div>
                                @error('body')
                                    <div class="show error text-danger m-2">
                                        <span>
                                            {{ $message }}
                                        </span>
                                    </div>
                                @enderror
                            </div>


                        </div>
                </div>


                <button class="btn btn-success m-3 ">ثبت</button>

                </form>
            </div>
        @endsection
        @section('script')
            <script src="{{ asset('admin_assets/ckeditor/ckeditor.js') }}"></script>
            <script src="{{ asset('admin_assets/select2/js/select2.min.js') }}"></script>
            <script src="{{ asset('admin_assets/jalalidatepicker/persian-date.min.js') }}"></script>
            <script src="{{ asset('admin_assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>


            <script>
                function fetch_categories() {

                    var url = "{{ route('admin.content.post.fetch_categories') }}";
                    // $('#category_option_post').empty();
                    $('#category_option_post').empty(); // حذف تمام گزینه‌های فعلی

                    $.ajax({
                        type: "GET",
                        url: url,
                        dataType: "json",
                        success: function(response) {
                            var len = response['data'].length;
                            var data = response['data'];

                            if (len != null) {
                                var optionsHTML = ""; // استفاده از متغیر برای ذخیره HTML گزینه‌ها

                                for (let i = 0; i < len; i++) {
                                    console.log(data[i]['name']);
                                    var str_value = "<option value='" + data[i]['id'] + "'" +
                                        "@if (old('category_id') == 0) selected @endif class='category_option'>" +
                                        data[i]['name'] +
                                        "</option>";
                                    optionsHTML += str_value; // اضافه کردن هر گزینه به HTML متغیر

                                }

                                $('#category_option_post').append(optionsHTML); // اضافه کردن تمام گزینه‌ها به یکباره
                            }

                        }
                    });
                }
            </script>

            <script>
                $(document).ready(function() {
                    $('#published_at_view').persianDatepicker({
                        format: 'YYYY/MM/DD',
                        altField: '#published_at',
                        timePicker: {
                            enabled: true,
                            meridiem: {
                                enabled: true
                            }
                        }
                    });
                });
            </script>

            <script>
                CKEDITOR.replace('body_post');
                CKEDITOR.replace('summary_post');
            </script>

            <script>
                $(".info-title-mini").hover(
                    function() {
                        console.log('hi');
                        // هنگامی که هوور شروع می‌شود
                        $(".hover-text").show();
                    },
                    function() {
                        // هنگامی که هوور پایان می‌یابد
                        $(".hover-text").hide();
                    }
                );



                $(".info-alt-image").hover(
                    function() {
                        console.log('hi');
                        // هنگامی که هوور شروع می‌شود
                        $(".hover-text2").show();
                    },
                    function() {
                        // هنگامی که هوور پایان می‌یابد
                        $(".hover-text2").hide();
                    }
                );
            </script>
            <script>
                $(document).ready(function() {
                    var tags_input = $('#tags');
                    var select_tags = $('#select_tags');
                    var default_tags = tags_input.val();
                    var default_data = null;

                    if (tags_input.val() !== null && tags_input.val().length > 0) {
                        default_data = default_tags.split(',');
                    }

                    select_tags.select2({
                        placeholder: 'لطفا تگ های خود را وارد نمایید',
                        tags: true,
                        data: default_data
                    });
                    select_tags.children('option').attr('selected', true).trigger('change');


                    $('#form').submit(function(event) {
                        if (select_tags.val() !== null && select_tags.val().length > 0) {
                            var selectedSource = select_tags.val().join(',');
                            tags_input.val(selectedSource)
                        }
                    })
                })
            </script>
        @endsection
