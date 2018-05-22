<!doctype html>
<html>

@include(_get_frontend_layout_path('frontend.head'))
<body>

@include(_get_frontend_layout_path('frontend.loading'))
@include(_get_frontend_layout_path('frontend.header'))
@include(_get_frontend_theme_path('pages.elements.'.strtolower($pageTitle)))
@yield('content')

@include(_get_frontend_layout_path('frontend.footer'))
@include(_get_frontend_layout_path('frontend.mobsidemenu'))
@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>
