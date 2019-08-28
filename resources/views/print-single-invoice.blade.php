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


          @php
               $invoice_info=InvoiceInfo($id);
          @endphp
          <div class="kt-portlet">
     	<div class="kt-portlet__body kt-portlet__body--fit">
     		<div class="kt-invoice-1">
     			<div class="kt-invoice__wrapper">
     				<div class="kt-invoice__head" style="background-image: url({{asset('assets/media/logos/bg-6.jpg')}});">
     					<div class="kt-invoice__container kt-invoice__container--centered">
     						<div class="kt-invoice__logo">
     							<a href="#">
     								<h1>INVOICE</h1>
     							</a>
     							<a href="#">
     								<img src="{{asset('assets/media/logos/logo_client_white.png')}}">
     							</a>
     						</div>
     						<span class="kt-invoice__desc">
     							<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
     							<span>Mississippi 96522</span>
     						</span>
     						<div class="kt-invoice__items">
     							<div class="kt-invoice__item">
     								<span class="kt-invoice__subtitle">DATA</span>
     								<span class="kt-invoice__text">{{date("Y-m-d")}}</span>
     							</div>
     							<div class="kt-invoice__item">
     								<span class="kt-invoice__subtitle">INVOICE NO.</span>
     								<span class="kt-invoice__text">{{$invoice_info->id}}</span>
     							</div>
     							<div class="kt-invoice__item">
     								<span class="kt-invoice__subtitle">INVOICE TO.</span>
     								<span class="kt-invoice__text">Iris Watson, P.O. Box 283 8562 Fusce RD.<br>Fredrick Nebraska 20620</span>
     							</div>
     						</div>
     					</div>
     				</div>
     				<div class="kt-invoice__body kt-invoice__body--centered">
     					<div class="table-responsive">
     						<table class="table">
     							<thead>
     							<tr>
     								<th>DESCRIPTION</th>
     								<th>HOURS</th>
     								<th>ORDER TOTAL</th>
     								<th>DUE</th>
     							</tr>
     							</thead>
     							<tbody>
     							<tr>
     								<td>{{$invoice_info->customer}}</td>
     								<td></td>
     								<td>${{$invoice_info->order_total}}</td>
     								<td>${{$invoice_info->due}}</td>
     							</tr>

     							</tbody>
     						</table>
     					</div>
     				</div>
     				<div class="kt-invoice__footer">
     					<div class="kt-invoice__container kt-invoice__container--centered">
     						<div class="kt-invoice__content">

     						</div>
     						<div class="kt-invoice__content">
     							<span>TOTAL AMOUNT</span>
     							<span class="kt-invoice__price">${{$invoice_info->due}}</span>
     							<span>Taxes Included</span>
     						</div>
     					</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </div>


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

<script type="text/javascript">
window.print();

</script>

</body>
<!-- end::Body -->

</html>
