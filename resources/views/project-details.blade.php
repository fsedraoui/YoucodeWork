<?php $page="project-details";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner" style="padding: 20PX !important;">
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">				
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image" >
										<a href="javascript:void(0);">
											<iframe src="https://{{$project->liensite}}/" style="height: 700px;">
												<p>Your browser does not support iframes.</p>
										   </iframe>
											{{-- <img alt="" src="{{ $project->lienImage1}}" class="img-fluid"> --}}
										</a>
									</div>
									
									<div class="blog-info clearfix">
										<div class="post-left">
										
										
										<h3 class="blog-title">{{ $project->name }}</h3>	
										<ul>
												<li> 
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
												</li>
												<li><a href="#"><i class="far fa-calendar"></i>{{ $project->created_at->format('d M Y')}}</a></li>
												<li>

												</li>
											</ul>
										</div>
									</div>
											<div>
										
								</div>
									<div class="blog-content">
									</div>
								</div>
									
								
								
								<div class="blog-comments pro-post widget-box clearfix pb-0">
									<h3 class="pro-title">Discription du projet</h3>
									<div class="pro-content pb-0">
									{!! nl2br($project->description) !!}
								</div>
								</div>
								
								
								
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

					

							<!-- Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Technologies</h4>
								<div class="pro-content">
									<div class="tags">
									<i class="fas fa-tags"></i>
									@foreach($project->tags as $tag) 
											<label class="btn btn-rounded btn-sm btn-light">{{$tag}}</label>
											
											@endforeach
											@foreach($project->technologies as $technology) 
											<label class="btn btn-rounded btn-sm btn-light">{{$technology}}</label>
											@endforeach
									</div>
								</div>
							</div>
							<!-- /Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Site Online</h4>
								<div class="pro-content">
									<div class="tags">
									<i class="fa fa-location-arrow"></i>
											<a href="{{url("www.".$project->liensite)}}"  target="_blank">{{ "www.".$project->liensite }} </a> 
									</div>
								</div>
							</div>

							<!-- /Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">GitHub</h4>
								<div class="pro-content">
									<div class="tags">
									<i class="fab fa-github"></i>
											<a href="{{ "www.".$project->repoLink}}"  target="_blank">{{ "www.".$project->repoLink}} </a>
											
									</div>
								</div>
							</div>
							
							<div class="pro-post author-widget clearfix">
									<div class="widget-title-box clearfix">
										<h3 class="pro-title">Team de Dév.</h3>
									</div>
									@foreach($project->students as $student)
											
											
											<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="developer-details"><img class="img-fluid" alt="" src="assets/img/img-02.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="developer-details" class="tags">{{$student->firstName}} </a>
											<div class="social-links">
												<ul>
													<li><a href="#"><i class="fab fa-github"></i></a></li>
													<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
													<i class=""></i>
												</ul>
											</div>
										</div>
									</div>
											@endforeach

									
								</div>
								<!-- Share Widget -->	
							<!-- <div class="pro-post widget-box post-widget">
								<h3 class="pro-title">Partagez</h3>
								<div class="pro-content">
									<a href="#" class="share-icon"><i class="fas fa-share-alt"></i> Share</a>
								</div>
							</div>
-->
							<!-- /Share Widget -->

						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->

@endsection