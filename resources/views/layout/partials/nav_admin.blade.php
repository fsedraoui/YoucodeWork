<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"><span>Bonjour Staff</span></li>
							<li class="{{ Request::is('admin/index_admin') ? 'active' : '' }}">
								<a href="{{ url('admin/index_admin') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
								
							</li>
							<li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
								<a href="{{ url('admin/projectsAdmin') }}"><i data-feather="user-check"></i> <span>Projets à traiter</span></a>
							</li>
							<li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
								<a href="{{ url('projects') }}"><i data-feather="database"></i> <span>Tous les Projets</span></a>
							</li>
							<li class="{{ Request::is('admin/users') ? 'active' : '' }}" >
								<a href="{{ url('admin/users') }}"><i data-feather="users"></i> <span>Apprenants</span></a>
							</li>
							<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
								<a href="#"><i data-feather="copy"></i> <span>Offres d'emploi</span></a>
							</li>
							
							
							<li class="{{ Request::is('admin/change-password','admin/delete-account','admin/email-settings','admin/localization-details','admin/others-settings','admin/payment-settings','admin/seo-settings','admin/settings','admin/social-links','admin/social-settings','admin/tax-types') ? 'active' : '' }}">
								<a href="#"><i data-feather="settings"></i> <span>Settings</span></a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->