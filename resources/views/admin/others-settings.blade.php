<?php $page="others-settings";?>
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
									<li class="breadcrumb-item active">Others Settings</li>
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
									<li class="nav-item">
										<a class="nav-link" href="seo-settings">SEO Settings</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="others-settings">Others</a>
									</li>
								</ul>
							</div>
							<!-- Settings Menu -->

							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Enable Google Analytics</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_1" class="check" checked="">
													<label for="status_1" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Google Analytics <span class="star-red">*</span></label>
														<textarea class="form-control" placeholder="Google Analytics"></textarea>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Enable Google Adsense Code</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_2" class="check" checked="">
													<label for="status_2" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Google Adsense Code <span class="star-red">*</span></label>
														<textarea class="form-control" placeholder="Google Adsense Code"></textarea>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Display Facebook Messenger</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_3" class="check" checked="">
													<label for="status_3" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Facebook Messenger <span class="star-red">*</span></label>
														<textarea class="form-control" placeholder="Facebook Messenger"></textarea>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Display Facebook Pixel</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_4" class="check" checked="">
													<label for="status_4" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Google Adsense Code <span class="star-red">*</span></label>
														<textarea class="form-control" placeholder="Google Adsense Code"></textarea>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card w-100">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Display Google Recaptcha</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_5" class="check" checked="">
													<label for="status_5" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group form-placeholder">
														<label>Google Rechaptcha Site Key <span class="star-red">*</span></label>
														<input type="text" class="form-control" placeholder="6LcnPoEaAAAAAF6QhKPZ8V4744yiEnr41li3SYDn">
													</div>
													<div class="form-group form-placeholder">
														<label>Google Rechaptcha Secret Key <span class="star-red">*</span></label>
														<input type="text" class="form-control" placeholder="6LcnPoEaAAAAACV_xC4jdPqumaYKBnxz9Sj6y0zk">
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card w-100">
										<div class="card-body pt-0">
											<div class="card-header d-flex justify-content-between align-items-center">
												<h5 class="card-title">Cookies Agreement</h5>
												<div class="status-toggle d-flex justify-content-between align-items-center">
													<input type="checkbox" id="status_6" class="check" checked="">
													<label for="status_6" class="checktoggle">checkbox</label>
												</div>
											</div>
											<form>
												<div class="settings-form">
													<div class="form-group">
														<label>Cookies Agreement Text <span class="star-red">*</span></label>
														<div id="editor"></div>
													</div>
													<div class="form-group mb-0">
														<div class="settings-btns">
															<button type="submit" class="btn btn-orange">Save</button>
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