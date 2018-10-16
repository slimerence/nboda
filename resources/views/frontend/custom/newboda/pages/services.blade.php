@extends(_get_frontend_layout_path('frontend'))

@section('title', $metaKeywords )

@section('seoconfig')
    <meta name="keywords" content="{{$metaKeywords}}">
    <meta name="description" content="{{$metaDescription}}">
@endsection
@section('content')
    <seciton id="service-panel">
        <div class="container-fluid">
            <div class="row service-nav">
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='' ? 'active':'' }}">
                        <a class="nav-link"  href="{{ url('services/end-of-lease-cleaning') }}" aria-selected="true">END OF LEASE CLEANING</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='carpet' ? 'active':'' }}">
                        <a class="nav-link"  href="{{ url('services/carpet-steam-cleaning') }}" aria-selected="false">CARPET STEAM CLEANING</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='homeclean' ? 'active':'' }}">
                        <a class="nav-link "  href="{{ url('services/home-cleaning') }}" aria-selected="false">HOME CLEANING</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='commercial' ? 'active':'' }}">
                        <a class="nav-link "  href="{{ url('services/commercial-cleaning') }}" aria-selected="true">COMMERCIAL CLEANING</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='highpressure' ? 'active':'' }}">
                        <a class="nav-link"  href="{{ url('services/high-pressure-cleaning') }}" aria-selected="false">HIGH-PRESSURE CLEANING</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div class="nav-item-6 {{ $service =='rubbish' ? 'active':'' }}">
                        <a class="nav-link"  href="{{ url('services/rubbish-removal') }}" aria-selected="false">RUBBISH REMOVAL</a>
                    </div>
                </div>

            </div>
        </div>
    </seciton>
    <section class="bg-white">
        <div class="tab-content" style="padding: 3em 0">
            @if(isset($service) && $service!=='')
                @include(_get_frontend_theme_path('general.'.$service))
            @else
                @include(_get_frontend_theme_path('general.endoflease'))
            @endif
        </div>
    </section>
    <section id="why" class="bg-white" style="padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 my-auto text-center reblock">
                    <img src="{{asset('images/newfrontend/ourpro.png')}}" alt="pro" style="max-width: 150px;" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/ser1.png')}}" alt="why">
                        <h3 style="margin-top: 0.8em;">100% SATISFACTION</h3>
                        <h4>GUARANTEE</h4>
                        <p>Our latest professional methods and various chemicals, which is effective against 99% of home stains.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/air2.png')}}" alt="why">
                        <h3 style="margin-top: 0.8em;">CHEMICAL HAZARDS</h3>
                        <h4>FREE</h4>
                        <p>Safety is the first thing. All chemicals we use are environmental-friendly. Safe for kids and four-legged friends.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center my-auto">
                    <div class="why-wrap">
                        <img src="{{asset('images/newfrontend/air3.png')}}" alt="why">
                        <h3 style="margin-top: 0.8em;">PREMIUM SERVICE</h3>
                        <h4>GREAT PRICE</h4>
                        <p>On time every time, a professional and efficient service at a fair and reasonable price that leaves your site spotless.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include(_get_frontend_theme_path('general.call'))

@stop