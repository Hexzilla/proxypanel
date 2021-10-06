@extends('layouts.master')

@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection

@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">My Proxies</h2>
		<!-- <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
							</ol> -->
	</div>
	<div class="btn btn-list">
		<a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a>
		<a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
		</a>
		<div class="dropdown-menu tx-13">
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
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6 text-right">
						<button class="btn ripple btn-primary btn-rounded newBtn">
							<i class="fa fa-plus"></i>
						</button>
					</div>
					<!-- <p class="text-muted card-sub-title">To enable a hover state on table rows.</p> -->
				</div><br>
				@include('shared.proxies-table')
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
@stack('proxies-table-scripts')
@endsection