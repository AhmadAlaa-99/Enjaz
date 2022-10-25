<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function contract_payments()
    {
          return view('Reports.contract_payments');
    }
    public function maintenance_payments()
    {
        return view('Reports.maintenance_payments');

    }
    public function rental_traffic()
    {
        return view('Reports.rental_traffic');

    }
    public function details()
    {
        return view('Reports.details');

    }

    public function effictive()
    {
        return view('Reports.effictive');

    }
    public function finished()
    {
        return view('Reports.finished');

    }
    public function payments_details()
    {
        return view('Reports.payments_details');

    }
    
    public function lease_details()
    {
        return view('leases_details');

    }
    public function maintenance_details()
    {
        return view('maintenance_details');

    }
    
}
