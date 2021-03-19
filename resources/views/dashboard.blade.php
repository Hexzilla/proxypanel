@extends('layouts.master')
@section('css')
<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<style>
	.no-data {
		text-align: center;
	}
	.deleteBtn {
		border-radius: 20px;
	}
	.fa-trash {
		font-size: 14px !important;
	}
	#deleteForm {
		display: none;
	}
	#loadingBtn, #loadingBtn1 {
		display: none;
	}
	#randForm {
		display: none;
	}
</style>
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
		<a class="btn ripple btn-info" href="javascript:void(0)" data-target="#modaldemo2" data-toggle="modal">
			<i class="fe fe-help-circle"></i> Help
		</a>
		<!-- <a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
		</a>
		<div class="dropdown-menu tx-13">
			<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i>View</a>
			<a class="dropdown-item" href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a>
			<a class="dropdown-item" href="#"><i class="fe fe-mail mr-2"></i>Email</a>
			<a class="dropdown-item" href="#"><i class="fe fe-folder-plus mr-2"></i>Save</a>
			<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a>
			<a class="dropdown-item" href="#"><i class="fe fe-settings mr-2"></i>More</a>
		</div> -->
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
						<button class="modal-effect btn ripple btn-primary btn-rounded" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">
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
								<th class="text-center">Change IP</th>
								<th class="text-center">Ip Auth</th>
								<th class="text-center">Host</th>
								<th class="text-center">Name</th>
								<th class="text-center">Password</th>
								<th class="text-center">Next Billing</th>
								<th class="text-center">Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@if (count($ports) > 0)
								@foreach ($ports as $p) 
									<tr>
										<td class="text-center" style="vertical-align: middle">
											<input type="hidden" value="{{$p->id}}">
											<button class="btn ripple btn-primary btn-sm mb-1 locationBtn">
												{{$p->city}}
											</button><br>
											<input type="hidden" value="{{$p->lastchangecitydate}}">
											<input type="hidden" value="{{$p->id}}">
											<button class="btn ripple btn-primary btn-sm mb-1 randBtn">
												Random
											</button>
											<button class="btn ripple btn-primary btn-sm mb-1" id="loadingBtn1" disabled type="button">
												<span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span>
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
											<input type="hidden" value="{{$p->lastchangeipdate}}">
											<input type="hidden" value="{{$p->id}}">
											<input type="hidden" value="{{$p->username.'.'.$p->groupname}}">
											<button class="btn btn-success btn-icon changeIPBtn" style=" margin: auto; border-radius: 20px" title="Change IP">
												<i class="fa fa-sync"></i>
											</button>
											<div class="spinner-border text-success" role="status" style="display: none">
												<span class="sr-only">Loading...</span>
											</div>
										</td>
										<td class="text-center" style="vertical-align: middle;">
											<a class="modal-effect btn btn-success btn-sm" data-effect="effect-scale" data-toggle="modal" href="#modaldemo9">
												IPv4 List
											</a>
										</td>
										<td class="text-center" style="vertical-align: middle">
											<div class="hostBtn1">http: 66.42.95.53:8080</div>
											<div class="hostBtn1">socks5: 66.42.95.53:9090</div>
										</td>
										<td class="text-center" style="vertical-align: middle">
											{{$p->username}}.{{$p->groupname}}
										</td>
										<td class="text-center" style="vertical-align: middle">
											{{$p->pass}}
										</td>
										<td class="text-center" style="vertical-align: middle">
											{{$p->paidtill}}<br>
											@if($p->paidtill <= $current)
												<input type="hidden" value="{{$p->id}}">
												<a class="modal-effect btn btn-success btn-sm payBtn" data-effect="effect-scale" data-toggle="modal" href="#modaldemo10">
													Renew
												</a>
											@endif
										</td>
										<td class="text-center" style="vertical-align: middle">
											@if($p->paidtill > $current)
												<i class="fa fa-check text-success"></i>
											@else
												<i class="fa fa-times text-danger"></i>
											@endif
										</td>
										<td class="text-center" style="vertical-align: middle">
											@if($p->paidtill <= $current)
												<input type="hidden" value="{{$p->id}}">
												<button class="btn ripple btn-danger btn-icon deleteBtn" title="delete">
													<i class="fa fa-trash"></i>
												</button>
											@endif
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="20" class="no-data">No data</td>
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

<!-- Modal effects -->
<div class="modal" id="modaldemo10">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<form method="get" action="{{ route('payment') }}">
				<input type="hidden" value="" name="payId" id="payId">
				<div class="modal-header">
					<h6 class="modal-title">Payment</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h6 class="font-weight-bold">Order # <span id="paySpan"></span></h6>
					<label class="rdiobox"><input name="rdio" type="radio" value="monthly" checked> <span>Monthly | 175$</span></label>
					<label class="rdiobox"><input name="rdio" type="radio" value="weekly"> <span>Weekly | 75$</span></label>
					<label class="rdiobox"><input name="rdio" type="radio" value="daily"> <span>Daily | 20$</span></label>
					<label class="rdiobox"><input name="rdio" type="radio" value="hour"> <span>One Hour | 10$</span></label>
					<label class="rdiobox"><input name="rdio" type="radio" value="test"> <span>test | 0.01$</span></label>
				</div>
				<div class="modal-footer">
					<button class="btn ripple btn-success">Pay by PayPal</button>
					<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal effects-->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    
	<input type="hidden" name="cmd" value="_xclick" id="id_cmd">
	<input type="hidden" name="charset" value="utf-8" id="id_charset">
	<input type="hidden" name="currency_code" value="USD" id="id_currency_code">
	<input type="hidden" name="no_shipping" value="1" id="id_no_shipping">
	<input type="hidden" name="business" value="vpnrgr@gmail.com" id="id_business">
	<input type="hidden" name="amount" value="175.00" id="id_amount">
	<input type="hidden" name="item_name" value="0.01$" id="id_item_name">
	<input type="hidden" name="invoice" value="invoice-1-1534-1079-9" id="id_invoice">
	<!-- <input type="hidden" name="notify_url" value="https://proxypanel.io/paypal/" id="id_notify_url"> -->
	<input type="hidden" name="rm" value="1" id="id_rm">
	<input type="hidden" name="return" value="{{route('/')}}" id="id_return">
	<input type="hidden" name="cancel_return" value="{{route('/')}}" id="id_cancel_return">
	<input type="hidden" name="custom" value="premium_plan" id="id_custom">
	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Test pay 0.01$">
	</div>
               
