@extends('layouts.master')
@section('css')
<!-- Steps Wizard CSS -->
<link href="{{URL::asset('assets/vendor/wizard/jquery.steps.css')}}" rel="stylesheet">
@endsection
@section('title')
اضافة مالك عقار
@stop

@section('content')
<div class="main-container">


<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">ملاك العقارات</li>
        <li class="breadcrumb-item active">اضافة</li>
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
<!-- Page header end -->


<!-- Content wrapper start -->
<div class="content-wrapper">

    

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="example-form">
                <h3>بيانات الشركة </h3>
                <section>
                <h3>بيانات الشركة </h3>
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="fullName">نوع المنظمة</label>
                                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
                            </div>
                            <div class="form-group">
                                <label for="eMail">الرقم الموحد</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="eMail">اسم الشركة/المؤسسة</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
                            </div>
                            <div class="form-group">
                                <label for="eMail">رقم السجل التجاري</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
                            </div>
                          
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="phone">جهة الاصدار</label>
                                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
                            </div>
                            <div class="form-group">
                                <label for="phone">تاريخ السجل التجاري</label>
                                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                        </div>
                    </div>
                </section>
                <h3>بيانات ممثل الشركة</h3>
                <section>
                <h3>بيانات ممثل الشركة</h3>
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="form-group">
                                <label for="addrEss">الاسم</label>
                                <input type="text" class="form-control" id="addrEss" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="counTry">رقم الجوال</label>
                                <input type="text" class="form-control" id="counTry" placeholder="Mobile No.">
                            </div>
                            <div class="form-group">
                                <label for="counTry">تاريخ الاصدار</label>
                                <input type="date" class="form-control" id="counTry" placeholder="Issue date">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="form-group">
                                <label for="ciTy">الجنسية</label>
                                <input type="text" class="form-control" id="ciTy" placeholder="Nationality">
                            </div>
                            <div class="form-group">
                                <label for="counTry"> البريد الالكتروني</label>
                                <input type="text" class="form-control" id="counTry" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="counTry">تاريخ الانتهاء</label>
                                <input type="date" class="form-control" id="counTry" placeholder="Expire Date">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="form-group">
                                <label for="sTate">نوع الهوية</label>
                                <input type="text" class="form-control" id="sTate" placeholder="ID type">
                            </div>
                            <div class="form-group">
                                <label for="counTry">رقم سند التمثيل</label>
                                <input type="text" class="form-control" id="counTry" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="form-group">
                                <label for="counTry">رقم الهوية</label>
                                <input type="text" class="form-control" id="counTry" placeholder="ID NO.">
                            </div>
                            <div class="form-group">
                                <label for="counTry">نوع المستند</label>
                                <input type="text" class="form-control" id="counTry" placeholder="Type">
                            </div>
                             </div>
                        </div>
                    </div>
                </section>
              
            </div>
        </div>
    </div>
    <!-- Row end -->
    
</div>
<!-- Content wrapper end -->


</div>
@endsection
@section('js')

		<!-- Steps wizard JS -->
        <script src="{{URL::asset('assets/vendor/wizard/jquery.steps.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/wizard/jquery.steps.custom.js')}}"></script>
		
@endsection