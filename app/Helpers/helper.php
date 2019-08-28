<?php


function UserInfo($id)
{
    return \App\User::where('id', $id)->first();
}


function AllInvoices()
{
    return \App\Invoice::where('deleted_at', null)->orderby('id', 'DESC')->get();
}

function InvoiceInfo($id)
{
    return \App\Invoice::where('id', $id)->where('deleted_at', null)->first();
}

function ShopInfo($id)
{
    return \App\Shop::where('id', $id)->where('deleted_at', null)->first();
}
