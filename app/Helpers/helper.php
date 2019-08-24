<?php


function UserInfo($id)
{
    return \App\User::where('id', $id)->first();
}


function AllInvoices()
{
    return \App\Invoice::where('deleted_at', null)->orderby('id', 'DESC')->get();
}
