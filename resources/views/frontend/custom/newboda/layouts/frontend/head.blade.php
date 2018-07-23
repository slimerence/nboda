<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
    <title>@yield('title','New Boda Cleaning - Carpet Cleaning & House Cleaning Melbourne VIC 3004')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('seoconfig')
    <link rel="shortcut icon" href="{{asset('images/newfrontend/favicon.ico')}}"/>
    <link rel="bookmark" href="{{asset('images/newfrontend/favicon.ico')}}" type="image/x-icon" 　 />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/css.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/article.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/all.css')}}"/>
    <script type="text/javascript" src="{{url('/js/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript">function callback(str){var _form=$("#getrates");$('.response').remove();_form.find(':submit').before('<p class="response" style="margin-bottom: 120px; text-align:center; line-height:30px; font-size:16px; color:#F63A39;">'+str+'</p>');if(str=="Message sent! Thank you for your rates, we will contact you soon.")
        {$('.response').remove();_form.find(':submit').before('<p class="response" style="margin-bottom: 120px;text-align:center; line-height:30px; font-size:16px; color:#F63A39; ">'+str+'</p>');_form.find(':input').val('');}}</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122691291-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122691291-1');
    </script>
</head>