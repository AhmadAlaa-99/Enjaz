@extends('layouts.master')
@section('css')
	<!-- Data Tables -->
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4-custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/buttons.bs.css')}}" rel="stylesheet">
       
@endsection
@section('title')
بيانات العقود
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">عقود الايجار </li>
        <li class="breadcrumb-item active">بيانات العقود</li>
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
        
    

        <div class="table-container">
            <div class="t-header">بيانات العقود</div>
            <div class="table-responsive">
                <table id="copy-print-csv" class="table custom-table">
                    <thead>
                        <tr>
                          <th>رقم العقد</th>
                          <th>اسم المؤجر</th>
                          <th>اسم المستأجر</th>
                          <th>اسم المنشأة</th>
                          <th>نوع الوحدة</th>
                          <th>رقم الوحدة</th>
                          <th>الكلفة الاجمالية للعقد</th>
                          <th>نوع العقد</th>
                          <th>تاريخ الدفعة التالية</th>
                          <th>تاريخ بداية العقد</th>
                          <th>تاريخ نهاية العقد</th>
                          <th>العمليات</th>
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
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="edit Row">
															<i class="icon-edit"></i>
														</a>
														
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete Row">
															<i class="icon-cancel"></i>
														</a>
                                                        <a href="{{ url('/' . $page='Admin/lease_details') }}" class="icon blue" data-toggle="tooltip" data-placement="top" title="details">
															<i class="icon-show"></i>
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