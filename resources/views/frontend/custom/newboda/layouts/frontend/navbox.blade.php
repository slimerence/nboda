
<div class="Navbox">
    <ul class="clearfix">
        <li>
            <a href="/" class="{{ $menuName=='home' ? 'current':null }}">HOME</a>
        </li>
        <li>
            <a href="/aboutus" class="{{ $pageTitle=='aboutus' ? 'current':null }}">ABOUT US</a>
        </li>
        <li>
            <a href="{{ url('services/end-of-lease-cleaning') }}" class="{{ $pageTitle=='services' ? 'current':null }}">SERVICES</a>
        </li>
        <li>
            <a href="/airbnb" class="{{ $pageTitle=='airbnb' ? 'current':null }}">AIRBNB CLEANING</a>
        </li>
        <li>
            <a href="/gallery" class="{{ $pageTitle=='gallery' ? 'current':null }}">GALLERY</a>
        </li>
        <li>
            <a href="/hiring" class="{{ $pageTitle=='hiring' ? 'current':null }}">HIRING</a>
        </li>
        <li>
            <a href="/getrates" class="{{ $pageTitle=='getrates' ? 'current':null }}">GET RATES</a>
        </li>
        <li>
            <a href="/contactus" class="{{ $pageTitle=='contactus' ? 'current':null }}">CONTACT US</a>
        </li>
        <li>
            <a href="/zh-cn" class="{{ $pageTitle=='zh-cn' ? 'current':null }}">中文</a>
        </li>
    </ul>
</div>
