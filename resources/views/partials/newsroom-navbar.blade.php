<div class="row newsroom-category mt-5">
    <div class="col-md-2">
        <a href="{{ route('newsroom') }}" class="{{ request()->is('newsroom') ? 'active' : '' }}">
            In the Media
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('press-release') }}" class="{{ request()->is('newsroom/press-release') ? 'active' : '' }}">
            MKWC Press Release
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('quotes') }}" class="{{ request()->is('newsroom/quotes') ? 'active' : '' }}">
            Quotes
        </a>
    </div>
    <div class="col-md-4">
        <form>
            <div class="row g-0">
                <div class="col-md-9">
                    <input type="text" placeholder="Search">
                </div>
                <div class="col-md-3">
                    <button class="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
