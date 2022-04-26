<?php $page="verify-identity";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Verify Identity Details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item active">Verify Identity Details</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->


					<div class="row">
						<div class="col-lg-12">
							<div class="card bg-white">
								<div class="card-body pt-0">
									<div class="card-header mb-4">
										<ul role="tablist" class="nav nav-pills card-header-pills nav-justified">
											<li class="nav-item">
												<a href="#employer" data-bs-toggle="tab" class="nav-link active me-1">Employers</a>
											</li>
											<li class="nav-item">
												<a href="#freelancer" data-bs-toggle="tab" class="nav-link">Freelancers</a>
											</li>
										</ul>
									</div>
									<div class="tab-content pt-0">
										<div role="tabpanel" id="employer" class="tab-pane fade show active">
											<div class="card">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-center table-hover mb-0 datatable">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Contact Number</th>	
																	<th>CNIC / Passport / NIN / SSN</th>	
																	<th>Document</th>	
																	<th>Address</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Emily Smith</td>
																	<td>601-316-9060</td>
																	<td>518-43-5504</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>148  Tanglewood Road, Fulton</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>	
																<tr>
																	<td>2</td>
																	<td>Angeline S Cutshaw</td>
																	<td>601-283-5402</td>
																	<td>158-07-8510</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-03.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>North Carolina, USAi</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>		
																<tr>
																	<td>3</td>
																	<td>Robert J Sullivan</td>
																	<td>601-316-5657</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Kentucky, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>		
																<tr>
																	<td>4</td>
																	<td>Crystal Kemper</td>
																	<td>601-321-8956</td>
																	<td>221-04-5659</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-04.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>64 Florida, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>5</td>
																	<td>Andrew Glover</td>
																	<td>601-213-4545</td>
																	<td>221-04-7245</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-05.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>New Jersey, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>6</td>
																	<td>Jacqueline Daye</td>
																	<td>601-456-2468</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td> Indiana, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>7</td>
																	<td>Tony Ingle</td>
																	<td>601-345-7834</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-07.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>644  Ferrell Street, Wadena</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>				
																<tr>
																	<td>8</td>
																	<td>Albert Boone</td>
																	<td>601-316-7765</td>
																	<td>321-04-3434</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-08.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>644  Ferrell Street, Wadena</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>				
																<tr>
																	<td>9</td>
																	<td>Kathleen Kaiser</td>
																	<td>601-545-2323</td>
																	<td>121-04-2323</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-09.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>644  Alabama, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>				
																<tr>
																	<td>10</td>
																	<td>Mickey Bernier</td>
																	<td>601-343-5656</td>
																	<td>221-34-4545</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-10.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td> North Carolina, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>																		
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" id="freelancer" class="tab-pane fade">
											<div class="card">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-center table-bordered table-hover datatable">
															<thead class="thead-light">
																<tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Contact Number</th>	
																	<th>CNIC / Passport / NIN / SSN</th>	
																	<th>Document</th>	
																	<th>Address</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Crystal Kemper</td>
																	<td>601-316-9060</td>
																	<td>518-43-5504</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-11.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Tanglewood Road, Fulton</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>	
																<tr>
																	<td>2</td>
																	<td>Cutshaw Emiley</td>
																	<td>601-283-5402</td>
																	<td>158-07-8510</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-12.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>2764 Brownton Road, Belzoni</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>		
																<tr>
																	<td>3</td>
																	<td>Nick John</td>
																	<td>601-316-9060</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-13.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td> Maine, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>4</td>
																	<td>Floyd Lewis</td>
																	<td>601-316-9060</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-14.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Alabama, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>		
																<tr>
																	<td>5</td>
																	<td>Santra Leodhapher</td>
																	<td>601-345-2325</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-15.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>North Carolina, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>6</td>
																	<td>James Douglas</td>
																	<td>601-788-9087</td>
																	<td>231-65-5656</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-16.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Indiana, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>7</td>
																	<td>John Smith</td>
																	<td>601-232-3422</td>
																	<td>221-05-3445</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>New Jersey, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>			
																<tr>
																	<td>8</td>
																	<td>Robert Leodhapher</td>
																	<td>601-454-8666</td>
																	<td>231-45-3434</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-02.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Kentucky, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>				
																<tr>
																	<td>9</td>
																	<td>Will Smith</td>
																	<td>601-316-9060</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-08.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td>Colorado, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>				
																<tr>
																	<td>10</td>
																	<td>Reboah Daniel</td>
																	<td>601-316-9060</td>
																	<td>221-04-8830</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="profile"><img class="me-2 rounded-circle" src="../assets_admin/img/profiles/avatar-06.jpg" alt="User Image"></a>
																		</h2>
																	</td>
																	<td> California, USA</td>
																	<td>
																		<a href="#" class="btn btn-success btn-disable">Approve</a>
																		<a href="#" class="btn btn-disable">Reject</a>
																	</td>
																</tr>																	
															</tbody>
														</table>
													</div>
												</div>
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
		<!-- /Main Wrapper -->
@endsection