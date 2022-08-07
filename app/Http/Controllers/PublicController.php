<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
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
        return view('public.gallery-category', compact('gallery','galleryCategory'));
    }
}
