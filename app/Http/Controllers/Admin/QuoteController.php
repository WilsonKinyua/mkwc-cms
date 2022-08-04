<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyQuoteRequest;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Quote;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class QuoteController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('quote_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quotes = Quote::with(['media'])->get();

        return view('admin.quotes.index', compact('quotes'));
    }

    public function create()
    {
        abort_if(Gate::denies('quote_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quotes.create');
    }

    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create($request->all());

        if ($request->input('image', false)) {
            $quote->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $quote->id]);
        }

        return redirect()->route('admin.quotes.index');
    }

    public function edit(Quote $quote)
    {
        abort_if(Gate::denies('quote_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quotes.edit', compact('quote'));
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());

        if ($request->input('image', false)) {
            if (!$quote->image || $request->input('image') !== $quote->image->file_name) {
                if ($quote->image) {
                    $quote->image->delete();
                }
                $quote->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($quote->image) {
            $quote->image->delete();
        }

        return redirect()->route('admin.quotes.index');
    }

    public function show(Quote $quote)
    {
        abort_if(Gate::denies('quote_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quotes.show', compact('quote'));
    }

    public function destroy(Quote $quote)
    {
        abort_if(Gate::denies('quote_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuoteRequest $request)
    {
        Quote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('quote_create') && Gate::denies('quote_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Quote();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
