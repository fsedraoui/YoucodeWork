<?php $page="form-mask";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Form Mask</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Form Mask -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="card-header pt-0 mb-4">
										<h5 class="card-title">Form Mask</h5>
										<p class="card-text">Input masks can be used to force the user to enter data conform a specific format. Unlike validation, the user can't enter any other key than the ones specified by the mask.</p>
									</div>
									<form action="#">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" id="phone" class="form-control">
											<span class="form-text text-muted">(999) 999-9999</span>
										</div>
										<div class="form-group">
											<label>Date</label>
											<input type="text" id="date" class="form-control">
											<span class="form-text text-muted">dd/mm/yyyy</span>
										</div>
										<div class="form-group">
											<label>SSN field 1</label>
											<input type="text" id="ssn" class="form-control">
											<span class="form-text text-muted">e.g "999-99-9999"</span>
										</div>
										<div class="form-group">
											<label>Phone field + ext.</label>
											<input type="text" id="phoneExt" class="form-control">
											<span class="form-text text-muted">+40 999 999 999</span>
										</div>
										<div class="form-group">
											<label>Product Key</label>
											<input type="text" id="product" class="form-control">
											<span class="form-text text-muted">e.g a*-999-a999</span>
										</div>
										<div class="form-group">
											<label>Currency</label>
											<input type="text" id="currency" class="form-control">
											<span class="form-text text-muted">$ 999,999,999.99</span>
										</div>
										<div class="form-group">
											<label>Eye Script</label>
											<input type="text" id="eyescript" class="form-control">
											<span class="form-text text-muted">~9.99 ~9.99 999</span>
										</div>
										<div class="form-group">
											<label>Percent</label>
											<input type="text" id="pct" class="form-control">
											<span class="form-text text-muted">e.g "99%"</span>
										</div>
										<div class="form-group mb-0">
											<label>Credit Card Number</label>
											<input type="text" class="form-control" id="ccn">
											<span class="form-text text-muted">e.g "999.999.999.9999"</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Form Mask -->
						
				</div>
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
@endsection
