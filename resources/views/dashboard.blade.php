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
	</div>
	<div class="btn btn-list">
		<a class="btn ripple btn-info" href="javascript:void(0)" data-target="#modal-help" data-toggle="modal">
			<i class="fe fe-help-circle"></i> Help
		</a>
	</div>
</div>
<!-- End Page Header -->
@endsection
@section('content')

<div class="container mb-5" style="max-width: 1000px; margin: 0 auto;">
	<div class="row">
		<div class="col-lg-6">
			<h1>4G Mobile Proxy</h1>
			<span style="font-size: 1.1rem;font-weight: 300;">4G Mobile proxy. Rotating new clear mobile IP every 5 min. HTTP/HTTPS or SOCKS connection. Mobile proxies have direct connection to mobile network, your accounts never will be blocked. USA, Europe or UK mobile proxy 4G LTE / 3G connections and mixed mobile carriers and cities. 4G proxy can be used with Chrome, Firefox, Safari or any other browser or application (jarvee, instagram, telegram etc).</span>
		</div>
		<div class="col-lg-6">
			<img src="land/images/mobile-proxy.svg" class="img-fluid" style="max-width:70%;">
		</div>
	</div>
</div>

<!-- Row -->
<div class="row">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body">
				<h2>4G proxy service</h2>
				<span style="font-size: 1rem;font-weight: 300;">Mobile proxies will be locked by ip, username and password, you will get personal IP:PORT. Max dedicated 4G proxy internet connection speed up to 60mbps. Some mobile proxy has unlimited internet data. Anonymous, unique and clear mobile proxy. Get up to 40000 Mobile IP month / per connection. SOCKS5 and mobile ip IPv4. All our proxy has auto renewal option. Mobile proxy more reliable than standard proxy. Simple switch between http, https, socks5</span>
				<br><br>
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6 text-right">
						<button class="modal-effect btn ripple btn-primary" data-effect="effect-scale" data-toggle="modal" href="#modal-buy">
							Buy
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

<!-- Buy Proxy Modal -->
<div class="modal" id="modal-buy">
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
<!-- End Buy Proxy Modal -->

<!-- Small Help Modal -->
<div class="modal" id="modal-help">
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
<!-- End Small Help Modal -->
</div>
</div>
<!-- End Main Content-->
@endsection


@section('js')
@stack('proxies-table-scripts')
@endsection
