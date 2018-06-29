@extends(_get_frontend_layout_path('frontend'))

@section('title','End of Lease Clean | Vacate Clean Melbourne | Carpet Steam Clean')

@section('seoconfig')
    <meta name="keywords" content="end of lease clean | vacate clean melbourne | carpet steam clean">
    <meta name="description" content="NBD is a professional Cleaning expert provides thorough Melbourne Regular Cleaning services, such as end of lease clean, vacate clean and carpet steam clean service. For more detail about vacate clean service in Melbourne, please contact us: info@newboda.com.">
@endsection
@section('content')

    <div class="infoconbox infoserbox">
        <div class="abrightpos">
            <img src="{{asset('images/newfrontend/bg14.png')}}">
        </div>
        <div class="overhiddenbox">
            <div class="bgleft">
                <img src="{{asset('images/newfrontend/bg15.png')}}"/>
            </div>
            <div class="bgleftwhite"></div>
            <div class="mainarticle airbnb">
                <h2>Our Services</h2>
            </div>
        </div>
    </div>


    <div class="serlistbox">
        <div class="block">
            <div class="wrap clearfix">
                <h2 style="text-align: center; margin-bottom: 1em; font-size: 2.5em; color: #0a0a0a; ">HouseKeeping</h2>
                <ul class="clearfix">
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser11.png')}}"/>
                        </div>
                        <div class="article">
                            <h1>Professional cleaning</h1>
                            <p>Strictly trained team, 5-star hotel standard</p>
                        </div>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser05.png')}}"/>
                        </div>
                        <div class="article">
                            <h1>Linens changeover/ essentials restocking</h1>
                            <p>Professionally made and placed</p>
                        </div>
                    </li>
                    <li>
                        <div class="topimg">
                            <img src="{{asset('images/newfrontend/ser13.png')}}"/>
                        </div>
                        <div class="article">
                            <h1>Spare teams capable for peak demand</h1>
                            <p>Able to handle last minute booking/ back to backs</p>
                        </div>
                    </li>
                </ul>
                <div class="btnbox">
                    <a href="/getrates">GET RATES</a>
                </div>
                <!-- 手机版新增 向下箭头 点击展现下面内容 -->
                <div class="mobdownmore">
                    <i class="fa fa-angle-down"></i>
                </div>
                <!-- end -->
            </div>
        </div>

        <div class="moboprate">
            <div class="block">
                <div class="wrap clearfix">

                    <ul class="clearfix">
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/ser15.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>Linens/Consumables Supply</h1>
                                <h2>Hotel grade linens supplied and laundered</h2>
                                <p>We will help you to save your time from housework. Hotel grade consumable supplied including all toiletries and kitchen.</p>
                            </div>
                        </li>
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/bg22.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>24/7 Shared front desk</h1>
                                <h2>Centrally located shop opens 24/7</h2>
                                <p>Operates like a real hotel front desk.
                                    Not only handle the keys, but also check guests's ID and collect deposit etc.</p>
                            </div>
                        </li>
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/mt.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>Maintenance</h1>
                                <h2>General and emergency maintenance</h2>
                                <p>Own employed professional handyman, always standby</p>

                            </div>
                        </li>
                    </ul>
                    <div class="btnbox">
                        <a href="/getrates">GET RATES</a>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="wrap clearfix">
                    <h2 style="text-align: center; margin-bottom: 1em; font-size: 2.5em; color: #0a0a0a; ">Prelisting Services</h2>
                    <ul class="clearfix">
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/ser17.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>Furnishing</h1>
                                <p>Different packages to choose from</p>
                            </div>
                        </li>
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/ser14.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>Initial cleaning and setup</h1>
                                <p>Deep cleaned and carpet cleaned when needed. Beds made, bathrooms and kitchen set up ready for photography and bookings.
                                    </p>

                            </div>
                        </li>
                        <li>
                            <div class="topimg">
                                <img src="{{asset('images/newfrontend/ser20.png')}}"/>
                            </div>
                            <div class="article">
                                <h1>Professional photograph</h1>
                                <p>Professional photographer, top quality photos</p>
                            </div>
                        </li>
                    </ul>
                    <div class="btnbox">
                        <a href="/getrates">GET RATES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--手机版新增 get rates-->
    <div class="mobgetrates moboprate">
        <div class="mobinnergetrates">
            <a href="/getrates">GET RATES</a>
        </div>
    </div>
    <!-- end -->


@stop