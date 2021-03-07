@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Height</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Height</li>
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
					<div class="row">
						<div class="col-xl-9 col-lg-12">
							<div class="card custom-card" id="seth">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Set Height</h6>
										<p class="text-muted  card-sub-title">You can set a height to an element instantly by using the following utilities classes for height.</p>
									</div>
									<div class="d-flex">
										<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light">
											.ht-80
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-150 bg-light mg-l-20">
											.ht-150
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-light mg-l-20">
											.ht-100
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0">
											<thead>
												<tr>
													<th class="wd-30p">Smaller Height</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive mt-0">
										<table class="table main-table-reference mg-t-0">
											<thead>
												<tr>
													<th class="wd-30p">Regular Height</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-[value]</code></td>
													<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Bigger Height</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-[value]</code></td>
													<td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="percentage">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Percentage Height</h6>
										<p class="text-muted  card-sub-title">You can set a height through percentage using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-[value]p</code></td>
													<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="media">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Media Query Height</h6>
										<p class="text-muted  card-sub-title">You can also set a height to a different media query using the following utilities classes.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-[size]-[value]</code></td>
													<td class="bd-l" rowspan="2">
														<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the height value (refer to code above)</p>
													</td>
												</tr>
												<tr>
													<td><code>.ht-[size]-[value]p</code></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="extra">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Extra Height Classes</h6>
										<p class="text-muted  card-sub-title">You can also set a height using the extra utilities classes below.</p>
									</div>
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Class</th>
													<th class="wd-70p">Description</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.ht-100v</code></td>
													<td>Set a height to an element based on viewport height.</td>
												</tr>
												<tr>
													<td><code>.ht-auto</code></td>
													<td>Set an auto height to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#seth">Set Height</a>
											<a class="nav-link" href="#percentage">Percentage Height</a>
											<a class="nav-link" href="#media">Media Query Height</a>
											<a class="nav-link" href="#extra">Extra Height Classes</a>
										</nav>
									</div>
								</div>
								<div class="bg-white box-shadow">
									<div class="alert text-center fade show p-3">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<i class="fe fe-upload-cloud fs-50 text-success"></i>
										<h5 class="mt-2 mb-1 ">Success !</h5>
										<p class="mb-3 mb-3 tx-inverse">Data Upload Successfully </p>
										<a class="btn ripple btn-success" href="#">Continue</a>
									</div>
								</div>
								<div class="bg-white box-shadow">
									<div class="alert text-center fade show p-3">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<i class="fe fe-download-cloud fs-50 text-danger"></i>
										<h5 class="mt-2 mb-1">Oops!</h5>
										<p class="mb-3 mb-3 tx-inverse">Something went wrong</p>
										<a class="btn ripple btn-danger" href="#">Try again</a>
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
@endsection