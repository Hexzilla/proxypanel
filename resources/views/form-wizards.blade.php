@extends('layouts.master')
@section('css')
<!---Prism css-->
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Jquery.mCustomScrollbar css-->
<link href="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Form wizard</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form wizard</li>
							</ol>
						</div>
						<div class="btn btn-list">
							<a class="btn ripple btn-primary" href="#"><i class="fe fe-external-link"></i> Export</a>
							<a class="btn ripple btn-secondary" href="#"><i class="fe fe-download"></i> Download</a>
							<a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a>
							<a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
							</a>
							<div  class="dropdown-menu tx-13">
								<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View</a>
								<a class="dropdown-item" href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a>
								<a class="dropdown-item" href="#"><i class="fe fe-mail mr-2"></i>Email</a>
								<a class="dropdown-item" href="#"><i class="fe fe-folder-plus mr-2"></i>Save</a>
								<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a>
								<a class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>More</a>
							</div>
						</div>
					</div>
					<!-- End Page Header -->
@endsection
@section('content')
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Content Wizard</h6>
										<p class="text-muted card-sub-title">Below is an example of a basic horizontal form wizard.</p>
									</div>
									<div id="wizard1">
										<h3>Login</h3>
										<section>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
												<input class="form-control" required="" type="email">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
												<input class="form-control" required="" type="password">
											</div>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">Check me out</span>
											</label>
										</section>
										<h3>New User</h3>
										<section>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">User Name</label>
												<input class="form-control" required="" type="text">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
												<input class="form-control" required="" type="email">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
												<input class="form-control" required="" type="password">
											</div>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">Check me out</span>
											</label>
										</section>
										<h3>End</h3>
										<section>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
											</label>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vertical Form Wizard</h6>
										<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
									</div>
									<div id="wizard3">
										<h3>Personal Information</h3>
										<section>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
												<input class="form-control" required="" type="email">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
												<input class="form-control" required="" type="password">
											</div>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">Check me out</span>
											</label>
										</section>
										<h3>New User</h3>
										<section>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">User Name</label>
												<input class="form-control" required="" type="text">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
												<input class="form-control" required="" type="email">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
												<input class="form-control" required="" type="password">
											</div>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">Check me out</span>
											</label>
										</section>
										<h3>End</h3>
										<section>
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
											</label>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body accordion-wizard">
									<div>
										<h6 class="card-title mb-1">Accordion Wizard</h6>
										<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
									</div>
									<form id="form">
										<div class="list-group">
											<div class="list-group-item py-4" data-acc-step>
												<h6 class="mb-0" data-acc-title>Name &amp; Email</h6>
												<div data-acc-content>
													<div class="my-3">
														<div class="form-group">
															<label>Name:</label>
															<input type="text" name="name" class="form-control" />
														</div>
														<div class="form-group">
															<label>Email:</label>
															<input type="text" name="email" class="form-control" />
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item py-4" data-acc-step>
												<h6 class="mb-0" data-acc-title>Contact</h6>
												<div data-acc-content>
													<div class="my-3">
														<div class="form-group">
															<label>Telephone:</label>
															<input type="text" name="telephone" class="form-control" />
														</div>
														<div class="form-group">
															<label>Mobile:</label>
															<input type="text" name="mobile" class="form-control" />
														</div>
													</div>
												</div>
											</div>
											<div class="list-group-item py-4" data-acc-step>
												<h6 class="mb-0" data-acc-title>Payment</h6>
												<div data-acc-content>
													<div class="my-3">
														<div class="form-group">
															<label>Credit card:</label>
															<input type="text" name="card" class="form-control">
														</div>
														<div class="form-group form-row">
															<div class="col-sm-4">
																<label>Expiry:</label>
																<input type="text" name="expiry" class="form-control">
															</div>
															<div class="col-sm-4">
																<label>CVV:</label>
																<input type="text" name="cvv" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Jquery-steps js-->
<script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<!-- Accordion-Wizard-Form js-->
<script src="{{ URL::asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
<!-- Form-wizard js-->
<script src="{{ URL::asset('assets/js/form-wizard.js')}}"></script>
@endsection