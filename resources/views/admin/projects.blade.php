<?php $page="projects";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item active">Projects</li>
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
											<label>Titre du Projet</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Date de création</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Date dernière modification</label>
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

					<div class="card bg-white projects-card">
						<div class="card-body pt-0">
							<div class="card-header">
								<h5 class="card-title">Projects views</h5>
							</div>
							<div class="reviews-menu-links">
								<ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
									<li class="nav-item">
										<a href="#tab-4" data-bs-toggle="tab" class="nav-link active">All (272)</a>
									</li>
									<li class="nav-item">
										<a href="#tab-5" data-bs-toggle="tab" class="nav-link">Validés (218)</a>
									</li>
									<li class="nav-item">
										<a href="#tab-6" data-bs-toggle="tab" class="nav-link"> En instance (03)
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
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<!-- <th>Avatar</th> -->
													<th>Titre</th>	
													<th>Date de création</th>	
													<th>Date de Modification</th>	
													<th>GitHub</th>	
													<th>Collaborateurs</th>	
													<th>Status</th>	
													<th>Due date</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
											@foreach($instructor->projects as $project)
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck1">
														  <label class="form-check-label" for="customCheck1"></label>
														</div>
													</td>
													<!-- <td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-1.png" alt="User Image"></a>
														</h2>
													</td> -->
													
													<td>{{$project->name}}</td>
													<td>
													{{ \Carbon\Carbon::parse($project->created_at)->translatedFormat('j F, Y') }}
													</td>
													<td>
													{{ \Carbon\Carbon::parse($project->updated_at)->translatedFormat('j F, Y') }}
													</td>
													<td>
													{{$project->repoLink}}
													</td>
													<td> @foreach($project->students as $student)
													{{$student->firstName}}, 
																													
														@endforeach</td>
													<td>
														@if($project->status == 'PENDING') <button type="button" class="btn btn-warning btn-sm">En instance</button> @endif
														@if($project->status == 'ACCEPTED') <button type="button" class="btn btn-success btn-sm">Validé</button> @endif
												
												 </td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" id="tab-5" class="tab-pane fade">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>Logo</th>
													<th>Title</th>	
													<th>Budget</th>	
													<th>Progress</th>	
													<th>Technology</th>	
													<th>Company</th>	
													<th>Start date</th>	
													<th>Due date</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck11">
														  <label class="form-check-label" for="customCheck11"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-5.png" alt="User Image"></a>
														</h2>
													</td>													
													<td>Website Designer Required For Directory Theme</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Node js
													</td>
													<td>Dreamguystech</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck12">
														  <label class="form-check-label" for="customCheck12"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-7.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Designer Required For Directory</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Java
													</td>
													<td>Kind Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck13">
														  <label class="form-check-label" for="customCheck13"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-8.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is therefore always free content</td>
													<td>
														$7789
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Python
													</td>
													<td>Particles INC</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck14">
														  <label class="form-check-label" for="customCheck14"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-9.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Required For Website Developer</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Codingnator
													</td>
													<td>Kind Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck15">
														  <label class="form-check-label" for="customCheck15"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-10.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is therefore always free</td>
													<td>
														$7789
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														React
													</td>
													<td>Particles INC</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck16">
														  <label class="form-check-label" for="customCheck16"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-6.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>combined with a handful of model sentence structures</td>
													<td>
														$1500
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														.Net
													</td>
													<td>Dreamguystech</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck17">
														  <label class="form-check-label" for="customCheck17"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-1.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Website Designer Required For Directory Theme</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Angular
													</td>
													<td>AMAZE TECH</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck18">
														  <label class="form-check-label" for="customCheck18"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-2.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is simply dummy text of</td>
													<td>
														$5755
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Laravel
													</td>
													<td>Park INC </td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck19">
														  <label class="form-check-label" for="customCheck19"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-3.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>It is a long established fact that a reader</td>
													<td>
														$5755
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Vue
													</td>
													<td>Tsch Zone</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck20">
														  <label class="form-check-label" for="customCheck20"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-4.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>There are many variations of passages of Lorem</td>
													<td>
														$2333
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Golang
													</td>
													<td>ABC Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" id="tab-6" class="tab-pane fade">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>Logo</th>
													<th>Title</th>	
													<th>Budget</th>	
													<th>Progress</th>	
													<th>Technology</th>	
													<th>Company</th>	
													<th>Start date</th>	
													<th>Due date</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck21">
														  <label class="form-check-label" for="customCheck21"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-7.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Designer Required For Directory</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Java
													</td>
													<td>Kind Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck22">
														  <label class="form-check-label" for="customCheck22"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-8.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is therefore always free content</td>
													<td>
														$7789
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Python
													</td>
													<td>Particles INC</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck23">
														  <label class="form-check-label" for="customCheck23"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-9.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Required For Website Developer</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Codingnator
													</td>
													<td>Kind Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck24">
														  <label class="form-check-label" for="customCheck24"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-10.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is therefore always free</td>
													<td>
														$7789
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														React
													</td>
													<td>Particles INC</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck25">
														  <label class="form-check-label" for="customCheck25"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-7.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Website Designer Required For Directory Theme</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Java
													</td>
													<td>Kind Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck26">
														  <label class="form-check-label" for="customCheck26"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-1.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Website Designer Required For Directory Theme</td>
													<td>
														$2222
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Angular
													</td>
													<td>AMAZE TECH</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck27">
														  <label class="form-check-label" for="customCheck27"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-2.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is simply dummy text of</td>
													<td>
														$5755
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Laravel
													</td>
													<td>Park INC </td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck28">
														  <label class="form-check-label" for="customCheck28"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-3.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>It is a long established fact that a reader</td>
													<td>
														$5755
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Vue
													</td>
													<td>Tsch Zone</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck29">
														  <label class="form-check-label" for="customCheck29"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-4.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>There are many variations of passages of Lorem</td>
													<td>
														$2333
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Golang
													</td>
													<td>ABC Software</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck30">
														  <label class="form-check-label" for="customCheck30"></label>
														</div>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile"><img class="me-2" src="../assets_admin/img/company/img-8.png" alt="User Image"></a>
														</h2>
													</td>
													
													<td>Lorem Ipsum is therefore always free</td>
													<td>
														$7789
													</td>
													<td>
														<div class="progress rounded-pill">
														  <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</td>
													<td>
														Python
													</td>
													<td>Particles INC</td>
													<td>22-05-2022</td>
													<td>22-05-2022</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>											
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" id="tab-7" class="tab-pane fade">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>Logo</th>
													<th>Title</th>	
													<th>Budget</th>	
													<th>Progress</th>	
													<th>Technology</th>	
													<th>Company</th>	
													<th>Start date</th>	
													<th>Due date</th>	
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
			<!-- /Page Wrapper -->
		</div>
    </div>
<!-- /Main Wrapper -->
	<!-- Category Modal -->
		<div class="modal fade custom-modal" id="add-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Projects</h4>
					<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" value="Website Designer Required For Directory Theme">
						</div>
						<div class="form-group">
							<label>Budget</label>
							<input type="text" class="form-control" value="$2222">
						</div>	
						<div class="form-group">
							<label>Technology</label>
							<input type="text" class="form-control" value="Angler">
						</div>		
						<div class="form-group">
							<label>Technology</label>
							<input type="text" class="form-control" value="AMAZE TECH">
						</div>
						<div class="form-group">
							<label>From Date</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text"  value="20-01-2022">
							</div>
						</div>
						<div class="form-group">
							<label>To Date</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text"  value="20-02-2022">
							</div>
						</div>				
						<div class="mt-4">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
		<!-- Category Modal -->

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