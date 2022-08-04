<?php

namespace App\Http\Requests;

use App\Models\PartnerCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePartnerCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partner_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:partner_categories,name,' . request()->route('partner_category')->id,
            ],
        ];
    }
}
