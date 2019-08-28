<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function Invoices()
    {
        $invoices=Invoice::where('deleted_at',null)->get();
        return view('invoices')->with('invoices',$invoices);
    }

    public function SingleInvoice($id)
    {

         $paypal_conf = \Config::get('paypal');

        return view('single-invoice')->with(['client_id'=>$paypal_conf['client_id'],'secret'=>$paypal_conf['secret'],'id'=>$id]);

    }

    public function PrintInvoice($id)
    {

        return view('print-single-invoice')->with('id',$id);

    }


}
