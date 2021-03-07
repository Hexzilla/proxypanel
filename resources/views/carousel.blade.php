@extends('layouts.master')
@section('css')
<!---Owl Carousel css-->
<link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Multislider css-->
<link href="{{ URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Carousel</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">Static Carousel</h6>
										<p class="text-muted card-sub-title">Here’s a carousel with slides only.</p>
									</div>
									<div class="">
										<div class="carousel slide" data-ride="carousel" id="carouselExampleSlidesOnly">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/8.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/9.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/10.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">With Controls</h6>
										<p class="text-muted card-sub-title">Adding in the previous and next controls.</p>
									</div>
									<div>
										<div class="carousel slide" data-ride="carousel" id="carouselExample2">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/11.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/12.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/13.jpg')}}">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
												<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
												<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">With Indicator</h6>
										<p class="text-muted card-sub-title">You can also add the indicators to the carousel, alongside the controls, too align any where</p>
									</div>
									<div>
										<div class="carousel slide" data-ride="carousel" id="carouselExample3">
											<ol class="carousel-indicators">
												<li class="active" data-slide-to="0" data-target="#carouselExample3"></li>
												<li data-slide-to="1" data-target="#carouselExample3"></li>
												<li data-slide-to="2" data-target="#carouselExample3"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/14.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/15.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/16.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">With Caption</h6>
										<p class="text-muted card-sub-title">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item.</code></p>
									</div>
									<div>
										<div class="carousel slide" data-ride="carousel" id="carouselExample4">
											<ol class="carousel-indicators">
												<li class="active" data-slide-to="0" data-target="#carouselExample4"></li>
												<li data-slide-to="1" data-target="#carouselExample4"></li>
												<li data-slide-to="2" data-target="#carouselExample4"></li>
											</ol>
											<div class="carousel-inner bg-dark">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/media/17.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5>First Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/media/18.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5>Second Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/media/19.jpg')}}">
													<div class="carousel-caption d-none d-md-block">
														<h5>Third Slide</h5>
														<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">Fade Animate Carousel</h6>
										<p class="text-muted card-sub-title">Add fade transition to your carousel to animate slides with a fade transition instead of a slide.</p>
									</div>
									<div>
										<div class="carousel slide carousel-fade" data-ride="carousel" id="carouselExample5">
											<ol class="carousel-indicators">
												<li class="active" data-slide-to="0" data-target="#carouselExample5"></li>
												<li data-slide-to="1" data-target="#carouselExample5"></li>
												<li data-slide-to="2" data-target="#carouselExample5"></li>
											</ol>
											<div class="carousel-inner bg-dark">
												<div class="carousel-item active">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/20.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/1.jpg')}}">
												</div>
												<div class="carousel-item">
													<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/media/2.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">Carousel With Thumbnails</h6>
										<p class="text-muted card-sub-title">The Carousel controls the Thumbnails easily design the images with thumbnails</p>
									</div>
									<div class="carousel-slider">
										<div id="carousel" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active"><img src="{{URL::asset('assets/img/media/1.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/2.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/3.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/4.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/5.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/6.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/7.jpg')}}" alt="img"> </div>
												<div class="carousel-item"> <img src="{{URL::asset('assets/img/media/8.jpg')}}" alt="img"> </div>
											</div>
											<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
												<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
											</a>
										</div>
										<div class="clearfix">
											<div id="thumbcarousel" class="carousel slide" data-interval="false">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{URL::asset('assets/img/media/1.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{URL::asset('assets/img/media/2.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{URL::asset('assets/img/media/3.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{URL::asset('assets/img/media/4.jpg')}}" alt="img"></div>
													</div>
													<div class="carousel-item">
														<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="{{URL::asset('assets/img/media/5.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="{{URL::asset('assets/img/media/6.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="{{URL::asset('assets/img/media/7.jpg')}}" alt="img"></div>
														<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="{{URL::asset('assets/img/media/8.jpg')}}" alt="img"></div>
													</div>
												</div>
												<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
													<i class="fa fa-angle-left fs-20" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
													<i class="fa fa-angle-right fs-20" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">Owl Carousel</h6>
										<p class="text-muted card-sub-title">Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.</p>
									</div>
									<div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/5.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Reynante</h5>
														<p class="mb-1">Web Developer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/4.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Joyce Chua</h5>
														<p class="mb-1">Team Leader</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/6.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Owen Bongcaras</h5>
														<p class="mb-1">Web Designer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/7.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Mariane Galeon</h5>
														<p class="mb-1">Php Developer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/8.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Reynante</h5>
														<p class="mb-1">Web Developer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/9.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Joyce Chua</h5>
														<p class="mb-1">Team Leader</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/10.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Owen Bongcaras</h5>
														<p class="mb-1">Web Designer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="card">
												<div class="card-body user-card text-center">
													<div class="main-img-user avatar-lg online text-center">
														<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/11.jpg')}}">
													</div>
													<div class="mt-2">
														<h5 class="mb-1">Mariane Galeon</h5>
														<p class="mb-1">Php Developer</p>
														<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
													</div>
													<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body h-100">
									<div>
										<h6 class="card-title mb-1">Multi Slider</h6>
										<p class="text-muted card-sub-title">Multislider is a jQuery powered slideshow that specializes in showing more than one slide at a time. There's no need to find messy CSS and JS work arounds for other single-slide solutions. Multislider allows the developer to focus fully on each individual slide as it's own component, and then displays as many slides as you decide in a manner that is fluid, consistent, and dymanic.</p>
									</div>
									<div id="basicSlider">
										<div class="MS-content">
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/1.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/2.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/3.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/4.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/5.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/6.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/7.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/8.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/9.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/10.jpg')}}" alt="" /> </a>
											</div>
											<div class="item">
												<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/media/11.jpg')}}" alt="" /> </a>
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
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Owl Carousel js-->
<script src="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<!-- Multislider js-->
<script src="{{ URL::asset('assets/plugins/multislider/multislider.js')}}"></script>
<script src="{{ URL::asset('assets/js/carousel.js')}}"></script>
@endsection