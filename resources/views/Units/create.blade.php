@extends('layouts.master')
@section('css')

    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.date.css')}}" rel="stylesheet">
    
       
@endsection
@section('title')
اضافة وحدة ايجارية
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">الوحدات الايجارية </li>
        <li class="breadcrumb-item active"> اضافة</li>
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
    
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="card-title">اضافة وحدة ايجارية</div>
            </div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                            <label for="fullName">اسم الوحدة </label>
                            <input type="text" class="form-control" id="fullName" placeholder="  ">
                        </div>
                        <div class="form-group">
                            <label for="eMail">رقم الدور</label>
                            <input type="email" class="form-control" id="eMail" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="phone">خزائن مطبخ مركبة</label>
                            <input type="text" class="form-control" id="phone" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="website">رقم عداد الغاز</label>
                            <input type="url" class="form-control" id="website" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="website">القراءة الحالية </label>
                            <input type="url" class="form-control" id="website" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                            <label for="addRess">نوع الوحدة</label>
                            <input type="text" class="form-control" id="addRess" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="ciTy">مساحة الوحدة</label>
                            <input type="name" class="form-control" id="ciTy" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="sTate">عدد وحدات التكييف</label>
                            <input type="text" class="form-control" id="sTate" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="zIp">القراءة الحالية</label>
                            <input type="number" class="form-control" id="zIp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="website">رقم عداد المياه</label>
                            <input type="url" class="form-control" id="website" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                            <label for="addRess">رقم الوحدة</label>
                            <input type="text" class="form-control" id="addRess" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="ciTy">مؤثثة</label>
                            <input type="name" class="form-control" id="ciTy" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="sTate">نوع التكييف</label>
                            <input type="text" class="form-control" id="sTate" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="zIp">رقم عداد الكهرباء</label>
                            <input type="number" class="form-control" id="zIp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="website">القراءة الحالية</label>
                            <input type="url" class="form-control" id="website" placeholder="">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            
                            <button type="button" id="submit" name="submit" class="btn btn-success">حفظ واضافة المزيد</button>
                            <button type="button" id="submit" name="submit" class="btn btn-dark">حفظ</button>
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