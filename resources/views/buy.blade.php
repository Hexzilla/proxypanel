@extends('layouts.master')
@section('css')
<style type="text/css">
.tab-title {
	font-size: 15px;
}
.tab-paragraph {
	margin-bottom: 3px
}
label {
    width: 100%;
}

.card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
    padding: 00px;
}

.card-input:hover {
    cursor: pointer;
}
.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 1px #2ecc71;
}
.panel-default {
	border: 1px #eee solid;
}
.payment-div {
	max-width: 700px;
	margin: 0 auto;
}
.nav-btn {
	margin: 0 !important;
}
#tabCont1, #tabCont2, #tabCont3 {
	margin-top: 20px;
}
</style>
@endsection
@section('page-header')
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-20 mg-b-5">Buy</h2>
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
<div>
	<div class="nav-bg">
		<nav class="nav nav-tabs">
			<a class="nav-link active col-md-4 col-lg-4 nav-btn" data-toggle="tab" href="#tabCont1" style="background-color: rgb(135, 96, 251, 0.3);">
				<p class="text-center tab-title">DEDICATED 4G</p>
				<p class="tab-paragraph"> </p>
				<p class="tab-paragraph">- A large number of locations</p>
				<p class="tab-paragraph">- Unlimited Bandwidth</p>
			</a>
			<a class="nav-link col-md-4 col-lg-4 nav-btn" data-toggle="tab" href="#tabCont2" style="background-color: rgba(56, 210, 80, 0.3);">
				<p class="text-center tab-title">ROTATING</p>
				<p class="tab-paragraph">- Access to huge pool of 4g modems</p>
				<p class="tab-paragraph">- Modems change IP every 5 mins</p>
				<p class="tab-paragraph">- Integrated with Multilogin</p>
			</a>
			<a class="nav-link col-md-4 col-lg-4 nav-btn" data-toggle="tab" href="#tabCont3" style="background-color: rgba(241, 0, 117, 0.3);">
				<p class="text-center tab-title">MULTILOCATION</p>
				<p class="tab-paragraph">- Access to huge pool of 4g modems</p>
				<p class="tab-paragraph">- Set city at any moment</p>
				<p class="tab-paragraph">- Integrated with Multilogin</p>
			</a>
		</nav>
	</div>
	<div class="tab-content">
		<div class="tab-pane active show" id="tabCont1">
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Proxy Options</h3><br>
							@foreach($locations as $m)
								<div class="row">    
									<div class="col-md-3 col-lg-3 col-sm-3">
										<label>
											<input type="radio" name="product" class="card-input-element" />
											<div class="panel panel-default card-input">
											<div class="panel-heading text-center tx-16 mb-2">MONTHLY</div>
											<div class="panel-body">
												<p class="text-center tx-16 mb-1">{{$m}}</p>
												<p class="text-center tx-14 mb-1">$175</p>
											</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-lg-3 col-sm-3">
										<label>
											<input type="radio" name="product" class="card-input-element" />
											<div class="panel panel-default card-input">
											<div class="panel-heading text-center tx-16 mb-2">WEEKLY</div>
											<div class="panel-body">
												<p class="text-center tx-16 mb-1">{{$m}}</p>
												<p class="text-center tx-14 mb-1">$75</p>
											</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-lg-3 col-sm-6">
										<label>
											<input type="radio" name="product" class="card-input-element" />
											<div class="panel panel-default card-input">
											<div class="panel-heading text-center tx-16 mb-2">DAILY</div>
											<div class="panel-body">
												<p class="text-center tx-16 mb-1">{{$m}}</p>
												<p class="text-center tx-14 mb-1">$20</p>
											</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-lg-3 col-sm-6">
										<label>
											<input type="radio" name="product" class="card-input-element" />
											<div class="panel panel-default card-input">
											<div class="panel-heading text-center tx-16 mb-2">ONE HOUR TRIAL</div>
											<div class="panel-body">
												<p class="text-center tx-16 mb-1">{{$m}}</p>
												<p class="text-center tx-14 mb-1">$10</p>
											</div>
											</div>
										</label>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Proxy Configurations</h3><br>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<p class="mg-b-5">Nickname: </p>
									<input type="text" class="form-control" name="example-text-input" value="Proxy">
									<p class="text-muted card-sub-title">A unique alphanumeric name for this proxy</p>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<p class="mg-b-5">Rotation</p>
									<select class="form-control select2-no-search">
										<option label="No rotation"></option>
										<option value="5">
											5 Minutes
										</option>
										<option value="10">
											10 Minutes
										</option>
										<option value="15">
											15 Minutes
										</option>
										<option value="30">
											30 Minutes
										</option>
										<option value="60">
											1 Hour
										</option>
									</select>
									<p class="text-muted card-sub-title">How frequent you want proxy to change, you can change this later</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Payment Method</h3><br>
							<div class="row payment-div">
								<div class="col-md-6 col-lg-6 col-sm-6">
									<label>
										<input type="radio" name="payment" class="card-input-element" />
										<div class="panel panel-default card-input">
											<!-- <div class="panel-heading text-center tx-16 mb-2">PayPal</div> -->
											<div class="panel-body">
												<img src="{{asset('assets/img/pngs/paypal.png')}}" width="100%" height="100px"></img>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-6 col-lg-6 col-sm-6">
									<label>
										<input type="radio" name="payment" class="card-input-element" />
										<div class="panel panel-default card-input">
											<!-- <div class="panel-heading text-center tx-16 mb-2">BTC</div> -->
											<div class="panel-body">
												<img src="{{asset('assets/img/pngs/bitcoin.png')}}" width="100%" height="100px" style="padding: 10px"></img>
											</div>
										</div>
									</label>
								</div>
							</div>
							<br>
							<div class="text-right">
								<button class="btn ripple btn-main-primary">Buy This Proxy</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane" id="tabCont2">
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<p class="mb-0">This product is not available now.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane" id="tabCont3">
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Proxy Options</h3><br>
							<div class="row">    
								<div class="col-md-3 col-lg-3 col-sm-3">
									<label>
										<input type="radio" name="product" class="card-input-element" />
										<div class="panel panel-default card-input">
										<div class="panel-heading text-center tx-16 mb-2">MONTHLY</div>
										<div class="panel-body">
											<p class="text-center tx-14 mb-1">$175</p>
										</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-lg-3 col-sm-3">
									<label>
										<input type="radio" name="product" class="card-input-element" />
										<div class="panel panel-default card-input">
										<div class="panel-heading text-center tx-16 mb-2">WEEKLY</div>
										<div class="panel-body">
											<p class="text-center tx-14 mb-1">$75</p>
										</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-lg-3 col-sm-6">
									<label>
										<input type="radio" name="product" class="card-input-element" />
										<div class="panel panel-default card-input">
										<div class="panel-heading text-center tx-16 mb-2">DAILY</div>
										<div class="panel-body">
											<p class="text-center tx-14 mb-1">$20</p>
										</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-lg-3 col-sm-6">
									<label>
										<input type="radio" name="product" class="card-input-element" />
										<div class="panel panel-default card-input">
										<div class="panel-heading text-center tx-16 mb-2">ONE HOUR TRIAL</div>
										<div class="panel-body">
											<p class="text-center tx-14 mb-1">$10</p>
										</div>
										</div>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Proxy Configurations</h3><br>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<p class="mg-b-5">Nickname: </p>
									<input type="text" class="form-control" name="example-text-input" value="Proxy">
									<p class="text-muted card-sub-title">A unique alphanumeric name for this proxy</p>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<p class="mg-b-5">Rotation</p>
									<select class="form-control select2-no-search">
										<option label="No rotation"></option>
										<option value="5">
											5 Minutes
										</option>
										<option value="10">
											10 Minutes
										</option>
										<option value="15">
											15 Minutes
										</option>
										<option value="30">
											30 Minutes
										</option>
										<option value="60">
											1 Hour
										</option>
									</select>
									<p class="text-muted card-sub-title">How frequent you want proxy to change, you can change this later</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<h3>Payment Method</h3><br>
							<div class="row payment-div">
								<div class="col-md-6 col-lg-6 col-sm-6">
									<label>
										<input type="radio" name="payment" class="card-input-element" />
										<div class="panel panel-default card-input">
											<!-- <div class="panel-heading text-center tx-16 mb-2">PayPal</div> -->
											<div class="panel-body">
												<img src="{{asset('assets/img/pngs/paypal.png')}}" width="100%" height="100px"></img>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-6 col-lg-6 col-sm-6">
									<label>
										<input type="radio" name="payment" class="card-input-element" />
										<div class="panel panel-default card-input">
											<!-- <div class="panel-heading text-center tx-16 mb-2">BTC</div> -->
											<div class="panel-body">
												<img src="{{asset('assets/img/pngs/bitcoin.png')}}" width="100%" height="100px" style="padding: 10px"></img>
											</div>
										</div>
									</label>
								</div>
							</div>
							<br>
							<div class="text-right">
								<button class="btn ripple btn-main-primary">Buy This Proxy</button>
							</div>
						</div>
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
@endsection