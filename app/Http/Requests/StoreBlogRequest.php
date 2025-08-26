<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'name'          => ['required','string','max:255'],
            'slug'          => ['nullable','string','max:255','unique:blogs,slug'],
            'title'         => ['required','string','max:255'],
            'short_des'     => ['nullable','string','max:500'],
            'des'           => ['nullable','string'],
            'writer_name'   => ['nullable','string','max:255'],
            'category_id'   => ['required','exists:categories,id'],

            'image_1'       => ['nullable','image','max:3072'], // 3MB
            'image_2'       => ['nullable','image','max:3072'],
            'image_3'       => ['nullable','image','max:3072'],

            'keywords'      => ['nullable','string','max:255'],
            'meta_title'    => ['nullable','string','max:255'],
            'meta_des'      => ['nullable','string','max:500'],
            'image_alt_text'=> ['nullable','string','max:255'],

            'ai_help'       => ['nullable','string'],
        ];
    }
}
