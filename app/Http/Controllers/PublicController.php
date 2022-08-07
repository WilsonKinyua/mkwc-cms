<?php

namespace App\Http\Controllers;

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
}
