@extends('layouts.master')
@section('css')
<!---Gallery css-->
<link href="{{ URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Light Gallery</h6>
										<p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p>
									</div>
									<ul id="lightgallery" class="list-unstyled row mb-0">
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/1.jpg')}}" data-src="{{URL::asset('assets/img/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/1.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/2.jpg')}}" data-src="{{URL::asset('assets/img/media/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/2.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/3.jpg')}}" data-src="{{URL::asset('assets/img/media/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/3.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/4.jpg')}}" data-src="{{URL::asset('assets/img/media/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/4.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/5.jpg')}}" data-src="{{URL::asset('assets/img/media/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/5.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-md-2 pr-md-2" data-responsive="{{URL::asset('assets/img/media/6.jpg')}}" data-src="{{URL::asset('assets/img/media/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/6.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/7.jpg')}}" data-src="{{URL::asset('assets/img/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/7.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/8.jpg')}}" data-src="{{URL::asset('assets/img/media/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive" src="{{URL::asset('assets/img/media/8.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/9.jpg')}}" data-src="{{URL::asset('assets/img/media/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="{{URL::asset('assets/img/media/9.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/10.jpg')}}" data-src="{{URL::asset('assets/img/media/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="{{URL::asset('assets/img/media/10.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0 pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/11.jpg')}}" data-src="{{URL::asset('assets/img/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="{{URL::asset('assets/img/media/11.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4  pl-sm-2 pr-sm-2" data-responsive="{{URL::asset('assets/img/media/12.jpg')}}" data-src="{{URL::asset('assets/img/media/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="">
												<img class="img-responsive mb-0" src="{{URL::asset('assets/img/media/12.jpg')}}" alt="Thumb-2">
											</a>
										</li>
									</ul>
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
<!-- Gallery js-->
<script src="{{ URL::asset('assets/plugins/gallery/picturefill.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lightgallery.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lightgallery-1.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-pager.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-hash.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/gallery/lg-share.js')}}"></script>
@endsection