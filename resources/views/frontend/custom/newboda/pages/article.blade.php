@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <div class="article-box">
        {!! $posts->content !!}
    </div>
    </div>
    </div>

    <!--手机版新增 get rates-->
    <div class="mobgetrates">
        <div class="mobinnergetrates">
            <a href="/getrates">GET RATES</a>
        </div>
    </div>
    <!-- end -->
    <div class="abgetrates">
        <div class="abbginner clearfix">
            <div class="txt">
                <div class="cssTable">
                    <div class="cssTd">
                        <h1>Just A Simple Click To Book Our Service!</h1>
                        <a href="/getrates">GET RATES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection