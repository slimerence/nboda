<!doctype html>
<html>

@include(_get_frontend_layout_path('frontend.head'))
<body>

@include(_get_frontend_layout_path('frontend.loading'))
@include(_get_frontend_layout_path('frontend.zh_cn.header'))
@include(_get_frontend_theme_path('pages.zn_ch.elements.'.strtolower($pageTitle)))
@yield('content')

@include(_get_frontend_layout_path('frontend.zh_cn.footer'))
@include(_get_frontend_layout_path('frontend.zh_cn.mobsidemenu'))
@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>
