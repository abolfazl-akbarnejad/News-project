<?php

namespace App\Http\Requests\Admin\Layout;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
                'upload_file' => 'required|string|mimes:jpg,png , jpeg,gif,mp4,mov,flv',
                'url' => 'required|string|url',
                'date_start' => 'required',
                'date_end' => 'required',
                'priority_id' => 'required|numeric|exists:priorities,id',

            ];
        } else {
            return [
                'upload_file' => 'string|mimes:jpg,png , jpeg,gif,mp4,mov,flv',
                'url' => 'required|string|url',
                'date_start' => 'required',
                'date_end' => 'required',
                'priority_id' => 'required|numeric|exists:priories_banner,id',
            ];
        }
    }

    public function attributes()
    {
        return [
            'upload_file' => 'آپلود فایل',
            'url' => 'لینک',
            'date_start' => 'تاریخ شروع',
            'date_end' => 'تاریخ پایان ',
            'priority_id' => 'مکان قرارگیری',
        ];
    }
}
