<?php $page="forgot-password";?>
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
								<h1>Forgot Password?</h1>
								<p class="account-subtitle">Enter your email to get a password reset link</p>
								
								<!-- Form -->
								<form action="login">
									<div class="form-group form-focus">
										<input type="email" class="form-control floating">
										<label class="focus-label">Email</label>
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">FIND OUT PASSWORD</button>
									</div>
								</form>
								<!-- /Form -->
								<div class="row form-row login-foot">
									<div class="col-lg-6 login-forgot">
										<a class="forgot-link" href="login">Sign In</a>
									</div>
									<div class="col-lg-6 dont-have">New to Kofejob? <a href="register">Join Now</a></div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
@endsection