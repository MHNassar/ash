<?php

namespace App\Http\Controllers;

use App\About;
use App\Clients;
use App\Services;
use App\Team;
use App\Work;
use App\WorkCategories;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function getHome()
    {
        $about = About::first();
        $servises = Services::limit('4')->get();
        $work = Work::all();
        $clintes = Clients::all();
        return view('site.index')->with('about', $about)
            ->with('work', $work)
            ->with('clintes', $clintes)
            ->with('servises', $servises);
    }

    public function getAbout()
    {
        $about = About::first();
        $team = Team::all();
        $clintes = Clients::all();
        return view('site.about-us')->with('about', $about)
            ->with('clintes', $clintes)
            ->with('team', $team);

    }

    public function getServices()
    {
        $servises = Services::all();
        return view('site.services')->with('servises', $servises);
    }

    public function getWorks()
    {
        $workCategories = WorkCategories::all();
        $work = Work::all();
        return view('site.works')->with('work', $work)
            ->with('workCategories', $workCategories);
    }

    public function getContact()
    {
        return view('site.contact');
    }
}
