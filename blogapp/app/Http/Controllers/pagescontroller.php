<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index()
    {
        return view("pages.index");
//        return $this->header()."<h1>Home</h1>".$this->footer();
    }

    public function about()
    {
        return view("pages.about");
    }

    public function contact()
    {
        return view("pages.contact");
    }

    public function services()
    {
        return view("pages.services");
    }


    public function headerfooter()
    {
        return view('hf_pages.headerfooter');
    }
}
