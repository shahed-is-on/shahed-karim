<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'email'         => ['nullable','email','max:255'],
            'phone'         => ['nullable','string','max:50'],
            'text'          => ['nullable','string'],
            'blog_id'       => ['nullable','exists:blogs,id'],
            'name'          => ['required','string','max:255'],
            'profile_photo' => ['nullable','image','max:3072'], // 3MB
        ];
    }
}
