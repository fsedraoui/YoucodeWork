<?php $page="providers";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Providers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item active">Providers</li>
								</ul>
							</div>
							<div class="col-auto">
								<a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
									<i class="fas fa-filter"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="card filter-card" id="filter_inputs">
						<div class="card-body pb-0">
							<form action="#" method="post">
								<div class="row filter-row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Company Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>From Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>To Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<button class="btn btn-primary btn-block" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /Search Filter -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>Logo</th>
													<th>Company name</th>
													<th>Primary contact</th>	
													<th>website</th>	
													<th>Total Projects</th>	
													<th>Status</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck5">
														  <label class="form-check-label" for="customCheck5"></label>
														</div>
													</td>
													<td>C1</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-1.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">Focused Holistic Hardware</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Emily Smith
															</a>
														</h2>			
													</td>
													<td>https://focusedhardware.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck1">
														  <label class="form-check-label" for="customCheck1"></label>
														</div>
													</td>
													<td>C2</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-2.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Phased Actuating Interface</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Joshuah Runolfsdottir
															</a>
														</h2>			
													</td>
													<td>https://phasedactuating.com</td>
													<td>
														132
													</td>
													<td>
														<a href="#" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck2">
														  <label class="form-check-label" for="customCheck2"></label>
														</div>
													</td>
													<td>C3</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-3.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Intuitive Global Encoding</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Amy Wilkinson
															</a>
														</h2>			
													</td>
													<td>https://globalencoding.com</td>
													<td>
														90
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck3">
														  <label class="form-check-label" for="customCheck3"></label>
														</div>
													</td>
													<td>C4</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-4.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Visionary Scalable Alliance</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Jimmy Richardson
															</a>
														</h2>			
													</td>
													<td>https://visionaryscalable.com</td>
													<td>
														110
													</td>
													<td>
														<a href="#" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck4">
														  <label class="form-check-label" for="customCheck4"></label>
														</div>
													</td>
													<td>C5</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-5.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Self-Enabling Neutral Matrix</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Damon Cohn
															</a>
														</h2>			
													</td>
													<td>https://neutralmatrix.com</td>
													<td>
														158
													</td>
													<td>
														<a href="#" class="btn btn-disable">Disable</a>
													</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck6">
														  <label class="form-check-label" for="customCheck6"></label>
														</div>
													</td>
													<td>C6</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-6.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Amaze Tech</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Jacqueline Daye
															</a>
														</h2>			
													</td>
													<td>https://amazetech.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck7">
														  <label class="form-check-label" for="customCheck7"></label>
														</div>
													</td>
													<td>C7</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-7.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Park Inc</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Tony Ingle
															</a>
														</h2>			
													</td>
													<td>https://parkinc.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck8">
														  <label class="form-check-label" for="customCheck8"></label>
														</div>
													</td>
													<td>C8</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-8.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Tech Zone</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Albert Boone
															</a>
														</h2>			
													</td>
													<td>https://techzone.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck9">
														  <label class="form-check-label" for="customCheck9"></label>
														</div>
													</td>
													<td>C9</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-9.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">ABC Software</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Kathleen Kaiser
															</a>
														</h2>			
													</td>
													<td>https://abcsoftware.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck10">
														  <label class="form-check-label" for="customCheck10"></label>
														</div>
													</td>
													<td>C10</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-10.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Host Technologies</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																Mickey Bernier
															</a>
														</h2>			
													</td>
													<td>https://hosttechnologies.de</td>
													<td>
														120
													</td>
													<td>
														<a href="#" class="btn btn-disable">Disable</a>
													</td>
													
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>			
						</div>
						
					</div>			
				</div>
				<!-- /Page Wrapper -->
			</div>
        </div>
		<!-- /Main Wrapper -->
		<!-- Category Modal -->
		<div class="modal fade custom-modal" id="add-category">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header flex-wrap">
		        <h4 class="modal-title">Edit Provider</h4>
		        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		     	<form>
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" value="Focused Holistic Hardware">
					</div>
					<div class="form-group">
						<label>Primary Contact</label>
						<input type="text" class="form-control" value="Emily Smith">
					</div>
					<div class="form-group">
						<label>Website</label>
						<input type="text" class="form-control" value="https://focusedhardware.de">
					</div>
					<div class="form-group">
						<label>Total Projects</label>
						<input type="text" class="form-control" value="120">
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control form-select">
							<option selected>Enabled</option>
							<option>Disable</option>
						</select>
					</div>
					<div class="mt-4">
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
		     	</form>
		      </div>

		    </div>
		  </div>
		</div>
		<!-- /Category Modal -->

		<!-- Delete Modal -->
		<div class="modal custom-modal fade" id="delete_category" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->
@endsection