@extends('layouts.master')
@section('css')
<style type="text/css">
#loadingButton {
	display: none;
}
</style>
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">API</h2>
		<!-- <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Empty Page</li>
							</ol> -->
	</div>
</div>
<!-- End Page Header -->
@endsection
@section('content')

<!-- Row -->
<div class="row">
	<div class="col-md-12 col-xl-12">
		<div class="card custom-card">
			<!-- <div class="card-header custom-card-header">
				<div class="card-options">
					<label class="custom-switch">
						<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
						<span class="custom-switch-indicator"></span>
						<span class="custom-switch-description">Enable API</span>
					</label>
				</div>
			</div> -->
			<div class="card-body">
				<p class="h5">Your API Key:</p>
				<p>{{$apiKey}}</p>
				
				<button class="btn ripple btn-primary" id="apiBtn">
					<i class="fa fa-sync"></i> Refresh API Key
				</button>
				<button class="btn ripple btn-primary" id="loadingButton" disabled type="button">
					<span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span>Saving...
				</button>
				<br><br>

				<p class="h5 text-secondary mb-0">Change Proxy IP</p>
				<p>https://proxypanel.io/proxy/change-ip/USERNAME/NICKNAME/{{$apiKey}}</p>
				<p class="h5 text-secondary mb-0">Change Proxy Location</p>
				<p class="h6 text-info mb-0">Location conventions: Replace whitespace with underscore '_' symbol and use lowercase. Hermosa Beach -> hermosa_beach</p>
				<p>https://proxypanel.io/proxy/locations/USERNAME/NICKNAME/LOCATION/{{$apiKey}}</p>
				<p class="h5 text-secondary mb-0">Connect to a random location</p>
				<p>https://proxypanel.io/proxy/locations/USERNAME/NICKNAME/{{$apiKey}}</p>
				<p class="h5 text-secondary mb-0">List available locations</p>
				<p class="h6 text-info mb-0">Locations can be used on Change Proxy Location API as listed here</p>
				<p>https://proxypanel.io/proxy/list/locations</p>
				<p class="h5 text-secondary mb-0">Update rotation of a proxy</p>
				<p class="h6 text-info mb-0">Rotation must be an integer, followed by "s","m","h","d". For example, for 12 hours use "12h". Minimum rotation is 180 seconds</p>
				<p>https://proxypanel.io/proxy/rotation/USERNAME/NICKNAME/ROTATION/{{$apiKey}}</p>
			</div>
		</div>
	</div>
</div>
<!-- End Row -->

<form method="post" action="{{route('changeApi')}}" id="apiForm">
	@csrf
</form>

</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<script>
	$(document).ready(function() {
		$("#apiBtn").click(function() {
			$(this).hide()
			$("#loadingButton").show()
			$("#apiForm").submit()
		})
	})
</script>
@endsection