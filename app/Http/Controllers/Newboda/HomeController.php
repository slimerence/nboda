<?php

namespace App\Http\Controllers\Newboda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Pages;

class HomeController extends Controller
{
    public function aboutus(){
        return view('frontend.custom.newboda.pages.aboutus');
    }
    public function services(){
        return view('frontend.custom.newboda.pages.services');
    }
    public function hiring(){
        return view('frontend.custom.newboda.pages.hiring');
    }
    public function gallery(){
        return view('frontend.custom.newboda.pages.gallery');
    }
    public function getrates(){
        return view('frontend.custom.newboda.pages.getrates');
    }
    public function contactus(){
        return view('frontend.custom.newboda.pages.contactus');
    }

    public function view($link){
        //dd('fronted.custom.newboda.pages.'.$link);
        //dd(_get_frontend_theme_path('pages.'.$link));
        $this->dataForView['pageTitle'] = $link;

        return view(_get_frontend_theme_path('pages.'.$link),$this->dataForView);
    }

    public function cnhome(){
        $this->dataForView['pageTitle'] = 'home';

        return view(_get_frontend_theme_path('pages.zn_ch.home'),$this->dataForView);
    }

    public function cnview($link){
        $this->dataForView['pageTitle'] = $link;
        return view(_get_frontend_theme_path('pages.zn_ch.'.$link),$this->dataForView);
    }
}
