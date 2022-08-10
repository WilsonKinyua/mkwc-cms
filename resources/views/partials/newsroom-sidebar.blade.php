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
                <form action="#">
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button class="btn-subscribe" type="submit">Sign Up Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
