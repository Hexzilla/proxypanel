@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Cart</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</div>
						<div class="btn btn-list">
							<a class="btn ripple btn-primary" href="#"><i class="fe fe-external-link"></i> Export</a>
							<a class="btn ripple btn-secondary" href="#"><i class="fe fe-download"></i> Download</a>
							<a class="btn ripple btn-info" href="#"><i class="fe fe-help-circle"></i> Help</a>
							<a class="btn ripple btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fe fe-settings"></i> Settings <i class="fas fa-caret-down ml-1"></i>
							</a>
							<div  class="dropdown-menu tx-13">
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
					<div class="row sidemenu-height">
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Shopping Cart</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive text-nowrap">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Product</th>
													<th>price</th>
													<th>Quantity</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Laptop</td>
													<td>
														<span>$24,000</span>
													</td>
													<td class="wd-20">
														<input type="text" class="form-control text-center h-30" placeholder="1">
													</td>
													<td>
														<span class="font-weight-bold">$24,000</span>
													</td>
													<td>
														<a class="btn ripple btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash-2"></i></a>
													</td>
												</tr>
												<tr>
													<td>Ladies Shoes</td>
													<td>
														<span>$850</span>
													</td>
													<td class="wd-20">
														<input type="text" class="form-control text-center h-30" placeholder="2">
													</td>
													<td>
														<span class="font-weight-bold">$1,700</span>
													</td>
													<td>
														<a class="btn ripple btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash-2"></i></a>
													</td>
												</tr>
												<tr>
													<td>Hand Bag</td>
													<td>
														<span>$450</span>
													</td>
													<td class="wd-20">
														<input type="text" class="form-control text-center h-30" placeholder="2">
													</td>
													<td>
														<span class="font-weight-bold">$900</span>
													</td>
													<td>
														<a class="btn ripple btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fe fe-trash-2"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<form class="text-left  product-cart mb-0">
										<div class="input-group">
											<input class="productcart form-control" type="text" placeholder="Coupon Code">
											<span class="input-group-btn">
												<button class="btn ripple btn-primary" type="button">
													<span class="input-group-btn">Apply</span>
												</button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Order Summery</h6>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td>Cart Subtotal</td>
													<td class="text-right">$26,600</td>
												</tr>
												<tr>
													<td><span>Totals</span></td>
													<td class="text-right text-muted"><span>$26,600</span></td>
												</tr>
												<tr>
													<td><span>Order Total</span></td>
													<td><h2 class="price text-right">$26,600.00</h2></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="btn btn-list">
										<a href="#" class="btn ripple btn-primary"><i class="fe fe-arrow-left mr-1"></i>Proceed To Checkout</a>
										<a href="#" class="btn ripple btn-secondary">Continue Shopping<i class="fe fe-arrow-right ml-1"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Check-all-mail js-->
<script src="{{ URL::asset('assets/js/check-all-mail.js')}}"></script>
@endsection