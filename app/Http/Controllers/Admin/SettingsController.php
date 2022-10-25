<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
     public function settingS()
     {
         return view('System.setting');
     }
     public function statistics()
     {
        return view('System.statistics');

     }
     public function tasks()
     {
        return view('System.tasks');

     }
}
