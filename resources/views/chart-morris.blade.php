@extends('layouts.master')
@section('css')
<!---Morrirs Chart css-->
<link href="{{ URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Morrirs Chart</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morrirs Chart</li>
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
										<h6 class="card-title mb-1">Area Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisArea1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Area Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisArea2"></div>
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
										<h6 class="card-title mb-1">Line Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisLine1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Line Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisLine2"></div>
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
										<h6 class="card-title mb-1">Bar Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisBar1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Bar Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisBar2"></div>
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
										<h6 class="card-title mb-1">Stacked Bar Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example with option <i>stacked</i> set to <i>true</i>.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisBar3"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Stacked Bar Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic bar chart example with option <i>stacked</i> set to <i>true</i>.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisBar4"></div>
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
										<h6 class="card-title mb-1">Donut Chart1</h6>
										<p class="text-muted  card-sub-title">Below is the basic donut chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisDonut1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Donut Chart2</h6>
										<p class="text-muted  card-sub-title">Below is the basic donut chart example.</p>
									</div>
									<div class="morris-wrapper-demo" id="morrisDonut2"></div>
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
<!-- Morris Chart js-->
<script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/morris.js/morris.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/chart.morris.js')}}"></script>
@endsection