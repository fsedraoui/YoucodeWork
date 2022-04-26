<?php $page="projects-fees";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects Fees</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item"><a href="fees">Fees</a></li>
									
									<li class="breadcrumb-item active">Projects Fees</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
									<i class="fas fa-plus"></i>
								</a>
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
											<label>Projects Fees</label>
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
													<th>Name</th>
													<th>Info</th>	
													<th>Value</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														Posting a Project
													</td>
													<td class="white-space">Marks a project as urgent. Receive a faster response from Freelancers to get your project started within 24 hours.</td>
													<td>$500.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Featured 
													</td>
													<td class="white-space">Featured projects attract more,higher-quality bids.</td>
													<td>$450.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														Urgent 
													</td>
													<td class="white-space">Marks a project as urgent. Receive a faster response from Freelancers to get your project started within 24 hours.</td>
													<td>$590.00</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
					<div class="modal-header">
					<h4 class="modal-title">Add Project Fees</h4>
					<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Enter Fee Name">
						</div>
						<div class="form-group">
							<label>Info</label>
							<textarea rows="5" class="form-control" placeholder="Enter Info"></textarea>
						</div>
						<div class="form-group">
							<label>Value</label>
							<input type="text" class="form-control" placeholder="Enter Value">
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
		
		<!-- Edit Modal -->
		<div class="modal fade custom-modal" id="edit-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h4 class="modal-title">Edit Project Fees</h4>
					<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" value="Featured">
						</div>
						<div class="form-group">
							<label>Info</label>
							<textarea rows="5" class="form-control">Featured projects attract more,higher-quality bids.	</textarea>
						</div>
						<div class="form-group">
							<label>Value</label>
							<input type="text" class="form-control" value="$450.00">
						</div>
						<div class="mt-4">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
		<!-- /Edit Modal -->


		<!-- Delete modal -->
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
		<!-- /Delete modal -->
@endsection