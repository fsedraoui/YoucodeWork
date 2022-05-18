<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="freelancer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<p class="mb-2">Bienvenu</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->lastName }} {{ Auth::user()->firstName }}</a></h3>
										
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="dashboard" class="nav-link active">
												<i class="material-icons">verified_user</i> Tableau de bord
											</a>
										</li>
										<li class="nav-item">
											<a href="view-jobs" class="nav-link">
												<i class="material-icons">business_center</i> Postulez pour une offre
											</a>
										</li>
										
										<li class="nav-item">
											<a href="apprenant-projetsvalides" class="nav-link">
												<i class="material-icons">record_voice_over</i> Mes projets
											</a>
										</li>
										<li class="nav-item">
											<a href="projects" class="nav-link">
												<i class="material-icons">local_play</i> Explorer des Projets
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-chats" class="nav-link">
												<i class="material-icons">chat</i> techno & Skils
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-profile-settings" class="nav-link">
												<i class="material-icons">settings</i>  Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="index" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>						
						</div>
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Tous Mes Projets</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="apprenant-projetsvalides">Projets validés</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="apprenant-projetsvalides">Projets en instance</a>
									</li>
								</ul>
							</nav> 
							
							<!-- Projets list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">Mes Projets Validés</h3>
								@if ($student->projects->count())
								@foreach($student->projects as $project)
								<!-- Projet -->
								<div class="freelancer-proposals">
									<div class="">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title"></h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
														<h4>Validé par </h4>
															<h4>{{ $project->instructor->firstName}}</h4>
															<span class="info-btn" style="background: #9bc0ed52 !important; color: #212529;">Validé</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info" style="color:#1c66b6; ">{{ $project->name}}</h4>
														<i class="far fa-clock"></i> 
														{{ $project->created_at->format('d-m-Y')}}
														
													</div>
													<div class="proposal-img">
													<div class="proposal-client">
														<h4 class="title-info">Contributeurs</h4>
														
													@foreach($project->students as $student)
													<div>{{$student->firstName}}</div>
																													
														@endforeach
													
													   
													</div>
												</div>
												</div>
											</div>

										
											<div class="proposal-type">
													  
											 </div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p><i class="fab fa-github">   </i>
											<a href="developer-details">{{$project->repoLink}} </a></p>
											<i class="fa fa-location-arrow">  </i>
											<a href="developer-details">{{$project->repoLink}} </a>
													
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													<a href="{{ route('project-details', $project->id) }}" class="projects-btn">Voir le projet</a>
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p class="mb-0">{!! nl2br($project->excerpt(200)) !!}</p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								
								@endforeach
								@endif
							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations freelancer">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

			<!-- The Modal -->
			<div class="modal fade" id="file">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">EDIT PROPOSAL</h4>
							<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Cost</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Days</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control summernote" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
		

        </div>
		<!-- /Main Wrapper -->
@endsection