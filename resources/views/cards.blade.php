@extends('layouts.master')
@section('css')
<!---Prism css-->
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Jquery.mCustomScrollbar css-->
<link href="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Cards</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cards</li>
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
					<div class="row row-sm">
						<div class="col-md">
							<div class="card custom-card card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card card-body bg-primary tx-white">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card card-body bg-gray-800 tx-white">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md">
							<div class="card custom-card">
								<div class="card-body">
									<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
									<p class="card-subtitle mg-b-15">This is the card subtitle</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card  bg-primary tx-white">
								<div class="card-body">
									<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
									<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card  bg-gray-800 tx-white">
								<div class="card-body">
									<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
									<p class="card-subtitle tx-white-8 mg-b-15">This is the card subtitle</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Basic Card</h5>
									<div class="card-options">
										<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
										<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
									</div>
								</div>
								<div class="card-body">
								  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
								<div class="card-footer">
									This is Basic card footer
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Basic Card</h5>
									<div class="card-options">
										<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
										<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
										<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
									</div>
								</div>
								<div class="card-body">
								  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
								<div class="card-footer">
									This is Basic card footer
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Basic Card</h5>
									<div class="card-options">
										<a href="#" class="btn btn-primary btn-sm">Action 1</a>
										<a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
									</div>
								</div>
								<div class="card-body">
								  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
								<div class="card-footer">
									This is Basic card footer
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Card Header</h5>
								</div>
								<div class="card-body">
									<h6 class="">Special title treatment</h6>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									<a href="#" class="btn btn-primary ripple btn-block">View</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Card Header</h5>
								</div>
								<div class="card-body">
									<h6 class="">Special title treatment</h6>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
								<div class="card-footer">
									<h6 class="mb-0">Card-footer</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h5 class="card-title tx-dark tx-medium mb-0">Blockquote</h5>
								</div>
								<div class="card-body">
									<blockquote class="blockquote mb-0">
										<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
										<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md-6 col-lg-3">
							<div class="card custom-card ">
								<img alt="Image" class="img-fluid b-img" src="{{URL::asset('assets/img/media/1.jpg')}}">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 ">
							<div class="card custom-card">
								<img alt="Image" class="img-fluid b-img" src="{{URL::asset('assets/img/media/2.jpg')}}">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="card custom-card">
							<div class="card-body">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div><img alt="Image" class="img-fluid b-img" src="{{URL::asset('assets/img/media/3.jpg')}}"></div>
						</div>
						<div class="col-md-6 col-lg-3 ">
							<div class="card custom-card">
							<div class="card-body ">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div><img alt="Image" class="img-fluid b-img" src="{{URL::asset('assets/img/media/4.jpg')}}"></div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md">
							<div class="card card-blog-overlay1 custom-card">
								<div class="card-body  text-white z-index2">
									<h3 class="card-title text-white">card-with image</h3>
									<p class="tx-white-7 tx-13 mb-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card-footer  text-white z-index2">
									This is Basic card footer
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card card-blog-overlay2 custom-card">
								<div class="card-header custom-card-header">
									<h3 class="card-title text-white mb-0">card-with image</h3>
								</div>
								<div class="card-body  text-white z-index2">
									<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									<a class="tx-white" href="">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card card-blog-overlay custom-card">
								<div class="card-body  text-white z-index2">
									<h3 class="card-title text-white">card-with image</h3>
									<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									<a class="tx-white" href="">Read more</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md-4">
							<div class="card custom-card">
								<div class="card-header tx-medium tx-white bg-primary">
									Description
								</div>
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="card custom-card">
								<div class="card-header tx-medium tx-white bg-secondary">
									Description
								</div>
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="card custom-card">
								<div class="card-header tx-medium tx-white bg-gray-800">
									Description
								</div>
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md">
							<div class="card custom-card">
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card-footer">
									January, 20, 2017 4:30am
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card">
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card-footer tx-center">
									<a href="">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card">
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card-footer tx-right">
									Share <i class="icon ion-logo-facebook mg-l-5 mg-r-5"></i> <i class="icon ion-logo-twitter"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-md">
							<div class="card custom-card card-body tx-white-8 bg-primary border-0">
								Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card card-body tx-white-8 bg-secondary border-0">
								Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
							</div>
						</div>
						<div class="col-md ">
							<div class="card custom-card card-body tx-white-8 bg-gray-800 border-0">
								Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
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
									<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
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
									<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
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
<!-- Jquery.mCustomScrollbar js-->
<script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Clipboard js-->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js-->
<script src="{{ URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection