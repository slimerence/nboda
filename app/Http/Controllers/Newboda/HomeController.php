<?php

namespace App\Http\Controllers\Newboda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Pages;
use App\Models\Page;

class HomeController extends Controller
{
    public function view($link){
        //dd('fronted.custom.newboda.pages.'.$link);
        //dd(_get_frontend_theme_path('pages.'.$link));
        if($link =='services')
        {
            $this->dataForView['service']='';
            $this->dataForView['htag']='End of Lease Cleaning';
            $this->dataForView['metaKeywords']='End of Lease Cleaning | Bond Cleaning';
            $this->dataForView['metaDescription']='NBD is engaged in the end of lease cleaning, house cleaning, short stay cleaning professional company. We provide bond cleaning for most suburbs in Melbourne.';
        }
        $posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->paginate(20);
        $this->dataForView['posts'] = $posts;
        $this->dataForView['pageTitle'] = $link;
        return view(_get_frontend_theme_path('pages.'.$link),$this->dataForView);
    }

    public function article($uri){
        //$posts = Page::where('type',Page::$TYPE_BLOG)->orderBy('id','asc')->paginate(20);
        $posts = Page::where('uri','/'.$uri)->first();
        $this->dataForView['posts'] = $posts;
        $this->dataForView['pageTitle'] = app()->getLocale()=='cn' ? $posts->title_cn : $posts->title;
        $this->dataForView['metaKeywords'] = $posts->seo_keyword;
        $this->dataForView['metaDescription'] = $posts->seo_description;
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

    public function service_view($uri){
        $this->dataForView['pageTitle'] = 'services';
        switch($uri){
            case 'carpet-steam-cleaning':
                $this->dataForView['htag']='Carpet Steam Cleaning';
                $this->dataForView['service'] = 'carpet';
                $this->dataForView['metaKeywords']='Carpet Steam Cleaning | Cleaning Professional';
                $this->dataForView['metaDescription']='NBD is engaged in the carpet steam cleaning, house cleaning, short stay cleaning professional company. Our professional carpet steam cleaner can help our customers’ house back to tip-top condition. ';
                break;
            case 'home-cleaning':
                $this->dataForView['htag']='Home Cleaning';
                $this->dataForView['service'] = 'homeclean';
                $this->dataForView['metaKeywords']='Home Cleaning | Oven Cleaning | Housekeeping Services';
                $this->dataForView['metaDescription']='NBD provides professional housekeeping services for most suburbs in Melbourne. Our home cleaning services including oven cleaning, regular cleaning and one-off cleaning. Call us today: 0395632204.';
                break;
            case 'commercial-cleaning':
                $this->dataForView['htag']='Commercial Cleaning';
                $this->dataForView['service'] = 'commercial';
                $this->dataForView['metaKeywords']='Commercial Cleaning | Office Cleaning Melbourne';
                $this->dataForView['metaDescription']='NBD has many trained house cleaners and provides professional commercial cleaning service in Melbourne. Which including the office cleaning, window cleaning and others cleaning works. Call us on 0395632204.';
                break;
            case 'high-pressure-cleaning':
                $this->dataForView['htag']='High Pressure Cleaning';
                $this->dataForView['service'] = 'highpressure';
                $this->dataForView['metaKeywords']='High Pressure Cleaning | House Cleaner';
                $this->dataForView['metaDescription']='As professional house cleaner, NBD provides high pressure cleaning services to help the customers wash off most stubborn strains in just several minutes. The high pressure water cleaner is safe and helpful. Call us on 0395632204.';
                break;
            case 'rubbish-removal':
                $this->dataForView['htag']='Rubbish Removal';
                $this->dataForView['service'] = 'rubbish';
                $this->dataForView['metaKeywords']='Rubbish Removal | Housekeeping Melbourne';
                $this->dataForView['metaDescription']='NBD offers a wide range services of housekeeping Melbourne. We also provide professional and cheap rubbish removals services on all kinds of waste in Melbourne. We take care of everything, call us on 0395632204.';
                break;
        }
        return view(_get_frontend_theme_path('pages.services'),$this->dataForView);
    }
}
