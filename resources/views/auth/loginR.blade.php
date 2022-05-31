<?php $page="loginR";?>
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
											<a href="index"><img src="assets/img/logo.svg" style="height : 70px" alt="logo" class="img-fluid"></a>
											<h3>Bienvenu</h3>
											<p>Découvrir les compètences de nos apprenants les plus talenteux</p>
										</div><form method="POST" action="{{ route('loginR') }}">
            								@csrf<form action="dashboard">
											<div class="form-group form-focus">
												<x-input id="email" class="form-control floating" type="email" name="email" :value="old('email')" required autofocus />
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<x-input id="password" class="form-control floating"  type="password" name="password"  required autocomplete="current-password" />
												<label class="focus-label">Password</label>
											</div>	
											<div class="form-group form-focus">
												<x-input id="role" class="form-control floating"  type="hidden" name="role"  value="3" />
											</div>																						
											<div class="form-group">
												<label for="remember_me" class="custom_check">
													<input id="remember_me" type="checkbox" name="rem_password">
													<span class="checkmark"></span> {{ __('Remember me') }}
												</label>
											</div>
											<div class="block mt-4">
               
                                             </div>
			                    			 <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="btn btn-primary btn-block btn-lg login-btn">
                    {{ __('Log in') }}
                </x-button>
            </div>					
											<!-- <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">{{ __('Log in') }}</button>
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
											</div> -->
											<div class="col-6 text-end dont-have">Vous n'avez pas de compte ? <a href="register">Inscrivez-vous</a></div>
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