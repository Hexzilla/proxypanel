@extends('layouts.master2')
@section('css')
@endsection
@section('content')
		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row text-center pl-0 pr-0 ml-0 mr-0">
				<div class="col-lg-3 d-block mx-auto">
					<div class="text-center mb-2">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img theme-logos" alt="logo">
					</div>
					<div class="card custom-card">
						<div class="card-body">
							<h4 class="text-center">Signup to Your Account</h4>
							<form data-parsley-validate="" method="post" action="{{route('signup')}}">
								@csrf
								<div class="form-group text-left">
									<label class="form-label">Name <span class="tx-danger">*</span></label>
									<input class="form-control" placeholder="" type="text" required="" maxlength="50" name="name">
								</div>
								<div class="form-group text-left">
									<label class="form-label">Email <span class="tx-danger">*</span></label>
									<input class="form-control" placeholder="" type="email" required="" maxlength="50" name="email">
								</div>
								<div class="form-group text-left">
									<label class="form-label">Skype</label>
									<input class="form-control" placeholder="" type="text" maxlength="50" name="skype">
								</div>
								<div class="form-group text-left">
									<label class="form-label">Password <span class="tx-danger">*</span></label>
									<input class="form-control" placeholder="" type="password" required="" minlength="8" name="password">
								</div>
								<button class="btn ripple btn-main-primary btn-block">Create Account</button>
							</form>
							<div class="mt-3 text-center">
								<p class="mb-0">Already have an account? <a href="{{ url('/' . $page='signin') }}">Sign In</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/form-validation.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
@endsection