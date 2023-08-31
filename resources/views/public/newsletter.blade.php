@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row mt-5">
            @forelse ($newsletter as $newsletter)
                <div class="col-md-3">
                    <div class="card newletter_card mb-3">
                        @if ($newsletter->document_file)
                            <a href="{{ route('newsletter.show', str_replace(' ', '-', $newsletter->title)) }}" target="_blank">
                                @if ($newsletter->newsletter_image)
                                    <img src="{{ $newsletter->newsletter_image->getUrl() }}"
                                        alt="{{ $newsletter->title ?? '' }}">
                                @endif
                                <div class="newsletter_name">
                                    {{ $newsletter->title ?? '' }}
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-md-12 text-center">
                    <h4 class="text-danger p-4">No available Newsletter!</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection
