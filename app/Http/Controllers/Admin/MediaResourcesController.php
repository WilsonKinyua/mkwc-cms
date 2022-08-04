<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMediaResourceRequest;
use App\Http\Requests\StoreMediaResourceRequest;
use App\Http\Requests\UpdateMediaResourceRequest;
use App\Models\MediaResource;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MediaResourcesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('media_resource_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaResources = MediaResource::with(['media'])->get();

        return view('admin.mediaResources.index', compact('mediaResources'));
    }

    public function create()
    {
        abort_if(Gate::denies('media_resource_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaResources.create');
    }

    public function store(StoreMediaResourceRequest $request)
    {
        $mediaResource = MediaResource::create($request->all());

        if ($request->input('file', false)) {
            $mediaResource->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $mediaResource->id]);
        }

        return redirect()->route('admin.media-resources.index');
    }

    public function edit(MediaResource $mediaResource)
    {
        abort_if(Gate::denies('media_resource_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaResources.edit', compact('mediaResource'));
    }

    public function update(UpdateMediaResourceRequest $request, MediaResource $mediaResource)
    {
        $mediaResource->update($request->all());

        if ($request->input('file', false)) {
            if (!$mediaResource->file || $request->input('file') !== $mediaResource->file->file_name) {
                if ($mediaResource->file) {
                    $mediaResource->file->delete();
                }
                $mediaResource->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($mediaResource->file) {
            $mediaResource->file->delete();
        }

        return redirect()->route('admin.media-resources.index');
    }

    public function show(MediaResource $mediaResource)
    {
        abort_if(Gate::denies('media_resource_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaResources.show', compact('mediaResource'));
    }

    public function destroy(MediaResource $mediaResource)
    {
        abort_if(Gate::denies('media_resource_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaResource->delete();

        return back();
    }

    public function massDestroy(MassDestroyMediaResourceRequest $request)
    {
        MediaResource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('media_resource_create') && Gate::denies('media_resource_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MediaResource();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
