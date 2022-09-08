<div class="col-md-4 newslist-right">
    <h2 class="text-fade">Media Resources</h2>
    <hr>
    @if (count(App\Models\MediaResource::with(['media'])->get()) > 0)
        @foreach (App\Models\MediaResource::with(['media'])->get() as $key => $mediaResource)
            <ul>
                <li>
                    @if ($mediaResource->file)
                        <a href="{{ $mediaResource->file->getUrl() }}" target="_blank">
                            <i class="fa fa-angle-right"></i>
                            {{ $mediaResource->name ?? '' }}
                            <i class="fas fa-download"></i>
                        </a>
                    @endif
                </li>
            </ul>
        @endforeach
    @else
        <ul>
            <li>
                <span class="text-danger text-capitalize">No media resources available!</span>
            </li>
        </ul>
    @endif
    <h2 class="text-fade">Media Inquiries</h2>
    <hr>
    <div class="media-enquiries">
        <h6>General Media Inquiries</h6>
        <a href="mailto:">media@mountkenyawildlifeconservancy.org</a>
        <p>John Doe</p>
        <p>Media Specialist <br><a href="mailto:">johndoe@mountkenyawildlifeconservancy.org</a>
        </p>
    </div>
    <div class="subscribe-form text-white">
        <div class="bg-fade">
            <div class="card">
                <h4>Sign up for our Newsletter</h4>
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->count() > 0)
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="alert alert-success" role="alert">{{ session('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('newsletter.sign-up') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name"
                            value="{{ old('first_name', '') }}" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                            value="{{ old('last_name', '') }}" required>
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" name="email" placeholder="Email Address"
                            value="{{ old('email', '') }}" required>
                    </div>
                    <button class="btn-subscribe" type="submit">Sign Up Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
