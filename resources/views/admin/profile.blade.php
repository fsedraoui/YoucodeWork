<?php $page="profile";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
						
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
	   
					<div class="profile-cover">
						<div class="profile-cover-wrap">
							<img class="profile-cover-img" src="../assets_admin/img/profiles/avatar-07.jpg" alt="Profile Cover">

							<!-- Custom File Cover -->
							<div class="cover-content">
								<div class="custom-file-btn">
									<input type="file" class="custom-file-btn-input" id="cover_upload">
									<label class="custom-file-btn-label btn btn-sm btn-white" for="cover_upload">
										<i class="fas fa-camera"></i>
										<span class="d-none d-sm-inline-block ms-1">Update Cover</span>
									</label>
								</div>
							</div>
							<!-- /Custom File Cover -->
						</div>
					</div>

					<div class="text-center mb-5">
						<label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
							<img class="avatar-img" src="../assets_admin/img/profiles/avatar-07.jpg" alt="Profile Image">
							<input type="file" id="avatar_upload">
							<span class="avatar-edit">
								<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
							</span>
						</label>
						<h2>Damon Cohn <i class="fas fa-certificate text-primary small" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<i class="far fa-building"></i> <span>Versatile Workforce</span>
							</li>
							<li class="list-inline-item">
								<i class="fas fa-map-marker-alt"></i> 359 Plains, PA 18705 
							</li>
							<li class="list-inline-item">
								<i class="far fa-calendar-alt"></i> <span>Joined March 2022</span>
							</li>
						</ul>
					</div>
	
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title">Complete your profile</h5> 
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<div class="progress progress-md flex-grow-1">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="ms-4">60%</span>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title d-flex justify-content-between">
											<span>Profile</span> 
											<a class="btn btn-sm btn-white" href="settings">Edit</a>
										</h5>
									</div>
									<ul class="list-unstyled mb-0">
										<li class="py-0">
											<small class="text-dark">About</small>
										</li>
										<li>
											Damon Cohn
										</li>
										<li>
											Versatile Workforce
										</li>
										<li class="pt-2 pb-0">
											<small class="text-dark">Contacts</small>
										</li>
										<li>
											damoncohn@example.com
										</li>
										<li>
											570-613-6563
										</li>
										<li class="pt-2 pb-0">
											<small class="text-dark">Address</small>
										</li>
										<li>
											359 Coal Road<br>
											Plains, PA 18705 
										</li>
									</ul>
								</div>
							</div>

						</div>

						<div class="col-lg-8 d-flex">
							<div class="card w-100">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title">Activity</h5>
									</div>
									<ul class="activity-feed">
										<li class="feed-item">
											<div class="feed-date">Nov 16</div>
											<span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a href="view-invoice">"#CD41544"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Nov 7</div>
											<span class="feed-text"><a href="profile">Marie Canales</a>  has accepted your estimate <a href="view-estimate">#GTR14544</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Jan 05</div>
											<span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a href="view-invoice">"#CD42565"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Feb 10</div>
											<span class="feed-text"><a href="profile">Marie Canales</a>  has accepted your estimate <a href="view-estimate">#GTR422385</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Mar 25</div>
											<span class="feed-text"><a href="profile">Brian Johnson</a> has paid the invoice <a href="view-invoice">"#CD6988"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Mar 5</div>
											<span class="feed-text"><a href="profile">Marie Canales</a>  has accepted your estimate <a href="view-estimate">#GTR569231</a></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
@endsection