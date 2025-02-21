<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreNewsletterEmailRequest;
use App\Models\ContactUs;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\InTheMedium;
use App\Models\InTheNew;
use App\Models\MediaResource;
use App\Models\Newsletter;
use App\Models\NewsletterEmail;
use App\Models\Quote;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }
    public function aboutUs()
    {
        return view('public.about-us');
    }
    public function ourTrustees()
    {
        return view('public.our-trustees');
    }
    public function breedingRewilding()
    {
        return view('public.breeding-rewilding');
    }
    public function animalOrphanage()
    {
        return view('public.animal-orphanage');
    }
    public function conservationEducation()
    {
        return view('public.conservation-education');
    }
    public function gallery()
    {
        $galCategory = GalleryCategory::all();
        return view('public.gallery', compact('galCategory'));
    }

    public function galleryCategory($slug)
    {
        $galleryCategory = GalleryCategory::where('slug', $slug)->first();
        $gallery = Gallery::where('category_id', $galleryCategory->id)->first();
        return view('public.gallery-category', compact('gallery', 'galleryCategory'));
    }

    public function newsroom()
    {
        $inTheMedia = InTheMedium::orderBy('created_at', 'desc')->paginate(8);
        return view('public.newsroom', compact('inTheMedia'));
    }

    public function PressRelease()
    {
        $inTheNews = InTheNew::with(['media'])->orderBy('in_order', 'asc')->get();
        return view('public.press-release', compact('inTheNews'));
    }

    public function PressReleaseDetails($slug)
    {
        if (InTheNew::where('slug', $slug)->exists()) {
            $inTheNew = InTheNew::with(['media'])->where('slug', $slug)->first();
            return view('public.press-release-details', compact('inTheNew'));
        } else {
            return redirect()->back();
        }
    }

    public function Quotes()
    {
        $quotes = Quote::all();
        return view('public.quotes', compact('quotes'));
    }

    public function videos()
    {
        return view('public.videos');
    }

    public function newsletter()
    {
        $newsletter = Newsletter::orderBy("in_order", "desc")->get();
        return view('public.newsletter', compact('newsletter'));
    }

    public function showNewsletter($title)
    {
        $newsletter = Newsletter::where('title', str_replace('-', ' ', $title))->first();
        abort_if(!$newsletter, 404);

        $text = Pdf::getText($newsletter->newsletter_image->getUrl());

        return view('public.show-newsletter', compact('text'));
    }

    public function newsletterSignUp(StoreNewsletterEmailRequest $request)
    {
        NewsletterEmail::create($request->all());
        return redirect()->back()->with('success', 'Email subscription received successfully');
    }

    public function donate()
    {
        $countries = Country::all();
        return view('public.donate', compact('countries'));
    }

    public function donors()
    {
        return view('public.donors');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function contactCreate(StoreContactUsRequest $request)
    {
        ContactUs::create($request->all());
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
