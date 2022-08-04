<?php

namespace App\Http\Requests;

use App\Models\InTheMedium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInTheMediumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('in_the_medium_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'media_house' => [
                'string',
                'nullable',
            ],
            'category' => [
                'string',
                'nullable',
            ],
            'media_url_link' => [
                'required',
            ],
            'date' => [
                'string',
                'nullable',
            ],
        ];
    }
}
