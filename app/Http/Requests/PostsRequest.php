<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'content' => ['required'],
            'author' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
