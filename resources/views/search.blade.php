@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Search</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
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
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body pb-0">
									<div class="input-group mb-2">
										<input type="text" class="form-control" placeholder="Searching.....">
										<span class="input-group-append">
											<button class="btn ripple btn-primary" type="button">Search</button>
										</span>
									</div>
								</div>
								<div class="card-body pl-0 pr-0 bd-t-0 pt-0">
									<div class="main-content-body-profile mb-3">
										<nav class="nav main-nav-line">
											<a class="nav-link active" data-toggle="tab" href="#tab1">All</a>
											<a class="nav-link" data-toggle="tab" href="#tab2">Images</a>
											<a class="nav-link" data-toggle="tab" href="#tab3">Books</a>
											<a class="nav-link" data-toggle="tab" href="#tab4">News</a>
											<a class="nav-link" data-toggle="tab" href="#tab5">Videos</a>
										</nav>
									</div>
									<p class="text-muted mb-0 pl-3">About 12,546,90000 results (0.56 Seconds)</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">Search the new animations</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">Free Boostrap admin templates</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">20+ download the free templates</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">Customizable admin templates</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">HTML Admin templates</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div class="mb-2">
										<a href="#" class="h4 text-dark">Best free admin templates</a>
									</div>
									<h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
									<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
							</div>
							<div class="text-center">
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
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