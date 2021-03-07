@extends('layouts.master')
@section('css')
<!---Jqvmp css-->
<link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Vector Maps</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Maps & Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
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
						<div class="col-lg-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vector Map: World</h6>
										<p class="text-muted card-sub-title">Below is an example of displaying the world map.</p>
									</div>
									<div class="ht-300 ht-lg-400" id="vmap"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vector Map: Canada</h6>
										<p class="text-muted card-sub-title">Below is an example of displaying the canada map.</p>
									</div>
									<div class="ht-300" id="vmap3"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vector Map: USA</h6>
										<p class="text-muted card-sub-title">Below is an example of displaying the usa map.</p>
									</div>
									<div class="ht-300" id="vmap2"></div>
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
<!-- Jqvmap js-->
<script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
<script src="{{ URL::asset('assets/js/vector-map.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection