<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestvalidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => ['required','string','max:255'],
            'body' => ['required','string']
        ];
    }

    public function messages()
    {
        return [
        "slug.required" => "لطفا عنوان را وارد کنید.",
            "slug.string" => "عنوان باید به صورت رشته ای وارد شود.",
            "slug.max" => "عنوان نهایتا 255 کارکتر می تواند باشد.",
            "body.required" => "وارد کردن متن الزامی است.",
            "body.string" => "متن باید به صورت رشته ای وارد شود.",
    ];
    }
}
