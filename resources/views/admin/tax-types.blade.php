<?php $page="tax-types";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-6">
								<h3 class="page-title">Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a>
									</li>
									<li class="breadcrumb-item active">Tax Types</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-xl-3 col-md-4">
						
							<!-- Settings Menu -->
							<div class="widget settings-menu">
								<ul>
									<li class="nav-item">
										<a href="settings" class="nav-link">
											<i class="far fa-user"></i> <span>Profile Settings</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="tax-types" class="nav-link active">
											<i class="far fa-check-square"></i> <span>Tax Types</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="change-password" class="nav-link">
											<i class="fas fa-unlock-alt"></i> <span>Change Password</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="delete-account" class="nav-link">
											<i class="fas fa-ban"></i> <span>Delete Account</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- /Settings Menu -->
							
						</div>
						
						<div class="col-xl-9 col-md-8">
							<div class="card card-table">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<div class="row">
											<div class="col">
												<h5 class="card-title">Tax Types</h5>
											</div>
											<div class="col-auto">
												<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_tax">Add New Tax</a>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0">
											<thead>
												<tr>
													<th>Tax Name </th>
													<th>Tax Percentage (%) </th>
													<th>Status</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>VAT</td>
													<td>14%</td>
													<td>
														<span class="badge bg-success-light">Active</span>
													</td>
													<td class="text-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>GST</td>
													<td>30%</td>
													<td>
														<span class="badge bg-danger-light">Inactive</span>
													</td>
													<td class="text-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Add Tax Modal -->
					<div id="add_tax" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Tax</h5>
									<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label>Tax Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Tax Percentage (%) <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Status <span class="text-danger">*</span></label>
											<select class="form-control form-select">
												<option>Pending</option>
												<option>Approved</option>
											</select>
										</div>
										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Add Tax Modal -->
					
					<!-- Edit Tax Modal -->
					<div id="edit_tax" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Tax</h5>
									<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label>Tax Name <span class="text-danger">*</span></label>
											<input class="form-control" value="VAT" type="text">
										</div>
										<div class="form-group">
											<label>Tax Percentage (%)  <span class="text-danger">*</span></label>
											<input class="form-control" value="14%" type="text">
										</div>
										<div class="form-group">
											<label>Status <span class="text-danger">*</span></label>
											<select class="form-control form-select">
												<option>Active</option>
												<option>Inactive</option>
											</select>
										</div>
										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Edit Tax Modal -->
					
					<!-- Delete Tax Modal -->
					<div class="modal custom-modal fade" id="delete_tax" role="dialog">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<div class="modal-icon text-center mb-3">
										<i class="fas fa-trash-alt text-danger"></i>
									</div>
									<div class="modal-text text-center">
										<h2>Delete Tax</h2>
										<p>Are you sure want to delete?</p>
									</div>
								</div>
								<div class="modal-footer text-center">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary">Delete</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Delete Tax Modal -->
					
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@endsection