@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <!-- index -->



    <div class="indexaboutus clearfix">
        <div class="row leftarticle">
            <div class="bgarimg"></div>
            <div class="cssTable">
                <div class="cssTd">
                    <article>
                        <h1>ABOUT US</h1>
                        <div class="block">
                            <p> We are a professional cleaning company servicing the greater Melbourne area, which includes CBD, Docklands, Southbank and entire district of Melbourne. </p>
                            <p style="font-family:'HelveticaBold','Arial'">Our philosophy is “ Choose us, Choose to be looked after”.</p>
                        </div>
                        <a href="/contactus" class="viewmore">
                            <i class="fa fa-angle-down"></i>
                            <p>VIEW MORE</p>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="row rightbtnbox">
            <div class="cssTable">
                <div class="cssTd">
                    <a href="/contactus" class="">
                        <div class="box">
                            <i class="fa fa-phone"></i>CONTACT US
                        </div>
                    </a>
                    <a href="/getrates" class="">
                        <div class="box">
                            <i><img src="{{asset('images/newfrontend/iconbook.png')}}" pagespeed_url_hash="340201434" onload=""></i>BOOK NOW
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="righttriangle"> </div>
    </div>

    <div class="indexservice">
        <div class="wrap clearfix">
            <div class="contopTit">
                <h1>OUR SERVICES</h1>
                <p>We provide the safest and best cleaning service in Melbourne</p>
            </div>
            <div class="serlistbox">
                <ul class="clearfix">
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser01.png')}}" pagespeed_url_hash="1611111099" onload="">
                        </div>
                        <p>End of Lease Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser02.png')}}" pagespeed_url_hash="1905611020" onload="">
                        </div>
                        <p>High Pressure Water Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser03.png')}}" pagespeed_url_hash="2200110941" onload="">
                        </div>
                        <p>One-off Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser04.png')}}" pagespeed_url_hash="2494610862" onload="">
                        </div>
                        <p>Regular Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser05.png')}}" pagespeed_url_hash="2789110783" onload="">
                        </div>
                        <p>Carpet Steam Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser06.png')}}" pagespeed_url_hash="3083610704" onload="">
                        </div>
                        <p>Specialist Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser07.png')}}" pagespeed_url_hash="3378110625" onload="">
                        </div>
                        <p>Pre and Post Pest Control Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser08.png')}}" pagespeed_url_hash="3672610546" onload="">
                        </div>
                        <p>After Build Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser09.png')}}" pagespeed_url_hash="3967110467" onload="">
                        </div>
                        <p>Office Clean</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser10.png')}}" pagespeed_url_hash="1241395165" onload="">
                        </div>
                        <p>Urgent Clean</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="indexcontact clearfix">
        <div class="row leftimg">
            <img src="{{asset('images/newfrontend/bg08.jpg')}}" pagespeed_url_hash="4253747001" onload="">
        </div>
        <div class="row rightarticle">
            <div class="cssTable">
                <div class="cssTd">
                    <div class="logoimg">
                        <img src="{{asset('images/newfrontend/logo.png')}}" pagespeed_url_hash="469326011" onload=""/>
                    </div>
                    <div class="article">
                        <p>CHOOSE US,</br>CHOOSE TO BE LOOKED AFTER</p>
                    </div>
                    <div class="btncontact">
                        <a href="/contactus">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indexwhy">
        <div class="wrap">
            <div class="choosebox">
                <div class="contopTit">
                    <h1>WHY CHOOSE US?</h1>
                    <p>We provide the safest and best cleaning service in Melbourne</p>
                </div>
                <div class="whylistbox">
                    <ul class="clearfix">
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>All cleaners have public  </br> liability insurance </p>
                        </li>
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>All cleaners have clean </br> police record</p>
                        </li>
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>Customer reviews used </br> to continously improve quality</p>
                        </li>
                    </ul>
                </div>
                <!--手机版新增 get rates-->
                <div class="mobgetrates">
                    <a href="/getrates">GET RATES</a>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>

    <div class="testimonials clearfix">
        <div class="row leftmain">
            <div class="topslogan">TESTIMONIALS</div>
            <div class="block">
                <ul>

                    <li>
                        <p>&ldquo; I could not be more happier Jason was polite understanding fast working happy to explain what he did very affordable highly recommended. &rdquo;
                        </p>
                        <span>- Harry Bo</span>
                    </li>
                    <li>
                        <p>&ldquo; Thank you for your cleaning job, peter and his team came on Thursday Morning, and immediately set to work knowing what need to be done, after four hours the house was as brand new, the agent refund the full amount of bonds to me after inspecting the house. I would definitely recommend them and would get back to them if I have something else need to be done&rdquo;
                        </p>
                        <span>- John Meyers </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row rightimg">
            <img src="{{asset('images/newfrontend/bg09.png')}}" pagespeed_url_hash="253382330" onload="">
        </div>
    </div>

@endsection