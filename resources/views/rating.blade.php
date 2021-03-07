@extends('layouts.master')
@section('css')
<!-- RatingThemes css-->
<link href="{{ URL::asset('assets/plugins/rating/ratings.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-1to10.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-movie.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-square.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-pill.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-reversed.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bars-horizontal.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/fontawesome-stars.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/css-stars.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/bootstrap-stars.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/rating/themes/fontawesome-stars-o.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Rating</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Rating</li>
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
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Static Star Rating</h6>
									</div>
									<div class="static-rate text-center fs-30">
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
										<i class="fa fa-star text-warning" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Static Heart Rating</h6>
									</div>
									<div class="static-rate text-center fs-30">
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Star Rating</h6>
									</div>
									<div class="rating-stars block" id="rating">
										<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Heart Rating</h6>
									</div>
									<div class="rating-stars block" id="another-rating">
										<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
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
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multi Star Rating</h6>
									</div>
									<div class="rating-stars block" id="more-rating">
										<input type="number" readonly="readonly" class="rating-value" name="more-rating-stars-value" id="more-rating-stars-value" value="2">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multi Heart Rating</h6>
									</div>
									<div class="rating-stars block" id="another-rating1">
										<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value2" value="4">
										<div class="rating-stars-container">
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
											</div>
											<div class="rating-star">
												<i class="fa fa-heart"></i>
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
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Bar 1/10 Rating</h6>
									</div>
									<div class="box  box-example-1to10">
										<div class="box-body">
											<select id="example-1to10" name="rating" autocomplete="off">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7" selected="selected">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Opinion rating</h6>
									</div>
									<div class="box box-example-movie">
										<div class="box-body">
											<select id="example-movie" name="rating" autocomplete="off">
												<option value="Bad">Bad</option>
												<option value="Mediocre">Mediocre</option>
												<option value="Good" selected="selected">Good</option>
												<option value="Awesome">Awesome</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Square Rating</h6>
									</div>
									<div class="box  box-example-1to10">
										<div class="box box-example-square">
											<div class="box-body">
												<select id="example-square" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Grade Rating</h6>
									</div>
									<div class="box  box-example-pill">
										<div class="box-body">
											<select id="example-pill" name="rating" autocomplete="off">
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
												<option value="F">F</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizontal Bar Rating</h6>
									</div>
									<div class="box box-large box-example-horizontal">
										<div class="box-body">
											<select id="example-horizontal" name="rating" autocomplete="off">
												<option value="10">10</option>
												<option value="9">9</option>
												<option value="8">8</option>
												<option value="7">7</option>
												<option value="6">6</option>
												<option value="5">5</option>
												<option value="4">4</option>
												<option value="3">3</option>
												<option value="2">2</option>
												<option value="1" selected="selected">1</option>
											</select>
										</div>
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
<!-- Check-all-mail js-->
<script src="{{ URL::asset('assets/js/check-all-mail.js')}}"></script>
<!-- Rating js-->
<script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/rating/ratings.js')}}"></script>
@endsection