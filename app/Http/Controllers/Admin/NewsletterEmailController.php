<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNewsletterEmailRequest;
use App\Models\NewsletterEmail;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsletterEmailController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('newsletter_email_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsletterEmails = NewsletterEmail::all();

        return view('admin.newsletterEmails.index', compact('newsletterEmails'));
    }

    public function destroy(NewsletterEmail $newsletterEmail)
    {
        abort_if(Gate::denies('newsletter_email_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsletterEmail->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsletterEmailRequest $request)
    {
        NewsletterEmail::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
