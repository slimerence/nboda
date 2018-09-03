@extends(_get_frontend_layout_path('frontend'))

@section('title','End of Lease Clean | Vacate Clean Melbourne | Carpet Steam Clean')

@section('seoconfig')
    <meta name="keywords" content="end of lease clean | vacate clean melbourne | carpet steam clean">
    <meta name="description" content="NBD is a professional Cleaning expert provides thorough Melbourne Regular Cleaning services, such as end of lease clean, vacate clean and carpet steam clean service. For more detail about vacate clean service in Melbourne, please contact us: info@newboda.com.">
@endsection
@section('content')
<seciton id="airbnb-panel">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs w-100" id="airTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#housekeeping" aria-controls="housekeeping" aria-selected="true">HOUSEKEEPING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#line" aria-controls="line" aria-selected="false">LINEN SUPPLY</a>
                    </li>
                    <li class="nav-item nav-last">
                        <a class="nav-link" data-toggle="tab" href="#consumable" aria-controls="consumable" aria-selected="false">CONSUMABLE SUPPLY</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</seciton>
<section class="bg-white">
    <div class="tab-content" style="padding: 3em 0">
        <div role="tabpanel" class="tab-pane fade active show" id="housekeeping" aria-labelledby="housekeeping-tab">
            <div class="container" style="padding-bottom: 2em;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h3>WE KNOW BETTER THAN ANYONE ELSE</h3>
                        <p style="margin-bottom: 0.8em;">As one of the biggest Airbnb cleaning service provider in Melbourne, we are serving more than 500 Airbnb hosts in and around Melbourne, including many leading Airbnb management companies.</p>
                        <p>We know how important cleanliness is for an Airbnb house, therefore we have specially and strictly trained our cleaners in Airbnb housekeeping service in order to provide a premium service for all Airbnb hosts - <span>we're taking good care of your Airbnb properties! </span></p>
                    </div>
                    <div class="col-md-6 col-sm-12 px-md-1">
                        <h3 class="hbg">PRICE GUIDE FOR AIRBNB CLEANING </h3>
                        <ul class="pricelist" style="margin-top: 1em;">
                            <li>General Cleaning <div class="li-price">PRICE FROM <span>$60</span> </div></li>
                            <li>Deep Cleaning <div class="li-price">PRICE FROM <span>$90</span> </div></li>
                            <li>Carpet Steam Clean <div class="li-price">PRICE FROM <span>$70</span> </div></li>
                        </ul>
                        <p style="margin-top: 1.5em;">Call us on <span>0433 588 517</span> or book a free inspection today to get your customised package. </p>
                        <a href="{{ url('/getrates') }}" class="nbtn mt-1" >BOOK A FREE INSPECTION TODAY</a>
                    </div>
                </div>
            </div>
            <div class="bg-light w-100 tab-down">
                <div class="container">
                    <h2 class="hafter">WHAT WE <span>DO</span> FOR <span>AIRBNB</span> CLEANING</h2>
                    <div class="d-flex w-100 flex-wrap">
                        <div class="flex-home-item align-self-center">
                           <div class="row">
                               <div class="col-md-4 col-sm-12 align-self-center">
                                   <img src="{{ asset('images/newfrontend/bh1.jpg') }}" class="img-fluid w-100" alt="bh1">
                               </div>
                               <div class="col-md-4 col-sm-12 align-self-center">
                                   <ul>
                                       <li>Dusting all surfaces</li>
                                       <li>Vacuum floorboard/carpets</li>
                                       <li>Linen changeover</li>
                                       <li>Place towels</li>
                                       <li>Make-up beds</li>
                                       <li>Mop floors I tiles</li>
                                   </ul>
                               </div>
                               <div class="col-md-4 col-sm-12 align-self-center">
                                   <ul>
                                       <li>Empty rubbish bins</li>
                                       <li>General tidy up</li>
                                       <li>Wipe skirting boards / sills*</li>
                                       <li>Remove cobwebs*</li>
                                       <li>Vacuum sofa furnishing*</li>
                                       <li>Vacuum under beds*</li>
                                   </ul>
                               </div>
                           </div> 
                        </div>
                        <div class="flex-home-item align-self-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <img src="{{ asset('images/newfrontend/bh2.jpg') }}" class="img-fluid w-100" alt="bh1">
                                </div>
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <ul>
                                        <li>Mopping all surfaces</li>
                                        <li>Vacuum & mopping floor</li>
                                        <li>Clean sinks & taps</li>
                                        <li>Microwave deep clean</li>
                                        <li>Grease stains removal</li>
                                        <li>Unload dishes & utensils</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <ul>
                                        <li>Empty rubbish bins</li>
                                        <li>Clean bench top & cupboard</li>
                                        <li>Oven/grill deep clean*</li>
                                        <li>Remove cobwebs*</li>
                                        <li>Consumable restocking*</li>
                                        <li>Wall washing*</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex-home-item align-self-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <img src="{{ asset('images/newfrontend/bh3.jpg') }}" class="img-fluid w-100" alt="bh1">
                                </div>
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <ul>
                                        <li>Mopping all surfaces</li>
                                        <li>Vacuum & mopping floor</li>
                                        <li>Clean bath & shower</li>
                                        <li>Clean basin & taps</li>
                                        <li>Wipe mirrorss</li>
                                        <li>Y Replenish toiletries</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <ul>
                                        <li>Clean the interior of cupboard</li>
                                        <li>General tidy up/li>
                                        <li>Scrub wall tiles & joints in between*</li>
                                    </ul>
                                    <p style="margin-top: 2em;">Only available for deep cleaning services
                                        or on your demand.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div role="tabpanel" class="tab-pane fade" id="line" aria-labelledby="line-tab">
            2
        </div>
        <div role="tabpanel" class="tab-pane fade" id="consumable" aria-labelledby="consumable-tab">
            3
        </div>
    </div>
