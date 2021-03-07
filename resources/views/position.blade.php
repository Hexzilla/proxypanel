
@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Position</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Position</li>
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
							<div class="card custom-card" id="setposition">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Set Position</h6>
										<p class="text-muted  card-sub-title">You can set a position to an element instantly by using the following utilities classes.</p>
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
													<td><code>.pos-relative</code></td>
													<td>Set a relative position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-absolute</code></td>
													<td>Set an absolute position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-fixed</code></td>
													<td>Set a fixed position to an element.</td>
												</tr>
												<tr>
													<td><code>.pos-static</code></td>
													<td>Set a static position to an element.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="cornering">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Cornering</h6>
										<p class="text-muted  card-sub-title">You can set a top,right,bottom and left position to an element using the following utilities classes.</p>
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
													<td><code>.t-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="zyposition">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">X and Y Position</h6>
										<p class="text-muted  card-sub-title">You can set a top,right,bottom and left position to an element using the following utilities classes.</p>
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
													<td><code>.t-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l-[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="negative">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Negative Corner</h6>
										<p class="text-muted  card-sub-title">You can set a negative positioning to an element using the following utilities classes.</p>
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
													<td><code>.t--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.r--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.b--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
												<tr>
													<td><code>.l--[value]</code></td>
													<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="zindex">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Z-Index Property</h6>
										<p class="text-muted  card-sub-title">You can set a z-index to an element instantly using the following utilities classes.</p>
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
													<td><code>.z-index-[value]</code></td>
													<td>10 | 50 | 100 | 150 | 200</td>
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
											<a class="nav-link" href="#setposition">Set Position</a>
											<a class="nav-link" href="#cornering">Cornering</a>
											<a class="nav-link" href="#zyposition">X and Y Position</a>
											<a class="nav-link" href="#negative">Negative Corner</a>
											<a class="nav-link" href="#zindex">Z-Index Property</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h6 class="card-title mb-0">Sales Summary</h6>
									</div>
									<div class="">
										<div class="main-list-item p-3">
											<div>
												<h6>Total Revenue</h6><span>weekly profit</span>
											</div>
											<div>
												<h5>$15,300</h5>
											</div>
										</div>
										<div class="main-list-item p-3 border-top">
											<div>
												<h6>Total Tax</h6><span>weekly profit</span>
											</div>
											<div>
												<h5>$1,625</h5>
											</div>
										</div>
										<div class="main-list-item p-3 border-top">
											<div>
												<h6>Total Income</h6><span>weekly profit</span>
											</div>
											<div>
												<h5>$55,897</h5>
											</div>
										</div>
										<div class="main-list-item p-3 border-top">
											<div>
												<h6>Total Loss</h6><span>weekly profit</span>
											</div>
											<div>
												<h5>20%</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Sidebar -->
@endsection
@section('js')
@endsection