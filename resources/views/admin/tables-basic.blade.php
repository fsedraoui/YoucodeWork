<?php $page="tables-basic";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Basic Tables</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Table -->
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Basic Table</h4>
									</div>
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Striped Rows</h4>
									</div>
									<div class="table-responsive">
										<table class="table table-striped mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Bordered Table</h4>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Hover Rows</h4>
									</div>
										<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr>
													<td>Mary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr>
													<td>July</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Contextual Classes</h4>
									</div>
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Default</td>
													<td>Defaultson</td>
													<td>def@somemail.com</td>
												</tr>
												<tr class="table-primary">
													<td>Primary</td>
													<td>Doe</td>
													<td>john@example.com</td>
												</tr>
												<tr class="table-secondary">
													<td>Secondary</td>
													<td>Moe</td>
													<td>mary@example.com</td>
												</tr>
												<tr class="table-success">
													<td>Success</td>
													<td>Dooley</td>
													<td>july@example.com</td>
												</tr>
												<tr class="table-danger">
													<td>Danger</td>
													<td>Refs</td>
													<td>bo@example.com</td>
												</tr>
												<tr class="table-warning">
													<td>Warning</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-info">
													<td>Info</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-light">
													<td>Light</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
												<tr class="table-dark">
													<td>Dark</td>
													<td>Activeson</td>
													<td>act@example.com</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0">
										<h4 class="card-title">Responsive Tables</h4>
									</div>
									<div class="table-responsive">
										<table class="table table-nowrap mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Firstname</th>
													<th>Lastname</th>
													<th>Age</th>
													<th>City</th>
													<th>Country</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
												<tr>
													<td>1</td>
													<td>Anna</td>
													<td>Pitt</td>
													<td>35</td>
													<td>New York</td>
													<td>USA</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Table -->
						
				</div>
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
@endsection