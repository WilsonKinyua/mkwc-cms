<?php

namespace App\Http\Requests;

use App\Models\MediaResource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMediaResourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('media_resource_edit');
    }

    public function rules()
    {
        return [
            'file' => [
                'required',
            ],
        ];
    }
}
