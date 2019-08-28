@extends('layouts.header')


@section('content')

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
							<span>{{$client_id}}</span>
							<span>{{$secret}}</span>
						</div>
					</div>


                         <div class="kt-invoice__container kt-invoice__container--centered" style="padding:0px!important">
						<div class="kt-invoice__content">

						</div>
						<div class="kt-invoice__content">
                                   <form method="POST" id="payment-form"
                                         action="{!! URL::to('paypal') !!}" class="kt-form kt-form--fit kt-form--label-right">
                                          {{ csrf_field() }}
                         						<input value="{{$invoice_info->due}}" id="amount" type="hidden" name="amount"  class="form-control">
                         						<input value="{{$invoice_info->id}}"  type="hidden" name="id"  class="form-control">
                              								<button type="submit" class="btn btn-danger">Pay With Paypal</button>

                              			</form>
                              			<!--end::Form-->
						</div>
					</div>

                         <div class="kt-invoice__container kt-invoice__container--centered">


                              </div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
