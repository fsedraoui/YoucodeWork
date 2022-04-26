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
										<p class="mb-2">Welcome,</p>
										<h3 class="mb-0"><a href="freelancer-profile">John Danie S.</a></h3>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="freelancer-dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-project-proposals" class="nav-link active">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-portfolio" class="nav-link">
												<i class="material-icons">pie_chart</i> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-membership" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-withdraw-money" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
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
								<h3>Proposals</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-project-proposals">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
							
							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">My Proposals</h3>
								
								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">3D Renders and Amazon Product Store images/Video</h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
															<h4>John Doe</h4>
															<span class="info-btn">client</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Client Price</h4>
														<h2 class="client-price">$599.00</h2>
														<span class="price-type">( FIXED )</span>
													</div>
													<div class="proposal-type">
														<h4 class="title-info">Job Type</h4>
														<h3>Hourly</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Your Price</p>
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
													<a href="freelancer-view-project-detail" class="projects-btn">View Project</a>
													<a href="#" class="proposal-delete">Delete Proposal</a>
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								
								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign (Not Entire Web)</h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
															<h4>John Doe</h4>
															<span class="info-btn">client</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Client Price</h4>
														<h2 class="client-price">$320.00</h2>
														<span class="price-type">( FIXED )</span>
													</div>
													<div class="proposal-type">
														<h4 class="title-info">Job Type</h4>
														<h3>Hourly</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Your Price</p>
													<h3>$300.00</h3>
													<h5>in 15 Days</h5>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
													<a href="freelancer-view-project-detail" class="projects-btn">View Project</a>
													<a href="#" class="proposal-delete">Delete Proposal</a>
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								
								<!-- Proposals -->
								<div class="freelancer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
															<h4>John Doe</h4>
															<span class="info-btn">client</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Client Price</h4>
														<h2 class="client-price">$500.00</h2>
														<span class="price-type">( FIXED )</span>
													</div>
													<div class="proposal-type">
														<h4 class="title-info">Job Type</h4>
														<h3>Hourly</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Your Price</p>
													<h3>$450.00</h3>
													<h5>in 18 Days</h5>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													<a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>
													<a href="freelancer-view-project-detail" class="projects-btn">View Project</a>
													<a href="#" class="proposal-delete">Delete Proposal</a>
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								
							</div>
							<!-- /Proposals list -->
							
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