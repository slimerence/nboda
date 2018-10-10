<div id="pageloader">
    <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
</div>
<section id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                @include(_get_frontend_layout_path('frontend.navbox'))
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="airbnb-top">
                    <h1 style="text-transform: uppercase;margin-bottom: 0.6em;">Airbnb Cleaning</h1>
                    <h2>Short Stay Cleaning</h2>
                    <p>We know how pleasant guests would be if they found their accommodation neat and tidy, and thus we offer a hassle-free short stay cleaning service for all Airbnb hosts in and around Melbourne.</p>
                    <p>Our airbnb cleaning services are delivered by specially trained cleaning experts, providing a fast and efficient general cleaning every time after your guests checked out or on your demand - even with very short notice.</p>
                    <p>We also provide a wide range of hotel-grade linen and consumable, as well as professional maintenance service.</p>
                    <p>Our Airbnb cleaners are required to report conditions and any visible damages in your Airbnb house, so you can claim for damages at the first time.</p>
                    <p><a href="{{ url('/airbnb') }}">Learn more about how we work</a></p>
                </div>
                <form class="airbnb-form" style="margin-top: 2em;" action="{{ url('/quick-form') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <select name="quick[service]" required>
                                <option value="" selected disabled="disabled">SELECT A SERVICE</option>
                                <option value="End of Lease Clean">End of Lease Clean</option>
                                <option value="High Pressure Water Clean">High Pressure Water Clean</option>
                                <option value="One-off Clean">One-off Clean</option>
                                <option value="Regular Clean">Regular Clean</option>
                                <option value="Carpet Steam Clean">Carpet Steam Clean</option>
                                <option value="Pre and Post Pest Control Clean">Pre and Post Pest Control Clean</option>
                                <option value="After Build Clean">After Build Clean</option>
                                <option value="Office Clean">Office Clean</option>
                                <option value="Urgent Clean">Urgent Clean</option>
                                <option value="Special Clean">Special Clean</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="quick[bedroom]" required>
                                <option value="" disabled selected>BEDROOMS</option>
                                <option value="Studio">Studio</option>
                                <option value="1 Bedroom">1</option>
                                <option value="2 Bedrooms">2</option>
                                <option value="3 Bedrooms">3</option>
                                <option value="4 Bedrooms">4</option>
                                <option value="4+ Bedrooms">4+</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="quick[bathroom]" required>
                                <option value="" disabled selected>BATHROOMS</option>
                                <option value="1 Bathroom">1</option>
                                <option value="2 Bathroom">2</option>
                                <option value="3 Bathroom">3</option>
                                <option value="3+ Bathroom">3+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <select name="quick[property]" required>
                                <option value="" disabled selected>PROPERTY TYPES</option>
                                <option value="House">House</option>
                                <option value="Apartment & Unit">Apartment & Unit</option>
                                <option value="Townhouse">Townhouse</option>
                                <option value="Villa">Villa</option>
                                <option value="Acreage">Acreage</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="POSTCODE" name="quick[postcode]" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="CONTACT INFO (EMAIL/PHONE)" name="quick[contact]" required>
                        </div>
                        <div class="col-md-3">
                            <button id="airbtnConfirmbtn" type="submit">QUICK QUOTE</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offset-lg-2">
                <div class="abs-img">
                    <img src="{{asset('images/newfrontend/bg02.png')}}" alt="slo">
                </div>
            </div>
        </div>
    </div>
</section>