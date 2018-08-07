@extends(_get_frontend_layout_path('frontend'))
@section('title','Commercial Cleaning Services Melbourne | House Cleaning Melbourne ')

@section('seoconfig')
    <meta name="keywords" content="Melbourne Regular Cleaning | house cleaning services | commercial cleaning">
    <meta name="description" content="NBD is a professional Commercial Cleaning expert provides thorough Melbourne Regular Cleaning services for both Commercial Cleaning and House Cleaning Services intended to keep your office and house clean and in tip top condition."/>
@endsection

@section('content')
    <!-- index -->



    <section id="why" class="bg-white" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 my-auto text-center">
                    <img src="{{asset('images/newfrontend/why.png')}}" alt="why" style="max-width: 150px;" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/w1.png')}}" alt="why">
                        <h3>50000+</h3>
                        <h4>SERVED CUSTOMERS</h4>
                        <p>We have served more than 50,000 customers in the past 8 years within the Melbourne metropolitan area.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/w2.png')}}" alt="why">
                        <h3>60+</h3>
                        <h4>CLEANING EXPERTS</h4>
                        <p>All our clenaing experts are holding a valid National Police Check and were strictly and thoroughly trained.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/w3.png')}}" alt="why">
                        <h3>100%</h3>
                        <h4>BOND RECOVERY</h4>
                        <p>We cooperate with many leading real estate agency and thus we offer you a 100% bond recovery guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="comments" class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-2 col-lg-6 my-auto col-md-12">
                    <ul class="no-list-style">
                        <li>
                            <h4>Jimmy CARSON</h4>
                            <p>"I searched on Google and find NBD Cleaning. It was not listed on the top of the page, but I made the right choice. All marks on the wall were washed off, the bathroom, even the gap between tiles were thoroughly cleaned. And thanks for that, I had my bond fully refunded."</p>
                        </li>
                        <li>
                            <h4>Rachael LIM</h4>
                            <p>"I find NBD Cleaning because I want a reliable cleaner to clean my Airbnb partment. My Airbnb located in Box Hill, the cleaners came on time and finished the job quickly yet perfectly. Everything is organised and I’ll definitely recommend NBD Cleaning to all Airbnb hosts."</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 reblock">
                    <div class="comment-img">
                        <img src="{{asset('images/newfrontend/bg09.png')}}" alt="testimonial" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop