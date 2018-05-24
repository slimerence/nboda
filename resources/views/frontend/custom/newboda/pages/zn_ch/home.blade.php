@extends(_get_frontend_layout_path('cnfrontend'))

@section('content')
    <!-- index -->



    <div class="indexaboutus clearfix">
        <div class="row leftarticle">
            <div class="bgarimg"></div>
            <div class="cssTable">
                <div class="cssTd">
                    <article>
                        <h1>关于我们</h1>
                        <div class="block">
                            <p> 新博达清洁公司，我们拥有专业的清洁团队，团队里每个人都拥有丰富的清洁经验，我们的团队长期服务于墨尔本市区的几家中介和银行。我们的清洁服务包括退房清洁、办公室清洁，家庭清洁、蒸气地毯清洁、 地板抛光等。 </p>
                        </div>
                        <a href="/zh-cn/contactus" class="viewmore">
                            <i class="fa fa-angle-down"></i>
                            <p>查看更多</p>
                        </a>
                    </article>
                </div>
            </div>
        </div>
        <div class="row rightbtnbox">
            <div class="cssTable">
                <div class="cssTd">
                    <a href="/zh-cn/contactus" class="">
                        <div class="box">
                            <i class="fa fa-phone"></i>联系我们
                        </div>
                    </a>
                    <a href="/getrates" class="">
                        <div class="box">
                            <i><img src="{{asset('images/newfrontend/iconbook.png')}}" pagespeed_url_hash="340201434" onload=""></i>立即预定
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
                <h1>我们的服务</h1>
                <p>新博达清洁致力于提供全墨尔本最快最优质的清洁服务</p>
            </div>
            <div class="serlistbox">
                <ul class="clearfix">
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser01.png')}}" pagespeed_url_hash="1611111099" onload="">
                        </div>
                        <p>退租清洁服务</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser02.png')}}" pagespeed_url_hash="1905611020" onload="">
                        </div>
                        <p>高压水枪清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser03.png')}}" pagespeed_url_hash="2200110941" onload="">
                        </div>
                        <p>一次性清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser04.png')}}" pagespeed_url_hash="2494610862" onload="">
                        </div>
                        <p>日常清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser05.png')}}" pagespeed_url_hash="2789110783" onload="">
                        </div>
                        <p>蒸汽地毯清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser06.png')}}" pagespeed_url_hash="3083610704" onload="">
                        </div>
                        <p>专业特别清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser07.png')}}" pagespeed_url_hash="3378110625" onload="">
                        </div>
                        <p>除虫服务清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser08.png')}}" pagespeed_url_hash="3672610546" onload="">
                        </div>
                        <p>装修后清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser09.png')}}" pagespeed_url_hash="3967110467" onload="">
                        </div>
                        <p>办公室清洁</p>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser10.png')}}" pagespeed_url_hash="1241395165" onload="">
                        </div>
                        <p>紧急情况清洁</p>
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
                        <a href="/zh-cn/contactus">联系我们</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indexwhy">
        <div class="wrap">
            <div class="choosebox">
                <div class="contopTit">
                    <h1>为什么选择我们?</h1>
                    <p>新博达清洁致力于提供全墨尔本最快最优质的清洁服务</p>
                </div>
                <div class="whylistbox">
                    <ul class="clearfix">
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>含有公共责任保险</p>
                        </li>
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>在职员工全部经过无犯罪记录审核</p>
                        </li>
                        <li>
                            <div class="topimg">
                                <i></i>
                            </div>
                            <p>积极收集客户反馈，不断提升服务质量</p>
                        </li>
                    </ul>
                </div>
                <!--手机版新增 get rates-->
                <div class="mobgetrates">
                    <a href="/zh-cn/getrates">获得报价</a>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>

    <div class="testimonials clearfix">
        <div class="row leftmain">
            <div class="topslogan">客户评价</div>
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