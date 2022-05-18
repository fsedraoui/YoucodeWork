<?php $page="blog-grid";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h3 class="breadcrumb-title">Ce que les apprenats sont capable de faire</h3>

							<span>
										<i class="fa fa-filter"></i> 
										
										<a href="{{ route('projects') }}" class="btn btn-rounded btn-sm btn-warning"><i class="fas fa-minus"></i> </a>
											@foreach($allTechnologies as $technology) 
											<a href="{{ route('projects-by-technology', $technology) }}" class="btn btn-rounded btn-sm btn-light">{{$technology}}</a>
											
											@endforeach


										</span>

										<form action="{{ route('projects') }}" method='POST'>
											@csrf
											<input type="text" name="keyword" />
											<input type="submit" value="Search"/>
										</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
						
							<div class="row blog-grid-row">
								@if ($projects->count())
       						     @foreach ($projects as $project)	
									<div class="col-md-4 col-sm-12">
								
								<!-- Blog Post -->
								<div class="blog grid-blog">
									<div class="blog-image">
									
										<a href="{{ route('project-details', $project->id) }}"><img class="img-fluid" src=" {{$project->lienImage1}}" alt="Post Image"></a>
									</div>
									<div class="blog-content">
										<ul class="entry-meta meta-item">
											<li>
												<div class="post-author">
													<a href="developer-details"><img src="assets/img/img-03.jpg" alt="Post Author">{{$project->authorId}} <span></span></a>
												</div>
											</li>
											<li><i class="far fa-clock"></i> 
											{{ $project->created_at->format('d-m-Y')}}
											</li>
										</ul>
										<h3 class="blog-title"><a href="blog-details">{{$project->name}}</a></h3>
										<p class="mb-0">{!! nl2br($project->excerpt(100)) !!}</p>

										<span class="d-block m-2">
										<h5>Technologies : </h5> 
											@foreach($project->technologies as $technology) 
											<label class="btn btn-rounded btn-sm btn-info tag">{{$technology}}</label>
											
											@endforeach


										</span>

										<span>
										<i class="fa fa-tag"></i> 
											@foreach($project->tags as $tag) 
											<label class="btn btn-rounded btn-sm btn-light">{{$tag}}</label>
											
											@endforeach


										</span>

										
										
									</div>
								</div>
								<!-- /Blog Post -->
								
							</div>
								@endforeach
									
									@else
									<p>There are no posts</p>
									@endif
								</div>
								
							<!-- Blog Pagination -->
							<div class="row pb-4">
								<div class="col-md-12">
									<div class="blog-pagination text-center">
										<ul class="paginations">
											<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#" class="active">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Blog Pagination -->
							
						</div>
						
						<!-- Blog Sidebar -->
						<!--
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							
							<div class=" pro-post widget-box post-widget">
								<h4 class="pro-title">Latest Posts</h4>
								<div class="pro-content pt-0">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">Kofejob - How to get job through online?</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 2 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">People who completed NAND technology got job 90% </a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 3 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">There are many variations of passages</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 4 May 2021</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						
							<div class=" pro-post widget-box category-widget">
								<h4 class="pro-title">Blog Categories</h4>
								<div class="pro-content">
									<ul class="category-link">
										<li><a href="#">Web Development</a></li>
										<li><a href="#">IT Consultancy</a></li>
										<li><a href="#">Email Marketing</a></li>
										<li><a href="#">Business Consulting</a></li>
										<li><a href="#">Apps Development</a></li>
										<li><a href="#">SEO Optimizations</a></li>
									</ul>
								</div>
							</div>
							
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Tags</h4>
								<div class="pro-content">
									<ul class="tags">
										<li><a href="#" class="tag">Employer</a></li>
										<li><a href="#" class="tag">Student</a></li>
										<li><a href="#" class="tag">Freelancer</a></li>
										<li><a href="#" class="tag">Designer</a></li>
										<li><a href="#" class="tag">Jobs</a></li>
										<li><a href="#" class="tag">Developer</a></li>
										<li><a href="#" class="tag">Coding</a></li>
										<li><a href="#" class="tag">Skills</a></li>
										<li><a href="#" class="tag">Knowledge</a></li>
										<li><a href="#" class="tag">Node Js</a></li>
										<li><a href="#" class="tag">Courses</a></li>
										<li><a href="#" class="tag">Engineer</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Study</a></li>
										<li><a href="#" class="tag">Project</a></li>
										<li><a href="#" class="tag">Experience</a></li>
										<li><a href="#" class="tag">Freshers</a></li>
									</ul>
								</div>
							</div>
								
							<div class="pro-post widget-box post-widget">
								<h3 class="pro-title">Share</h3>
								<div class="pro-content">
									<a href="#" class="share-icon"><i class="fas fa-share-alt"></i> Share</a>
								</div>
							</div>
						
							
						</div> 
						-->
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>	
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection