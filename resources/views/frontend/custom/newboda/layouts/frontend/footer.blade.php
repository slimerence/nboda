<style>
    .footer h3{
        font-size: 20px;
        margin: 0 0 10px 0;
        color: #fff;
        font-weight: bold;
    }
</style>
<div class="footer">
    <div class="redbgtop">
        <div class="wrap clearfix">
            <div class="block f-nav">
                <h3>NAVIGATION:</h3>
                <ul class="f-ul-nav">
                    <li>
                        <a href="/" class="current">HOME</a>
                    </li>
                    <li>
                        <a href="/aboutus">ABOUT US</a>
                    </li>
                    <li>
                        <a href="/services">SERVICES</a>
                    </li>
                    <li>
                        <a href="/gallery">GALLERY</a>
                    </li>
                    <li>
                        <a href="/hiring">HIRING</a>
                    </li>
                    <li>
                        <a href="/getrates">GET RATES</a>
                    </li>
                    <li>
                        <a href="/contactus">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="block f-share">
                <h3>SOCIAL MEDIA</h3>
                <div class="shareiconbox clearfix">
                    <a class="jiathis_button_fb" title='facebook'>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="jiathis_button_twitter" title='twitter'>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://instagram.com/" title='instagram'>
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <div class="erweimabox">
                    <img src="{{asset('images/newfrontend/newerweima.jpg')}}" pagespeed_url_hash="1457276618" onload="">
                </div>
            </div>
            <div class="block f-info">
                <h3>CONTACT US:</h3>
                <ul class="f-ul-info">
                    <li>
                        <div itemscope itemtype="http://schema.org/LocalBusiness">
                            <a itemprop="url" href="{{url('/')}}"><div itemprop="name"><strong>New Boda Carpet Cleaning and House Cleaning Expert</strong></div>
                            </a>
                            <span itemprop="telephone"><a href="tel:(03) 9563 2204">(03) 9563 2204</a></span><br>
                        </div>
                        <a href="https://goo.gl/maps/kLFiCLmq2e22">
                            <i><img src="{{asset('images/newfrontend/iconmap.png')}}" pagespeed_url_hash="3185554433" onload=""/></i>
                            <p>G4/566 St Kilda Rd, Melbourne VIC 3004</p>


                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i><img src="{{asset('images/newfrontend/icontell2.png')}}" pagespeed_url_hash="2489735862" onload=""/></i>
                            <div class="newphone">
                                <span>Phone Number: </span>
                                <div class="ftell">
                                    <p> 03 9563 2204 (9:00 - 17:00) </p>
                                    <p>0433 588 517  (After hour) </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i><img src="{{asset('images/newfrontend/iconevo.png')}}" pagespeed_url_hash="2828488535" onload=""/></i>
                            <p>Email: info@newboda.com</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="downbgblue">
        <div class="row copy">
            <span>Copyright @ <a href="http://nbd.com.au">www.nbd.com.au</a></span>
            <span>nbd cleaning service</span>
            <span><a href="/related-articles">articles</a>
        </div>
        <div class="row design">
            <span>Designed by <a href="http://legenddigital.com.au/">Legend Webdesign</a></span>
        </div>
    </div>
</div>
@include(_get_frontend_layout_path('frontend.schema'))
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