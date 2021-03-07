@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Widgets</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body">
									<div><i class="fas fa-chart-line mr-1 dash-icon"></i></div>
									<p class="mb-1 tx-inverse">Number Of Sales</p>
									<div>
										<h4 class="dash-25 mb-2">568</h4>
									</div>
									<div class="expansion-value d-flex tx-inverse">
										<strong><i class="fas fa-caret-down mr-1 text-danger"></i> 0.5%</strong>
										<strong class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.7%</strong>
									</div>
									<div class="progress">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-70p" role="progressbar"></div>
									</div>
									<div class="expansion-label d-flex text-muted">
										<span>Target</span>
										<span class="ml-auto">Last Month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body">
									<div><i class="fab fa-rev mr-1 dash-icon"></i></div>
									<p class="mb-1 tx-inverse">New Revenue</p>
									<div>
										<h4 class="dash-25 mb-2">$12,897</h4>
									</div>
									<div class="expansion-value d-flex tx-inverse">
										<strong><i class="fas fa-caret-up mr-1 text-success"></i> 0.72%</strong>
										<strong class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>0.43%</strong>
									</div>
									<div class="progress">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
									</div>
									<div class="expansion-label d-flex text-muted">
										<span>Target</span>
										<span class="ml-auto">Last Month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body">
									<div><i class="fas fa-dollar-sign mr-1 dash-icon"></i></div>
									<p class="mb-1 tx-inverse">Total Cost</p>
									<div>
										<h4 class="dash-25 mb-2">$11,234</h4>
									</div>
									<div class="expansion-value d-flex tx-inverse">
										<strong><i class="fas fa-caret-down mr-1 text-danger"></i> 1.4%</strong>
										<strong class="ml-auto"><i class="fas fa-caret-down mr-1 text-danger"></i>1.44%</strong>
									</div>
									<div class="progress">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
									</div>
									<div class="expansion-label d-flex text-muted">
										<span>Target</span>
										<span class="ml-auto">Last Month</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body">
									<div><i class="fas fa-signal mr-1 dash-icon"></i></div>
									<p class="mb-1 tx-inverse">Profit By Sale</p>
									<div>
										<h4 class="dash-25 mb-2">$789</h4>
									</div>
									<div class="expansion-value d-flex tx-inverse">
										<strong><i class="fas fa-caret-down mr-1 text-danger"></i> 0.4%</strong>
										<strong class="ml-auto"><i class="fas fa-caret-up mr-1 text-success"></i>0.9%</strong>
									</div>
									<div class="progress">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
									</div>
									<div class="expansion-label d-flex text-muted">
										<span>Target</span>
										<span class="ml-auto">Last Month</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="icon-service bg-primary-transparent rounded-circle text-primary">
										<i class="fe fe-user"></i>
									</div>
									<p class="mb-1 text-muted">Total Users</p>
									<h3 class="mb-0">34,789</h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
										<i class="fe fe-trending-up"></i>
									</div>
									<p class="mb-1 text-muted">Total Sales</p>
									<h3 class="mb-0">98,674</h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="icon-service bg-info-transparent rounded-circle text-info">
										<i class="fe fe-dollar-sign"></i>
									</div>
									<p class="mb-1 text-muted">Total Profits</p>
									<h3 class="mb-0"><span>$</span>45,078</h3>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body text-center">
									<div class="icon-service bg-success-transparent rounded-circle text-success">
										<i class="fe fe-shopping-cart"></i>
									</div>
									<p class="mb-1 text-muted">Total Orders</p>
									<h3 class="mb-0">35,897</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="card custom-card">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
										<div class="card-body text-center">
											<h6 class="mb-0">Gross profit Margin</h6>
											<h2 class="mb-1 mt-2 number-font"><span class="counter">77</span>%</h2>
											<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
										<div class="card-body text-center">
											<h6 class="mb-0">Opex Ratio</h6>
											<h2 class="mb-1 mt-2 number-font"><span class="counter">60</span>%</h2>
											<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-right">
										<div class="card-body text-center">
											<h6 class="mb-0">Operating Profit Margin</h6>
											<h2 class="mb-1 mt-2 number-font"><span class="counter">57</span>%</h2>
											<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 0.87%</span> for Last month</p>
										</div>
									</div>
									<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0">
										<div class="card-body text-center">
											<h6 class="mb-0">Net Profit Margin</h6>
											<h2 class="mb-1 mt-2 number-font"><span class="counter">35</span>%</h2>
											<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 22%</span> for Last month</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 col-md-6 col-xl-3">
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
									<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
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
									<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body user-card text-center">
									<div class="main-img-user avatar-lg online text-center">
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/6.jpg')}}">
									</div>
									<div class="mt-2">
										<h5 class="mb-1">Owen Bongcaras</h5>
										<p class="mb-1 tx-inverse">Web Designer</p>
										<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
									</div>
									<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-3">
							<div class="card custom-card">
								<div class="card-body user-card text-center">
									<div class="main-img-user avatar-lg online text-center">
										<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/7.jpg')}}">
									</div>
									<div class="mt-2">
										<h5 class="mb-1">Mariane Galeon</h5>
										<p class="mb-1 tx-inverse">Php Developer</p>
										<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
									</div>
									<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6>Click Through Conversions</h6>
										<h6><span class="fs-30 mr-2">14,678</span><span class="badge badge-success">1.5%</span></h6>
										<span class="text-muted">The number of clicks to the ad that consist of a single impression.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6>View Through Conversions</h6>
										<h6><span class="fs-30 mr-2">2,971</span><span class="badge badge-danger">0.55%</span></h6>
										<span class="text-muted">Estimated daily unique views  through conversions per visitor on the ads.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6>Total Conversions</h6>
										<h6><span class="fs-30 mr-2">1,896</span><span class="badge badge-success">1.8%</span></h6>
										<span class="text-muted">Estimated total conversions on ads per impressions to the ads.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Projects Overview</h6>
								</div>
								<div class="">
									<div class="p-3">
										<h6>HTML Project</h6>
										<div class="main-traffic-detail-item">
											<div>
												<span>Project status</span> <span>35%</span>
											</div>
											<div class="progress">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-35p" role="progressbar"></div>
											</div>
										</div>
									</div>
									<div class="p-3 border-top">
										<h6>Wordpress Project</h6>
										<div class="main-traffic-detail-item">
											<div>
												<span>Project status</span> <span>50%</span>
											</div>
											<div class="progress progress-bar-xs">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-50p bg-secondary" role="progressbar"></div>
											</div>
										</div>
									</div>
									<div class="p-3 border-top">
										<h6>Angular Project</h6>
										<div class="main-traffic-detail-item">
											<div>
												<span>Project status</span> <span>40%</span>
											</div>
											<div class="progress progress-bar-xs">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
											</div>
										</div>
									</div>
									<div class="p-3 border-top">
										<h6>React Project</h6>
										<div class="main-traffic-detail-item">
											<div>
												<span>Project status</span> <span>10%</span>
											</div>
											<div class="progress progress-bar-xs">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-10p bg-danger" role="progressbar"></div>
											</div>
										</div>
									</div>
									<div class="p-3 border-top">
										<h6>PHP Project</h6>
										<div class="main-traffic-detail-item">
											<div>
												<span>Project status</span> <span>70%</span>
											</div>
											<div class="progress progress-bar-xs">
												<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-70p bg-success" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-8">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/5.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<h5 class="pro-user-username text-dark mt-2 mb-0">Mariane Galeon</h5>
												<p class="pro-user-desc text-muted mb-1">Web Developer</p>
												<p class="user-info-rating">
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="far fa-star text-warning"> </i></a>
												</p>
											</div>
											<div class="contact-info mb-0 text-center">
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/users/6.jpg')}}">
											</div>
											<div class="text-center mt-3">
												<h5 class="pro-user-username text-dark mt-2 mb-0">Joyce Chua</h5>
												<p class="pro-user-desc text-muted mb-1">App Developer</p>
												<p class="user-info-rating">
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="far fa-star text-warning"> </i></a>
												</p>
											</div>
											<div class="contact-info mb-0 text-center">
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="row">
											<div class="col-sm-6 col-lg-6 border-right">
												<div class="card-body iconfont text-center">
													<h6 class="">Total Cost Reduction</h6>
													<h2 class="mt-1">$23,567</h2>
													<p class="text-muted"><span class="text-purple"><i class="fa fa-arrow-up text-success mr-1"> </i>23% </span> in this year</p>
													<div class="progress progress-sm mb-0">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wd-50p"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-lg-6">
												<div class="card-body iconfont text-center">
													<h6>Total Cost Savings</h6>
													<h2 class="mt-1">15.2%</h2>
													<p class="text-muted"><span><i class="fa fa-arrow-down text-danger mr-1"> </i>12%</span> in this year</p>
													<div class="progress progress-sm mb-0">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger wd-70p"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-4">
							<div class="card custom-card">
								<div class="card-body">
									<div class="card-block">
										<div class="row align-items-center justify-content-center">
											<div class="col-auto user-lock">
												<img class="img-fluid rounded-circle" src="{{URL::asset('assets/img/users/8.jpg')}}" alt="avatar">
											</div>
											<div class="col">
												<h5>Joyce Chua</h5>
												<span>UX Designer</span>
											</div>
										</div>
										<ul class="task-list">
											<li>
												<i class="task-icon bg-primary"></i>
												<h6>Task Finished<span class="float-right text-muted fs-11">29 Oct 2019</span></h6>
												<p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="font-weight-semibold"> Project Management</a></p>
											</li>
											<li>
												<i class="task-icon bg-secondary"></i>
												<h6>New Comment<span class="float-right text-muted fs-11">25 Oct 2019</span></h6>
												<p class="text-muted fs-12">Victoria commented on Project <a href="#" class="font-weight-semibold"> AngularJS Template</a></p>
											</li>
											<li>
												<i class="task-icon bg-danger"></i>
												<h6>Task Overdue<span class="float-right text-muted fs-11">14 Oct 2019</span></h6>
												<p class="text-muted fs-12">Petey Cruiser finished task <a href="#" class="font-weight-semibold"> Integrated management</a></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-xl-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Browser Usage</h6>
								</div>
								<div class="card-body p-0">
									<div class="browser-stats">
										<div class="d-flex align-items-center border-bottom p-3">
											<div class="d-flex">
												<i class="fab fa-chrome text-secondary  mr-2 fs-20"></i>
												<p class="mb-0">Chrome</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">35,502</span>
													<span class="text-success fs-12 mt-1"><i class="fe fe-arrow-up"></i>12.75%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center border-bottom p-3">
											<div class="d-flex">
												<i class="fab fa-opera text-danger mr-2 fs-20"></i>
												<p class="mb-0">Opera</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">12,563</span>
													<span class="text-danger fs-12 mt-1"><i class="fe fe-arrow-down"></i>15.12%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center border-bottom p-3">
											<div class="d-flex">
												<i class="fab fa-internet-explorer text-info mr-2 fs-20"></i>
												<p class="mb-0">IE</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">25,364</span>
													<span class="text-success fs-12 mt-1"><i class="fe fe-arrow-up"></i>24.37%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center border-bottom p-3">
											<div class="d-flex">
												<i class="fab fa-firefox text-primary mr-2 fs-20"></i>
												<p class="mb-0">Firefox</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">14,635</span>
													<span class="text-success fs-12 mt-1"><i class="fe fe-arrow-up"></i>15,63%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center border-bottom p-3">
											<div class="d-flex">
												<i class="fab fa-android text-success mr-2 fs-20"></i>
												<p class="mb-0">Android</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">15,453</span>
													<span class="text-danger fs-12 mt-1"><i class="fe fe-arrow-down"></i>23.70%</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center p-3">
											<div class="d-flex">
												<i class="fab fa-safari text-danger mr-2 fs-20"></i>
												<p class="mb-0">Safari</p>
											</div>
											<div class="ml-auto">
												<div class="d-flex">
													<span class="mr-4 font-weight-bold">12,785</span>
													<span class="text-success fs-12 mt-1"><i class="fe fe-arrow-up"></i>11.04%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-xl-4">
							<div class="card custom-card">
								<div class="card-header custom-card-header">
									<h6 class="card-title mb-0">Visitors</h6>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table mg-b-0">
											<tbody>
												<tr>
													<td class="bd-t-0 bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													</td>
													<td class="bd-t-0 bd-l-0">
														<h6 class="mg-b-0">Socrates Itumay</h6><small class="tx-11 tx-gray-500">Web Developer</small>
													</td>
													<td class="bd-t-0 bd-l-0">
														<a href="#" class="btn ripple btn-primary btn-sm">Follow</a>
													</td>
												</tr>
												<tr>
													<td class="bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/3.jpg')}}"></div>
													</td>
													<td class="bd-l-0">
														<h6 class="mg-b-0">Reynante Labares</h6><small class="tx-11 tx-gray-500">CEO</small>
													</td>
													<td class="bd-l-0">
														<a href="#" class="btn ripple btn-secondary btn-sm">Follow</a>
													</td>
												</tr>
												<tr>
													<td class="bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/4.jpg')}}"></div>
													</td>
													<td class="bd-l-0">
														<h6 class="mg-b-0">Owen Bongcaras</h6><small class="tx-11 tx-gray-500">Manager</small>
													</td>
													<td class="bd-l-0">
														<a href="#" class="btn ripple btn-danger btn-sm">Follow</a>
													</td>
												</tr>
												<tr>
													<td class="bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/5.jpg')}}"></div>
													</td>
													<td class="bd-l-0">
														<h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Administrator</small>
													</td>
													<td class="bd-l-0">
														<a href="#" class="btn ripple btn-info btn-sm">Follow</a>
													</td>
												</tr>
												<tr>
													<td class="bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/6.jpg')}}"></div>
													</td>
													<td class="bd-l-0">
														<h6 class="mg-b-0">Steven Watson</h6><small class="tx-11 tx-gray-500">Founder</small>
													</td>
													<td class="bd-l-0">
														<a href="#" class="btn ripple btn-success btn-sm">Follow</a>
													</td>
												</tr>
												<tr>
													<td class="bd-l-0">
														<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/7.jpg')}}"></div>
													</td>
													<td class="bd-l-0">
														<h6 class="mg-b-0">Sonia	Fraser</h6><small class="tx-11 tx-gray-500">App Developer</small>
													</td>
													<td class="bd-l-0">
														<a href="#" class="btn ripple btn-warning btn-sm">Follow</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Check-all-mail js-->
<script src="{{ URL::asset('assets/js/check-all-mail.js')}}"></script>
<!-- Peity js-->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/widgets.js')}}"></script>
@endsection