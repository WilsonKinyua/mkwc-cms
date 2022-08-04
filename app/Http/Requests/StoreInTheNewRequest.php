<?php

namespace App\Http\Requests;

use App\Models\InTheNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInTheNewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('in_the_new_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:in_the_news',
            ],
            'date_location' => [
                'string',
                'required',
            ],
            'photo' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
