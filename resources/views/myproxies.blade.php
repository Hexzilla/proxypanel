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

				<div class="table-responsive">
					<table class="table table-hover mg-b-0">
						<thead>
							<tr>
								<th class="text-center">City</th>
								<th class="text-center">Rotation</th>
								<th class="text-center">Change Ip WhiteList</th>
								<th class="text-center">Host</th>
								<th class="text-center">Username</th>
								<th class="text-center">Password</th>
								<th class="text-center">Next Billing</th>
								<th class="text-center">Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($ports as $p) 
								<tr>
									<td class="text-center" style="vertical-align: middle">
										<button class="btn ripple btn-primary btn-sm mb-1 locationBtn">
											{{$p->city}}
										</button><br>
										<button class="btn ripple btn-primary btn-sm mb-1 randBtn">
											Random Location
										</button>
									</td>
									<td class="text-center" style="vertical-align: middle">
										@if (!$p->rotation)
											No<br>Rotations
										@else
											{{$p->rotation}}
										@endif
									</td>
									<td class="text-center" style="vertical-align: middle">
										<button class="btn ripple btn-success btn-sm disabled">
											Change Ip
										</button>
										<a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">
											IPV4 List
										</a>
									</td>
									<td class="text-center" style="vertical-align: middle">
										<div class="hostBtn">http: {{$p->server}}</div>
										<div class="hostBtn">socks5: {{$p->server}}</div>
									</td>
									<td class="text-center" style="vertical-align: middle">
										{{$p->username}}
									</td>
									<td class="text-center" style="vertical-align: middle">
										{{$p->pass}}
									</td>
									<td class="text-center" style="vertical-align: middle">
										{{$p->paidtill}}<br>
										<button class="btn ripple btn-success btn-sm payBtn">
											Pay Now
										</button>
									</td>
									<td class="text-center" style="vertical-align: middle">
										@if($p->paidtill > $current)
											<i class="fa fa-check text-success"></i>
										@else
											<i class="fa fa-times text-danger"></i>
										@endif
									</td>
									<td class="text-center" style="vertical-align: middle">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-light dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="fa fa-caret-down"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Action</h6>
												<a class="dropdown-item deleteBtn" href="#">Delete</a> 
											</div>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Row -->

<!-- Modal effects -->
<div class="modal" id="modaldemo8">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-body">
				<br>
				<div class="form-group">
					<p class="mg-b-10">IPv4 whitelist</p>
					<input type="text" class="form-control" name="example-text-input" placeholder="IPv4">
					<p class="text-muted card-sub-title">Enter comma seperated IPv4 addresse</p>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn ripple btn-primary" type="button">Save</button>
				<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal effects-->

<!-- Modal effects -->
<div class="modal" id="modaldemo7">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<p class="h3 mb-0">Price</p>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="form-group">
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
							<span class="custom-control-label pt-1">
								250$&nbsp;&nbsp;Custom Billing
							</span>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
							<span class="custom-control-label pt-1">
								35$&nbsp;&nbsp;&nbsp;&nbsp;Daily
							</span>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
							<span class="custom-control-label pt-1">
								75$&nbsp;&nbsp;&nbsp;&nbsp;Weekly
							</span>
						</label>
						<label class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
							<span class="custom-control-label pt-1">
								300$&nbsp;&nbsp;Monthly
							</span>
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn ripple btn-primary" type="button">Save</button>
				<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal effects-->

</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
<script>
	$(document).ready(function(){
		$(".locationBtn").click(function(){
			window.location = "{{url('/location_')}}"
		})

		$(".randBtn").click(function(){
			swal("Success!", "Location changed", "success");
		})

		$(".newBtn").click(function(){
			window.location = "{{url('/buy')}}"
		})

		$(".hostBtn").click(function(){
			swal("Success!", "Copied", "success");
		})

		$(".payBtn").click(function(){
			window.location = "{{url('/payment')}}"
		})

		$(".deleteBtn").click(function(){
			swal({
				title: "Are you sure?",
				text: "Delete",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				closeOnConfirm: false,
			},
			function(){
				swal("Deleted!", "", "success");
			});
		})
	}) 
</script>
@endsection