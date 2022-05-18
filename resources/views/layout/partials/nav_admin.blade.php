<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"><span>Main</span></li>
							<li class="{{ Request::is('admin/index_admin') ? 'active' : '' }}">
								<a href="{{ url('admin/index_admin') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
							</li>
							<li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
								<a href="{{ url('admin/projectsAdmin') }}"><i data-feather="database"></i> <span>Projets</span></a>
							</li>
							<li class="{{ Request::is('admin/users') ? 'active' : '' }}" >
								<a href="{{ url('admin/users') }}"><i data-feather="users"></i> <span>Utilisateurs</span></a>
							</li>
							<li class="{{ Request::is('admin/categories','admin/sub-category') ? 'active' : '' }}">
								<a href="{{ url('admin/categories') }}"><i data-feather="copy"></i> <span>Offres d'emploi</span></a>
							</li>
							<li class="{{ Request::is('admin/providers') ? 'active' : '' }}">
								<a href="{{ url('admin/providers') }}"><i data-feather="user-check"></i> <span>Entreprise</span></a>
							</li>
							
							<li class="{{ Request::is('admin/change-password','admin/delete-account','admin/email-settings','admin/localization-details','admin/others-settings','admin/payment-settings','admin/seo-settings','admin/settings','admin/social-links','admin/social-settings','admin/tax-types') ? 'active' : '' }}">
								<a href="{{ url('admin/settings') }}"><i data-feather="settings"></i> <span>Settings</span></a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->