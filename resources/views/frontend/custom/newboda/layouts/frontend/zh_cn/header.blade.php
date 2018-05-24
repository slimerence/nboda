<div class="header">
    <div class="wrap clearfix">
        <!-- mobile open menu -->
        <div class="btnmobopen">
            <i></i>
            <i></i>
            <i></i>
        </div>
        <!-- end -->

        <div class="logobox">
            <a href="/">

                <img src="{{asset('images/newfrontend/logo.png')}}">
            </a>
        </div>
        <div class="headright">
            <div class="clearfix">

                <!-- 手机版头部第三方 -->
                <div class="shareiconbox clearfix">
                    <a href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <!-- end -->

                <div class="row headtell">
                    <i class="fa fa-phone"></i>
                    <div class="newphone">
                        <p>{{$siteConfig->contact_phone}}</p>
                        <p>{{$siteConfig->contact_fax}}</p>
                    </div>
                </div>
                <div class="row btnrates">
                    <a href="/getrates">获得报价</a>
                </div>
            </div>
        </div>
    </div>
</div>