@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-20 mg-b-5">Pending Payment</h2>
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
						<div class="col-lg-6" style="margin: 0 auto">
							<div class="card custom-card">
								<div class="card-body">
									<p>Pending Payment For:</p>
									<p class="h5">Order # 256</p>
									<p class="h4">Multilocation | 1 day, 0:00:00 | $20.00</p>
									<div class="text-center">
										<img class="img-fluid" src="https://chart.googleapis.com/chart?chs=100x100&amp;cht=qr&amp;chl=bitcoin:39RfvhVySzYUc6cmsuud9XUUWKGLyNsiZ1?amount=0.00124580">
									</div>
									<p class="mg-b-1 tx-12">Please send your payment to</p>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">btc</span>
										</div><input class="form-control" type="text">
									</div>
									<p class="tx-12 text-secondary">and <button class="modal-effect btn btn-primary btn-sm" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">submit your transaction id</button> as soon as you sent the payment (before confirmations)</p>
									<p class="h4">0.001246 BTC</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->

			<!-- Modal effects -->
			<div class="modal" id="modaldemo8">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-body">
							<br>
							<div class="form-group">
								<p class="mg-b-10">External tx id:</p>
								<input type="text" class="form-control" name="example-text-input" >
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn ripple btn-primary" type="button">Submit</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal effects-->
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
@endsection