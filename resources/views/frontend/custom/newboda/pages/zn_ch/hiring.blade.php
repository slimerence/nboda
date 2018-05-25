@extends(_get_frontend_layout_path('cnfrontend'))

@section('content')

    <div class="conlistbox hiringlistbox">
        <div class="topbg">
            <div class="bgwhite"></div>
        </div>
        <div class="wrap clearfix">
            <div class="slogantit">
                <h1>JOIN US</h1>
            </div>

            <form name="hiring" method="post" action="/hiring.php" target="post_frame" enctype="multipart/form-data" id="hiring">
                <iframe name='post_frame' id="post_frame" style="display:none;" mce_style="display:none;"></iframe>
                <div class="hiringblock">
                    <div class="row">
                        <div class="stepbox">第一步：</div>
                        <div class="innerbox">
                            <div class="formtit">个人信息</div>
                            <div class="merryformbox">
                                <div class="block clearfix">
                                    <div class="halfwidth colrow">
                                        <p>名</p>
                                        <input type="text" name="data[firstname]" class="width1"/>
                                    </div>
                                    <div class="halfwidth colrow">
                                        <p>姓</p>
                                        <input type="text" name="data[lastname]" class="width2"/>
                                    </div>
                                </div>
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>性别</p>
                                        <div class="outradiobox clearfix">
                                            <div class="floatradio">
                                                <div class="radiobox">
                                                    <input type="radio" name="data[sex]" checked="checked" value="0" id="radio1">
                                                    <label for="radio1"></label>
                                                </div>
                                                <div class="txtbox">
                                                    <span>女性</span>
                                                </div>
                                            </div>
                                            <div class="floatradio">
                                                <div class="radiobox">
                                                    <input type="radio" name="data[sex]" checked="checked" value="1" id="radio2">
                                                    <label for="radio2"></label>
                                                </div>
                                                <div class="txtbox">
                                                    <span>男性</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="stepbox">第二步：</div>
                        <div class="innerbox">
                            <div class="formtit">联系我们</div>
                            <div class="merryformbox">
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>地址</p>
                                        <input type="text" name="data[address]" class="width1"/>
                                        <input type="text" name="data[surbstree]" class="width1" style="margin-top:0.3rem;"/>
                                    </div>
                                </div>
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>城市</p>
                                        <input type="text" name="data[city]" class="width3"/>
                                    </div>
                                </div>
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>邮编</p>
                                        <input type="text" name="data[postcode]" class="width3"/>
                                    </div>
                                </div>
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>电话</p>
                                        <input type="text" name="data[mobile]" class="width4"/>
                                    </div>
                                </div>
                                <div class="block clearfix">
                                    <div class="colrow">
                                        <p>邮件</p>
                                        <input type="text" name="data[email]" class="width4"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step3-4">
                        <div class="steprow setp3">
                            <div class="row">
                                <div class="stepbox">第三步：</div>
                                <div class="innerbox">
                                    <div class="formtit">个人详情</div>
                                    <div class="merryformbox">
                                        <div class="block clearfix">
                                            <div class="colrow">
                                                <div class="top-p">之前是否有清洁服务经验？*</div>
                                                <div class="outradiobox clearfix">
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[experience]" value="0" checked="checked" id="radio3">
                                                            <label for="radio3"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>没有</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[experience]" value="1" checked="checked" id="radio4">
                                                            <label for="radio4"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>自家清洁经验</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[experience]" value="2" checked="checked" id="radio5">
                                                            <label for="radio5"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>清洁服务专业人员</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="colrow">
                                                <div class="top-p">每周可工作多少时间？*</div>
                                                <div class="outradiobox clearfix">
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[time]" value="0" checked="checked" id="radio6">
                                                            <label for="radio6"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>1-10</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[time]" value="1" checked="checked" id="radio7">
                                                            <label for="radio7"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>11-20</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[time]" value="2" checked="checked" id="radio8">
                                                            <label for="radio8"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>21-30</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[time]" value="3" checked="checked" id="radio9">
                                                            <label for="radio9"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>31-40</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[time]" value="4" checked="checked" id="radio10">
                                                            <label for="radio10"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>40+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="colrow">
                                                <div class="top-p">有自己的交通工具吗？*</div>
                                                <div class="outradiobox clearfix">
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[transport]" value="1" checked="checked" id="radio11">
                                                            <label for="radio11"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>有</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[transport]" value="0" checked="checked" id="radio12">
                                                            <label for="radio12"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>没有</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="colrow">
                                                <div class="top-p">可以出示最近一年的无犯罪记录吗？*</div>
                                                <div class="outradiobox clearfix">
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[record]" value="1" checked="checked" id="radio13">
                                                            <label for="radio13"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>有</span>
                                                        </div>
                                                    </div>
                                                    <div class="floatradio">
                                                        <div class="radiobox">
                                                            <input type="radio" name="data[record]" value="0" checked="checked" id="radio14">
                                                            <label for="radio14"></label>
                                                        </div>
                                                        <div class="txtbox">
                                                            <span>没有</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="steprow setp4">

                            <div class="row">
                                <div class="stepbox">第四步：</div>
                                <div class="innerbox">
                                    <div class="block clearfix">
                                        <div class="colrow">
                                            <div class="top-p">简短的个人介绍<br/>成为优质清洁服务人员的关键因素是什么？*</div>
                                            <div class="textareabox">
                                                <textarea type="text" name="data[cleaner]"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step5">
                        <div class="row">
                            <div class="stepbox">第五步：</div>
                            <div class="innerbox">
                                <div class="formtit">工作资格</div>
                                <div class="merryformbox">
                                    <div class="block clearfix">
                                        <div class="colrow">
                                            <div class="top-p">是否是澳洲/新西兰国籍 或 拥有永久居留权？*</div>
                                            <div class="outradiobox clearfix">
                                                <div class="floatradio">
                                                    <div class="radiobox">
                                                        <input type="radio" name="data[identity]" value="1" checked="checked" id="radio15">
                                                        <label for="radio15"></label>
                                                    </div>
                                                    <div class="txtbox">
                                                        <span>是</span>
                                                    </div>
                                                </div>
                                                <div class="floatradio">
                                                    <div class="radiobox">
                                                        <input type="radio" name="data[identity]" value="0" checked="checked" id="radio16">
                                                        <label for="radio16"></label>
                                                    </div>
                                                    <div class="txtbox">
                                                        <span>不是</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uploadbox">
                        <div class="row">
                            <div class="stepbox">上传简历*</div>
                            <input type="file" style="display:none" id="file" name="file" onchange="showInfo(this);">
                            <a href="javascript:;" onclick="$('#file').click();" class="choosefile">选择文件</a>
                            <label id="filename" class="fileName"></label>
                            <a id="adel" href="javascript:;" onclick="deletefile();" style="display:none;" class="btnDel"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="sendbox">
                        <button type="submit" value="SEND APPLICATION" class="sendApplication">发送申请</button>
                        <!-- <a href="">SEND APPLICATION</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection