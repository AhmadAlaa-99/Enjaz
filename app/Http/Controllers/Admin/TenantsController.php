<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\Tenant_envoie;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    public function index()
    {
         return view('Tenants.index');
    }
    public function payments()
    {
         return view('Tenants.payments');
    }
    
    public function archive()
    {
         return view('Tenants.archive');
    }
    
}
