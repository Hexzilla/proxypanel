@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">ChartJs Charts</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">ChartJs Charts</li>
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
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Line Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartLine"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Bar Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar1"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Bar Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar2"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Area Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartArea"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Donut  Chart</h6>
										<p class="text-muted  card-sub-title">Below are an example of data in a donut chart.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPie"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pie Chart</h6>
										<p class="text-muted  card-sub-title">Below are an example of data in a pie chart.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartDonut"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Radar  Chart</h6>
										<p class="text-muted  card-sub-title">Below are an example of data in a radar chart.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartRadar"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Polar Chart</h6>
										<p class="text-muted  card-sub-title">Below are an example of data in a polar chart.</p>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPolar"></canvas>
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
<!-- Chartjs charts js-->
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/chart.chartjs.js')}}"></script>
@endsection