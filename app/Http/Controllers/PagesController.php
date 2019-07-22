<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PagesController extends Controller
{
    //

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        $packages = Package::all();
        return view('pages.services',['packages'=>$packages]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
