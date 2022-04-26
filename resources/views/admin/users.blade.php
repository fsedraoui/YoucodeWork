<?php $page="users";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Users</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									
									<li class="breadcrumb-item active">Users</li>
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
											<label>Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control">										
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Expertise</label>
											<input type="text" class="form-control">
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
													<th>Image</th>
													<th>Email</th>	
													<th>Expertise</th>	
													<th>Joined date</th>	
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
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image">
																George Wells
															</a>
														</h2>
													</td>
													<td>georgewells@example.com</td>
													<td>
														<button class="btn table-btn">Frontend Developer</button>
													</td>
													<td>28-02-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image">
																Floyd Lewis
															</a>
														</h2>
													</td>
													<td>floydlewis@example.com</td>
													<td>
														<button class="btn table-btn">Graphics Designer</button>
													</td>
													<td>14-01-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-03.jpg" alt="User Image">
															Veronica Cheek</a>
														</h2>
													</td>
													<td>veronicacheek@example.com</td>
													<td>
														<button class="btn table-btn">Web Developer</button>
													</td>
													<td>23-11-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
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
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-04.jpg" alt="User Image">
															Crystal Kemper</a>
														</h2>
													</td>
													<td>crystalkemper@example.com</td>
													<td>
														<button class="btn table-btn">Web Designer</button>
													</td>
													<td>23-01-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
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
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image">
															Andrew Glover</a>
														</h2>
													</td>
													<td>andrewglover@example.com</td>
													<td>
														<button class="btn table-btn">IOS Developer</button>
													</td>
													<td>23-01-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image">Jacqueline Daye</a>
														</h2>
													</td>
													<td>jacquelinedaye@example.com</td>
													<td>
														<button class="btn table-btn">Vuejs Developer</button>
													</td>
													<td>12-02-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-07.jpg" alt="User Image">Tony Ingle</a>
														</h2>
													</td>
													<td>tonyingle@example.com</td>
													<td>
														<button class="btn table-btn">Laravel Developer</button>
													</td>
													<td>12-02-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-08.jpg" alt="User Image">Albert Boone</a>
														</h2>
													</td>
													<td>albertboone@example.com</td>
													<td>
														<button class="btn table-btn">Codingnator Developer</button>
													</td>
													<td>12-02-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-09.jpg" alt="User Image">Kathleen Kaiser</a>
														</h2>
													</td>
													<td>kathleenkaiser@example.com</td>
													<td>
														<button class="btn table-btn">Golang Developer</button>
													</td>
													<td>12-01-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
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
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-10.jpg" alt="User Image">Mickey Bernier</a>
														</h2>
													</td>
													<td>mickeybernier@example.com</td>
													<td>
														<button class="btn table-btn">.Net Developer</button>
													</td>
													<td>12-02-2022</td>
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
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Add Modal -->
		<div class="modal fade custom-modal" id="add-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<div class="modal-header flex-wrap">
						<div class="text-center w-100 mb-3">
							<img src="../assets_admin/img/logo-small.png" alt="">
						</div>
						<h4 class="modal-title">Add New User</h4>
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
					</div>

					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>User Type</label>
								<select class="form-control form-select">
									<option>Select</option>
									<option>Frontend Developer</option>
									<option>Graphic Designer</option>
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
		<!-- Add Modal -->
		
		<!-- Add Modal -->
		<div class="modal fade custom-modal" id="edit-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<div class="modal-header flex-wrap">
						<div class="text-center w-100 mb-3">
							<img src="../assets_admin/img/logo-small.png" alt="">
						</div>
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
					</div>

					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control" value=" George Wells">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" value="georgewells@example.com">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" value="*******">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" value="********">
							</div>
							<div class="form-group">
								<label>User Type</label>
								<select class="form-control form-select">
									<option>Select</option>
									<option selected>Frontend Developer</option>
									<option>Graphic Designer</option>
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
		<!-- Add Modal -->

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