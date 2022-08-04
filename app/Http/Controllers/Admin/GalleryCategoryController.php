<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGalleryCategoryRequest;
use App\Http\Requests\StoreGalleryCategoryRequest;
use App\Http\Requests\UpdateGalleryCategoryRequest;
use App\Models\GalleryCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class GalleryCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('gallery_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $galleryCategories = GalleryCategory::with(['media'])->get();

        return view('admin.galleryCategories.index', compact('galleryCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('gallery_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.galleryCategories.create');
    }

    public function store(StoreGalleryCategoryRequest $request)
    {
        $galleryCategory = GalleryCategory::create($request->all());

        if ($request->input('image', false)) {
            $galleryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $galleryCategory->id]);
        }

        return redirect()->route('admin.gallery-categories.index');
    }

    public function edit(GalleryCategory $galleryCategory)
    {
        abort_if(Gate::denies('gallery_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.galleryCategories.edit', compact('galleryCategory'));
    }

    public function update(UpdateGalleryCategoryRequest $request, GalleryCategory $galleryCategory)
    {
        $galleryCategory->update($request->all());

        if ($request->input('image', false)) {
            if (!$galleryCategory->image || $request->input('image') !== $galleryCategory->image->file_name) {
                if ($galleryCategory->image) {
                    $galleryCategory->image->delete();
                }
                $galleryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($galleryCategory->image) {
            $galleryCategory->image->delete();
        }

        return redirect()->route('admin.gallery-categories.index');
    }

    public function show(GalleryCategory $galleryCategory)
    {
        abort_if(Gate::denies('gallery_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.galleryCategories.show', compact('galleryCategory'));
    }

    public function destroy(GalleryCategory $galleryCategory)
    {
        abort_if(Gate::denies('gallery_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $galleryCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyGalleryCategoryRequest $request)
    {
        GalleryCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('gallery_category_create') && Gate::denies('gallery_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new GalleryCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
