@extends(_get_frontend_layout_path('cnfrontend'))

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
                                <div class="topstepbox">第一步：</div>
                                <div class="ratesform">
                                    <div class="rightline"></div>
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr01.png')}}"></i>
                                            <p>个人信息</p>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l" id='div_firstname'>
                                            <input type="text" id="firstname" name="data[firstname]" placeholder="名*">
                                        </div>
                                        <div class="r">
                                            <input type="text" name="data[lastname]" placeholder="姓*">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l1">
                                            <input type="text" name="data[email]" placeholder="邮件*">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[phone]" placeholder="电话*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="topstepbox">第二步：</div>
                                <div class="ratesform">
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr02.png')}}"></i>
                                            <p>服务地址</p>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="r r2">
                                            <input type="text" name="data[apt]" placeholder="门牌号">
                                        </div>
                                        <div class="l l2">
                                            <input type="text" name="data[address]" placeholder="地址">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[city]" placeholder="城市">
                                        </div>
                                        <div class="r">
                                            <input type="text" name="data[state]" placeholder="省">
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div class="l">
                                            <input type="text" name="data[postcode]" placeholder="邮编">
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
                                <div class="topstepbox">第三步：</div>
                                <div class="ratesform">
                                    <div class="rightline"></div>
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr03.png')}}"></i>
                                            <p>选择服务时间</p>
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
                                            <input type='text' name="data[date]" class="datepicker-here datepicker-promo" data-position="bottom right" placeholder="日期"/>
                                        </div>
                                    </div>
                                    <div class="col clearfix">
                                        <div>
                                            <input type="text" name="data[time]" placeholder="时间">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="block">
                            <div class="topstepbox">第四步：</div>
                            <div class="ratesform">
                                <div class="topTit">
                                    <div class="inTit">
                                        <i><img src="{{asset('images/newfrontend/gr04.png')}}"></i>
                                        <p>选择服务</p>
                                    </div>
                                </div>
                                <a class="btn-select" id="btn_select">
                                    <select name="data[type]" class="ahibw">
                                        <option value="">请选择*</option>
                                        <option value="End of Lease Clean">退租清洁服务</option>
                                        <option value="High Pressure Water Clean">高压水枪清洁</option>
                                        <option value="One-off Clean">一次性清洁</option>
                                        <option value="Regular Clean">日常清洁</option>
                                        <option value="Carpet Steam Clean">蒸汽地毯清洁</option>
                                        <option value="Pre and Post Pest Control Clean">除虫服务清洁</option>
                                        <option value="After Build Clean">装修后清洁</option>
                                        <option value="Office Clean">办公室清洁</option>
                                        <option value="Urgent Clean">紧急情况清洁</option>
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
                                <div class="topstepbox">第五步：</div>
                                <div class="ratesform">
                                    <div class="topTit">
                                        <div class="inTit">
                                            <i><img src="{{asset('images/newfrontend/gr05.png')}}"></i>
                                            <p>服务细节</p>
                                        </div>
                                    </div>
                                    <textarea name="data[description]" type="text" placeholder="请提供清洁服务需求（例如，房屋面积）"></textarea>
                                </div>
                            </div>
                            <div class="block btnblock">
                                <button type="submit" value="submit"><span>提交</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection