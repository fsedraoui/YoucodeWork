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
													<th>Date Création</th>	
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
													
													<td>
														<div class="card-body">
															<div class="avatar-group">
																@foreach($project->students as $student)
																	<div class="avatar" style="a:hover { color: red; }" alt="{{$student->firstName}}">
																		<img class="avatar-img rounded-circle border border-white"  src="../assets_admin/img/profiles/avatar-02.jpg"/>
																		<div style="font-size: 7px;">{{$student->firstName}}</div>
																	</div>																										
																@endforeach
															</div>
												   		 </div>	
													</td>
													<td>
														@if($project->status == 'PENDING') <button type="button" class="btn btn-warning btn-sm">En instance</button> @endif
														@if($project->status == 'ACCEPTED') <button type="button" class="btn btn-success btn-sm">Validé</button> @endif
												
												 </td>
													<td>22-05-2022</td>
													<td class="text-end">
														@if($project->status == 'PENDING')<a href="{{ route('project-a-valide', $project->id) }}" class="btn btn-sm btn-success me-2"><i class="fa fa-check"></i></a>  @endif
														<a href="{javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<div role="tabpanel" id="tab-5" class="tab-pane fade">
									<<div class="table-responsive">
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
													<th>Date Création</th>	
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
													
													<td>
														<div class="card-body">
															<div class="avatar-group">
																@foreach($project->students as $student)
																	<div class="avatar" style="a:hover { color: red; }" alt="{{$student->firstName}}">
																		<img class="avatar-img rounded-circle border border-white"  src="../assets_admin/img/profiles/avatar-02.jpg"/>
																		<div style="font-size: 9px;">{{$student->firstName}}</div>
																	</div>																										
																@endforeach
															</div>
												   		 </div>	
													</td>
													<td>
														@if($project->status == 'PENDING') <button type="button" class="btn btn-warning btn-sm">En instance</button> @endif
														@if($project->status == 'ACCEPTED') <button type="button" class="btn btn-success btn-sm">Validé</button> @endif
												
												 </td>
													<td>22-05-2022</td>
													<td class="text-end">
														@if($project->status == 'PENDING')<a href="{{ route('project-a-valide', $project->id) }}" class="btn btn-sm btn-success me-2"><i class="fa fa-check"></i></a>  @endif
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												@endforeach
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
													<!-- <th>Avatar</th> -->
													<th>Titre</th>	
													<th>Date de création</th>	
													<th>Date de Modification</th>	
													<th>GitHub</th>	
													<th>Collaborateurs</th>	
													<th>Status</th>		
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
													
													<td>
														<div class="card-body">
															<div class="avatar-group">
																@foreach($project->students as $student)
																	<div class="avatar" style="a:hover { color: red; }" alt="{{$student->firstName}}">
																		<img class="avatar-img rounded-circle border border-white"  src="../assets_admin/img/profiles/avatar-02.jpg"/>
																		<div style="font-size: 9px;">{{$student->firstName}}</div>
																	</div>																										
																@endforeach
															</div>
												   		 </div>	
													</td>
													<td>
														@if($project->status == 'PENDING') <button type="button" class="btn btn-warning btn-sm">En instance</button> @endif
														@if($project->status == 'ACCEPTED') <button type="button" class="btn btn-success btn-sm">Validé</button> @endif
												
												 </td>
													
													<td class="text-end">
														@if($project->status == 'PENDING')<a href="{{ route('project-a-valide', $project->id) }}" class="btn btn-sm btn-success me-2"><i class="fa fa-check"></i></a>  @endif
														<form action="{{ route('project-a-supprimer', $project->id) }}" method="POST">	
															@csrf
														{{-- <a href="{{ route('project-a-supprimer', $project->id) }}" class="btn btn-primary continue-btn">Delete</a> --}}
														<button type="submit"  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i>
														</form>
														{{-- <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													 --}}</td>
												</tr>
												@endforeach
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
									<form action="{{ route('project-a-supprimer', $project->id) }}" method="POST">	
										@csrf
									{{-- <a href="{{ route('project-a-supprimer', $project->id) }}" class="btn btn-primary continue-btn">Delete</a> --}}
									<button type="submit" class="btn btn-primary continue-btn">Supprimer</button>
									</form>
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