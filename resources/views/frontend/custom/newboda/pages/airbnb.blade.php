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
                                        <li>Replenish toiletries</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-12 align-self-center">
                                    <ul>
                                        <li>Clean the interior of cupboard</li>
                                        <li>General tidy up</li>
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
            <div class="container" style="padding-bottom: 2em;">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h3>MAKE YOUR AIRBNB A FIVE-STAR HOTEL</h3>
                        <p style="margin-bottom: 0.8em;">A comfy bed is essential for a sound sleep. Our high- grade linen includes <span>bed sheet, donna cover, pillow case, bath towel, bath mat, face washer, tea towel</span>, covers the entire spectrum of guests' living demands. </p>
                        <p>All linen will be replaced whether it has been used or not, and all used linen will be packed and sent back to us - we promise a 'hassle-free' ser­vice all the time! </p>
                        <a href="{{ url('/getrates') }}" class="nbtn mt-1 px-1" style="max-width: 600px;" >LINEN SUPPLY FROM ONLY <strong>$14</strong> <span class="float-right" style="color: #fff;text-decoration: underline;">SEE MORE</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-12 align-self-center">
                        <img src="{{ asset('images/newfrontend/line1.jpg') }}" class="img-fluid w-100" alt="bh1">
                    </div>
                </div>
            </div>
            <div class="bg-light w-100 tab-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 align-self-center">
                            <img src="{{ asset('images/newfrontend/line2.jpg') }}" class="img-fluid w-100" alt="bh1">
                        </div>
                        <div class="col-md-7 col-sm-12 align-self-center">
                            <h3>WHY CHOOSE A QUALITY LINEN SUPPi ER? </h3>
                            <p>Some Airbnb hosts opt to keep the job and the manpower to themselves. It works sometimes, but for others - especially those who has multiple Airbnb properties - it often does not.</p>
                            <p>Supplying the linens by oneself means having to concern for many other issues in addition to Airbnb hosting. <span>What hap­pens if there is a stubborn stain on the sheet that cannot be washed off? </span>This situation can be worse if you don't have a new one on hand to replace. </p>
                        </div>
                        <div class="col-12 mt-1">
                            <p><span>Linen disinfection is another issue that all Airbnb hosts should take into account if they want to get a higher ranking.</span> A thorough disinfection of soiled linen is essential as some guests are super sensitive to unhygienic materials. </p>
                            <p>While most domestic washing machines and coin Laundromats can only provide washing and drying services, they are less likely to help with the disinfection. And <span>extra working, such as pressing and ironing may be required if you want your bedrooms look more tidy and artistic. </span></p>
                            <p>By hiring a qualify linen supplier like us, all you have to do is choose the suitable package of linen for your Airbnb houses, sign the contract, and define the specifications. The rest of jobs are on us - delivery, replacement, packing, laundry ... <span>We promise your Airbnb house is always tidy and clean with fresh and wrinkle-free linen.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="consumable" aria-labelledby="consumable-tab">
            <div class="container" style="padding-bottom: 2em;">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h3>SPOIL YOUR GUEST WITH QUALITY CONSUMABLES</h3>
                        <p style="margin-bottom: 0.8em;">Whether your Airbnb property is a villa or a cottage, a complete set of hotel quality consumable is always a bonus. From bathroom to kitchen, we supply a comprehensive range of quality consumables: <span>shower gel, shampoo, conditioner, body lotion, soap, laundry powder, toilet rolls, dishwashing liquid, tea, instant coffee, sugar, milk. </span></p>
                        <p>All consumables will be restocked during each cleaning if you' like us to be the supplier. </p>
                        <a href="{{ url('/getrates') }}" class="nbtn mt-1 px-1" style="max-width: 600px;" >CONSUMABLES SUPPLY FROM ONLY <strong>$9</strong> <span class="float-right d-none d-md-inline-block" style="color: #fff;text-decoration: underline;">SEE MORE</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-12 align-self-center">
                        <img src="{{ asset('images/newfrontend/con1.jpg') }}" class="img-fluid w-100" alt="bh1">
                    </div>
                </div>
            </div>
            <div class="bg-light w-100 tab-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 align-self-center reblock">
                            <img src="{{ asset('images/newfrontend/con2.jpg') }}" style="padding: 1.5em" class="img-fluid w-100" alt="bh1">
                        </div>
                        <div class="col-md-8 col-sm-12 align-self-center">
                            <h3>HYGIENIC, ECONOMICAL, ALSO ENVIRONMENTAL-FRIENDLY</h3>
                            <p>Shower gel in value pack maybe good for cost control, but it's never the best choice in the interests of hygiene. Guest expectations are getting higher when it comes to short-term accommodation. </p>
                            <p>A complete set of new toiletries is one of the key to win your guest's heart. From shampoo to laundry powder, our quality toiletries cover the entire spectrum of daily living needs. </p>
                            <p>And we're doing more to help you impress your guests. Tea, coffee, milk, sugar ... we prepare everything that your guest may need during their stay. All you need to do is just sign the contract and define the specifications if there is. The rest of jobs are on us. </p>
                            <p>No further notice or reminder is required as we will restock and replace all consumables during each cleaning after you sign the contract - we promise a 'hassle-free' service and we are endeavouring to keep our promise. </p>
                            <p>All consumables are made in Australia, with commercial quality and com­prehensive ranges. Feel free to ask for a detailed brochure and the price list of our quality consumables by sending your request to <span>help@newboda­clean.com.au</span> or call on <span>0433588517</span>. </p>
                        </div>
                    </div>
                </div>
            </div>
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
@include(_get_frontend_theme_path('general.call'))


@stop