<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->

<head>

     <title>{{ config('app.name', 'RMS') }} </title>
     <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="description" content="" />
     <meta name="keywords" content="">
     <meta name="author" content="" />
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">

    <!--begin::Fonts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.16/webfontloader.js"></script>
    <script>
         WebFont.load({
              google: {
                   "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
              },
              active: function() {
                   sessionStorage.fonts = true;
              }
         });
    </script>
    <!--end::Fonts -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/css/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->


    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{asset('assets/css/base_light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu_light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/brand_dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/aside_dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/invoice-v1.default.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--end::Layout Skins -->

    <!--end::Layout Skins -->


    <style media="screen">
         .datepicker{
              z-index: 999!important;
         }
    </style>


</head>
<!-- end::Head -->

<!-- begin::Body -->

<!-- begin::Body -->
<body  class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >


<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
<div class="kt-header-mobile__logo">
      <a href="{{route('home')}}">
           <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}"/>
      </a>
</div>
<div class="kt-header-mobile__toolbar">
      <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

      <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
      <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
</div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

     @include('layouts.sidebar')

           <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
               @include('layouts.navbar')

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
<!--Begin::Dashboard 1-->


@yield('content')

<!--End::Dashboard 1-->
</div>
<!-- end:: Content -->
</div>

<!-- begin:: Footer -->
<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
<div class="kt-footer__copyright">
      2019&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">Pentaface</a>
</div>
<div class="kt-footer__menu">
      <a href="#" target="_blank" class="kt-footer__menu-link kt-link">About</a>
      <a href="#" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
      <a href="#" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
</div>
</div>
<!-- end:: Footer -->
</div>
</div>
</div>

<!-- end:: Page -->





<!-- begin::Sticky Toolbar -->
<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip"  title="Check out more demos" data-placement="right">
      <a href="#" class=""><i class="flaticon2-drop"></i></a>
</li>
<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
           <a href="builder.html" ><i class="flaticon2-gear"></i></a>
</li>
<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
      <a href="#" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
</li>
</ul>
<!-- end::Sticky Toolbar -->




<!-- begin::Demo Panel -->

<div id="kt_demo_panel" class="kt-demo-panel">
<div class="kt-demo-panel__head">
      <h3 class="kt-demo-panel__title">
           Select A Demo
           <!--<small>5</small>-->
      </h3>
      <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
</div>
<div class="kt-demo-panel__body">
    <div class="kt-demo-panel__item kt-demo-panel__item--active">
                <div class="kt-demo-panel__item-title">
                    Default
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-_Default.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="index-2.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 2
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-2.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 3
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-3.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 4
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-4.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 5
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-5.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 6
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-6.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 7
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-7.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 8
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-8.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 9
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-9.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 10
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-10.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 11
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-11.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo11/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 12
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-12.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="https://keenthemes.com/metronic/preview/demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
                        <a href="https://keenthemes.com/metronic/preview/demo12/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 13
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-13.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>

                    </div>
                </div>
            </div><div class="kt-demo-panel__item ">
                <div class="kt-demo-panel__item-title">
                    Demo 14
                </div>
                <div class="kt-demo-panel__item-preview">
                    <img src="{{asset('assets/media/demos/Demo-14.jpg')}}" alt=""/>
                    <div class="kt-demo-panel__item-preview-overlay">
                        <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>

                    </div>
                </div>
            </div>
      <a href="#" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
           Buy  Now!
      </a>
</div>
</div>
<!-- end::Demo Panel -->






<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
      <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
     var KTAppOptions = {
          "colors": {
               "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
               },
               "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
               }
          }
     };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/js/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('assets/js/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{asset('assets/js/gmaps.js')}}" type="text/javascript"></script>
<!--end::Page Vendors -->



<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/dashboard.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->


<!--begin::Global App Bundle(used by all pages) -->
<script src="{{asset('assets/js/app.bundle.js')}}" type="text/javascript"></script>
<!--end::Global App Bundle -->
<script src="{{asset('assets/js/html-table.js')}}" type="text/javascript"></script>

@if($errors->any())

    <script type="text/javascript">

    ShortToast('','{{$errors->first('message')}}', '{{$errors->first('type')}}')

    </script>

@endif

</body>
<!-- end::Body -->

</html>
