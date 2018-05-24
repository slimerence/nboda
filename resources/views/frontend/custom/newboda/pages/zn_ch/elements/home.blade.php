<div class="conbanner indexban">
    <div class="absobanimg">
        <img src="{{asset('images/newfrontend/bg02.png')}}" pagespeed_url_hash="2486850179" onload="">
    </div>
    <div class="bgconimg">
        <img src="{{asset('images/newfrontend/bg01.png')}}" pagespeed_url_hash="2192350258" onload="">
    </div>
    <div class="lefttriangle"></div>
    <div class="wrap clearfix">
        @include(_get_frontend_layout_path('frontend.zh_cn.navbox'))
        <div class="bantxt">
            <!--手机版 banner 新增 logo -->
            <div class="mobbanlogo">
                <img src="{{asset('images/newfrontend/moblogo.png')}}" pagespeed_url_hash="1334237209" onload="">
            </div>
            <!-- end -->
            <img src="{{asset('images/newfrontend/bg04.png')}}" pagespeed_url_hash="3075850021" onload="">
            <a href="/getrates">获得报价</a>
        </div>
    </div>
</div>