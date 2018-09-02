<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('js/nbdcleaning.js')}}"></script>
<script type="text/javascript" src="{{ url('js/jquery.mousewheel-3.0.6.pack.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="{{url('js/jia.js')}}" charset="utf-8"></script>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','UA-82207807-1','auto');ga('send','pageview');</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KVFZNC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KVFZNC');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript" src="{{ url('js/datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/datepicker.en.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.droplist.js') }}"></script>

<script type="text/javascript">var $promo=$('.datepicker-promo');$promo.datepicker({language:'en',dateFormat:'dd/mm/yyyy'})</script>

<script type="text/javascript">
    $(document).ready(function(){
        if ($('.image-popup-vertical-fit').length>0){
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });
        }
        if($('#airbtnConfirmbtn').length>0){
            $("#airbtnConfirmbtn").on("submit", function(){
                $("#pageloader").fadeIn();
            });
        }
    });
</script>