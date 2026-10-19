<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Customers;
use App\Models\Items;
use App\Models\Sales;
use Illuminate\Http\Request;

class DataController extends Controller
{
    // Companies
    public function companies()
    {
        $data = Companies::with('items')->get();
        return view('data.companies', compact('data'));
    }

    public function company($id)
    {
        $data = Companies::with('items')->where('company_id', $id)->first();
        return view('data.company', compact('data'));
    }

    // Customers
    public function customers()
    {
        $data = Customers::with('sales.item.company')->get();
        return view('data.customers', compact('data'));
    }

    public function customer($id)
    {
        $data = Customers::with('sales.item.company')->where('customer_id', $id)->first();
        return view('data.customer', compact('data'));
    }

    // Items
    public function items()
    {
        $data = Items::with('company.sales.customer')->get();
        return view('data.items', compact('data'));
    }

    public function item($id)
    {
        $data = Items::with('company.sales.customer')->where('item_code', $id)->first();
        return view('data.item', compact('data'));
    }

    // Sales
    public function sales()
    {
        $data = Sales::with('customer', 'item.company')->get();
        return view('data.sales', compact('data'));
    }

    public function sale($id)
    {
        $data = Sales::with('customer', 'item.company')->where('purchase_number', $id)->first();
        return view('data.sale', compact('data'));
    }
}