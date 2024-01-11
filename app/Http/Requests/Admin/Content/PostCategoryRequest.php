<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryRequest extends FormRequest
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
                'name' => 'required|string|min:5|max:150',
                'status' => 'required|numeric|in:1,0',
                'image' => 'required|image|mimes:png,jpg'
            ];
        } else {
            return [
                'name' => 'required|string|min:5|max:150',
                'status' => 'required|numeric|in:1,0',
                'image' => 'image|mimes:png,jpg'
            ];
        }
    }
}
