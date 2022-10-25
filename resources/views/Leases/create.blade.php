@extends('layouts.master')
@section('css')
<!-- Steps Wizard CSS -->
<link href="{{URL::asset('assets/vendor/wizard/jquery.steps.css')}}" rel="stylesheet">
@endsection
@section('title')
اضافة عقد
@stop

@section('content')
<div class="main-container">


<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">عقود الايجار </li>
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

            <h3>بيانات العقد</h3>
                <section>
                <h3>بيانات العقد</h3>
                    <div class="row gutters">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                            <div class="form-group">
                                <label for="fullName">رقم سجل العقد</label>
                                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
                            </div>
                            <div class="form-group">
                                <label for="eMail"> مكان ابرام العقد</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                            <div class="form-group">
                                <label for="eMail"> طريقة دفع رسوم العقد</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="eMail">نوع العقد</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
                            </div>
                            <div class="form-group">
                                <label for="eMail">تاريخ بداية مدة الايجار</label>
                                <input type="date" class="form-control" id="eMail" placeholder=" CR NO.">
                            </div>
                          
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="phone">تاريخ ابرام العقد</label>
                                <input type="date" class="form-control" id="phone" placeholder=" Issued by">
                            </div>
                            <div class="form-group">
                                <label for="phone">تاريخ نهاية مدة الايجار</label>
                                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                        </div>
                    </div>
                </section>
                <h3>بيانات المؤجر </h3>
                <section>
                <h3>بيانات المؤجر </h3>
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
                    <h3>بيانات ممثل المؤجر </h3>
                    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">الاسم </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail"> رقم الجوال</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">  تاريخ الاصدار </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="phone"> رقم  الهوية</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail">الجنسية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail"> البريد الالكتروني</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
            <div class="form-group">
                <label for="eMail">تاريخ الانتهاء</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
          
          
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="phone"> نوع الهوية</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
            <div class="form-group">
                <label for="phone">رقم سند التمثيل</label>
                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
            </div>
            <div class="form-group">
                <label for="phone">نوع المستند</label>
                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
            </div>
        </div>
      
    </div>
                </section>

                <h3>بيانات المستأجر </h3>
                <section>
                <h3>بيانات المستأجر </h3>
                    <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="fullName">الاسم </label>
                                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
                            </div>
                            <div class="form-group">
                                <label for="eMail"> رقم الهوية</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="eMail">الجنسية</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
                            </div>
                            <div class="form-group">
                                <label for="eMail">رقم الجوال</label>
                                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
                            </div>
                          
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label for="phone"> نوع الهوية</label>
                                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
                            </div>
                            <div class="form-group">
                                <label for="phone">البريد الالكتروني</label>
                                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
                            </div>
                        </div>
                    </div>
                    <h3>بيانات ممثل المستأجر </h3>
                    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">الاسم </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail"> رقم الهوية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail">الجنسية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail">رقم الجوال</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
          
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="phone"> نوع الهوية</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
            <div class="form-group">
                <label for="phone">البريد الالكتروني</label>
                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
            </div>
        </div>
    </div>
                </section>


<h3>بيانات  المنشأة العقارية </h3>
<section>
<h3>بيانات  المنشأة العقارية </h3>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">اسم المنشأة العقارية </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail">عنوان المنشأة العقارية </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail">رقم السجل التجاري</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail">رقم الجوال</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="phone">  رقم الفاكس</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">اسم  الوسيط </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail">رقم الهوية </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail">الجنسية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail">رقم الجوال</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="phone"> نوع الهوية</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
            <div class="form-group">
                <label for="phone"> البريد الالكتروني  </label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
        </div>
    </div>
    <h3>بيانات الوسيط العقاري </h3>
<div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-dark m-0">
                                        <thead>
                                            <tr>
                                                <th>اسم الوسيط</th>
                                                <th> الجنسية</th>
                                                <th>نوع الهوية </th>
                                                <th>رقم الهوية</th>
                                                <th>رقم الجوال</th>
                                                <th>البريد الالكتروني</th>
                                             
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>احمد علاء الدين</td>
                                                <td>سوري</td>
                                                <td>رقمي</td>
                                                <td>9045902359-05-9</td>
                                                <td>9045902359</td>
                                                <td>Ahmad@gmail.com</td>
                                                
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        

                    </div>
</div>
   
    <h3>بيانات الوحدات الأيجارية </h3>
