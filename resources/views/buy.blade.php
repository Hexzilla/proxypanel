@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<style type="text/css">
	.name-container {
		max-width: 500px;
		margin: 0 auto;
	}
	#loadingButton {
		display: none;
	}
</style>
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-10 mg-l-10">ADD</h2>
	</div>
</div>
<!-- End Page Header -->
@endsection
@section('content')

<div class="tab-pane" id="tabCont3">
	<!-- Row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card custom-card">
				<div class="card-body">
					<div class="name-container">
						<br>
						<p class="mg-b-5">Nickname: </p>
						<input type="text" class="form-control" name="nickName" value="Proxy" id="proxyName">
						<p class="text-muted card-sub-title">A unique alphanumeric name for this proxy</p>
						<br>
						<div class="text-right">
							<button class="btn ripple btn-main-primary" id="buyButton">Buy This Proxy</button>
							<button class="btn ripple btn-main-primary" id="loadingButton" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Wait...</button>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	})

	const url = "{{route('addProxy')}}"

	function showLoading() {
		$("#loadingButton").show()
		$("#buyButton").hide()
	}

	function hideLoading() {
		$("#loadingButton").hide()
		$("#buyButton").show()
	}

	$("#buyButton").click(function() {
		const name = $("#proxyName").val()
		if (!name) {
			toastr.warning("Please input name", "Warning")
			return
		}
		showLoading()
		$.ajax({
			type:'POST',
			url: url,
			data: {name:name},
			success: function(result) {
				hideLoading()
				if (result == 1) {
					toastr.success("Proxy is added", "Success!")
				} else {
					toastr.warning("Something went wrong", "Failed!")
				}
			}
		})
	})
})
</script>
@endsection