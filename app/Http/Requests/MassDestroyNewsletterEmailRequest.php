<?php

namespace App\Http\Requests;

use App\Models\NewsletterEmail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyNewsletterEmailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('newsletter_email_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:newsletter_emails,id',
        ];
    }
}
