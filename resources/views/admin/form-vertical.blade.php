<?php $page="form-vertical";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Vertical Form</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Form Vertical -->
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">									
									<div class="card-header pt-0 mb-4">
										<h4 class="card-title">Basic Form</h4>
									</div>
									<form action="#">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Email Address</label>
											<input type="email" class="form-control">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Repeat Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="text-end">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h4 class="card-title">Address Form</h4>
									</div>
									<form action="#">
										<div class="form-group">
											<label>Address Line 1</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Address Line 2</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>City</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>State</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Country</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Postal Code</label>
											<input type="text" class="form-control">
										</div>
										<div class="text-end">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h4 class="card-title">Two Column Vertical Form</h4>
									</div>
									<form action="#">
										<h5 class="card-title">Personal Information</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Blood Group</label>
													<select class="form-select">
														<option>Select</option>
														<option value="1">A+</option>
														<option value="2">O+</option>
														<option value="3">B+</option>
														<option value="4">AB+</option>
													</select>
												</div>
												<div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control">
												</div>

												<div class="form-group">
													<label>Password</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Repeat Password</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<h5 class="card-title">Postal Address</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 1</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Address Line 2</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="text-end">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h4 class="card-title">Two Column Vertical Form</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<h5 class="card-title">Personal details</h5>
												<div class="form-group">
													<label>Name:</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Password:</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label>State:</label>
													<select class="form-select">
														<option>Select State</option>
														<option value="1">California</option>
														<option value="2">Texas</option>
														<option value="3">Florida</option>
													</select>
												</div>
												<div class="form-group">
													<label>Your Message:</label>
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<h5 class="card-title">Personal details</h5>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>First Name:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Email:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Address line:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Country:</label>
															<select class="form-select">
																<option>Select Country</option>
																<option value="1">USA</option>
																<option value="2">France</option>
																<option value="3">India</option>
																<option value="4">Spain</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>State/Province:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>ZIP code:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>City:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-end">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Form Vertical -->
						
				</div>
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
@endsection