</section>

<section id="why" class="bg-white" style="padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 my-auto text-center">
                <img src="{{asset('images/newfrontend/ourpro.png')}}" alt="pro" style="max-width: 150px;" class="img-fluid">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                <div class="why-wrap">
                    <img src="{{asset('images/newfrontend/air1.png')}}" alt="why">
                    <h3 style="margin-top: 0.8em;">LAST MINUTE</h3>
                    <h4>BOOKING</h4>
                    <p>There are always something unexpected. We are able to attend and tidy your Airbnb house up in just 3 hours. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                <div class="why-wrap">
                    <img src="{{asset('images/newfrontend/air2.png')}}" alt="why">
                    <h3 style="margin-top: 0.8em;">CHEMICAL HAZARDS</h3>
                    <h4>FREE</h4>
                    <p>Safety is the first thing. All chemicals we use are environmental-friendly. Safe for kids and four-legged friends.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                <div class="why-wrap">
                    <img src="{{asset('images/newfrontend/air3.png')}}" alt="why">
                    <h3 style="margin-top: 0.8em;">PREMIUM SERVICE</h3>
                    <h4>GREAT PRICE</h4>
                    <p>On time every time, a professional and efficient service at a fair and reasonable price that leaves your site spotless.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="comments" class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-lg-6 my-auto col-md-12">
                <h3 class="color-normal" style="font-size: 24px; margin-bottom: 1em;">WE ARE JUST A CALL AWAY...</h3>
                <p style="font-size: 18px;line-height: 2em;">Our head office is located in Port Melbourne, yet we deliver services all around Melbourne. No matter where you live - Melbourne CBD, South Yarra, Toorak, Caulfield, Burwood, Box Hill, Clayton, Heidelberg, Doncaster, Glen Waverley, Brighton, Williamstown, Point Cook... <span>We are just a call away!</span></p>
                <div class="book-btn my-1" style="max-width: 300px;">
                    <a href="{{ url('/getrates') }}" class="nbtn mt-1" >BOOK A SERVICE NOW</a>
                </div>
                <div class="d-inline-block" style="margin-top: 2em">
                    <img class="img-fluid" src="{{asset('images/newfrontend/partner.png')}}" alt="partner">
                </div>
            </div>
            <div class="col-lg-4 reblock">
                <div class="comment-img">
                    <img src="{{asset('images/newfrontend/location.png')}}" alt="testimonial" class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>

@stop