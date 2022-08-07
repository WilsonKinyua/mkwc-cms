<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyInTheMediumRequest;
use App\Http\Requests\StoreInTheMediumRequest;
use App\Http\Requests\UpdateInTheMediumRequest;
use App\Models\InTheMedium;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class InTheMediaController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('in_the_medium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inTheMedia = InTheMedium::with(['media'])->get();

        return view('admin.inTheMedia.index', compact('inTheMedia'));
    }

    public function create()
    {
        abort_if(Gate::denies('in_the_medium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheMedia.create');
    }

    public function store(StoreInTheMediumRequest $request)
    {
        $request->request->add([
            'slug' => Str::slug($request->title, '-')
        ]);
        $inTheMedium = InTheMedium::create($request->all());

        if ($request->input('image', false)) {
            $inTheMedium->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $inTheMedium->id]);
        }

        return redirect()->route('admin.in-the-media.index');
    }

    public function edit(InTheMedium $inTheMedium)
    {
        abort_if(Gate::denies('in_the_medium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheMedia.edit', compact('inTheMedium'));
    }

    public function update(UpdateInTheMediumRequest $request, InTheMedium $inTheMedium)
    {
        $request->request->add([
            'slug' => Str::slug($request->title, '-')
        ]);
        $inTheMedium->update($request->all());

        if ($request->input('image', false)) {
            if (!$inTheMedium->image || $request->input('image') !== $inTheMedium->image->file_name) {
                if ($inTheMedium->image) {
                    $inTheMedium->image->delete();
                }
                $inTheMedium->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($inTheMedium->image) {
            $inTheMedium->image->delete();
        }

        return redirect()->route('admin.in-the-media.index');
    }

    public function show(InTheMedium $inTheMedium)
    {
        abort_if(Gate::denies('in_the_medium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheMedia.show', compact('inTheMedium'));
    }

    public function destroy(InTheMedium $inTheMedium)
    {
        abort_if(Gate::denies('in_the_medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inTheMedium->delete();

        return back();
    }

    public function massDestroy(MassDestroyInTheMediumRequest $request)
    {
        InTheMedium::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('in_the_medium_create') && Gate::denies('in_the_medium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new InTheMedium();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
