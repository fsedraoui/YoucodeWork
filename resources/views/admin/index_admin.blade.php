<?php $page="index_admin_admin_admin";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Dashboard</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin_admin">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						<div class="row">
						<div class="col-md-8">
							<!--/Wizard-->
							<div class="row">
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Users</p>
											<h5>1682</h5>
											<p><a href="users">view details</a></p>
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-users"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Completed Projects</p>
											<h5>15k</h5>
											<p><a href="projects">view details</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-th-large"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Active Projects</p>
											<h5>1568</h5>
											<p><a href="projects">view details</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-bezier-curve"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<!--/Wizard-->
							<div class="row">
								<div class="col-lg-12 d-flex">
									<div class="card w-100">
										<div class="card-body pt-0 pb-2">
											<div class="card-header">
												<h5 class="card-title">Over view</h5>
											</div>
											<div id="chart" class="mt-4"></div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-md-4 d-flex">
							<div class="card w-100">
								<div class="card-body pt-0">
									<div class="card-header">
										<div class="row">
											<div class="col-7">
												<p>Welcome back,</p>
												<h6 class="text-primary">Super Admin</h6>
											</div>
											<div class="col-5 text-end">
												<span class="welcome-dash-icon bg-1">
													<i class="fas fa-user"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="account-balance">
										<p>Account balance</p>
										<h6>$50,000,00 </h6>
									</div>
									<div class="mt-3">
										<h6 class="text-primary">Payments</h6>
										<div class="table-responsive">
											<table class="table table-center table-hover mb-0">
												<thead>
													<tr>
														<th class="text-nowrap">Client or Freelancer</th>
														<th>Amount</th>
														<th class="text-end">Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-nowrap">Sakib Khan</td>
														<td>$2222</td>
														<td class="text-end">Completed</td>
													</tr>
													<tr>
														<td class="text-nowrap">Pixel Inc Ltd</td>
														<td>$750</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-success me-2"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger me-2"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-nowrap">Jon M Mullins</td>
														<td>$3150</td>
														<td class="text-end text-nowrap">Money released to Freelancer</td>
													</tr>
													<tr>
														<td class="text-nowrap">Rose M Milewski</td>
														<td>$1455</td>
														<td class="text-end text-nowrap">Money returned to Client</td>
													</tr>
													<tr>
														<td class="text-nowrap">Gerald K Myers</td>
														<td>$3000</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-success me-2"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger me-2"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-nowrap">Marcin Kowalski</td>
														<td>$895</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-success me-2"><i class="far fa-edit"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger me-2"><i class="far fa-trash-alt"></i></a>
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
					<div class="row">
						<div class="col-lg-12">
							<div class="card bg-white projects-card">
								<div class="card-body pt-0">
									<div class="card-header">
										<h5 class="card-title">Reviews</h5>
									</div>
									<div class="reviews-menu-links">
										<ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
											<li class="nav-item">
												<a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All (272)</a>
											</li>
											<li class="nav-item">
												<a href="#tab-5" data-bs-toggle="tab" class="nav-link">Active (218)</a>
											</li>
											<li class="nav-item">
												<a href="#tab-6" data-bs-toggle="tab" class="nav-link"> Pending Approval (03)
												</a>
											</li>
											<li class="nav-item">
												<a href="#tab-7" data-bs-toggle="tab" class="nav-link">Trash (0)</a>
											</li>
										</ul>
									</div>

									<div class="tab-content pt-0">
										<div role="tabpanel" id="tab-4" class="tab-pane fade active show">
											<div class="table-responsive">
												<table class="table table-hover table-center mb-0 datatable">
													<thead>
														<tr>
															<th></th>
															<th>Profile</th>	
															<th>Designation</th>	
															<th>comments</th>	
															<th>Stars</th>	
															<th>Category</th>
															<th class="text-end">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck1">
																  <label class="form-check-label" for="customCheck1"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-14.jpg" alt="User Image">
																	Janet Paden
																	</a>
																</h2>
															</td>
															<td>
																CEO
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck2">
																  <label class="form-check-label" for="customCheck2"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image">
																		George Wells
																	</a>
																</h2>
															</td>
															<td>
																Tech Lead
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Node
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck3">
																  <label class="form-check-label" for="customCheck3"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-15.jpg" alt="User Image">
																		Timothy Smith
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck10">
																  <label class="form-check-label" for="customCheck10"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-16.jpg" alt="User Image">
																		Lois Alexander
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Laravel
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck4">
																  <label class="form-check-label" for="customCheck4"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-03.jpg" alt="User Image">
																		Sara Grayson
																	</a>
																</h2>
															</td>
															<td>
																Developer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck5">
																  <label class="form-check-label" for="customCheck5"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-04.jpg" alt="User Image">
																		Deboarah
																	</a>
																</h2>
															</td>
															<td>
																Associate Engineer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																React
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck6">
																  <label class="form-check-label" for="customCheck6"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-11.jpg" alt="User Image">
																		Sofia Briant
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																JAVA
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck7">
																  <label class="form-check-label" for="customCheck7"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image">
																		Bess Twishes
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																.NET
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck8">
																  <label class="form-check-label" for="customCheck8"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image">
																		Rayan Lester
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Python
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck9">
																  <label class="form-check-label" for="customCheck9"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image">
																		Sarah Alexander
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Golang
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
													
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" id="tab-5" class="tab-pane fade">
											<div class="table-responsive">
												<table class="table table-center table-bordered table-hover datatable">
													<thead>
														<tr>
															<th></th>
															<th>Profile</th>
															<th>Designation</th>	
															<th>comments</th>	
															<th>Stars</th>	
															<th>Category</th>
															<th class="text-end">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck11">
																  <label class="form-check-label" for="customCheck11"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-04.jpg" alt="User Image">
																		Deboarah
																	</a>
																</h2>
															</td>
															<td>
																Associate Engineer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																React
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck12">
																  <label class="form-check-label" for="customCheck12"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-11.jpg" alt="User Image">
																		Sofia Briant
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																JAVA
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck13">
																  <label class="form-check-label" for="customCheck13"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image">
																		Bess Twishes
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																.NET
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck14">
																  <label class="form-check-label" for="customCheck14"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image">
																		Rayan Lester
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Python
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck15">
																  <label class="form-check-label" for="customCheck15"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image">
																		Sarah Alexander
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Golang
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck16">
																  <label class="form-check-label" for="customCheck16"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-14.jpg" alt="User Image">
																	Janet Paden
																	</a>
																</h2>
															</td>
															<td>
																CEO
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck17">
																  <label class="form-check-label" for="customCheck17"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image">
																		George Wells
																	</a>
																</h2>
															</td>
															<td>
																Tech Lead
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Node
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck18">
																  <label class="form-check-label" for="customCheck18"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-15.jpg" alt="User Image">
																		Timothy Smith
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>											
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" id="tab-6" class="tab-pane fade">
											<div class="table-responsive">
												<table class="table table-bordered table-hover datatable">
													<thead>
														<tr>
															<th></th>
															<th>Profile</th>	
															<th>Designation</th>	
															<th>comments</th>	
															<th>Stars</th>	
															<th>Category</th>
															<th class="text-end">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck21">
																  <label class="form-check-label" for="customCheck21"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image">
																		Albert Boone
																	</a>
																</h2>
															</td>
															<td>
																CEO
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																React
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck22">
																  <label class="form-check-label" for="customCheck22"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-14.jpg" alt="User Image">
																	Janet Paden
																	</a>
																</h2>
															</td>
															<td>
																CEO
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck23">
																  <label class="form-check-label" for="customCheck23"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image">
																		George Wells
																	</a>
																</h2>
															</td>
															<td>
																Tech Lead
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Node
															</td>
															
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck24">
																  <label class="form-check-label" for="customCheck24"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-15.jpg" alt="User Image">
																		Timothy Smith
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck25">
																  <label class="form-check-label" for="customCheck25"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image">
																		Jessie Montoya
																	</a>
																</h2>
															</td>
															<td>
																PROJECT LEAD
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Node
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck26">
																  <label class="form-check-label" for="customCheck26"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-10.jpg" alt="User Image">
																		Gary Green
																	</a>
																</h2>
															</td>
															<td>
																TEAM LEAD
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Angular
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck27">
																  <label class="form-check-label" for="customCheck27"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-11.jpg" alt="User Image">
																		Sofia Briant
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																JAVA
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck28">
																  <label class="form-check-label" for="customCheck28"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image">
																		Bess Twishes
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																.NET
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck29">
																  <label class="form-check-label" for="customCheck29"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image">
																		Rayan Lester
																	</a>
																</h2>
															</td>
															<td>
																Technial Manager
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Python
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox">
																  <input type="checkbox" class="form-check-input" id="customCheck30">
																  <label class="form-check-label" for="customCheck30"></label>
																</div>
															</td>
															<td>
																<h2 class="table-avatar">
																	<a href="profile"><img class="avatar-img rounded-circle me-2" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image">
																		Sarah Alexander
																	</a>
																</h2>
															</td>
															<td>
																Designer
															</td>
															<td>
																<div class="desc-info">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat
																</div>
															</td>
															<td class="text-nowrap">
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-primary"></i>
																<i class="fas fa-star text-muted"></i>
															</td>
															<td>
																Golang
															</td>
															<td class="text-end text-nowrap">
																<a href="javascript:void(0);" class=" btn btn-approve text-white me-2">Approve</a>
																<a href="javascript:void(0);" class="btn btn-disable">Enable</a>
															</td>
														</tr>
													
													</tbody>
												</table>
											</div>
										</div>
										<div role="tabpanel" id="tab-7" class="tab-pane fade">
											<div class="table-responsive">
												<table class="table table-bordered table-hover datatable">
													<thead>
														<tr>
															<th></th>
															<th>Profile</th>
															<th>Designation</th>	
															<th>comments</th>	
															<th>Stars</th>	
															<th>Category</th>
															<th class="text-end">Actions</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			<!-- /Page Wrapper -->
		
        	</div>
		<!-- /Main Wrapper -->
		</div>
@endsection