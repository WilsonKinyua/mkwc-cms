<?php

namespace App\Http\Requests;

use App\Models\MkwcPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMkwcPartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mkwc_partner_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'logo' => [
                'required',
            ],
        ];
    }
}
