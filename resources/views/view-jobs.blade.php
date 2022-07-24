
<?php $page="view-jobs";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="freelancer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Bienvenu</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->name }}</a></h3>
										<p class="mb-0">{{ Auth::user()->lastname }}</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Tableau de bord
											</a>
										</li>
										<li class="nav-item">
											<a href="view-jobs" class="nav-link active">
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
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<div class="row">
									<div class="col-md-6">
										<h3>Les offres d'emploi en cours</h3>
									</div>
									<div class="col-md-6 text-end">
										<a href="post-project" class="btn btn-primary back-btn mb-4">Postez un projet</a>
									</div>
								</div>
							</div>
							{{-- @if ($jobs->count())
       						     @foreach ($jobs as $job)	 --}}
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												{{-- <div class="projects-details align-items-center">
													<div class="project-info">
														@if ($job->recruiter != null)
														<span>{{$job->recruiter->company}}</span>
														@endif
														<h2>{{$job->position}}</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>{{$job->contract}}</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		@if($job->isRemote == 1)
																		<h5> Remote</h5>
																		@endif
																		@if($job->isRemote == 0)
																		<h5> Not Remote</h5>
																		@endif
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> {{ \Carbon\Carbon::parse($job->expiredDate)->translatedFormat('j F, Y') }}</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>{{$job->emailCvs}}</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le {{ \Carbon\Carbon::parse($job->created_at)->translatedFormat('j F, Y') }}</a>
														</div>
													</div>
												</div> --}}
												
												<div class="projects-details align-items-center">
													<div class="project-info">
													
														<span>Capgemini</span>
														
														<h2>Développeur Full Stack</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>CDI</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		<h5> Remote</h5>
																		
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> 20-01-2022</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>recrutement@entreprise.com</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le 20-01-2022</a>
														</div>
													</div>
												</div>
												<div class="projects-details align-items-center">
													<div class="project-info">
													
														<span>Capgemini</span>
														
														<h2>Développeur php</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>CDI</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		<h5> Remote</h5>
																		
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> 20-01-2022</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>recrutement@entreprise.com</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le 20-01-2022</a>
														</div>
													</div>
												</div>
												<div class="projects-details align-items-center">
													<div class="project-info">
													
														<span>Cegedim</span>
														
														<h2>Intégrateur Web </h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>CDI</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		<h5> Remote</h5>
																		
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> 20-01-2022</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>recrutement@entreprise.com</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le 20-01-2022</a>
														</div>
													</div>
												</div>
												<div class="projects-details align-items-center">
													<div class="project-info">
													
														<span>Capgemini</span>
														
														<h2>Développeur java</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>CDI</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		<h5> Remote</h5>
																		
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> 20-01-2022</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>recrutement@entreprise.com</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le 20-01-2022</a>
														</div>
													</div>
												</div>
											
												<div class="projects-details align-items-center">
													<div class="project-info">
													
														<span>Cegedim</span>
														
														<h2>Développeur React</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Type Contrat</p>
																		<h5>CDI</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Is remonte</p>
																		<h5> Remote</h5>
																		
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Date d'éxpiration</p>
																		

																		<h5> 20-01-2022</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>Envoyez votre Cv sur</h3>
															<h5>recrutement@entreprise.com</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="view-project-detail" class="projects-btn">Voir plus </a>
															<a href="#" class="hired-detail">crée le 20-01-2022</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								
								</div>
							</div>
							{{-- @endforeach
									
									@else
									<p>There are no posts</p>
									@endif --}}
						
	
							<!-- /project list -->
							<!-- pagination -->
							{{-- <div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li><a 	
											@if($jobs->currentPage() != 1)
												href={{ route('view-jobs', ['page' => 1]) }}
											@endif
										><i class="fas fa-angle-left"></i></a></li>
										@for($i=1;$i< ($jobs->total()/$jobs->perPage())+1 ;$i++)
											<li><a 
											@if($i ==  $jobs->currentPage())
												class="active"
											@else 
												href={{ route('view-jobs', ['page' => $i]) }}
											@endif
											>{{$i}}</a></li>

										@endfor
										<li><a 
											@if($jobs->currentPage() != $jobs->lastPage())
												href={{ route('view-jobs', ['page' => $jobs->lastPage()]) }}
											@endif
										> <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div> --}}

							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection