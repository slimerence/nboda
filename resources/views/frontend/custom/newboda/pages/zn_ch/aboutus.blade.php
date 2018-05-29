@extends(_get_frontend_layout_path('cnfrontend'))

@section('content')

    <div class="infoconbox infoabbox">
        <div class="abrightpos">
            <img src="{{asset('images/newfrontend/bg11.png') }}">
        </div>
        <div class="overhiddenbox">
            <div class="righttri"></div>
            <div class="bgleft">
                <img src="h{{asset('images/newfrontend/bg12.png') }}"/>
            </div>
            <div class="mainarticle">
                <h1>关于我们</h1>
                <p>新博达清洁公司，我们拥有专业的清洁团队，团队里每个人都拥有丰富的清洁经验，我们的团队长期服务于墨尔本市区的几家中介和银行。我们的清洁服务包括退房清洁、办公室清洁，家庭清洁、蒸气地毯清洁、 地板抛光等</p>

            </div>
        </div>
    </div>

    <div class="ablistbox">
        <div class="wrap clearfix">
            <ul class="clearfix">
                <li>
                    <div class="img">
                        <img src="{{asset('images/newfrontend/ab01.png') }}"/>
                    </div>
                    <div class="txt">
                        我们会给您提供最全面和安全的清洁服务
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{asset('images/newfrontend/ab02.png') }}"/>
                    </div>
                    <div class="txt">
                        所有的清洁工都有公共责任保险
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{asset('images/newfrontend/ab03.png') }}"/>
                    </div>
                    <div class="txt">
                        所有的清洁工都有无犯罪证明
                    </div>
                </li>
                <li>
                    <div class="img">
                        <img src="{{asset('images/newfrontend/ab04.png') }}"/>
                    </div>
                    <div class="txt">
                        利用客户反馈来持续地提升服务质量
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--手机版新增 get rates-->
    <div class="mobgetrates">
        <div class="mobinnergetrates">
            <a href="/zh-cn/getrates">获得报价</a>
        </div>
    </div>
    <!-- end -->
    <div class="abgetrates">
        <div class="abbginner clearfix">
            <div class="txt">
                <div class="cssTable">
                    <div class="cssTd">
                        <h1>立即预定我们的清洁服务！</h1>
                        <a href="/zh-cn/getrates">获得报价</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection