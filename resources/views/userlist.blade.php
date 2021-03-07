@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">UserList</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">UserList</li>
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
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/2.jpg')}}">
									</div>
									<h5 class=" mb-1 mt-3">Socrates Itumay</h5>
									<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
									<p class="text-muted text-center mt-0">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>socrates23@gmail.com</span></a>
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>California, USA</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/3.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Reynante Labares</h5>
									<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>reynante23@gmail.com</span></a>
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn  btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>Wales, UK</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/4.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Owen Bongcaras</h5>
									<p class="mb-2 mt-1 tx-inverse">App Developer</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>owenbong@gmail.com</span></a>
										<a class="btn  btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn  btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>0-235-657-24587</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<div class="dropdown text-right">
											<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="fe fe-more-horizontal text-dark fs-16"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a>
												<a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a>
												<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a>
											</div>
										</div>
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/8.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Stephen Metcalfe</h5>
									<p class="mb-2 mt-1 tx-inverse">Administrator</p>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="mt-2 user-info btn-list">
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-mail mr-2"></i><span>stephne@gmail.com</span></a>
										<a class="btn btn-outline-light btn-block" href=""><i class="fe fe-phone mr-2"></i><span>0-235-657-24587</span></a>
										<a class="btn btn-outline-light  btn-block" href=""><i class="fe fe-map-pin mr-2"></i><span>London, UK</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/5.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Mariane Galeon</h5>
									<p class="mb-2 mt-1 tx-inverse">Administrator</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>mariane28@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>Scotland, UK</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/6.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Joyce Chua</h5>
									<p class="mb-2 mt-1 tx-inverse">App Designer</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>joyce78@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>Washington, USA</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="user-lock text-center">
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/7.jpg')}}">
									</div>
									<h5 class="mb-1 mt-3 ">Petey Cruiser</h5>
									<p class="mb-2 mt-1 tx-inverse">Web Developer</p>
									<p class="mb-1"><i class="fe fe-phone mr-2"></i>petey78@gmail.com</p>
									<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
										<p class="mb-2 mr-3"><i class="fe fe-map-pin mr-2"></i>England, UK</p>
										<p class="mb-2"><i class="fe fe-phone mr-2"></i>0-235-657-24587</p>
									</div>
									<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
									<div class="justify-content-center text-center mt-3 d-flex">
										<a href="#" class="btn ripple btn-primary btn-icon mr-3">
											<i class="fe fe-message-square"></i>
										</a>
										<a href="#" class="btn ripple btn-secondary btn-icon mr-3">
											<i class="fe fe-edit-2"></i>
										</a>
										<a href="#" class="btn ripple btn-info btn-icon mr-3">
											<i class="fe fe-eye"></i>
										</a>
										<a href="#" class="btn ripple btn-danger btn-icon">
											<i class="fe fe-trash-2"></i>
										</a>
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