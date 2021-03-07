@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Background</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Utilities</a></li>
								<li class="breadcrumb-item active" aria-current="page">Background</li>
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
					<div class="row">
						<div class="col-xl-9 col-lg-12">
							<div class="card custom-card" id="graybg">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Gray Set</h6>
										<p class="text-muted  card-sub-title">A set of gray background utilities classes.</p>
									</div>
									<div class="d-flex flex-wrap ht-50">
										<div class="flex-1 bg-gray-900 ht-100p"></div>
										<div class="flex-1 bg-gray-800 ht-100p"></div>
										<div class="flex-1 bg-gray-700 ht-100p"></div>
										<div class="flex-1 bg-gray-600 ht-100p"></div>
										<div class="flex-1 bg-gray-500 ht-100p"></div>
										<div class="flex-1 bg-gray-400 ht-100p"></div>
										<div class="flex-1 bg-gray-300 ht-100p"></div>
										<div class="flex-1 bg-gray-200 ht-100p"></div>
										<div class="flex-1 bg-gray-100 ht-100p"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>class="bg-gray-[value]"</code></td>
													<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="solidbg">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Solid Background Set</h6>
										<p class="text-muted  card-sub-title"> set of solid background utilities classes.</p>
									</div>
									<div class="d-flex flex-wrap ht-50">
										<div class="flex-1 bg-primary ht-100p"></div>
										<div class="flex-1 bg-secondary ht-100p"></div>
										<div class="flex-1 bg-info ht-100p"></div>
										<div class="flex-1 bg-danger ht-100p"></div>
										<div class="flex-1 bg-success ht-100p"></div>
										<div class="flex-1 bg-warning ht-100p"></div>
										<div class="flex-1 bg-indigo ht-100p"></div>
										<div class="flex-1 bg-purple ht-100p"></div>
										<div class="flex-1 bg-pink ht-100p"></div>
										<div class="flex-1 bg-teal ht-100p"></div>
										<div class="flex-1 bg-orange ht-100p"></div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>class="bg-[value]"</code></td>
													<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="whitebg">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Transparent White Set</h6>
										<p class="text-muted  card-sub-title">A set of overlay transparent white background utilities classes.</p>
									</div>
									<div class="d-flex flex-wrap ht-50 mb-lg-4">
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-1"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-2"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-3"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-4"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-5"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-6"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-7"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-8"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="img" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-9"></div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>class="bg-white-[value]"</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="blackbg">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Transparent Black Set</h6>
										<p class="text-muted  card-sub-title">A set of overlay transparent black background utilities classes.</p>
									</div>
									<div class="d-flex flex-wrap ht-50 mb-lg-4">
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-1"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-2"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-3"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-4"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-5"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-6"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-7"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-8"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-black-9"></div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>class="bg-black-[value]"</code></td>
													<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="colortrans">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Transparent Colors Set</h6>
										<p class="text-muted  card-sub-title">A set of overlay transparent colors background utilities classes.</p>
									</div>
									<div class="d-flex flex-wrap ht-50 mb-lg-4">
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-white-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-dark-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-primary-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-secondary-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-success-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-info-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-warning-transparent "></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-danger-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-pink-transparent"></div>
										</div>
										<div class="flex-1 pos-relative">
											<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/media/4.jpg')}}">
											<div class="pos-absolute a-0 bg-purple-transparent"></div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="table-responsive">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code>class="bg-[value]-transparent"</code></td>
													<td>light | dark | primary | secondary | success | info | warning | danger | pink | purple </td>
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
											<a class="nav-link" href="#graybg">Gray Set</a>
											<a class="nav-link" href="#solidbg">Solid Background Set</a>
											<a class="nav-link" href="#whitebg">Transparent White Set</a>
											<a class="nav-link" href="#blackbg">Transparent Black Set</a>
											<a class="nav-link" href="#colortrans">Transparent Colors Set</a>
										</nav>
									</div>
								</div>
								<div class="bg-white box-shadow">
									<div class="alert text-center fade show p-3">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<i class="fe fe-upload-cloud fs-50 text-success"></i>
										<h5 class="mt-2 mb-1">Success !</h5>
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