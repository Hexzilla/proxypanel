@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Sparkline Charts</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sparkline Charts</li>
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
						<div class="col-lg-3 col-md-6">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Sparkline Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div>
										<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10,12,8,7,13,15</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Sparkline Stacked Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic stacked bar chart example.</p>
									</div>
									<div>
										<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,9,10,6,4,8</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Sparkline Line Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
									</div>
									<div>
										<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,10,5,8,9,12,4,7,13,6</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Sparkline Area Chart</h6>
										<p class="text-muted  card-sub-title">Below is the area bar chart example.</p>
									</div>
									<div>
										<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-4 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Sparkline Pie Chart</h6>
										<p class="text-muted  card-sub-title">An example of a pie chart with two series.</p>
									</div>
									<div class="d-flex">
										<div>
											<span id="sparkline9">3,4,4</span>
										</div>
										<div class="mg-l-30">
											<span id="sparkline10">3,4,4,7,5,9</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Peity Line Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
									</div>
									<div class="text-center">
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#8760fb", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Peity Area Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
									</div>
									<div class="text-center">
										<span class="peity-line" data-peity='{ "fill": "rgba(235, 111, 51,.2)", "stroke": "#eb6f33", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Peity Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div class="d-sm-flex">
										<div>
											<span class="peity-bar" data-peity='{ "fill": ["#8760fb"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
										<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
											<span class="peity-bar" data-peity='{ "fill": ["#eb6f33"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Peity Pie &amp; Donut Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic pie and donut chart example.</p>
									</div>
									<div class="d-flex">
										<div>
											<span class="peity-pie" data-peity='{ "fill": ["#8760fb","#eb6f33","#01b8ff"], "height": 70, "width": 100 }'>10,4,4</span>
										</div>
										<div class="mg-l-30">
											<span class="peity-donut" data-peity='{ "fill": ["#8760fb","#eb6f33","#01b8ff"], "height": 70, "width": 100 }'>10,4,4</span>
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
<!-- Sparkline js-->
<script src="{{ URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/chart.sparkline.js')}}"></script>
<!-- Peity charts js-->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/chart.peity.js')}}"></script>
@endsection