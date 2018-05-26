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
                @if(session('status_contact_us_submit'))
                    <?php $status = session('status_contact_us_submit'); ?>
                    @if($status=='success')
                        <p style="color: green;">Thank you very much, one of our staff will contact with you very soon!</p>
                    @elseif($status=='fail')
                        <p style="color: red;font-size: 15px;">System is busy, please try again!</p>
                    @endif
                @endif
            </div>
            <div class="maincontent">
                <div class="leftform">
                    <form id="contact-us" method="post" action="{{ url('contact-us') }}">
                        {{csrf_field()}}
                        <input type="hidden" name="lead[email]" id="input-email" value="N.A">
                        <input type="text" name="lead[name]" id="input-name" placeholder="NAME*" class="width2" required/>
                        <input type="text" name="lead[postcode]" placeholder="POSTCODE" class="width4"/>
                        <input type="text" name="lead[phone]" id="input-phone" placeholder="PHONE*" class="width2" required/>
                        <textarea type="text" name="lead[message]" id="input-message" placeholder="MESSAGE(Optional)"></textarea>
                        <button type="submit" value="SUBMIT" id="submit-contact-us-btn">SUBMIT</button>
                    </form>
                </div>
                <div class="rightinfo">
                    <div class="col">
                        <h1>ADDRESS:</h1>
                        <p>{{ $siteConfig->contact_address }}</p>
                    </div>
                    <div class="col">
                        <h1>PHONE CALL:</h1>
                        <div class="newphone">
                            <p>{{ $siteConfig->contact_phone }}</p>
                            <p>{{ $siteConfig->contact_fax }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <h1>EMAIL:</h1>
                        <p>{{ $siteConfig->contact_email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection