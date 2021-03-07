@extends('layouts.master')
@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">Manage proxy locations</h2>
		<p class="text-muted card-sub-title">Only multilocation proxies can change location.</p>
		<!-- <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Pages</a></li>
			<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
		</ol> -->
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
				<div class="table-responsive">
					<table class="table table-hover mg-b-0">
						<thead>
							<tr>
								<th width="20%" class="text-center">Location</th>
								<th width="60%" class="text-center">Location Load</th>
								<th width="20%" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@for ($i = 1; $i <= 10; $i++) 
							<tr>
								<td class="text-center" style="vertical-align: middle">
									Denver, Co
								</td>
								<td class="text-center" style="vertical-align: middle">
									<div class="progress mg-b-10">
									@if ($i <= 5 )
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-success wd-{{$i*10}}p ht-20" role="progressbar">
											{{$i*10}}
										</div>
									@elseif ($i <= 8)
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-secondary wd-{{$i*10}}p ht-20" role="progressbar">
											{{$i*10}}
										</div>
									@else
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-danger wd-{{$i*10}}p ht-20" role="progressbar">
											{{$i*10}}
										</div>
									@endif
									</div>
								</td>
								<td class="text-center" style="vertical-align: middle">
									@if ($i <= 5 )
										<button class="btn btn-sm ripple btn-success mb-1 randBtn">Connect</button><br>
									@elseif ($i <= 8)
										<button class="btn btn-sm ripple btn-secondary mb-1 randBtn">Connect</button><br>
									@else
										<button class="btn btn-sm ripple btn-danger mb-1 randBtn">Connect</button><br>
									@endif
								</td>
							</tr>
							@endfor
						</tbody>
					</table>
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
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
<script>
	$(document).ready(function(){
		$(".randBtn").click(function(){
			swal("Connected!", "You clicked the button!", "success");
		})
	}) 
</script>
@endsection