<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->
			<div class="content">
				<div class="container">					
					<div class="row">
						<div class="col-md-6 offset-md-3">
							
							<!-- Login Content -->
							<div class="account-content">
								<div class="align-items-center justify-content-center">
									<div class="login-right">
										<div class="login-header text-center">
											<a href="index"><img src="assets/img/logo-01.png" alt="logo" class="img-fluid"></a>
											<h3>Welcome Back</h3>
											<p>Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
										</div>
										<form action="dashboard">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>											
											<div class="form-group">
												<label class="custom_check">
													<input type="checkbox" name="rem_password">
													<span class="checkmark"></span> Remember password
												</label>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<p>Or login with</p>
											</div>
											<div class="row social-login">
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
											<div class="row">
											<div class="col-6 text-start">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-6 text-end dont-have">New to Kofejob? <a href="register">Click here</a></div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Content -->
								
						</div>
					</div>
				</div>
			</div>					
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection