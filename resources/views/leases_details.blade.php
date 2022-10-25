@extends('layouts.master')
@section('css')
	<!-- Data Tables -->
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4-custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/buttons.bs.css')}}" rel="stylesheet">
       
@endsection
@section('title')
تفاصيل العقد
@stop
@section('content')
	<!-- Content wrapper start -->
    <div class="content-wrapper">


<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="invoice-container">
                    <div class="invoice-header">

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="custom-actions-btns mb-5">
                                    <a href="#" class="btn btn-primary">
                                        <i class="icon-export"></i> Export
                                    </a>
                                    <a href="#" class="btn btn-dark">
                                        <i class="icon-printer"></i> Print
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <a href="index.html" class="invoice-logo">
                                <img src="{{asset('assets/img/fav.png')}}" alt="Enjaz" />
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <address class="text-right">
                                    Enjaz company saudia Arabia <br />
                                    Riyadh, Kingdom Street.<br />
                                    00966484374 
                                </address>
                            </div>
                        </div>
                        <!-- Row end -->

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                                <div class="invoice-details">
                                    <address>
                                         Receipt of monthly rent payment<br />
                                         Tenant name : Ali Mohammed
                                         Lessor's name : ALaa Ahmad

                                    </address>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                                <div class="invoice-details">
                                    <div class="invoice-num">
                                        <div>Invoice - #009</div>
                                        <div>January 10th 2020</div>
                                    </div>
                                </div>													
                            </div>
                         </div>
                        <!-- Row end -->

                    </div>

                    <div class="invoice-body">

                        <!-- Row start -->
                        <h3>بيانات العقد </h3>
                        <div class="row gutters">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <thead>
                        <tr>
                          <th>رقم سجل العقد</th>
                          <th> نوع العقد</th>
                          <th>تاريخ ابرام العقد</th>
                          <th> مكان ابرام العقد</th>
                          <th> تاريخ بداية مدة الايجار</th>
                          <th>تاريخ نهاية مدة الايجار</th>
                          <th> طريقة دفع رسوم العقد</th>
                         
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>Accountant</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                          <td>2008/11/28</td>
                        </tr>
                     
                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                        
                    </div>
                    <div class="invoice-body">

<!-- Row start -->

<div class="row gutters">
    <h3>بيانات المؤجر </h3>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
												<tr>
													<th>نوع المنظمة</th>
													<th>اسم الشركة</th>
													<th> جهة الاصدار</th>
													<th> الرقم الموحد </th>
													<th> رقم السجل التجاري</th>
													<th>تاريخ السجل التجاري</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>1/1/2000</td>
													<td>10/1/2000</td>
													<td>1/1/1999</td>
													<td>10/1/1999</td>
                                                    <td>10/1/1999</td>
													
                                                   
                                                    
													
												</tr>
                                               
											</tbody>
            </table>
        </div>
    </div>
</div>
<div class="row gutters">
    <h3>بيانات ممثل المؤجر </h3>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
												<tr>
													<th> الاسم</th>
													<th> الجنسية</th>
													<th> نوع الهوية </th>
													<th> رقم الجوال </th>
													<th>  البريد الالكتروني</th>
													<th>  رقم سند التمثيل </th>
                                                    <th>  تاريخ الاصدار </th>
                                                    <th>    تاريخ الانتهاء </th>
                                                    <th>  نوع المستند</th>
                                                    <th>  رقم الهوية </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>1/1/2000</td>
													<td>10/1/2000</td>
													<td>1/1/1999</td>
													<td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
												</tr>
                                               
											</tbody>
            </table>
        </div>
    </div>
</div>
<div class="row gutters">
    <h3>بيانات  المستأجر </h3>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
												<tr>
													<th> الاسم</th>
													<th> الجنسية</th>
													<th> نوع الهوية </th>
													<th> رقم الجوال </th>
													<th>  البريد الالكتروني</th>
													<th>  رقم سند التمثيل </th>
                                                    <th>  تاريخ الاصدار </th>
                                                    <th>    تاريخ الانتهاء </th>
                                                    <th>  نوع المستند</th>
                                                    <th>  رقم الهوية </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>1/1/2000</td>
													<td>10/1/2000</td>
													<td>1/1/1999</td>
													<td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
												</tr>
                                               
											</tbody>
            </table>
        </div>
    </div>
</div>
<div class="row gutters">
    <h3>بيانات ممثل المستأجر </h3>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
												<tr>
													<th> الاسم</th>
													<th> الجنسية</th>
													<th> نوع الهوية </th>
													<th> رقم الجوال </th>
													<th>  البريد الالكتروني</th>
													<th>  رقم سند التمثيل </th>
                                                    <th>  تاريخ الاصدار </th>
                                                    <th>    تاريخ الانتهاء </th>
                                                    <th>  نوع المستند</th>
                                                    <th>  رقم الهوية </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>1/1/2000</td>
													<td>10/1/2000</td>
													<td>1/1/1999</td>
													<td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
                                                    <td>10/1/1999</td>
												</tr>
                                               
											</tbody>
            </table>
        </div>
    </div>
</div>


<!-- Row end -->
</div>

                    <div class="invoice-footer">
                        Thank you for your Business.
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
	<!-- Data Tables -->
    <script src="{{URL::asset('assets/vendor/datatables/dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

      
		
		<!-- Custom Data tables -->
        <script src="{{URL::asset('assets/vendor/datatables/custom/custom-datatables.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/custom/fixedHeader.js')}}"></script>


		<!-- Download / CSV / Copy / Print -->
        <script src="{{URL::asset('assets/vendor/datatables/buttons.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/jszip.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/pdfmake.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/vfs_fonts.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/html5.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/datatables/buttons.print.min.js')}}"></script>
@endsection