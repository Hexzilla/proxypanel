@extends('layouts.master')
@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Sweet Alert</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
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
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Alert</h6>
										<p class="text-muted card-sub-title">A Basic Message</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-basic'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Title alert</h6>
										<p class="text-muted card-sub-title">A title with a text under</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-title'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Success alert</h6>
										<p class="text-muted card-sub-title">A Success Message</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-success'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Warning alert</h6>
										<p class="text-muted card-sub-title">A warning message</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-warning'>
										Click me !
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Passing a parameter alert</h6>
										<p class="text-muted card-sub-title">By passing a parameter</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-parameter'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Image alert</h6>
										<p class="text-muted card-sub-title">A message with custom Image</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-image'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Timer alert</h6>
										<p class="text-muted card-sub-title">A message with auto close timer</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-timer'>
										Click me !
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="card custom-card text-center">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Ajax Alert</h6>
										<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
									</div>
									<div class="btn ripple btn-primary" id='swal-ajax'>
										Click me !
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
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
@endsection