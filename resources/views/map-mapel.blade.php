@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Mapel Maps</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Maps & Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mapel Maps</li>
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
										<h6 class="card-title mb-1">Map with links between the plotted cities</h6>
										<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
									</div>
									<div class="mapcontainer4">
										<div class="map ">
											<span>Alternative content for the map</span>
										</div>
									</div>
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
										<h6 class="card-title mb-1">Static MapleMap</h6>
										<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
									</div>
									<div class="mapcontainer">
										<div class="map">
											<span>Alternative content for the map</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Map with a legend for areas</h6>
										<p class="text-muted">Ease the build of pretty data visualizations on dynamic vector maps.</p>
									</div>
									<div class="mapcontainer1">
										<div class="map">
											<span>Alternative content for the map</span>
										</div>
									</div>
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
										<h6 class="card-title mb-1">Map with a legend for plotted cities</h6>
										<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
									</div>
									<div class="mapcontainer2">
										<div class="map">
											<span>Alternative content for the map</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Map with multiple plotted cities legends</h6>
										<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
									</div>
									<div class="mapcontainer3">
										<div class="map">
											<span>Alternative content for the map</span>
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
<!-- Leaflet js-->
<script src="{{ URL::asset('assets/plugins/mapel/raphael.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/mapel/jquery.mapael.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/mapel/maps/france_departments.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/mapel/maps/world_countries.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/mapel/maps/usa_states.js')}}"></script>
<script src="{{ URL::asset('assets/js/mapelmaps.js')}}"></script>
@endsection