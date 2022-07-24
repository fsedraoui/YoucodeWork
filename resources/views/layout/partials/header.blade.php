<?php error_reporting(0);?>
<!-- Main Wrapper -->
<div class="main-wrapper">
<!-- Header -->

			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('redirectafterlogin')}}" class="navbar-brand logo">
							<img src="/assets/logo.svg" style="height:35px;max-height:60px" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index" class="menu-logo">
								<img src="/assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>


                       
						<ul class="main-nav">
							<!-- <li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="index">Home</a>
							</li> -->
							@if (Auth::user()->role==1)
							<li class="has-submenu <?php if($page=="dashboard" || $page=="manage-projects" || $page=="project-details" || $page=="developer"  || $page=="developer-details" || $page=="favourites" || $page=="membership-plans" || $page=="milestones" || $page=="chats" || $page=="review" || $page=="deposit-funds" || $page=="verify-identity" || $page=="profile-settings") { echo 'active'; } ?>">
								<a href="">Apprenant<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								
									<li class="<?php if($page=="dashboard") { echo 'active'; } ?>"><a href="{{ route('dashboard')}}">Dashboard</a></li>	
									<li class="<?php if($page=="post-projects") { echo 'active'; } ?>"><a href="{{route('post-project')}}">Nouveau Projet</a></li>							
									<li class="<?php if($page=="view-jobs") { echo 'active'; } ?>"><a href="{{route('view-jobs')}}">Postulez à une offre</a></li>								
								</ul>
							</li>
							@endif
							@if (Auth::user()->role==3)
							<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="apprenant-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio" || $page=="freelancer-profile") { echo 'active'; } ?>">
								<a href="">Entreprise<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									
									<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="{{ route('freelancer-dashboard')}}">Dashboard</a></li>	
									<li class="<?php if($page=="post-job") { echo 'active'; } ?>"><a href="{{ route('post-job')}}">Nouvelle offre</a></li>				
									<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="freelancer-profile-settings">Settings</a></li>				
								</ul>
							</li>
							@endif
							{{-- @if(Route::is(['freelancer-portfolio']))
							<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="freelancer-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio") { echo 'active'; } ?>">
								<a href="">For Freelancer<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="project"  || $page=="project-details") { echo 'active'; } ?>">
										<a href="#">Projects</a>
										<ul class="submenu">
											<li class="<?php if($page=="project") { echo 'active'; } ?>"><a href="project">Projects</a></li>
											<li class="<?php if($page=="project-details") { echo 'active'; } ?>"><a href="project-details">Project Details</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="freelancer-dashboard">Dashboard</a></li>	
									<li class="<?php if($page=="freelancer-project-proposals") { echo 'active'; } ?>"><a href="freelancer-project-proposals">Projects</a></li>
									<li class="<?php if($page=="freelancer-favourites") { echo 'active'; } ?>"><a href="freelancer-favourites">Favourites</a></li>
									<li class="<?php if($page=="freelancer-membership") { echo 'active'; } ?>"><a href="freelancer-membership">Membership</a></li>
									<li class="<?php if($page=="freelancer-change-password") { echo 'active'; } ?>"><a href="freelancer-change-password">Change Password</a></li>
									<li class="<?php if($page=="freelancer-chats") { echo 'active'; } ?>"><a href="freelancer-chats">Chats</a></li>
									<li class="<?php if($page=="freelancer-review") { echo 'active'; } ?>"><a href="freelancer-review">Review</a></li>	
									<li class="<?php if($page=="freelancer-portfolio") { echo 'active'; } ?>"><a href="freelancer-portfolio">Portfolio</a></li>		
									<li class="<?php if($page=="freelancer-withdraw-money") { echo 'active'; } ?>"><a href="freelancer-withdraw-money">Payments</a></li>							
									<li class="<?php if($page=="freelancer-verify-identity") { echo 'active'; } ?>"><a href="freelancer-verify-identity">Verify Identity</a></li>				
									<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="freelancer-profile-settings">Settings</a></li>				
								</ul>
							</li>
							@endif --}}
						
							@if (Auth::user()->role==2 || Auth::user()->role==1 || Auth::user()->role==3 )
							<li class="							
							@if(Route::is(['projects']))
							active
							@endif
							"><a href="{{ route('projects') }}">Nos créations</a></li>
							
							@endif
							@if (Auth::user()->role==2)
							
							<li>
								<a href="{{ url('/admin/index_admin') }}" target="_blank">Staff Dashboard</a>
							</li>
							@endif
							@if (Auth::user()->role==1)
							
							<li>
								<a  href="{{route('apprenant-projetsvalides')}}" target="_blank">Mes Projets</a>
							</li>
							@endif
							@if (Auth::user()->role==1)
							
							<li>
								<a  href="{{route('view-jobs')}}" target="_blank">Offres d'emploi</a>
							</li>
							@endif
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">		
					 @if(!Route::is(['project-details','projetsenInstance','store-project','view-jobs','apprenant-projetsvalides','cancelled-projects','change-password','chats','completed-projects','dashboard','delete-account','deposit-funds','edit-project','favourites','files','freelancer-cancelled-projects','freelancer-change-password','freelancer-chats','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-files','freelancer-invitations','freelancer-invoices','freelancer-membership','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-portfolio','freelancer-profile-settings','freelancer-profile','freelancer-project-proposals','freelancer-review','freelancer-task','freelancer-transaction-history','freelancer-verify-identity','freelancer-view-project-detail','freelancer-withdraw-money','invited-freelancer','manage-projects','membership-plans','milestones','ongoing-projects','pending-projects','post-job','post-project','profile-settings','project-payment','project-proposals','review','tasks','transaction-history','verify-identity','view-invoice','view-project-detail','withdraw-money','user-account-details','projects']))											
						<li><a href="{{ route('register') }}" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
						<li><a href="{{ route('auth') }}" class="log-btn"><i class="fas fa-lock"></i> Login</a></li>
						@endif
						<!-- User Menu -->
						 @if(Route::is(['blog-grid','projects','post-project','project-details','projetsenInstance','store-project','view-jobs','apprenant-projetsvalides','projects','cancelled-projects','change-password','completed-projects','dashboard','delete-account','deposit-funds','favourites','files','invited-freelancer','manage-projects','membership-plans','milestones','ongoing-projects','pending-projects','profile-settings','project-payment','review','tasks','transaction-history','view-project-detail','withdraw-money','user-account-details']))
						<li class="nav-item dropdown has-arrow main-drop account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="../assets/img/img-04.jpg" alt="">
								</span>
								<span>{{ Auth::user()->lastName }} {{ Auth::user()->firstName }}</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="{{route('apprenant-projetsvalides')}}"><i class="material-icons">business_center</i> Mes Projets</a>								
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="#"> <i class="material-icons">settings</i> Settings</a>
								<form method="POST" action="{{ route('logout') }}">
                            @csrf
							<a class="dropdown-item" href="{{route('logout')}}" 

                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
												<i class="material-icons">power_settings_new</i>
                                {{ __('Log Out') }}
							</a>

						</form>
								<!-- <a class="dropdown-item" href="index"><i class="material-icons">power_settings_new</i> Logout</a> -->
							</div>
						</li>
						@endif
						 @if(Route::is(['chats','edit-project','freelancer-cancelled-projects','freelancer-change-password','freelancer-chats','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-files','freelancer-invitations','freelancer-invoices','freelancer-membership','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-portfolio','freelancer-profile-settings','freelancer-profile','freelancer-project-proposals','freelancer-review','freelancer-task','freelancer-transaction-history','freelancer-verify-identity','freelancer-view-project-detail','freelancer-withdraw-money','post-job','project-proposals','verify-identity','view-invoice','enInstance-project-proposals']))
						<li class="nav-item dropdown account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								MY ACCOUNT
							</a>
							<div class="dropdown-menu emp">
								<!-- <div class="drop-head">Account Details</div>	
								<a class="dropdown-item" href="freelancer-profile"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="freelancer-project-proposals"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="freelancer-bookmarks"><i class="material-icons">local_play</i> Bookmarks</a>
								<a class="dropdown-item" href="freelancer-review"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Financial Settings</div>
								<a class="dropdown-item bal" href="#">Balance <span class="amt">₹0.00 INR</span></a>
								<a class="dropdown-item" href="freelancer-withdraw-money"><i class="material-icons">wifi_tethering</i> Withdraw funds</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="freelancer-profile-settings"> <i class="material-icons">settings</i> Profile Settings</a> -->
								<form method="POST" action="{{ route('logout') }}">
                            @csrf
							<a class="dropdown-item" href="{{route('logout')}}" 

                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
												<i class="material-icons">power_settings_new</i>
                                {{ __('Log Out') }}
							</a>		
						</form>					
						</div>
						</li>
						@endif
						<!-- /User Menu -->
						@if (Auth::user()->role==1)
						<li><a href="{{ route('post-project')}}" class="login-btn">Postez un Projet </a></li>
						@endif
						@if (Auth::user()->role==3)
						<li><a href="{{ route('post-job')}}" class="login-btn">Postez une offre </a></li>
						@endif
					</ul>
				</nav>
			</header>
			<!-- /Header -->