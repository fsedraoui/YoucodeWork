<?php $page="roles-permission";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Permission</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item"><a href="roles">Roles</a></li>
									
									<li class="breadcrumb-item active">Payments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->


					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title">Select Role Permission</h5>
									</div>
									<form>
										<div class="form-group">
											<label>Role Name</label>
											<select class="form-control select">
												<option>Select Role Name</option>
												<option>Show All Projects</option>
												<option>Show Open Projects</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary btn-block">Submit</button>
									</form>
								</div>
							</div>			
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<h5 class="card-title">Role Permissions</h5>
									</div>
									<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show all projects </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch1">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch1">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show running projects </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch2">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch2" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show open projects </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch3">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch3" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show cancelled projects </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch4">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch4" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show project cancel requests </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch5">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch5" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show project category</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch6">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch6" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show verification requests </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch7">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch7" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show user chats </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch8">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch8" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show all freelancers</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch9">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch9" checked>
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer packages </p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch10">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch10">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer skills</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch11">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch11">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer badges</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch12">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch12">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show all clients</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch13">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch13">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
		 								<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show client packages</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch14">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch14">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show client badges</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch15">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch15">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancers reviews</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch16">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch16">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show client reviews</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch17">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch17">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show active tickets</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch18">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch18">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show project payments</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch19">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch19">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show package payments</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch20">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch20">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer withdraw requests</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch21">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch21">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer payouts</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch22">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch22">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show employee roles</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch23">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch23">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show general setting</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch24">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch24">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show email setting</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch25">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch25">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show payment gateways setting</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch26">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch26">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show freelancer payment</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch27">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch27">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show manual payment methods</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch28">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch28">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Create new client package</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch29">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch29">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Create new freelancer package</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch30">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch30">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show dashboard</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch31">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch31">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
											</div>
										</div>
										<div class="col mb-3 d-flex">
											<div class="card flex-fill">
												<div class="card-body p-3 text-center">
												<p class="card-text f-12">Show create roles</p>
												</div>
												<div class="card-footer">
													<label class="form-group toggle-switch mb-0" for="notification_switch32">
													<input type="checkbox" class="toggle-switch-input" id="notification_switch32">
													<span class="toggle-switch-label mx-auto">
													<span class="toggle-switch-indicator"></span>
													</span>
													</label>
												</div>
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
   </div>
<!-- /Main Wrapper -->
@endsection