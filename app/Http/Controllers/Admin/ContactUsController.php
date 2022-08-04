<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContactUsRequest;
use App\Models\ContactUs;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContactUsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('contact_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactuses = ContactUs::all();

        return view('admin.contactuses.index', compact('contactuses'));
    }

    public function destroy(ContactUs $contactUs)
    {
        abort_if(Gate::denies('contact_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactUs->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactUsRequest $request)
    {
        ContactUs::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('contact_us_create') && Gate::denies('contact_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ContactUs();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
