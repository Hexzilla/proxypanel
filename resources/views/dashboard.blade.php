@extends('layouts.master')
@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">Dashboard</h2>
		<p class="text-muted card-sub-title">Welcome to the unique proxy web app experience!</p>
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
<div class="row row-sm">
	<div class="col-md">
		<div class="card custom-card">
			<div class="card-body">
				<h5 class="card-title tx-dark tx-medium mg-b-10">Current Balance</h5>
				<br>
				<p class="card-subtitle mg-b-15">100USD</p>
			</div>
		</div>
	</div>
	<div class="col-md">
		<div class="card custom-card">
			<div class="card-body">
				<h5 class="card-title tx-dark tx-medium mg-b-10">Affiliate Link</h5><br>
				<p class="card-subtitle mg-b-15">Your affiliate link is: <a href="https://proxypanel.io/?sid=1002">https://proxypanel.io/?sid=1002</a></p>
			</div>
		</div>
	</div>
</div>
<!-- End Row -->

<!-- Row -->
<div class="row">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<h4 class="ml-2">My Proxies</h4>
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
							@for ($i = 0; $i < 5; $i++) <tr>
								<td class="text-center" style="vertical-align: middle">
									<button class="btn ripple btn-primary btn-sm mb-1 locationBtn">
										SantaMonica, CA
									</button><br>
									<button class="btn ripple btn-primary btn-sm mb-1 randBtn">
										Random Location
									</button>
								</td>
								<td class="text-center" style="vertical-align: middle">
									No<br>Rotations
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
									<div class="hostBtn">http 66.42.95.53:8080</div>
									<div class="hostBtn">socks5 66.42.95.53:9090</div>
								</td>
								<td class="text-center" style="vertical-align: middle">
									Steven
								</td>
								<td class="text-center" style="vertical-align: middle">
									a7aac18036
								</td>
								<td class="text-center" style="vertical-align: middle">
									2020-11-30T18:04:36Z<br>
									<button class="btn ripple btn-success btn-sm payBtn">
										Renew
									</button>
								</td>
								<td class="text-center" style="vertical-align: middle">
									<i class="fa fa-check text-success"></i><br>
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
								<tr>
									<td class="text-center" style="vertical-align: middle">
										<button class="btn ripple btn-primary btn-sm mb-1 locationBtn">
											San Diego, CA
										</button><br>
										<button class="btn ripple btn-primary btn-sm mb-1 randBtn">
											Random Location
										</button>
									</td>
									<td class="text-center" style="vertical-align: middle">
										No<br>Rotations
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
										<div class="hostBtn">http 66.42.95.53:8080</div>
										<div class="hostBtn">socks5 66.42.95.53:9090</div>
									</td>
									<td class="text-center" style="vertical-align: middle">
										James
									</td>
									<td class="text-center" style="vertical-align: middle">
										eraden532
									</td>
									<td class="text-center" style="vertical-align: middle">
										2020-12-30T17:14:36Z<br>
										<a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale" data-toggle="modal" href="#modaldemo7">
											Renew
										</a>
									</td>
									<td class="text-center" style="vertical-align: middle">
										<i class="fa fa-times text-danger"></i>
									</td>
									<td class="text-center" style="vertical-align: middle">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-light dropdown-toggle btn-sm" data-toggle="dropdown" type="button"><i class="fa fa-caret-down"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Action</h6>
												<a class="dropdown-item deleteBtn" href="#">Delete</a> 
												<!-- <a class="dropdown-item" href="#">Another action</a> -->
												<!-- <a class="dropdown-item" href="#">Something else here</a> -->
											</div>
										</div>
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

<div class="row">
	<div class="col-sm-12 col-md-6" style="margin:0 auto">
		<div class="card custom-card">
			<div class="card-body text-center">
				<div class="user-lock text-center">
					<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/7.jpg')}}">
				</div>
				<h5 class="mb-1 mt-3 ">Petey Cruiser</h5>
				<p class="mb-2 mt-1 tx-inverse">Web Developer</p>
				<p class="mb-1"><i class="fe fe-phone mr-2"></i>petey78@gmail.com</p>
				<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
					<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>England, UK</p>
					<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
				</div>
				<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
				<div class="justify-content-center text-center mt-3 d-flex">
					<a href="#" class="btn ripple btn-primary btn-icon mr-3">
						<i class="fe fe-message-square"></i>
					</a>
					<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
						<i class="fe fe-edit-2"></i>
					</a>
					<a href="#" class="btn ripple btn-info btn-icon mr-3">
						<i class="fe fe-eye"></i>
					</a>
					<a href="#" class="btn ripple btn-danger btn-icon">
						<i class="fe fe-trash-2"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

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