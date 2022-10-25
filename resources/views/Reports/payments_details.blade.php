	
    
    
    
    
    
    
    
    
    @extends('layouts.master')
@section('css')
	<!-- Data Tables -->
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/dataTables.bs4-custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/datatables/buttons.bs.css')}}" rel="stylesheet">
       
@endsection
@section('title')
بيانات سداد دفعات الايجار
@stop
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"> ادارة العقود </li>
        <li class="breadcrumb-item active">بيانات سداد دفعات الايجار</li>
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
                                                    <th> الرصيد  المدفوع </th>
                                                    <th> الرصيد  المتبقي </th>
                                                    <th> وصل استلام </th>
												
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
                                                    <td>10/1/1999</td>
													<td>500000</td>
                                                    <td><span class="badge badge-danger"><a href="{{ url('/' . $page='Admin/invoice_details') }}"> print </a></td> 
                                                    
													
												</tr>
                                               
											</tbody>
										</table>
									</div>
								</div>
							</div>

						
						</div>
					</div>

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
    
    
    
    
    
    
    