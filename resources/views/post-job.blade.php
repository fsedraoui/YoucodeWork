<?php $page="post-job";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">AJOUTER UNE OFFER D'EMPLOIE</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content p-0">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="select-project mb-4">
							<form action="{{ route('store-job') }}" method="POST">
								@csrf
								<div class="title-box widget-box">

									<!-- job Title -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Intitulé du poste </h3>
											<div class="form-group mb-0">
												<input type="text" name="position" class="form-control" placeholder="Enter Project title">
											</div>
										</div>
									</div>
									<!-- /job Title -->

									<!-- contract -->
									<div class="title-content">
                                        <div class="title-detail">
                                            <h3>Type de contrat</h3>
											<div class="form-group mb-0">
                                                <input type="select"  name="contract" class="input-tags form-control"  id="services"  placeholder="contract">

											</div>
										</div>
									</div>
                                    <!-- contract -->

                                    <!-- expired date  -->
									<div class="title-content">
                                        <div class="title-detail">
                                            <h3>Date d'expiration</h3>
											<div class="form-group mb-0">
                                                <input type="date"  name="expiredDate" min="" class="input-tags form-control"  id="services"  placeholder="contract">

											</div>
										</div>
									</div>
                                    <!-- expired date -->

                                    <!-- Skills tags -->
                                    <div class="title-content">
                                        <div class="title-detail">
                                            <h3>Tags </h3>
                                            <div class="form-group mb-0">
                                                <input type="text" data-role="tagsinput" name="tags" class="input-tags form-control" name="services" value="#dev" id="services" placeholder="#UX, #UI, #GIT, #Trello">
                                                <p class="text-muted mb-0">saisir les tags utilisées pour votre job</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Skills tags -->

                                    <!-- isRenote -->
									<div class="title-content p-0">
                                        <div class="title-detail">
                                            <h3>IsRemote</h3>
											<div class="form-group mb-0">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="isRemote" id=""  >
                                                    Remote
                                                  </label>
                                                </div>
											</div>
										</div>
									</div>
                                    <!-- isRenote -->

									<!-- Add contractType -->
									<div class="title-content">
                                        <div class="title-detail">
                                            <h3>Boite de reception des CVs </h3>
											<div class="form-group mb-0">
                                                <input type="text" name="emailCvs" class="form-control" placeholder="Enter emai oû recevoir les CVs ">
											</div>
										</div>
									</div>
                                    <!-- Add contractType -->

									<!-- /Job description  -->
									<div class="title-content mb-3">
										<div class="title-detail">
											<h3>Description détaillée </h3>
											<div class="form-group mb-0">
												<textarea class="form-control" rows="5" name="description"></textarea>
											</div>
										</div>
									</div>
									<!-- /Job description -->

                                    <!-- /Job responsibilities  -->
									<div class="title-content pb-0 mt-2">
										<div class="title-detail">
											<h3>Compétences recherchées </h3>
											<div class="form-group mb-0 ">
												<textarea class="form-control" rows="5" name="responsibilities"></textarea>
											</div>
										</div>
									</div>
									<!-- /Job responsibilities -->


									<div class="row">
										<div class="col-md-12 text-end">
											<div class="btn-item">
												<button type="submit" class="btn next-btn">Submit</button>
											</div>
										</div>
									</div>

								</div>
								<!-- Project Title -->

							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection
