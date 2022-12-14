@extends('layouts.master')
@section('css')
	<!-- Data Tables -->
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4-custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/buttons.bs.css')}}" rel="stylesheet">
       
@endsection
@section('title')
الوحدات الايجارية
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">ادارة العقارات </li>
        <li class="breadcrumb-item active">  الوحدات الايجارية </li>
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
            <div class="t-header">الوحدات الايجارية </div>
            <div class="table-responsive">
                <table id="copy-print-csv" class="table custom-table">
                    <thead>
                        <tr>
                          <th><a href=""> اسم المنشأة </a></th>
                          <th> <a href="">نوع الوحدة</a> </th>
                          <th>رقم الوحدة</th>
                          <th>رقم الدور</th>
                          <th> <a href="">مساحة الوحدة</a></th>
                          <th>  <a href=""> مؤثثة </a></th>
                          <th>خزائن مطبخ مركبة</th>
                          <th> عدد وحدات التكييف</th>
                          <th>نوع التكييف </th>
                          <th> الحالة</th>
                          <th> اسم المستأجر</th>
                          <th>تاريخ بداية العقد </th>
                          <th> تاريخ نهاية العقد</th>
                          <th> تاريخ  الانتهاء</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>Accountant</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>Accountant</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td><span class="badge badge-danger"> مؤجرة </td> 
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
                          <td>$162,700</td>
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