<div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-dark m-0">
                                        <thead>
                                            <tr>
                                                <th>اسم الوحدة</th>
                                                <th>نوع الوحدة</th>
                                                <th>رقم الوحدة</th>
                                                <th>رقم الدور</th>
                                                <th>مساحة الوحدة</th>
                                                <th>مؤثثة</th>
                                                <th> خزائن مطبخ مركبة </th>
                                                <th> عدد وحدات التكييف</th>
                                                <th> نوع التكييف</th>
                                                <th>  رقم عداد الغاز</th>
                                                <th>  القراءة الحالية</th>
                                                <th> رقم عداد الكهرباء</th>
                                                <th> القراءة الحالية </th>
                                                <th> رقم عداد المياه</th>
                                                <th> القراءة الحالية </th>
                                                <th>  العمليات </th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1/1/2000</td>
                                                <td>10/1/2000</td>
                                                <td>1/1/1999</td>
                                                <td>10/1/1999</td>
                                                <td>500000</td>
                                                <td>1</td>
                                                <td>1/1/2000</td>
                                                <td>10/1/2000</td>
                                                <td>1/1/1999</td>
                                                <td>10/1/1999</td>
                                                <td>500000</td>
                                                <td>500000</td>
                                                <td>500000</td>
                                                <td>500000</td>
                                                <td>
                                                <div class="td-actions">
                                                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Add Row">
                                                        <i class="icon-circle-with-plus"></i>
                                                    </a>
                                                    <a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Save Row">
                                                        <i class="icon-save"></i>
                                                    </a>
                                                    <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete Row">
                                                        <i class="icon-cancel"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        

                    </div>
</div>
 

</section>
<h3>بيانات صكوك التملك </h3>
<section>
<h3>بيانات صكوك التملك </h3>
    <div class="row gutters">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">رقم الصك</label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail"> تاريخ الاصدار </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
         
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail"> جهة الاصدار</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail"> مكان الاصدار</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
          
        </div>

      
    </div>
</section>
<h3> التأجير من الباطن </h3>
<section>
<h3> التأجير من الباطن </h3>
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="fullName">الاسم </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail"> رقم الهوية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="eMail">الجنسية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Company Name">
            </div>
            <div class="form-group">
                <label for="eMail">رقم الجوال</label>
                <input type="email" class="form-control" id="eMail" placeholder=" CR NO.">
            </div>
          
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="form-group">
                <label for="phone"> نوع الهوية</label>
                <input type="text" class="form-control" id="phone" placeholder=" Issued by">
            </div>
            <div class="form-group">
                <label for="phone">البريد الالكتروني</label>
                <input type="date" class="form-control" id="phone" placeholder=" CR Date">
            </div>
        </div>
    </div>
</section>
<h3>البيانات المالية</h3>
<section>
<h3>البيانات المالية</h3>
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="form-group">
                <label for="eMail">أجرة السعي</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail"> الأجرة السنوية للمياه</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail"> دفعة الايجار الدورية</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="fullName"> اجمالي قيمة العقد  </label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="form-group">
                <label for="fullName">مبلغ الضمان</label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail"> الأجرة السنوية للمواقف</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">دورة سداد الايجار</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">قنوات الدفع المتاحة</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="form-group">
                <label for="fullName">الأجرة السنوية للكهرباء</label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail">القيمة السنوية للايجار</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">دفعة الايجار الأخيرة </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="fullName"> مبلغ الغرامة</label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="form-group">
                <label for="fullName">الأجرة السنوية للغاز</label>
                <input type="text" class="form-control" id="fullName" placeholder=" Organization type">
            </div>
            <div class="form-group">
                <label for="eMail">عدد المواقف المستأجرة </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">عدد دفعات الايجار </label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
            <div class="form-group">
                <label for="eMail">  مبلغ العربون</label>
                <input type="email" class="form-control" id="eMail" placeholder=" Unified Number">
            </div>
        </div>
      
    </div>

   
    <h3> جدول سداد الدفعات </h3>
    <div class="row gutters">
    
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-dark m-0">
											<thead>
												<tr>
													<th>الرقم التسلسلي</th>
													<th> تاريخ الاصدار (م)</th>
													<th>تاريخ الاستحقاق (م)</th>
													<th>تاريخ الاصدار (ه)</th>
													<th>تاريخ الاستحقاق (ه)</th>
													<th>اجمالي القيمة </th>
                                                    <th> العمليات </th>
												
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>1/1/2000</td>
													<td>10/1/2000</td>
													<td>1/1/1999</td>
													<td>10/1/1999</td>
													<td>500000</td>
													<td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Add ">
															<i class="icon-circle-with-plus"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Edit">
															<i class="icon-edit"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete">
															<i class="icon-cancel"></i>
														</a>
													</div>
												</td>
												</tr>
                                              
											</tbody>
										</table>
									</div>
								</div>
							</div>

							

						</div>
 	</div>

   
</section>
</section>


<h3> التزامات الأطراف </h3>
<section>
<h3> التزامات الأطراف </h3>
<div class="row gutters">
    
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-dark m-0">
                        <thead>
                            <tr>
                                <th>رقم المادة</th>
                                <th>عنوان المادة</th>
                                <th>تفاصيل </th>
                                
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1/1/2000</td>
                                <td>10/1/2000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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