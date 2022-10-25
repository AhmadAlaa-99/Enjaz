<!-- Navigation start -->
<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ENJAZAdminNavbar" aria-controls="ENJAZAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="ENJAZAdminNavbar">
					<ul class="navbar-nav">
			

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-person nav-icon"></i>
								ملاك العقارات
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/owners/create') }}" >اضافة مالك عقار</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/owners') }}">بيانات الملاك</a>
								</li>	
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-people nav-icon"></i>
								 ادارة المستأجرين
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/tenants') }}">بيانات  المستأجرين</a>
								</li>
								
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/archive_tenants') }}">ارشيف بيانات المستأجرين</a>
								</li>	
									
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-refresh nav-icon"></i>
								  طلبات الصيانة
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li>
									<a class="dropdown-item"  href="{{ url('/' . $page='Admin/maintenances') }}">الطلبات المنجزة </a>
								</li>
								<li>    
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/maintenances_wait') }}">  الطلبات المعلقة</a>
								</li>	
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/maintenances_refuse') }}">  الطلبات المرفوضة</a>
								</li>
								
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-home nav-icon"></i>
								 ادارة العقارات
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
							<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/realties/create') }}" >اضافة منشأة عقارية</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/realties') }}">المنشات العقارية</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/units') }}" >الوحدات الايجارية</a>
								</li>	
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-pencil nav-icon"></i>
								  ادارة العقود
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/leases/create') }}">اضافة عقد</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/leases')}}">بيانات العقود</a>
								</li>	
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-dollar-sign nav-icon"></i>
								   السجل المالي
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								
								<li>
								<a class="dropdown-item" href="{{ url('/' . $page='Admin/maintenance_payments') }}">مدفوعات الصيانة</a>
								<li>
									<a class="dropdown-toggle sub-nav-link" href="#" id="layoutsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										حركة التأجير
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
										<li>
											<a class="dropdown-item" href="{{ url('/' . $page='Admin/effictive') }}">العقود الجارية</a>
										</li>
										<li>
											<a class="dropdown-item" href="{{ url('/' . $page='Admin/finished') }}">العقود المنتهية</a>
										</li>
										
									
								</li>
							</ul>
						</li>
                                     <!--
                                     
								    <a class="dropdown-item" href="{{ url('/' . $page='Admin/contract_payments') }}">مدفوعات العقود</a>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/maintenance_payments') }}">مدفوعات الصيانة</a>
									<a class="dropdown-item" href="{{ url('/' . $page='Admin/rental_traffic') }}">حركة التأجير</a>
                                    -->
									
								</li>	
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-sync nav-icon"></i>
								     الاعدادات
							</a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								
								<li> 
								<a class="dropdown-item" href="{{ url('/' . $page='Admin/tasks') }}">ادارة المهام</a>
								<a class="dropdown-item" href="{{ url('/' . $page='Admin/statistics') }}">الاحصائيات</a>
								<a class="dropdown-item" href="{{ url('/' . $page='Admin/settings') }}">اعدادات الحساب</a>
								
								</li>	
							</ul>
						</li>
					
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->