@extends('layouts.master')
@section('css')
<style type="text/css">
.tab-title {
	font-size: 15px;
}
.tab-paragraph {
	margin-bottom: 3px
}
</style>
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">Buy</h2>
	</div>
	<!-- <div class="btn btn-list">
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
	</div> -->
</div>
<!-- End Page Header -->
@endsection
@section('content')
<!-- Row -->
<div class="row">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body">
				<div class="bg-primary-transparent nav-bg">
					<nav class="nav nav-tabs">
						<a class="nav-link active" data-toggle="tab" href="#tabCont1">
							<p class="text-center tab-title">DEDICATED 4G</p>
							<p class="tab-paragraph"> </p>
							<p class="tab-paragraph">- A large number of locations</p>
							<p class="tab-paragraph">- Unlimited Bandwidth</p>
						</a>
						<a class="nav-link" data-toggle="tab" href="#tabCont2">
							<p class="text-center tab-title">ROTATING</p>
							<p class="tab-paragraph">- Access to huge pool of 4g modems</p>
							<p class="tab-paragraph">- Modems change IP every 5 mins</p>
							<p class="tab-paragraph">- Integrated with Multilogin</p>
						</a>
						<a class="nav-link" data-toggle="tab" href="#tabCont3">
							<p class="text-center tab-title">MULTILOCATION</p>
							<p class="tab-paragraph">- Access to huge pool of 4g modems</p>
							<p class="tab-paragraph">- Set city at any moment</p>
							<p class="tab-paragraph">- Integrated with Multilogin</p>
						</a>
					</nav>
				</div>
				<div class="card-body tab-content">
					<div class="tab-pane active show" id="tabCont1">
						
					</div>
					<div class="tab-pane" id="tabCont2">
						
					</div>
					<div class="tab-pane" id="tabCont3">
						
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
@endsection