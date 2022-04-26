<?php $page="form-basic-inputs";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Basic Inputs</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<!-- Form Basic Inputs -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h5 class="card-title">Basic Inputs</h5>
									</div>
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Text Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Password</label>
											<div class="col-md-10">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Disabled Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control" disabled="disabled">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Readonly Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control" value="readonly" readonly="readonly">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Placeholder</label>
											<div class="col-md-10">
												<input type="text" class="form-control" placeholder="Placeholder">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">File Input</label>
											<div class="col-md-10">
												<input class="form-control" type="file">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Default Select</label>
											<div class="col-md-10">
												<select class="form-select">
													<option>-- Select --</option>
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
													<option>Option 4</option>
													<option>Option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Radio</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 1
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 2
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 3
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Checkbox</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 1
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 2
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 3
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Textarea</label>
											<div class="col-md-10">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
											</div>
										</div>
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2">Input Addons</label>

											<div class="col-md-10">
												<div class="input-group mb-3">
													<span class="input-group-text" id="basic-addon1">@</span>
													<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
													<button class="btn btn-primary" type="button">Button</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h5 class="card-title">Input Sizes</h5>
									</div>
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Large Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Default Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control" placeholder=".form-control">
											</div>
										</div>
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2">Small Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Form Basic Inputs -->

						
				</div>
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
@endsection