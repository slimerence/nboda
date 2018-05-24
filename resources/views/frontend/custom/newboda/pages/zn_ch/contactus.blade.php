@extends(_get_frontend_layout_path('cnfrontend'))

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
                <h1>联系我们</h1>
            </div>
            <div class="maincontent">
                <div class="leftform">
                    <form id="contact-us" method="post" action="{{ url('contact-us') }}">
                        {{csrf_field()}}
                        <input type="hidden" name="lead[email]" id="input-email" value="hh">
                        <input type="text" name="lead[name]" id="input-name" placeholder="名字*" class="width2"/>
                        <input type="text" name="lead[postcode]" placeholder="邮编" class="width4"/>
                        <input type="text" name="lead[phone]" id="input-phone" placeholder="电话*" class="width2"/>
                        <textarea type="text" name="lead[message]" id="input-message" placeholder="信息"></textarea>
                        <button type="submit" value="SUBMIT" id="submit-contact-us-btn">提交</button>
                    </form>
                </div>
                <div class="rightinfo">
                    <div class="col">
                        <h1>地址:</h1>
                        <p>G4/566 St Kilda Rd, Melbourne VIC 3004</p>
                    </div>
                    <div class="col">
                        <h1>联系电话:</h1>
                        <div class="newphone">
                            <p>03 9563 2204 <span>(9:00 - 17:00) </span></p>
                            <p>0433 588 517 <span> (下班后) </span></p>
                        </div>
                    </div>
                    <div class="col">
                        <h1>邮件:</h1>
                        <p>info@newboda.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection