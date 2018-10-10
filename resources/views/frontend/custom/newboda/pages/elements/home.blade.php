<section id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                @include(_get_frontend_layout_path('frontend.navbox'))
            </div>
            <div class="col-lg-8">
            <h1>Cleaning Services </h1>
                <h2>Professional House Cleaners</h2>
            <img src="{{asset('images/newfrontend/slo.png')}}" alt="slo" class="img-fluid" style="margin-bottom: 40px;">
                <div class="row">
                    <div class="col">
                        <div class="main-swrap">
                            <img src="{{asset('images/newfrontend/ser01.png')}}" alt="ser01">
                            <h3>END OF LEASE CLEAN</h3>
                            <h4>FROM <span class="color-normal">$150</span></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="main-swrap">
                            <img src="{{asset('images/newfrontend/ser03.png')}}" alt="ser01">
                            <h3>AIRBNB CLEAN</h3>
                            <h4>FROM <span class="color-normal">$60</span></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="main-swrap">
                            <img src="{{asset('images/newfrontend/ser09.png')}}" alt="ser01">
                            <h3>GENERAL CLEAN</h3>
                            <h4>FROM <span class="color-normal">$40</span>/h</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="main-swrap">
                            <img src="{{asset('images/newfrontend/ser10.png')}}" alt="ser01">
                            <h3>COMMERCIAL CLEAN</h3>
                            <h4>FREE QUOTE ON SITE</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="main-swrap">
                            <img src="{{asset('images/newfrontend/ser05.png')}}" alt="ser01">
                            <h3>CARPET STEAM CLEAN</h3>
                            <h4>FROM <span class="color-normal">$70</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="btn-wrap">
                            <a href="{{ url('/services') }}" class="bg-btn">MORE SERVICES</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="btn-wrap">
                            <a href="{{ url('/getrates') }}" class="bg-btn">GET A FREE QUOTE</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-inline-block">
                            <img class="img-fluid" src="{{asset('images/newfrontend/partner.png')}}" alt="partner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2">
                <div class="abs-img">
                    <img src="{{asset('images/newfrontend/bg02.png')}}" alt="slo">
                </div>
            </div>
        </div>
    </div>
</section>