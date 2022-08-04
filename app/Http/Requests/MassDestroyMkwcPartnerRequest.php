<?php

namespace App\Http\Requests;

use App\Models\MkwcPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMkwcPartnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mkwc_partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:mkwc_partners,id',
        ];
    }
}
