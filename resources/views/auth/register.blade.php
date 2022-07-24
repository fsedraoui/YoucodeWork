<?php $page="register";?>
@extends('layout.mainlayout')
@section('content')		

<!-- Page Content -->

			<div class="content">
				<div class="container">					
					<div class="row">
						<div class="col-md-6 offset-md-3">							
							<!-- Register Tab Content -->
							<div class="account-content">
								<div class="align-items-center justify-content-center">
									<div class="login-right">
										<div class="login-header text-center">
											<a href="index"><img src="assets/img/logo.svg" alt="logo" class="img-fluid" style="height : 70px"></a>
											<h3>Trouvez les meilleurs talents du Développement</h3>
											<p>Rejoingnez Youcode</p>
										</div>
										<nav class="user-tabs mb-4">
											<ul role="tablist" class="nav nav-pills nav-justified">
											
												<li class="nav-item">
													<a href="#company" data-bs-toggle="tab" class="nav-link">Entreprise</a>
												</li>
											</ul>
										</nav>
										<div class="tab-content pt-0">
											<div role="tabpanel" id="developer" class="tab-pane fade active show">
       
        <!-- Validation Errors -->
        
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Company Name -->
            <div>
                <x-label for="company" :value="__('Entreprise')" />

                <x-input id="company" class="form-control floating" type="text" name="company" :value="old('company')" required autofocus />
            </div>

            <!-- First Name -->
            <div>
                <x-label for="firstName" :value="__('Nom')" />

                <x-input id="firstName" class="form-control floating" type="text" name="firstName" :value="old('firstName')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="lastName" :value="__('Prénom')" />

                <x-input id="lastName" class="form-control floating" type="text" name="lastName" :value="old('lastName')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control floating" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control floating"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control floating"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-primary btn-block btn-lg login-btn">
                    {{ __('Register') }}
                </x-button>
            </div>
            <div class="row form-row">
                <div class="col-6 text-start">
                    <a class="forgot-link" href="forgot-password">Mot de passe oublié ? ?</a>
                </div>
                <div class="col-6 text-end dont-have">Vous avez déjà un compte <a href="login">Cliquez ici</a></div>
                </div>
        </form>
    </div>
</div>										
</div>
</div>
</div>
<!-- /Register Tab Content -->

</div>
</div>
</div>
</div>					
<!-- /Page Content -->


</div>
<!-- /Main Wrapper -->
@endsection