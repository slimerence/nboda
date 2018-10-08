
<section class="color-bg text-center reblock" id="footer-color">
    <a href="{{$siteConfig->facebook }}" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    <a href="{{$siteConfig->instagram }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="{{$siteConfig->twitter }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="{{ url('/contactus') }}"><i class="fa fa-weixin" aria-hidden="true"></i></a>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-widget footer-contact">
                    <h3>CONTACT US</h3>
                    <ul class="no-list-style">
                        <li><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> {{ $siteConfig->contact_address }}</li>
                        <li><i class="fa fa-phone fa-fw" aria-hidden="true"></i> {{ $siteConfig->contact_phone }} </li>
                        <li><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i> {{ $siteConfig->contact_email }} </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-widget">
                    <h3>OUR SERVICES</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="no-list-style">
                                <li>End of Lease Cleaning</li>
                                <li>Aribnb Cleaning</li>
                                <li>Carpet Steam Cleaning</li>
                                <li>Home Cleaning</li>
                                <li>One-off Cleaning</li>
                                <li>Office Cleaning</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="no-list-style">
                                <li>Warehouse Cleaning</li>
                                <li>Factory Cleaning</li>
                                <li>Weeding</li>
                                <li>Gardening</li>
                                <li>Wall Patch</li>
                                <li>Wall Painting</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="no-list-style">
                                <li>Leak Fixing</li>
                                <li>Floor Polishing</li>
                                <li>Rubbish Removal</li>
                                <li>Toilet Unblock</li>
                                <li>Fence Repair</li>
                                <li>Maintenance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h3>SERVED AREA</h3>
                    <div class="row">
                        <div class="col-6">
                            <ul class="no-list-style">
                                <li>Melbourne CBD</li>
                                <li>Box Hill</li>
                                <li>Bundoora</li>
                                <li>Caulfield</li>
                                <li>Clayton</li>
                                <li>Doncaster</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="no-list-style">
                                <li>Glen Waverley</li>
                                <li>Heidelberg</li>
                                <li>Richmond</li>
                                <li>South Yarra</li>
                                <li>South Melbourne</li>
                                <li><a href="{{ url('/related-articles') }}"><strong>Blogs & News</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- mobile footer -->
<div class="mobfooter">
    <ul class="clearfix">
        <li>
            <a href="/services">
                <div class="fimg">
                    <img src="{{asset('images/newfrontend/fimg01.png')}}" pagespeed_url_hash="1945316654" onload=""/>
                </div>
                <p>Services</p>
            </a>
        </li>
        <li>
            <a href="tel:03 9563 2204">
                <div class="fimg">
                    <img src="{{asset('images/newfrontend/fimg02.png')}}" pagespeed_url_hash="2239816575" onload=""/>
                </div>
                <p>Contact us</p>
            </a>
        </li>
        <li>
            <a href="/getrates">
                <div class="fimg">
                    <img src="{{asset('images/newfrontend/fimg03.png')}}" pagespeed_url_hash="2534316496" onload=""/>
                </div>
                <p>Get rates</p>
            </a>
        </li>
    </ul>
</div>
<!-- end -->