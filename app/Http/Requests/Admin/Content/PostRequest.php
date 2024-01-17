<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        if ($this->isMethod('post')) {

            return [
                'title' => 'required|regex:/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی‌,،:\/\-\+;\s]*$/',
                // 'title_mini' => 'required|min:3|max:110|regex:/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی‌,،:\/\-\+;\s]*$/',
                'alt_image' => 'min:2|max:120',
                'image' => 'required|mimes:png,jpg,jpeg,gif',
                'published_at' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        $timeImput = substr($value, 0, 10);
                        if ($timeImput < time() - 1500) {
                            $fail("  تاریخ انتخابی نباید بیشتر از 20 دقیقه گذشته باشد");
                        }
                    },

                ],
                'status' => 'required|numeric|in:1,0',
                'commentable' => 'required|in:1,0',
                'tags' => 'required|min:2|max:300',
                'category_id' => 'required|numeric|exists:post_categories,id',
                'summary' => 'required|min:10',
                'body' => 'required|min:10'

            ];
        } else {
            return [
                'title' => 'required|regex:/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی‌,،:\/\-\+;\s]*$/',
                // 'title_mini' => 'required|min:3|max:110|regex:/^[a-zA-Z0-9آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی‌,،:\/\-\+;\s]*$/',
                'alt_image' => 'min:2|max:120',
                'image' => 'mimes:png,jpg,jpeg,gif',
                'published_at' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        $timeImput = substr($value, 0, 10);
                        if ($timeImput < time() - 1500) {
                            $fail("  تاریخ انتخابی نباید بیشتر از 20 دقیقه گذشته باشد");
                        }
                    },

                ],
                'status' => 'required|numeric|in:1,0',
                'commentable' => 'required|in:1,0',
                'tags' => 'required|min:2|max:300',
                'category_id' => 'required|numeric|exists:post_categories,id',
                'summary' => 'required|min:10',
                'body' => 'required|min:10'

            ];
        }
    }

    public function attributes()
    {
        return [


            'summary' => 'متن خلاصه',
            'body' => 'متن مطلب',
            'title' => 'عنوان',
            'title_post_mini' => 'عنوان کوتاه',
            'alt_image' => 'عنوان تصویر',
            'image' => 'تصویر',
            'published_at' => 'زمان انتشار',
            'status' => 'وضعیت',
            'commentable' => ' امکان درج کامنت',
            'category_id' => 'دسته بندی',
            'tags' => 'تگ ها'


        ];
    }
}
