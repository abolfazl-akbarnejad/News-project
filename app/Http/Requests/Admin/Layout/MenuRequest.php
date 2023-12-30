<?php

namespace App\Http\Requests\Admin\Layout;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
                'name' => 'required|string|min:2|max:180|unique:menus,name',
                'url' => 'required|string|min:2|max:180|url',
                'parent_id' => 'required',
            ];
        } else {
            return [
                'name' => 'required|string|min:2|max:180',
                'url' => 'required|string|min:2|max:180|url',
                'parent_id' => 'required',
            ];
        }
    }

    public function attributes()
    {
        return [
            'name' => 'نام منو',
            'url' => 'لینک منو',
            'parent_id' => 'زیر منو',
        ];
    }
}
