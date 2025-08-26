<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        $blogId = $this->route('blog')?->id ?? null;

        return [
            'name'          => ['required','string','max:255'],
            'slug'          => ['nullable','string','max:255', Rule::unique('blogs','slug')->ignore($blogId)],
            'title'         => ['required','string','max:255'],
            'short_des'     => ['nullable','string','max:500'],
            'des'           => ['nullable','string'],
            'writer_name'   => ['nullable','string','max:255'],
            'category_id'   => ['required','exists:categories,id'],

            'image_1'       => ['nullable','image','max:3072'],
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
