@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Blog</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/4.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
									<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
								</div>
							 </div>
						</div>
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/2.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
									<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
								</div>
							 </div>
						</div>
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/3.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
									<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
								</div>
							 </div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card text-center">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/1.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More </a>
								</div>
							 </div>
						</div>
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card text-center">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/5.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
								</div>
							 </div>
						</div>
						<div class="col-xl-4 col-md-4">
							<div class="card custom-card text-center">
								<img class="card-img-top w-100 blog-img" src="{{URL::asset('assets/img/media/6.jpg')}}" alt="">
								<div class="card-body">
									<h4 class="card-title">Blog Title</h4>
									<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
								</div>
							 </div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-xl-3 col-lg-6  col-sm-6">
							<div class="card custom-card">
								<img class="card-img-top w-100 w-100 t-img" src="{{URL::asset('assets/img/media/7.jpg')}}" alt="">
								<div class="card-body">
									<a href="#"><h4 class="">Blog Title</h4></a>
									<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							 </div>
						</div>
						<div class="col-xl-3 col-lg-6  col-sm-6">
							<div class="card custom-card">
								<img class="card-img-top w-100 w-100 t-img" src="{{URL::asset('assets/img/media/8.jpg')}}" alt="">
								<div class="card-body">
									<a href="#"><h4 class="">Blog Title</h4></a>
									<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							 </div>
						</div>
						<div class="col-xl-3 col-lg-6  col-sm-6">
							<div class="card custom-card">
								<img class="card-img-top w-100 w-100 t-img" src="{{URL::asset('assets/img/media/9.jpg')}}" alt="">
								<div class="card-body">
									<a href="#"><h4 class="">Blog Title</h4></a>
									<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							 </div>
						</div>
						<div class="col-xl-3 col-lg-6  col-sm-6">
							<div class="card custom-card">
								<img class="card-img-top w-100 w-100 t-img" src="{{URL::asset('assets/img/media/10.jpg')}}" alt="">
								<div class="card-body">
									<a href="#"><h4 class="">Blog Title</h4></a>
									<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							 </div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6">
							<div class="card card-aside custom-card">
								<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/media/11.jpg')}}" style="background: url(&quot;{{URL::asset('assets/img/media/11.jpg')}}&quot;) center center;"></a>
								<div class="card-body">
									<h4><a href="#" class="text-dark">Blog Title</a></h4>
									<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
									<div class="d-flex align-items-center pt-3 mt-auto">
										<div class="main-img-user avatar-sm mr-3">
											<img src="{{URL::asset('assets/img/users/1.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
										</div>
										<div>
											<a href="" class="text-default">Alica Nestle</a>
											<small class="d-block text-muted">15 mintues ago</small>
										</div>
										<div class="ml-auto text-muted">
											<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
											<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card card-aside custom-card">
								<div class="card-body">
									<h4><a href="#" class="text-dark">Blog Title</a></h4>
									<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
									<div class="d-flex align-items-center pt-3 mt-auto">
										<div class="main-img-user avatar-sm mr-3">
											<img src="{{URL::asset('assets/img/users/2.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
										</div>
										<div>
											<a href="" class="text-default">Alica Nestle</a>
											<small class="d-block text-muted">15 mintues ago</small>
										</div>
										<div class="ml-auto text-muted">
											<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
											<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
										</div>
									</div>
								</div>
								<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/media/13.jpg')}}" style="background: url(&quot;{{URL::asset('assets/img/media/13.jpg')}}&quot;) center center;"></a>
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