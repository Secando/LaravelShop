<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
        return [
            'english_name' => 'required',
            'rus_name' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'page_count' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'image_path' => 'required',
        ];
    }
}
