@extends('layouts.header')


@section('content')
     <div class="alert alert-light alert-elevate" role="alert">
       <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
       <div class="alert-text">
            The Metronic Datatable component supports initialization from HTML table. It also defines the schema model of the data source. In addition to the visualization, the Datatable
            provides built-in support for operations over data such
            as sorting, filtering and paging performed in user browser(frontend).
       </div>
     </div>

     <div class="kt-portlet kt-portlet--mobile">
       <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                 <span class="kt-portlet__head-icon">
                     <i class="kt-font-brand flaticon2-line-chart"></i>
                 </span>
                 <h3 class="kt-portlet__head-title">
                     Invoices
                     {{-- <small>All registered student profile list.</small> --}}
                 </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                 <div class="kt-portlet__head-wrapper">
                     <div class="kt-portlet__head-actions">
                         <div class="dropdown dropdown-inline">
                             <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="la la-download"></i> Export
                             </button>
                             <div class="dropdown-menu dropdown-menu-right">
                                 <ul class="kt-nav">
                                     <li class="kt-nav__section kt-nav__section--first">
                                         <span class="kt-nav__section-text">Choose an option</span>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon la la-print"></i>
                                             <span class="kt-nav__link-text">Print</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon la la-copy"></i>
                                             <span class="kt-nav__link-text">Copy</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                             <span class="kt-nav__link-text">Excel</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon la la-file-text-o"></i>
                                             <span class="kt-nav__link-text">CSV</span>
                                         </a>
                                     </li>
                                     <li class="kt-nav__item">
                                         <a href="#" class="kt-nav__link">
                                             <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                             <span class="kt-nav__link-text">PDF</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         &nbsp;
                         <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                             <i class="la la-plus"></i>
                             New Record
                         </a>
                     </div>
                 </div>
            </div>
       </div>

       <div class="kt-portlet__body">
            <!--begin: Search Form -->
            <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                 <div class="row align-items-center">
                     <div class="col-xl-8 order-2 order-xl-1">
                         <div class="row align-items-center">
                             <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                 <div class="kt-input-icon kt-input-icon--left">
                                     <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                     <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                         <span><i class="la la-search"></i></span>
                                     </span>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                          <div class="dropdown dropdown-inline">
 		<button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 			<i class="flaticon2-plus"></i> Add New
 		</button>
 		<div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-71px, -255px, 0px);">
 			<ul class="kt-nav">
 				<li class="kt-nav__section kt-nav__section--first">
 					<span class="kt-nav__section-text">Choose an action:</span>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
 						<span class="kt-nav__link-text">Reservations</span>
 					</a>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
 						<span class="kt-nav__link-text">Appointments</span>
 					</a>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
 						<span class="kt-nav__link-text">Reminders</span>
 					</a>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-contract"></i>
 						<span class="kt-nav__link-text">Announcements</span>
 					</a>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
 						<span class="kt-nav__link-text">Orders</span>
 					</a>
 				</li>
 				<li class="kt-nav__separator kt-nav__separator--fit">
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-rocket-1"></i>
 						<span class="kt-nav__link-text">Projects</span>
 					</a>
 				</li>
 				<li class="kt-nav__item">
 					<a href="#" class="kt-nav__link">
 						<i class="kt-nav__link-icon flaticon2-chat-1"></i>
 						<span class="kt-nav__link-text">User Feedbacks</span>
 					</a>
 				</li>
 			</ul>
 		</div>
 	</div>
                     </div>
                 </div>
            </div>
            <!--end: Search Form -->
       </div>
       <div class="kt-portlet__body kt-portlet__body--fit">


            <!--begin: Datatable -->
           <table class="kt-datatable" id="html_table" width="100%">
                 <thead>
                <tr>
                          <th title="Field #1">Invoice</th>
                          <th title="Field #3">Customer</th>
                          <th title="Field #4">Email</th>
                          <th title="Field #6">Order Date</th>
                          <th title="Field #8">Delivery By</th>
                          <th title="Field #9">Order Total</th>
                          <th title="Field #10">Due</th>
                          <th title="Field #12">Actions</th>
                          <th title="Field #16">Payment Method</th>
                          <th title="Field #11">Currency</th>
                          <th title="Field #7">Required By</th>
                          <th title="Field #2">Ref</th>
                          <th title="Field #5">Cus Order Ref</th>
                          <th title="Field #13">Created By</th>
                      </tr>
                 </thead>
                 <tbody>

                    @foreach (AllInvoices() as $invoice)

                           <tr>
                                <td>{{$invoice->id}}</td>
                                <td>{{$invoice->customer}}</td>
                                <td>{{$invoice->email}}</td>
                                <td>{{$invoice->order_date}}</td>
                                <td>{{$invoice->required_by}}</td>

                                <td>{{$invoice->order_total}}</td>
                                <td>{{$invoice->due}}</td>
                                <td>
                                     <span>
                                     <a title="Print" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                          <i class="la la-print"></i>
                                     </a>
                                     <a title="Payment" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                          <i class="la la-cc-visa"></i>
                                     </a>
                                     </span>
                                </td>


                                <td>
                                     @if ($invoice->payment_method!='')

                                     <span>

                                          <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">{{$invoice->payment_method}}
                                          </span>

                                     </span>

                                     @endif
                                </td>

                                <td>
                                     <span>
                                          <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">{{$invoice->currency}}
                                          </span>
                                     </span>
                                </td>

                                <td>{{$invoice->ref}}</td>
                                <td>{{$invoice->cus_order_ref}}</td>
                                <td>{{$invoice->delivery_by}}</td>
                                <td>
                                     <span>
                                          <span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">{{UserInfo($invoice->created_by)->name}}
                                          </span>
                                     </span>
                                </td>
                           </tr>


                      @endforeach

                 </tbody>
            </table>
            <!--end: Datatable -->
       </div>
     </div>
@endsection