</form>

<!-- Modal effects -->
<div class="modal" id="modaldemo9">
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
<div class="modal" id="modaldemo8">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<form method="post" action="{{route('addProxy')}}" id="addProxyForm">
				@csrf
				<div class="modal-body">
					<p class="mg-b-5">Name: </p>
					<input type="text" class="form-control" name="name" id="proxyName" value="Proxy{{count($ports) + 1}}" required>
					<p class="text-muted card-sub-title">A unique alphanumeric name for this proxy</p>
					<button class="btn ripple btn-primary submitBtn" style="display: none"></button>
				</div>
				<div class="modal-footer">
					<button class="btn ripple btn-primary" id="addProxyBtn" type="button">Save</button>
					<button class="btn ripple btn-primary" id="loadingBtn" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Saving...</button>
					<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal effects-->

<form method="post" action="{{route('deleteProxy')}}" id="deleteForm">
	@csrf
	<input type="text" name="id" value="0" id="deleteId">
</form>

<form action="{{route('randomLocation')}}" method="post" id="randForm">
	@csrf
	<input type="hidden" name="id" value="0" id="randInput">
</form>

<form action="{{route('changeIp')}}" method="post" id="changeIpForm">
	@csrf
	<input type="hidden" name="userInfo" value="0" id="userInfo">
	<input type="hidden" name="portId" value="0" id="portId">
</form>

<!-- Small modal -->
<div class="modal" id="modaldemo2">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title"><i class="fe fe-help-circle text-info" style="font-size:45px"></i></h6>
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p class="tx-16"><span class="text-primary">Skype:</span> live:support_56965</p>
				<p class="tx-16"><span class="text-primary">Email:</span> support@proxypanel.io</p>
			</div>
		</div>
	</div>
</div>
<!-- End Small Modal -->
</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		<?php if (session('delete-success')){?>
			toastr.success("{{session('delete-success')}}", "Success")
		<?php } else if (session('delete-failed')){?>
			toastr.error("{{session('delete-failed')}}", "Error")
		<?php }?>

		<?php if (session('paymentSuccess')){?>
			toastr.success("{{session('paymentSuccess')}}", "Success")
		<?php } else if (session('paymentCancel')){?>
			toastr.info("{{session('paymentCancel')}}", "Info")
		<?php } else if (session('paymentFailed')){?>
			toastr.error("{{session('paymentFailed')}}", "error")
		<?php }?>

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		})

		$(".locationBtn").click(function(){
			const id = $(this).prev().val()
			window.location = "{{url('/location_')}}?id=" + id
		})

		$(".randBtn").click(function(){
			const lastDate = $(this).prev().prev().val()
			const last = new Date(lastDate)
			const d1 = new Date()
			const now = new Date(d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds())

			const diff = (now.getTime() - last.getTime()) / 1000;
			if (diff < 180) {
				const seconds = 180 - diff
				const min = Math.ceil(seconds / 60)
				toastr.info("You can change this location after " + min + " minutes.")
			} else {
				const id = $(this).prev().val()
				$(this).hide()
				$(this).next().show()
				$("#randInput").val(id)
				$("#randForm").submit()
			}
		})

		$(".hostBtn").click(function(){
			swal("Success!", "Copied", "success");
		})

		$(".deleteBtn").click(function(){
			const id = $(this).prev().val()

			swal({
				title: "Are you sure?",
				text: "Delete",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				closeOnConfirm: false,
			},
			function(){
				$("#deleteId").val(id)
				$("#deleteForm").submit();
				swal.close()
			});
		})

		$("#addProxyBtn").click(function(){
			const name = $("#proxyName").val()
			if (name) {
				$(this).hide()
				$("#loadingBtn").show()
			}
			$(".submitBtn").click()
		})

		$(".changeIPBtn").click(function(){
			const lastDate = $(this).prev().prev().prev().val()
			const last = new Date(lastDate)
			const d1 = new Date()
			const now = new Date(d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds())

			const diff = (now.getTime() - last.getTime()) / 1000;
			if (diff < 180) {
				const seconds = 180 - diff
				const min = Math.ceil(seconds / 60)
				toastr.info("You can change Ip after " + min + " minutes.")
				return
			}
			$(this).hide()
			$(this).next().show()

			const id = $(this).prev().prev().val()
			const userInfo = $(this).prev().val()
			
			$("#userInfo").val(userInfo)
			$("#portId").val(id)
			$("#changeIpForm").submit()
		})

		$(".payBtn").click(function() {
			const id = $(this).prev().val()
			$("#payId").val(id)
			$("#paySpan").html(id)
		})
	}) 
</script>
@endsection