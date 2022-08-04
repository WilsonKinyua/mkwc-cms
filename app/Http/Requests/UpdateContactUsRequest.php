<?php

namespace App\Http\Requests;

use App\Models\ContactUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_us_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'subject' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'phone' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
