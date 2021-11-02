@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<link href="{{ URL::asset('assets/css/user-profile.css')}}" rel="stylesheet">
@endsection
@section('page-header')
	<!-- Page Header -->
	<div class="page-header">
		<div>
			
		</div>
	</div>
	<!-- End Page Header -->
@endsection
@section('content')
    
        @csrf
        <!-- Row -->
			<div class="text-center">
				<h1>Invite a friend and you'll both get $20 USD*</h1>
				<p>If you enjoy using Proxypanel, share it with friends and colleagues to earn free credits.</p>
			</div>
			
			<div class="row text-center pl-0 pr-0 ml-0 mr-0 pd-t-100">
				<div class="col-lg-3 d-block mx-auto">
					<div class="card custom-card">
						<div class="card-body text-left">
							<div>
								<h3>Share your link</h3>
								<p>Copy your personal referral link and share it with your friends and followers</p>
							</div>
							<div>
								<input class="form-control input-lg" placeholder="" type="text" value="{{$userInfo->referral_link}}" id="referral_link" readonly>
								<br>
							</div>

							<div class="row row-sm">
								<div class="col-sm-3">
									<button id="copyBtn" class="btn ripple btn-primary pd-x-20 mg-r-5" type="submit">Copy</button>
								</div>
								<div class="col-sm-9 list d-flex">
									<h6 class="mt-2 mr-2 ml-4">Share via</h6>
									<a id="facebookBtn" class="btn btn-info btn-icon ripple mr-2"><i class="fe fe-facebook"></i></a>
									<a id="twitterBtn" class="btn btn-success btn-icon ripple mr-2"><i class="fe fe-twitter"></i></a>
									<a id="linkedinBtn" class="btn btn-secondary btn-icon ripple "><i class="fe fe-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<div class="text-center pd-t-200">
			<h2>Number of Friends Invited : 50</h2>
		</div>
        <!-- End Row -->
</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<!--Fileuploads js-->
{{-- <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script> --}}
<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		})

		$("#copyBtn").click(function() {
			var copyText = document.getElementById('referral_link')
  			copyText.select();
  			document.execCommand('copy')
		})
	})
</script>
@endsection
