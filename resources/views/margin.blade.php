@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Margin</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Margin</li>
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
							<div class="card custom-card" id="setmargin">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Set Margin</h6>
										<p class="text-muted  card-sub-title">You can set a margin to an element instantly by using the following utilities classes.</p>
									</div>
									<div class="d-flex">
										<div class="wd-150 ht-80 bg-light"></div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light mg-l-20">
											.mg-l-20 (or) .ml-2
										</div>
										<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light mg-l-40">
											.mg-l-40 (or) .ml-4
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-30p">Smaller Margin</th>
													<th class="wd-70p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>.mg-t-[value]<br>
													.mg-r-[value]<br>
													.mg-b-[value]<br>
													.mg-l-[value]</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
												</tr>
												<tr>
													<td><code>.mt-[value]<br>
													.mr-[value]<br>
													.mb-[value]<br>
													.ml-[value]</code></td>
													<td>0 | 1 | 2 | 3 | 4 | 5</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="mediamargin">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Media Query Margin</h6>
										<p class="text-muted  card-sub-title">You can also set a margin to a different media query using the following utilities classes.</p>
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
													<td><code>.mg-[breakpoint]-t-[value]<br>
													.mg-[breakpoint]-r-[value]<br>
													.mg-[breakpoint]-b-[value]<br>
													.mg-[breakpoint]-l-[value]</code></td>
													<td>
														<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the margin value (refer to code above)</p>
													</td>
												</tr>
												<tr>
													<td><code>.mt-[breakpoint]-[value]<br>
													.mr-[breakpoint]-[value]<br>
													.mb-[breakpoint]-[value]<br>
													.ml-[breakpoint]-[value]</code></td>
													<td>
														<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
														<p class="mg-b-0">value: the margin value (refer to code above)</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="automargin">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Auto Margin</h6>
										<p class="text-muted  card-sub-title">You can also set a margin to a different media query using the following utilities classes.</p>
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
													<td><code>.mg-t-auto</code> (or) <code>.mt-auto</code></td>
													<td>Set a top margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-r-auto</code> (or) <code> .mr-auto</code></td>
													<td>Set a right margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-b-auto</code> (or) <code>.mb-auto</code></td>
													<td>Set a bottom margin to auto</td>
												</tr>
												<tr>
													<td><code>.mg-l-auto</code> (or) <code>.ml-auto</code></td>
													<td>Set a left margin to auto</td>
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
											<a class="nav-link" href="#setmargin">Set Margin</a>
											<a class="nav-link" href="#mediamargin">Media Query Margin</a>
											<a class="nav-link" href="#automargin">Auto Margin</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/5.jpg')}}">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Reynante</h5>
											<p class="mb-1 tx-inverse">Web Developer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/4.jpg')}}">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Joyce Chua</h5>
											<p class="mb-1 tx-inverse">Team Leader</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-secondary btn-sm mt-3">View Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row-->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
@endsection