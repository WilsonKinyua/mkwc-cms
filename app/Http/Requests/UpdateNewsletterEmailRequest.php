<?php

namespace App\Http\Requests;

use App\Models\NewsletterEmail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewsletterEmailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('newsletter_email_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:newsletter_emails,email,' . request()->route('newsletter_email')->id,
            ],
        ];
    }
}
