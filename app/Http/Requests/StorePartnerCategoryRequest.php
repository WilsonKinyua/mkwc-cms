<?php

namespace App\Http\Requests;

use App\Models\PartnerCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePartnerCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partner_category_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:partner_categories',
            ],
        ];
    }
}
