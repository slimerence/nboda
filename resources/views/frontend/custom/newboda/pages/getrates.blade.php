@extends(_get_frontend_layout_path('frontend'))

@section('content')


    <div class="conlistbox getratesbox">
        <div class="bg25">
            <img src="{{asset('images/newfrontend/bg25.png')}}">
        </div>
        <div class="wrap clearfix">
            <form name="getrates" method="post" action="/getrates.php" target="post_frame" id="getrates">
                <iframe name='post_frame' id="post_frame" style="display:none;" mce_style="display:none;"></iframe>
                <div class="getinnerbox">
                    <div class="topbg">
                        <div class="bgwhite"></div>
                    </div>
                    <div class="getmainbox">
                        <div class="row clearfix">
                            <div class="block">
                                <div class="topstepbox">STEP 1:</div>
                                <div class="ratesform">
                                    <div class="rightline"></div>
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr01.png')}}"></i>
                                            <p>WHO YOU ARE?</p>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l" id='div_firstname'>
                                            <input type="text" id="firstname" name="data[firstname]" placeholder="FIRST NAME*">
                                        </div>
                                        <div class="r">
                                            <input type="text" name="data[lastname]" placeholder="LAST NAME*">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l1">
                                            <input type="text" name="data[email]" placeholder="EMAIL*">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[phone]" placeholder="PHONE*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="topstepbox">STEP 2:</div>
                                <div class="ratesform">
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr02.png')}}"></i>
                                            <p>YOUR HOME</p>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="r r2">
                                            <input type="text" name="data[apt]" placeholder="APT/SUITE">
                                        </div>
                                        <div class="l l2">
                                            <input type="text" name="data[address]" placeholder="ADDRESS">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[city]" placeholder="CITY">
                                        </div>
                                        <div class="r">
                                            <input type="text" name="data[state]" placeholder="STATE">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[postcode]" placeholder="POSTCODE">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cendec clearfix">
                            <div class="half"></div>
                            <div class="half"></div>
                        </div>
                        <div class="row clearfix">
                            <div class="block">
                                <div class="topstepbox">STEP 3:</div>
                                <div class="ratesform">
                                    <div class="rightline"></div>
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr03.png')}}"></i>
                                            <p>SELECT A DATE</p>
                                        </div>
                                    </div>
                                    <!-- <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" placeholder="DD">
                                        </div>
                                        <div class="r">
                                            <input type="text" placeholder="MM">
                                        </div>
                                    </div> -->
                                    <div class="col clearfix">
                                        <div>
                                            <input type='text' name="data[date]" class="datepicker-here datepicker-promo" data-position="bottom right" placeholder="DATE"/>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div>
                                            <input type="text" name="data[time]" placeholder="TIME">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="topstepbox">STEP 4:</div>
                                <div class="ratesform">
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr04.png')}}"></i>
                                            <p>SELECT SERVICE</p>
                                        </div>
                                    </div>
                                    <a class="btn-select" id="btn_select">
                                        <select name="data[type]" class="ahibw">
                                            <option value="">Please Select*</option>
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
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cendec clearfix">
                            <div class="half"></div>
                            <div class="half"></div>
                        </div>

                        <div class="row clearfix">
                            <div class="block">
                                <div class="topstepbox">STEP 5:</div>
                                <div class="ratesform">
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr05.png')}}"></i>
                                            <p>JOB DESCRIPTION</p>
                                        </div>
                                    </div>
                                    <textarea name="data[description]" type="text" placeholder="Please Provide Some Information About
								The Job (Property Size, Cleaning Control,
								Extra Information)
								"></textarea>
                                </div>
                            </div>
                            <div class="block btnblock">
                                <button type="submit" value="submit"><span>SUBMIT</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection