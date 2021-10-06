@extends('layouts.master')
@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<style>
	.loadingBtn {
		display: none;
	}
	#randForm {
		display: none;
	}
	.locationBtn, .randBtn {
		width: 120px;
	}
</style>
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
								<th width="20%" class="text-center">Proxy Name</th>
								<th width="20%" class="text-center">Current Location</th>
								<th width="40%" class="text-center">Location Load</th>
								<th width="20%" class="text-center">Change Location</th>
							</tr>
						</thead>
						<tbody>
							@if(count($locations))
								@foreach ($locations as $m) 
								<tr>
									<td class="text-center" style="vertical-align: middle">
										{{$m['name']}}
									</td>
									<td class="text-center" style="vertical-align: middle">
										{{$m['location']}}
									</td>
									<td class="text-center" style="vertical-align: middle">
										<div class="progress mg-b-10">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-success ht-20" role="progressbar" style="width: {{$m['load']}}%">
												{{$m['load']}}
											</div>
										<!-- @if ($m['load'] == 0 )
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-success ht-20" role="progressbar" style="width: {{$m['load']}}%">
											</div>
										@elseif ($m['load'] <= 50 )
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-success ht-20" role="progressbar" style="width: {{$m['load']}}%">
												{{$m['load']}}
											</div>
										@elseif ($m['load'] <= 8)
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-secondary ht-20" role="progressbar" style="width: {{$m['load']}}%">
												{{$m['load']}}
											</div>
										@else
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-danger ht-20" role="progressbar" style="width: {{$m['load']}}%">
												{{$m['load']}}
											</div>
										@endif -->
										</div>
									</td>
									<td class="text-center" style="vertical-align: middle">
										<input type="hidden" value="{{$m['last']}}"/>
										<input type="hidden" value="{{$m['id']}}"/>
										<button class="btn btn-sm ripple btn-main-primary mb-1 locationBtn">Change Location</button><br>
										<button class="btn btn-sm ripple btn-main-primary randBtn">Random Location</button>
										<button class="btn btn-sm ripple btn-main-primary loadingBtn" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Saving...</button>
									</td>
								</tr>
								@endforeach
							@else
								<tr>
									<td class="text-center" colspan="20">No data</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Row -->
<form action="{{route('randomLocation')}}" method="post" id="randForm">
	@csrf
	<input type="hidden" name="id" value="0" id="randInput">
</form>

</div>
</div>

<!-- End Main Content-->
@endsection
@section('js')
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$(".locationBtn").click(function(){
			const id = $(this).prev().val()
			window.location = "{{url('/location_')}}?id=" + id
		})

		$(".randBtn").click(function(){
			const lastDate = $(this).prev().prev().prev().prev().val()
			const last = new Date(lastDate)
			const d1 = new Date()
			const now = new Date(d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds())

			const diff = (now.getTime() - last.getTime()) / 1000;
			if (diff < 180) {
				const seconds = 180 - diff
				const min = Math.ceil(seconds / 60)
				toastr.info("You can change this location after " + min + " minutes.")
				return
			}
			const id = $(this).prev().prev().prev().val()
			$(this).hide()
			$(this).next().show()

			$("#randInput").val(id)
			$("#randForm").submit()
		})
	}) 
</script>
@endsection