<?php

namespace App\Http\Controllers\Newboda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Pages;
use App\Models\Page;

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
        $posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->paginate(20);
        $this->dataForView['posts'] = $posts;
        $this->dataForView['pageTitle'] = $link;
        return view(_get_frontend_theme_path('pages.'.$link),$this->dataForView);
    }

    public function article($uri){
        //$posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->paginate(20);
        $posts = Page::where('uri','/'.$uri)->first();
        $this->dataForView['posts'] = $posts;
        $this->dataForView['pageTitle'] = 'article';
        return view(_get_frontend_theme_path('pages.article'),$this->dataForView);
    }

    public function article_list(){
        $posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->paginate(20);
        $this->dataForView['posts'] = $posts;
        $this->dataForView['pageTitle'] = 'related-articles';
        return view(_get_frontend_theme_path('pages.related-articles'),$this->dataForView);
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
