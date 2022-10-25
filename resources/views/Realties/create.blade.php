
@extends('layouts.master')
@section('css')

    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datepicker/css/classic.date.css')}}" rel="stylesheet">
    
       
@endsection
@section('title')
اضافة منشأة عقارية
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">المنشأت العقارية</li>
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
                <div class="card-title">اضافة منشأة عقارية</div>
            </div>
            <div class="card-body">
            <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="fullName">مالك المنشأة العقاري</label>
                                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
                            </div>
                            <div class="form-group">
                                <label for="eMail">رقم الهاتف</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                            <div class="form-group">
                                <label for="eMail">نوع بناء العقار</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                            <div class="form-group">
                                <label for="phone"> عدد الأدوار</label>
                                <input type="number" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                         </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="eMail">اسم المنشأة</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
                            </div>
                            <div class="form-group">
                                <label for="eMail">رقم الفاكس</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
                            </div>
                            <div class="form-group">
                                <label for="eMail"> نوع استخدام العقار</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
                            </div>
                            <div class="form-group">
                                <label for="phone"> عدد المواقف</label>
                                <input type="number" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                          
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="phone">رقم السجل</label>
                                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
                            </div>
                            <div class="form-group">
                                <label for="phone">العنوان الوطني</label>
                                <input type="text" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                            <div class="form-group">
                                <label for="phone"> عدد الوحدات</label>
                                <input type="text" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                            <div class="form-group">
                                <label for="phone"> عدد المصاعد</label>
                                <input type="number" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            
                            <button type="button" id="submit" name="submit" class="btn btn-success">حفظ</button>
                        </div>
                    </div>
                </section>

              
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


