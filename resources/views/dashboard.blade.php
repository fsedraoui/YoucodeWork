<?php $page="freelancer-dashboard";?>
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
										@if (Auth::user()->role==1)
										<p class="mb-2">Bienvenu</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->lastName }} {{ Auth::user()->firstName }}</a></h3>
										@endif
										@if (Auth::user()->role==2)
										<p class="mb-2">Bienvenu Staff {{ Auth::user()->lastName }} </p>
										<p class="mb-2">Vous consultez le profile de </p>
										<p class="mb-0"><a href="freelancer-profile">{{ $student->lastName }} {{ $student->firstName }}</a></p>
										@endif
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
											<a href="apprenant-projetsvalides" class="nav-link">
												
												@if (Auth::user()->role==1)
												<i class="material-icons">record_voice_over</i> Mes projets
												@endif
										{{-- @if (Auth::user()->role==2)
										<i class="material-icons">record_voice_over</i> ses projets
										@endif --}}
											</a>
										</li>
										<li class="nav-item">
											<a href="projects" class="nav-link">
												<i class="material-icons">local_play</i> Explorer des Projets
											</a>
										</li>
										@if (Auth::user()->role==1)
										<li class="nav-item">
											<a href="view-jobs" class="nav-link">
												<i class="material-icons">business_center</i> Postulez pour une offre
											</a>
										</li>
										
										{{-- <li class="nav-item">
											<a href="" class="nav-link">
												<i class="material-icons">chat</i> Ajouter un projet
											</a>
										</li> --}}
										
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="material-icons">settings</i>  Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="index" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
										@endif
									</ul>
								</div>
							</div>					
						</div>	
						
						<div class="col-xl-9 col-md-8">
							
							<div class="dashboard-sec">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projets en instance</div>
												<div class="dash-widget-count">{{$student-> projetInstanceCount}}</div>
											</div>
											<div class="dash-widget-more">
												<a href="projetsenInstance" class="d-flex">Voir Détails <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projets validés</div>
												<div class="dash-widget-count">{{$student-> projetValideCount}} </div>
											</div>
											<div class="dash-widget-more">
												<a href="apprenant-projetsvalides" class="d-flex">Voir Détails <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Tous mes projets</div>
												<div class="dash-widget-count">{{$student->projects()->count()}}</div>
											</div>
											<div class="dash-widget-more">
												<a href="apprenant-projetsvalides" class="d-flex">Voir Détails <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Chart Content -->
								<div class="row">
									<div class="col-xl-8 d-flex">
										<div class="flex-fill card">
											<div class="pro-head b-0">	
												<h5 class="card-title mb-0">Technologies</h5> 
												

											</div>
											<div class="pro-body">									
												<div id="chartradial"></div>
												<div style="    flex-wrap: wrap !important;">
													<?php $technologies = $technology_color_array ?>
												@if (count($technology_color_array)>0 )
													@foreach ($technology_color_array as $technology)
													{{-- {{ 'fas fa-circle text-'.(array_values($technology_color_array))[$i].' me-1'}}  --}}
													 <span style="margin-left: 4%;"><i class="fas fa-circle text-{{$technology[2]}} me-1"></i> {{$technology[0]}}</span> (<span class="sta-count">{{$technology[1]}}</span>)
													
													
												@endforeach
												@else
														<p>Aucune Technologie</p>
														@endif	
														
												</div>
											</div>
										</div>

										



									</div>
									<div class="col-xl-4 d-flex">
										<div class="card flex-fill">
											<div class="pro-head">	
												<h5 class="card-title mb-0"><i class="fas fa-tags"></i> Tags & Outils</h5> 
												<div class="month-detail">	
													
												</div>
											</div>
											
											<div class="tags" style="padding: 5%">
												@if (count($allTags) > 0 )
												@foreach($allTags as $tag) 
														<label class="btn btn-rounded btn-sm btn-light" style="border-color: #3488da  !important; color: #3488da !important;">{{$tag}}</label>
														
														@endforeach
														@else
														<p>Aucun tag</p>
														@endif		
												</div>
										</div>
									</div>
								</div>
								<!-- /Chart Content -->
								
								
								
								
								
							</div>								
						</div>								
					</div>					
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<script>
			var technologies = @json($technologies);

		</script>
@endsection