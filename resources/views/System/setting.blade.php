@extends('layouts.master')
@section('css')

    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.date.css')}}" rel="stylesheet">
    
       
@endsection
@section('title')
اعدادات الحساب
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"> الاعدادات </li>
        <li class="breadcrumb-item active">اعدادات الحساب</li>
    </ol>

    <ul class="app-actions">
        <li>
            <a href="#" id="reportrange">
                <span class="range-text"></span>
                <i class="icon-chevron-down"></i>	
            </a>
        </li>
        <li>
            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                <i class="icon-print"></i>
            </a>
        </li>
        <li>
            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                <i class="icon-cloud_download"></i>
            </a>
        </li>
    </ul>
</div>
<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                       
                        <h5 class="user-name">Ahmad Alaa </h5>
                        <h6 class="user-email">ahmad@gmail.com</h6>
                    </div>
                    <div class="setting-links">
                      
                        <a href="tasks.html">
                            <i class="icon-date_range"></i>
                            Tasks
                        </a>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="card-title">Update Profile</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label for="website">Website URL</label>
                            <input type="url" class="form-control" id="website" placeholder="Website url">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="addRess">Address</label>
                            <input type="text" class="form-control" id="addRess" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="ciTy">City</label>
                            <input type="name" class="form-control" id="ciTy" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="sTate">State</label>
                            <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                        </div>
                        <div class="form-group">
                            <label for="zIp">ZIP</label>
                            <input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" id="submit" name="submit" class="btn btn-dark">Cancel</button>
                            <button type="button" id="submit" name="submit" class="btn btn-success">Submit Form</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

</div>
<!-- Content wrapper end -->
@endsection
@section('js')
	
    <script src="{{URL::asset('assets/vendor/datepicker/js/picker.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/datepicker/js/picker.date.js')}}"></script>
    <script src="{{URL::asset('assets/datepicker/js/custom-picker.js')}}"></script>		
@endsection