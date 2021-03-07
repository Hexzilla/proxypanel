@extends('layouts.master')
@section('css')
<!---Select2 css-->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Form Layouts</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">A form control layout using basic layout.</p>
									</div>
									<div class="d-flex flex-column">
										<div class="form-group">
											<input class="form-control" placeholder="Enter your username" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Enter Your Email" type="email">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Enter Your Password" type="password">
										</div>
										<div class="form-group">
											<label class="ckbox">
												<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
											</label>
										</div>
										<button class="btn ripple btn-main-primary">Submit</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizonatal Form</h6>
										<p class="text-muted card-sub-title">A form control layout using basic layout.</p>
									</div>
									<div class="">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Firstname</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="Enter your firstname" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Lastname</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="Enter your lastname" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="mg-b-0">Email</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="Enter your email" type="email">
											</div>
										</div>
										<div class="form-group row justify-content-end">
											<div class="col-md-8 pl-md-2">
												<div class="form-group mb-0">
													<label class="ckbox">
														<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row justify-content-end mb-0">
											<div class="col-md-8 pl-md-2">
												<button class="btn ripple btn-primary pd-x-30 mg-r-5">Register</button>
												<button class="btn ripple btn-secondary pd-x-30">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Grid Form</h6>
										<p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p>
									</div>
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12">
											<div class="">
												<div class="form-group">
													<label class="">Name</label>
													<input class="form-control" required="" type="text">
												</div>
												<div class="form-group">
													<label class="">Email</label>
													<div class="pos-relative">
														<input class="form-control pd-r-80" required="" type="email">
													</div>
												</div>
												<div class="form-group">
													<div class="row row-sm">
														<div class="col-sm-4">
															<label class="">Date</label>
															<select class="form-control select select2">
																<option label="Date"></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
															</select>
														</div>
														<div class="col-sm-4 mg-t-20 mg-sm-t-0">
															<label class="">Month</label>
															<select class="form-control select select2">
																<option label="Month"></option>
																<option value="January">January</option>
																<option value="February">February</option>
																<option value="March">March</option>
																<option value="April">April</option>
																<option value="May">May</option>
																<option value="June">June</option>
																<option value="July">July</option>
																<option value="August">August</option>
																<option value="September">September</option>
																<option value="October">October</option>
																<option value="November">November</option>
																<option value="December">December</option>
															</select>
														</div>
														<div class="col-sm-4 mg-t-20 mg-sm-t-0">
															<label class="">Year</label>
															<select class="form-control select select2">
																<option label="year"></option>
																<option value="2019">2019</option>
																<option value="2018">2018</option>
																<option value="2017">2017</option>
																<option value="2016">2016</option>
																<option value="2015">2015</option>
																<option value="2014">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<option value="2011">2011</option>
																<option value="2010">2010</option>
																<option value="2009">2009</option>
																<option value="2008">2008</option>
																<option value="2007">2007</option>
																<option value="2006">2006</option>
																<option value="2005">2005</option>
																<option value="2004">2004</option>
																<option value="2003">2003</option>
																<option value="2002">2002</option>
																<option value="2001">2001</option>
																<option value="1999">1999</option>
																<option value="1998">1998</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group mg-b-20">
													<label class="ckbox">
														<input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
													</label>
												</div>
												<button class="btn ripple btn-main-primary btn-block">Submit</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Form in Dropdown</h6>
										<p class="text-muted card-sub-title">A form group layout inside a dropdown panel.</p>
									</div>
									<div class="main-dropdown-form-demo">
										<button class="btn ripple btn-main-primary pd-x-20" data-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-l-5 tx-12"></i></button>
										<div class="dropdown-menu">
											<h6 class="dropdown-title text-center mb-4">Subscribe</h6>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your fullname" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your email" type="email">
											</div><button class="btn ripple btn-primary btn-block">Subscribe</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Form in Modal</h6>
										<p class="text-muted card-sub-title">A form group layout inside a modal panel.</p>
									</div>
									<div class="">
										<a class="btn ripple btn-main-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
									</div>
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
<!-- Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Form-layouts-->
<script src="{{ URL::asset('assets/js/form-layouts.js')}}"></script>
@endsection