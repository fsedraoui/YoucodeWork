<?php $page="seo-settings";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col-sm-6">
								<h3 class="page-title">Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item"><a href="settings">Settings</a></li>
									<li class="breadcrumb-item active">SEO Settings</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-lg-12">

							<!-- Settings Menu -->
							<div class="settings-menu-links">
								<ul class="nav nav-tabs menu-tabs">
									<li class="nav-item">
										<a class="nav-link" href="settings">General Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="localization-details">Localization</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="payment-settings">Payment Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="email-settings">Email Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="social-settings">Social Media Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="social-links">Social Links</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="seo-settings">SEO Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="others-settings">Others</a>
									</li>
								</ul>
							</div>
							<!-- Settings Menu -->

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header">
												<h5 class="card-title">SEO Settings</h5>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group form-placeholder">
														<label>Meta Title <span class="star-red">*</span></label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group">
														<label>Meta Keywords <span class="star-red">*</span></label>
														<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
													</div>
													<div class="form-group">
														<label>Meta Description <span class="star-red">*</span></label>
														<textarea class="form-control"></textarea>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Submit</button>
															<button type="submit" class="btn btn-grey">Cancel</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
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