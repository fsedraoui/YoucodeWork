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
								<h3 class="page-title">Tableau de bord</h3>
								<div class="card-header">
									<div class="row">
										<div class="col-7">
											<p>Bienvenue, </p>
											<h6 class="text-primary">{{ Auth::user()->lastName }} {{ Auth::user()->firstName }}</h6>
										</div>
										<div class="col-5 text-end">
											<span class="welcome-dash-icon bg-1">
												<i class="fas fa-user"></i>
											</span>
										</div>
									</div>
								</div>
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
											<p class="text-primary mt-0 mb-2">Apprenants</p>
											<h5>{{$studentsCount}}</h5>
											<p><a href="users">Voir détails</a></p>
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-users"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Projets Validés</p>
											<h5>{{$projetValideCount}}</h5>
											<p><a href="projects">Voir détails</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-code"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Projets en instance</p>
											<h5>{{$projetInstanceCount}}</h5>
											<p><a href="projects">Voir détails</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-pause"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Entreprises</p>
											<h5>0</h5>
											<p><a href="users">Voir détails</a></p>
											<span class="dash-widget-icon bg-1">
												<i class="fas fa-bezier-curve"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Offres Validées</p>
											<h5>0</h5>
											<p><a href="projects">Voir détails</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa fa-briefcase"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 d-flex">
									<div class="card wizard-card flex-fill">
										<div class="card-body">
											<p class="text-primary mt-0 mb-2">Offres Expirées</p>
											<h5>0</h5>
											<p><a href="projects">Voir détails</a></p>
											
											<span class="dash-widget-icon bg-1">
												<i class="fas fa fa-folder-open"></i>
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
												<h5 class="card-title">Vu d'ensemble</h5>
											</div>
											{{-- ici le graphe <div id="chart" class="mt-4"></div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>	
						{{-- <div class="col-md-4 d-flex">
							<div class="card w-100">
								<div class="card-body pt-0">
									
									<div class="card-header">
										<div class="row">
											<div class="col-7">
												
												<h3 class="page-title">Indicateurs Entreprises</h6>
											</div>
											<div class="col-5 text-end">
												
											</div>
										</div>
									</div>
									<div class="mt-3">
										<div class="row" style="flex-wrap: wrap; ">
											<div class="col-md-4 d-flex">
												<div class="card wizard-card flex-fill">
													<div class="card-body">
														<p class="text-primary mt-0 mb-2">Entreprises</p>
														<h5>0</h5>
														<p><a href="users">Voir détails</a></p>
														
													</div>
												</div>
											</div>
											<div class="col-md-4 d-flex">
												<div class="card wizard-card flex-fill">
													<div class="card-body">
														<p class="text-primary mt-0 mb-2">Total Offres</p>
														<h5>0</h5>
														<p><a href="users">Voir détails</a></p>
														
													</div>
												</div>
											</div>
											<div class="col-md-4 d-flex">
												<div class="card wizard-card flex-fill">
													<div class="card-body">
														<p class="text-primary mt-0 mb-2">Offres Encours</p>
														<h5>0</h5>
														<p><a href="users">Voir détails</a></p>
														
													</div>
												</div>
											</div>
											<div class="col-md-4 d-flex">
												<div class="card wizard-card flex-fill">
													<div class="card-body">
														<p class="text-primary mt-0 mb-2">Offres expirées</p>
														<h5>15k</h5>
														<p><a href="projects">Voir détails</a></p>
														
														
													</div>
												</div>
											</div>
											<div class="col-md-4 d-flex">
												<div class="card wizard-card flex-fill">
													<div class="card-body">
														<p class="text-primary mt-0 mb-2">Offres en instance</p>
														<h5>1568</h5>
														<p><a href="projects">Voir détails</a></p>
														
														
													</div>
												</div>
											</div>
										</div>
						</div>			 --}}
						<div class="col-md-4 d-flex">
							<div class="card w-100">
								<div class="card-body pt-0">
									<div class="card-header">
										<div class="row">
											<div class="col-7">
												<p></p>
												<h6 class="text-primary">Les derniers offres</h6>
											</div>
											<div class="col-5 text-end">
												
											</div>
										</div>
									</div>
									
									<div class="mt-3">
										<div class="table-responsive">
											<table class="table table-center table-hover mb-0">
												<thead>
													<tr>
														<th class="text-nowrap">Entreprise</th>
														<th>Type Contrat</th>
														<th class="text-end">Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-nowrap">Entreprise1</td>
														<td>CDI</td>
														<td class="text-end">02/02/2022</td>
													</tr>
													<tr>
														<td class="text-nowrap">Entreprise1</td>
														<td>CDI</td>
														<td class="text-end">
															<a href="javascript:void(0);" class="btn btn-sm btn-success me-2"><i class="fa fa-check"></i></a> 
															<a href="javascript:void(0);" class="btn btn-sm btn-danger me-2"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
													<tr>
														<td class="text-nowrap">Entreprise1</td>
														<td>CDI</td>
														<td class="text-end">02/02/2022</td>
													</tr>
													<tr>
														<td class="text-nowrap">Entreprise1</td>
														<td>CDI</td>
														<td class="text-end">02/02/2022</td>
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
					<div class="row">
					

					</div>
				</div>
			<!-- /Page Wrapper -->
		
        	</div>
		<!-- /Main Wrapper -->
		</div>
@endsection