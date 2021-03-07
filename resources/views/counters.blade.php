@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Counters</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Counters</li>
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
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Time Counting From 0</h6>
									</div>
									<div class="p-2">
										<span id="timer-countup" class="h4 mb-0 text-primary"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Time Counting From 60 to 20</h6>
									</div>
									<div class="p-2">
										<span id="timer-countinbetween" class="h4 mb-0 text-primary"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Time 1 minute counter</h6>
									</div>
									<div class="p-2">
										<span id="timer-countercallback" class="h4 mb-0 text-primary"></span>
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
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Time Counting days Limit</h6>
									</div>
									<div class="p-2">
										<span id="timer-outputpattern" class="h3 mb-0 text-secondary"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Numbers counter</h6>
									</div>
									<h2 class="counter number-font mb-0">2569</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Floating counter</h6>
									</div>
									<h2 class="counter number-font mb-0">2,56989.32</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div>
										<h6 class="card-title">Numbers counter</h6>
									</div>
									<h2 class="counter number-font mb-0">0.8998</h2>
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
<!-- Counter js-->
<script src="{{ URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/counters/counter.js')}}"></script>
@endsection