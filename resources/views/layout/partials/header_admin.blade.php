	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">
		
			<!-- Logo -->
			<div class="header-left">
				<a href="{{ url('/admin/index_admin') }}" class="logo">
					<img src="../assets_admin/img/logo.png" alt="Logo">
				</a>
				<a href="{{ url('/admin/index_admin') }}" class="logo logo-small">
					<img src="../assets_admin/img/logo.png" alt="Logo" width="30" height="30">
				</a>
				<!-- Sidebar Toggle -->
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="feather-chevrons-left"></i>
				</a>
				<!-- /Sidebar Toggle -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="feather-chevrons-left"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
			</div>
			<!-- /Logo -->
			
			<!-- Search -->
			
			<!-- /Search -->
			
			<!-- Header Menu -->
			<ul class="nav user-menu">

				<!-- Notifications -->
				
				<!-- /Notifications -->
				
				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img src="../assets_admin/img/profiles/avatar-07.jpg" alt="">
							<span class="status online"></span>
						</span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ url('admin/users') }}"><i data-feather="user" class="me-1"></i> Apprenants</a>
						<a class="dropdown-item" href="{{ url('admin/index_admin') }}"><i data-feather="settings" class="me-1"></i> dashbord</a>
							<form method="POST" action="{{ route('logout') }}">
                            @csrf
							<a class="dropdown-item" href="{{route('logout')}}" 

                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
												<i data-feather="log-out" class="me-1"></i>
                                {{ __('Log Out') }}
							</a>

						</form>
					</div>
				</li>
				<!-- /User Menu -->
				
			</ul>
			<!-- /Header Menu -->
			
		</div>
		<!-- /Header -->
