@extends(_get_frontend_layout_path('frontend'))

@section('title','End of Lease Clean | Vacate Clean Melbourne | Carpet Steam Clean')

@section('seoconfig')
    <meta name="keywords" content="end of lease clean | vacate clean melbourne | carpet steam clean">
    <meta name="description" content="NBD is a professional Cleaning expert provides thorough Melbourne Regular Cleaning services, such as end of lease clean, vacate clean and carpet steam clean service. For more detail about vacate clean service in Melbourne, please contact us: info@newboda.com.">
@endsection
@section('content')
    <seciton id="service-panel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs w-100" id="airTab">
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='' ? 'active':'' }}"  href="{{ url('services') }}" aria-selected="true">END OF LEASE CLEAN</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='carpet' ? 'active':'' }}"  href="{{ url('services/carpet') }}" aria-selected="false">CARPET STEAM CLEAN</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='homeclean' ? 'active':'' }}"  href="{{ url('services/homeclean') }}" aria-selected="false">HOME CLEAN</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='commercial' ? 'active':'' }}"  href="{{ url('services/commercial') }}" aria-selected="true">COMMERCIAL CLEAN</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='highpressure' ? 'active':'' }}"  href="{{ url('services/highpressure') }}" aria-selected="false">HIGH-PRESSURE CLEAN</a>
                        </li>
                        <li class="nav-item-6">
                            <a class="nav-link {{ $service =='rubbish' ? 'active':'' }}"  href="{{ url('services/rubbish') }}" aria-selected="false">RUBBISH REMOVAL</a>
                        </li>
                    </ul>
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
                <div class="col-lg-3 col-md-3 col-sm-6 my-auto text-center">
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