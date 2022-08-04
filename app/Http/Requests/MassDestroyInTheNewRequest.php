<?php

namespace App\Http\Requests;

use App\Models\InTheNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInTheNewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('in_the_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:in_the_news,id',
        ];
    }
}
