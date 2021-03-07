@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Echart</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Echart</li>
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
										<h6 class="card-title mb-1">Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic Bar chart example.</p>
									</div>
									<div>
										<div id="echart1" class="echart-height"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Combination line & Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic combination line & bar chart example.</p>
									</div>
									<div>
										<div id="echart2" class="echart-height"></div>
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
										<h6 class="card-title mb-1">Horizonatal Line Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic horizontal line chart example.</p>
									</div>
									<div>
										<div id="echart3" class="echart-height"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizonatal Combination line & Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic horizontal combination line & bar chart example.</p>
									</div>
									<div>
										<div id="echart4" class="echart-height"></div>
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
										<h6 class="card-title mb-1">Stacked Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic Stacked Bar chart example.</p>
									</div>
									<div>
										<div id="echart5" class="echart-height"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card overflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizonatal Stacked Bar Chart</h6>
										<p class="text-muted  card-sub-title">Below is the basic horizontal stacked bar chart example.</p>
									</div>
									<div>
										<div id="echart6" class="echart-height"></div>
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
<!-- ECharts js -->
<script src="{{ URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<script src="{{ URL::asset('assets/js/chart.echarts.js')}}"></script>
@endsection