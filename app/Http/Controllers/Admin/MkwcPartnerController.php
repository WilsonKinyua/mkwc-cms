<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMkwcPartnerRequest;
use App\Http\Requests\StoreMkwcPartnerRequest;
use App\Http\Requests\UpdateMkwcPartnerRequest;
use App\Models\MkwcPartner;
use App\Models\PartnerCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MkwcPartnerController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('mkwc_partner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mkwcPartners = MkwcPartner::with(['category', 'media'])->get();

        return view('admin.mkwcPartners.index', compact('mkwcPartners'));
    }

    public function create()
    {
        abort_if(Gate::denies('mkwc_partner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = PartnerCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.mkwcPartners.create', compact('categories'));
    }

    public function store(StoreMkwcPartnerRequest $request)
    {
        $mkwcPartner = MkwcPartner::create($request->all());

        if ($request->input('logo', false)) {
            $mkwcPartner->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $mkwcPartner->id]);
        }

        return redirect()->route('admin.mkwc-partners.index');
    }

    public function edit(MkwcPartner $mkwcPartner)
    {
        abort_if(Gate::denies('mkwc_partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = PartnerCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $mkwcPartner->load('category');

        return view('admin.mkwcPartners.edit', compact('categories', 'mkwcPartner'));
    }

    public function update(UpdateMkwcPartnerRequest $request, MkwcPartner $mkwcPartner)
    {
        $mkwcPartner->update($request->all());

        if ($request->input('logo', false)) {
            if (!$mkwcPartner->logo || $request->input('logo') !== $mkwcPartner->logo->file_name) {
                if ($mkwcPartner->logo) {
                    $mkwcPartner->logo->delete();
                }
                $mkwcPartner->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($mkwcPartner->logo) {
            $mkwcPartner->logo->delete();
        }

        return redirect()->route('admin.mkwc-partners.index');
    }

    public function show(MkwcPartner $mkwcPartner)
    {
        abort_if(Gate::denies('mkwc_partner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mkwcPartner->load('category');

        return view('admin.mkwcPartners.show', compact('mkwcPartner'));
    }

    public function destroy(MkwcPartner $mkwcPartner)
    {
        abort_if(Gate::denies('mkwc_partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mkwcPartner->delete();

        return back();
    }

    public function massDestroy(MassDestroyMkwcPartnerRequest $request)
    {
        MkwcPartner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('mkwc_partner_create') && Gate::denies('mkwc_partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MkwcPartner();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
