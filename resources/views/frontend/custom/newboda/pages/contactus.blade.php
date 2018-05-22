@extends(_get_frontend_layout_path('frontend'))

@section('content')


    <div class="conlistbox contactformtbox">
        <div class="topbg">
            <div class="bgwhite">
                <div class="redline"></div>
            </div>
            <div class="bg23">
                <img src="{{asset('images/newfrontend/bg23.png')}}">
            </div>
        </div>
        <div class="wrap clearfix">
            <div class="slogantit">
                <h1>CONTACT US</h1>
            </div>
            <div class="maincontent">
                <div class="leftform">
                    <form id="contactus" method="post" action="/contactus.php">
                        <input type="text" name="name" placeholder="NAME*" class="width2"/>
                        <input type="text" name="postcode" placeholder="POSTCODE" class="width4"/>
                        <input type="text" name="phone" placeholder="PHONE*" class="width2"/>
                        <textarea type="text" name="message" placeholder="MESSAGE"></textarea>
                        <button type="submit" value="SUBMIT">SUBMIT</button>
                    </form>
                </div>
                <div class="rightinfo">
                    <div class="col">
                        <h1>ADDRESS:</h1>
                        <p>G4/566 St Kilda Rd, Melbourne VIC 3004</p>
                    </div>
                    <div class="col">
                        <h1>PHONE CALL:</h1>
                        <div class="newphone">
                            <p>03 9563 2204 <span>(9:00 - 17:00) </span></p>
                            <p>0433 588 517 <span> (After hour) </span></p>
                        </div>
                    </div>
                    <div class="col">
                        <h1>EMAIL:</h1>
                        <p>info@newboda.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection