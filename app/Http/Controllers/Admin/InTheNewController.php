<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyInTheNewRequest;
use App\Http\Requests\StoreInTheNewRequest;
use App\Http\Requests\UpdateInTheNewRequest;
use App\Models\InTheNew;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class InTheNewController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('in_the_new_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inTheNews = InTheNew::with(['media'])->get();

        return view('admin.inTheNews.index', compact('inTheNews'));
    }

    public function create()
    {
        abort_if(Gate::denies('in_the_new_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheNews.create');
    }

    public function store(StoreInTheNewRequest $request)
    {
        $inTheNew = InTheNew::create($request->all());

        if ($request->input('photo', false)) {
            $inTheNew->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $inTheNew->id]);
        }

        return redirect()->route('admin.in-the-news.index');
    }

    public function edit(InTheNew $inTheNew)
    {
        abort_if(Gate::denies('in_the_new_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheNews.edit', compact('inTheNew'));
    }

    public function update(UpdateInTheNewRequest $request, InTheNew $inTheNew)
    {
        $inTheNew->update($request->all());

        if ($request->input('photo', false)) {
            if (!$inTheNew->photo || $request->input('photo') !== $inTheNew->photo->file_name) {
                if ($inTheNew->photo) {
                    $inTheNew->photo->delete();
                }
                $inTheNew->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($inTheNew->photo) {
            $inTheNew->photo->delete();
        }

        return redirect()->route('admin.in-the-news.index');
    }

    public function show(InTheNew $inTheNew)
    {
        abort_if(Gate::denies('in_the_new_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inTheNews.show', compact('inTheNew'));
    }

    public function destroy(InTheNew $inTheNew)
    {
        abort_if(Gate::denies('in_the_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inTheNew->delete();

        return back();
    }

    public function massDestroy(MassDestroyInTheNewRequest $request)
    {
        InTheNew::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('in_the_new_create') && Gate::denies('in_the_new_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new InTheNew();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
