<?php $page="register";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
		
			<div class="login-wrapper">
				<div class="container">
					<img class="img-fluid logo-dark mb-2" src="../assets_admin/img/logo-01.png" alt="Logo">
					<div class="loginbox">
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Join Kofejob</h1>
								<p class="account-subtitle">Make the most of your professional life</p>
								<nav class="user-tabs mb-4">
									<ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
										<li class="nav-item me-2">
											<a href="#developer" data-bs-toggle="tab" class="nav-link active mb-1">DEVELOPER</a>
										</li>
										<li class="nav-item">
											<a href="#company" data-bs-toggle="tab" class="nav-link mb-1">COMPANY</a>
										</li>
									</ul>
								</nav>
								<!-- Form -->
								<div class="tab-content pt-0">
									<div role="tabpanel" id="developer" class="tab-pane fade active show">
										<form action="login">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">User Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>	
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="dont-have">
												<p>You agree to the Kofejob <a href="#">User Agreement,</a> <a href="#">Privacy Policy,</a> and <a href="#">Cookie Policy</a>.</p>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Agree to join</button>
											<div class="login-or">
											<p class="mb-0">Or login with</p>
										</div>
										<!-- /Form -->
									
										<!-- Social Login -->
										<div class="row form-row social-login">
											<div class="col-lg-4">
												<a href="#" class="btn btn-twitter btn-block mb-1"> Twitter</a>
											</div>
											<div class="col-lg-4">
												<a href="#" class="btn btn-facebook btn-block mb-1"> Facebook</a>
											</div>
											<div class="col-lg-4">
												<a href="#" class="btn btn-google btn-block mb-1"> Google</a>
											</div>
										</div>
										<!-- /Social Login -->
										
										<div class="row form-row login-foot">
											<div class="col-lg-6 login-forgot">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-lg-6 dont-have">New to Kofejob? <a href="register">Click here</a></div>
										</div>
										</form>
									</div>
									<div role="tabpanel" id="company" class="tab-pane fade">
										<form action="login">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">User Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>	
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="dont-have">
												<p>You agree to the Kofejob <a href="#">User Agreement,</a> <a href="#">Privacy Policy,</a> and <a href="#">Cookie Policy</a>.</p>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Agree TO JOIN</button>
											<div class="login-or">
											<p class="mb-0">Or login with</p>
										</div>
										<!-- /Form -->
									
										<!-- Social Login -->
										<div class="row form-row social-login">
											<div class="col-4">
												<a href="#" class="btn btn-twitter btn-block"> Twitter</a>
											</div>
											<div class="col-4">
												<a href="#" class="btn btn-facebook btn-block"> Facebook</a>
											</div>
											<div class="col-4">
												<a href="#" class="btn btn-google btn-block"> Google</a>
											</div>
										</div>
										<!-- /Social Login -->
										
										<div class="row form-row login-foot">
											<div class="col-lg-6 login-forgot">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-lg-6 dont-have">New to Kofejob? <a href="register">Click here</a></div>
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
		<!-- /Main Wrapper -->
@endsection