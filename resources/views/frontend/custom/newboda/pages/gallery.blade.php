@extends(_get_frontend_layout_path('frontend'))

@section('content')

    <div class="conlistbox gallerylistbox">
        <div class="topbg">
            <div class="bgwhite"></div>
        </div>
        <div class="wrap clearfix">
            <div class="slogantit">
                <h1>OUR GALLERY</h1>
            </div>
            <!--手机版 新增页码  -->
            <!-- end -->
            <div class="garowlist">
                <div class="row">
                    <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085540308813.jpg')}}">
                        <img src="{{asset('images/newfrontend/20160713085540308813.jpg')}}" pagespeed_url_hash="2359723038" onload="">
                        <div class="mask">
                            <i>
                                <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                            </i>
                        </div>
                    </a>
                </div>
                <div class="row clearfix">
                    <div class="left">
                        <div class="block">
                            <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085540105102.jpg')}}">
                                <img src="{{asset('images/newfrontend/20160713085540105102.jpg')}}" pagespeed_url_hash="2161360004" onload="">
                                <div class="mask">
                                    <i>
                                        <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                    </i>
                                </div>
                            </a>
                        </div>
                        <div class="block">
                            <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085540228443.jpg')}}">
                                <img src="{{asset('images/newfrontend/20160713085540228443.jpg')}}" pagespeed_url_hash="179626226" onload="">
                                <div class="mask">
                                    <i>
                                        <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                    </i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="right">
                        <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085540184582.jpg')}}">
                            <img src="{{asset('images/newfrontend/20160713085540184582.jpg')}}" pagespeed_url_hash="2162488445" onload="">
                            <div class="mask">
                                <i>
                                    <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                </i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085923102711.jpg')}}">
                        <img src="{{asset('images/newfrontend/20160713085923102711.jpg')}}" pagespeed_url_hash="977749604" onload="">
                        <div class="mask">
                            <i>
                                <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                            </i>
                        </div>
                    </a>
                </div>
                <div class="row clearfix">
                    <div class="left">
                        <div class="block">
                            <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085923125971.jpg')}}">
                                <img src="{{asset('images/newfrontend/20160713085923125971.jpg')}}" pagespeed_url_hash="555355691" onload="">
                                <div class="mask">
                                    <i>
                                        <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                    </i>
                                </div>
                            </a>
                        </div>
                        <div class="block">
                            <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085923100432.jpg')}}">
                                <img src="{{asset('images/newfrontend/20160713085923100432.jpg')}}" pagespeed_url_hash="905592826" onload="">
                                <div class="mask">
                                    <i>
                                        <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                    </i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="right">
                        <a class="fancybox" rel="group" href="{{asset('images/newfrontend/20160713085923111851.jpg')}}">
                            <img src="{{asset('images/newfrontend/20160713085923111851.jpg')}}" pagespeed_url_hash="2125895071" onload="">
                            <div class="mask">
                                <i>
                                    <img src="{{asset('images/newfrontend/search.png')}}" pagespeed_url_hash="3712560592" onload="">
                                </i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection