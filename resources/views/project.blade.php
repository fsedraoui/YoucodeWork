<?php $page="project";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Projects</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Projects</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->			
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header d-flex justify-content-between">
									<h4 class="card-title mb-0">FILTERS</h4>
									<a href="javascript:void(0);">Clear All</a>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<h4>Category</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Select Category</option>
											<option>Developer</option>
											<option>UI Developer</option>
											<option>React Developer</option>
											<option>.Net Developer</option>
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Location</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Country, City, Zipcode</option>
											<option>UK</option>
											<option>London</option>
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Completed Projects</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Select Projects</option>
											<option>Node Projects</option>
											<option>UI Projects</option>
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Pricing Type</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>Hourly Rate</option>
											<option>Full Day Rate</option>
											<option>Half Day Rate</option>
										</select>
									</div>
								</div>								
								<div class="filter-widget">
									<h4>Add Skills</h4>
									<div class="form-group">
										<span class="badge badge-pill badge-skill">+ Web Design</span>
										<span class="badge badge-pill badge-skill">+ UI Design</span>
										<span class="badge badge-pill badge-skill">+ Node Js</span>
										<span class="badge badge-pill badge-skill">+ Angular</span>
										<span class="badge badge-pill badge-skill">+ Wordpress</span>
										<input type="text" class="form-control">
									</div>
								</div>	
								<div class="filter-widget">
									<h4>Avalability</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time" checked>
											<span class="checkmark"></span> Hourly 
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span> Part Time
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span>  Full Time
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Experience</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span>  0-1 years
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp" checked>
											<span class="checkmark"></span> 2-5 years
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span>  5-8 years
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span>  9-12 years
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span>  Mastered
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_exp">
											<span class="checkmark"></span> Professional
										</label>
									</div>
								</div>	
								<div class="filter-widget">
									<h4>Hourly Rate</h4>
									<div id="slider-range"></div>
									<div class="row slider-labels">
										<div class="col-xs-12 caption">
											<span id="slider-range-value1"></span> - <span id="slider-range-value2"></span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
										<form>
											<input type="hidden" name="min-value" value="">
											<input type="hidden" name="max-value" value="">
										</form>
										</div>
									</div>
								</div>								
								<div class="filter-widget">
									<h4>Keywords</h4>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter Keywords">
									</div>
								</div>
								<div class="filter-widget">
									<h4>Currency</h4>
									<div class="form-group">
										<select class="form-control select">
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">
						
							<div class="sort-tab">
								<div class="row align-items-center">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="d-flex align-items-center">
										   <div class="freelance-view">
											  <h4>Showing 1 - 12 of 455</h4>
										   </div>
										</div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="d-flex justify-content-sm-end">
										   <div class="sort-by">
											  <select class="custom-select">
												 <option>Relevance</option>
												 <option>Rating</option>
												 <option>Popular</option>
												 <option>Latest</option>
												 <option>Free</option>
											  </select>
										   </div>
										</div>
									</div>
								</div>
						   </div>
							
							<div class="bootstrap-tags text-start pl-0">
								<span class="badge badge-pill badge-skills">UI/UX Developer <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span> 
								<span class="badge badge-pill badge-skills">USA <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span> 
								<span class="badge badge-pill badge-skills">Hourly <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span> 
								<span class="badge badge-pill badge-skills">0-1 years <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
								<span class="badge badge-pill badge-skills">USD <span class="tag-close" data-role="remove"><i class="fas fa-times"></i></span></span>
							</div>
							
							<div class="row">
								<!-- Project Content -->
								<div class="col-md-6 col-lg-12 col-xl-6">
								
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
		                                <div class="author-heading">
		                                    <div class="profile-img">
		                                        <a href="#">
		                                            <img src="assets/img/company/img-1.png" alt="author">
		                                        </a>
		                                    </div>
		                                    <div class="profile-name">
		                                        <div class="author-location">Amaze Tech <i class="fas fa-check-circle text-success verified"></i></div>
		                                    </div>
											<div class="freelance-info">
												<h3><a href="#">UI/UX Developer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted Just Now</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Georgia, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$40-$500</div>
		                                </div>
										<div class="counter-stats">
		                                        <ul>
		                                            <li>
		                                                <h3 class="counter-value">4 Days Left</h3>
		                                                <h5>Expiry</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value">15</h3>
		                                                <h5>Proposals</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
		                                                <h5>Job Type</h5>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                </div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
		                            </div>
								</div>
								<div class="col-md-6 col-lg-12 col-xl-6">
								
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
		                                <div class="author-heading">
		                                    <div class="profile-img">
		                                        <a href="#">
		                                            <img src="assets/img/company/img-2.png" alt="author">
		                                        </a>
		                                    </div>
		                                    <div class="profile-name">
		                                        <div class="author-location">Park INC <i class="fas fa-check-circle text-success verified"></i></div>
		                                    </div>
											<div class="freelance-info">
												<h3><a href="#">PHP Developer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 1 min ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>California, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$30-$300</div>
		                                </div>
										<div class="counter-stats">
		                                        <ul>
		                                            <li>
		                                                <h3 class="counter-value">5 Days Left</h3>
		                                                <h5>Expiry</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value">22</h3>
		                                                <h5>Proposals</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
		                                                <h5>Job Type</h5>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                </div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
		                            </div>
								</div>
								<div class="col-md-6 col-lg-12 col-xl-6">
								
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
		                                <div class="author-heading">
		                                    <div class="profile-img">
		                                        <a href="#">
		                                            <img src="assets/img/company/img-3.png" alt="author">
		                                        </a>
		                                    </div>
		                                    <div class="profile-name">
		                                        <div class="author-location">Tech Zone <i class="fas fa-check-circle text-success verified"></i></div>
		                                    </div>
											<div class="freelance-info">
												<h3><a href="#">Graphic Designer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 30 mins ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>New York, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$15-$500</div>
		                                </div>
										<div class="counter-stats">
		                                        <ul>
		                                            <li>
		                                                <h3 class="counter-value">8 Days Left</h3>
		                                                <h5>Expiry</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value">30</h3>
		                                                <h5>Proposals</h5>
		                                            </li>
		                                            <li>
		                                                <h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
		                                                <h5>Job Type</h5>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                </div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
		                            </div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-4.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">ABC Software <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">iOS Developer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 1 day ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$25-$250</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">1 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">16</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-5.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">Host Technologies <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">SEO Developer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 3 days ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Texas, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$50-$700</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">10 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">25</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-6.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">Alfred Tech <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">SM Developer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 1 week ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Virginia, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$42-$100</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">1 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">5</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-7.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">Kind Softwares <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">Network Engineer</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 3 weeks ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Delaware, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$12-$320</div>
										</div>
										<div class="counter-stats">
												<ul >
													<li>
														<h3 class="counter-value">2 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">17</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-8.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">Particles INC <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">Business Analyst</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 1 month ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Kentucky, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$35-$520</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">15 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">32</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-9.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">Soft Technologies <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">IT Project Manager</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 2 months ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Kansas, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$10-$300</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">8 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">12</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-12 col-xl-6">
									<div class="freelance-widget widget-author">
										<div class="freelance-content">
										<a data-bs-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
										<div class="author-heading">
											<div class="profile-img">
												<a href="#">
													<img src="assets/img/company/img-10.png" alt="author">
												</a>
											</div>
											<div class="profile-name">
												<div class="author-location">System Info <i class="fas fa-check-circle text-success verified"></i></div>
											</div>
											<div class="freelance-info">
												<h3><a href="#">Software Architect</a></h3>
												<div class="freelance-location mb-1"><i class="fas fa-clock"></i> Posted 1 year ago</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Minnesota, USA</div>
											</div>
											<div class="freelance-tags">
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">After Effects</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Illustrator</span></a>
												<a href="javascript:void(0);"><span class="badge badge-pill badge-design">HTML</span></a>
											</div>
											<div class="freelancers-price">$22-$600</div>
										</div>
										<div class="counter-stats">
												<ul>
													<li>
														<h3 class="counter-value">9 Days Left</h3>
														<h5>Expiry</h5>
													</li>
													<li>
														<h3 class="counter-value">16</h3>
														<h5>Proposals</h5>
													</li>
													<li>
														<h3 class="counter-value"><span class="jobtype">Full Time</span></h3>
														<h5>Job Type</h5>
													</li>
												</ul>
											</div>
										</div>
										<div class="cart-hover">
											<a href="project-details" class="btn-cart" tabindex="-1">Bid Now</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>							
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		
		<!-- The Modal -->
		<div class="modal fade" id="rating">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header d-block b-0 pb-0">
						<span class="modal-close float-end"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="project">
							<div class="modal-info">
								<div class="text-center pt-0 mb-5">
									<h3>Please login to Favourite Project</h3>
								</div>
								<div class="submit-section text-center">
									<a  data-bs-dismiss="modal" href="#" class="btn btn-primary black-btn click-btn">Cancel</a>
									<button type="submit" class="btn btn-primary click-btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection
