@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Mail-Inbox</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
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
						<div class="col-sm-12 col-md-4 col-xl-3">
							<div class="card custom-card">
								<div class="card-body">
									<a class="btn ripple btn-main-primary btn-compose btn-block" href="" id="btnCompose">Compose</a>
									<div class="main-mail-menu pd-r-0 mg-t-20">
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link active" href="">
												<i class="fe fe-mail"></i> Inbox <span class="badge badge-light">20</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-star"></i> Starred <span class="badge badge-primary">3</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-bookmark"></i> Important <span class="badge badge-secondary">10</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-send"></i> Sent Mail <span class="badge badge-success">8</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-edit-2"></i> Drafts <span class="badge badge-danger">15</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-disc"></i> Spam <span class="badge badge-warning">128</span>
											</a>
											<a class="nav-link" href="">
												<i class="fe fe-trash-2"></i> Trash <span class="badge badge-info">6</span>
											</a>
										</nav>
										<label class="main-content-label main-content-label-sm">Label</label>
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link" href="#">
												<i class="fe fe-folder"></i> Social <span class="badge badge-primary">10</span>
											</a>
											<a class="nav-link" href="#">
												<i class="fe fe-folder"></i> Promotions <span class="badge badge-secondary">22</span>
											</a>
											<a class="nav-link" href="#">
												<i class="fe fe-folder"></i> Updates <span class="badge badge-success">17</span>
											</a>
										</nav>
										<label class="main-content-label main-content-label-sm">Tags</label>
										<nav class="nav main-nav-column">
											<a class="nav-link" href="#">
												<i class="fe fe-twitter"></i> Twitter <span class="badge badge-danger">2</span>
											</a>
											<a class="nav-link" href="#">
												<i class="fe fe-github"></i> Github <span class="badge badge-warning">32</span>
											</a>
											<a class="nav-link" href="#">
												<i class="fe fe-linkedin"></i> Linked In <span class="badge badge-info">7</span>
											</a>
										</nav>
									</div><!-- main-mail-menu -->
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-8 col-xl-9">
							<div class="card custom-card">
								<div class="">
									<div class="media">
										<div class="media-body overflow-hidden" id="mailContent">
											<div class="main-mail-header mg-b-0 pd-20 pd-lg-x-25">
												<div>
													<h4 class="main-content-title mg-b-5">Inbox</h4>
													<p>You have 2 unread messages</p>
												</div>
												<div>
													<span>1-50 of 1200</span>
													<div class="btn-group border" role="group">
														<button class="btn btn-light disabled" type="button" data-placement="top" data-toggle="tooltip" title="Newer"><i class="fe fe-chevron-left"></i></button>
														<button class="btn btn-light border-left" type="button" data-placement="top" data-toggle="tooltip" title="Older"><i class="fe fe-chevron-right"></i></button>
													</div>
												</div>
											</div>
											<div class="main-mail-options">
												<label class="ckbox"><input id="checkAll" type="checkbox"> <span></span></label>
												<div class="btn-group">
													<button class="btn btn-light"><i class="fe fe-rotate-cw"></i></button>
													<button class="btn btn-light disabled"><i class="fe fe-alert-triangle"></i></button>
													<button class="btn btn-light disabled"><i class="fe fe-trash-2"></i></button>
													<button class="btn btn-light disabled"><i class="fe fe-folder"></i></button>
													<button class="btn btn-light disabled"><i class="fe fe-tag"></i></button>
												</div>
											</div>
											<div class="main-mail-list">
												<div class="main-mail-item unread">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Adrian Monino
														</div>
														<div class="main-mail-subject">
															<strong>Someone who believes in you</strong> <span>cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-attachment">
														<i class="fe fe-paperclip"></i>
													</div>
													<div class="main-mail-date">
														11:30am
													</div>
												</div>
												<div class="main-mail-item unread">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star active">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/3.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Albert Ansing
														</div>
														<div class="main-mail-subject">
															<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
														</div>
													</div>
													<div class="main-mail-date">
														06:50am
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/4.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Carla Guden
														</div>
														<div class="main-mail-subject">
															<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-attachment">
														<i class="fe fe-paperclip"></i>
													</div>
													<div class="main-mail-date">
														Yesterday
													</div>
												</div>
												<div class="main-mail-item unread">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/5.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Reven Galeon
														</div>
														<div class="main-mail-subject">
															<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Yesterday
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/6.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Elisse Tan
														</div>
														<div class="main-mail-subject">
															<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 13
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/7.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Marianne Audrey
														</div>
														<div class="main-mail-subject">
															<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 13
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-avatar">
														J
													</div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Jane Phoebe
														</div>
														<div class="main-mail-subject">
															<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 12
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/8.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Raffy Godinez
														</div>
														<div class="main-mail-subject">
															<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 05
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star active">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/9.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Allan Cadungog
														</div>
														<div class="main-mail-subject">
															<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 04
													</div>
												</div>
												<div class="main-mail-item">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/10.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Alfie Salinas
														</div>
														<div class="main-mail-subject">
															<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 02
													</div>
												</div>
												<div class="main-mail-item ">
													<div class="main-mail-checkbox">
														<label class="ckbox"><input type="checkbox"> <span></span></label>
													</div>
													<div class="main-mail-star">
														<i class="typcn typcn-star"></i>
													</div>
													<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/11.jpg')}}"></div>
													<div class="main-mail-body">
														<div class="main-mail-from">
															Jove Guden
														</div>
														<div class="main-mail-subject">
															<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
														</div>
													</div>
													<div class="main-mail-date">
														Oct 02
													</div>
												</div>
											</div><!-- main-mail-list -->
											<div class="main-mail-header pd-20 mb-0">
												<div class="d-block d-md-flex ml-auto">
													<span>1-50 of 1200</span>
													<div class="btn-group border" role="group">
														<button class="btn btn-light disabled" type="button" data-placement="top" data-toggle="tooltip" title="Newer"><i class="fe fe-chevron-left"></i></button>
														<button class="btn btn-light border-left" type="button" data-placement="top" data-toggle="tooltip" title="Older"><i class="fe fe-chevron-right"></i></button>
													</div>
												</div>
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

			<!-- mail-compose modal -->
			<div class="main-mail-compose">
				<div>
					<div class="container">
						<div class="main-mail-compose-box">
							<div class="main-mail-compose-header">
								<span>New Message</span>
								<nav class="nav">
									<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
								</nav>
							</div>
							<div class="main-mail-compose-body">
								<div class="form-group mb-0">
									<label class="form-label">To</label>
									<div>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="form-group mb-0">
									<label class="form-label">Subject</label>
									<div>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="" rows="12"></textarea>
								</div>
								<div class="form-group mg-b-0">
									<nav class="nav">
										<a class="nav-link" data-toggle="tooltip" href="" title="Formatting"><i class="fas fa-font"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Insert files into Drive"><i class="fab fa-google-drive"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Delete"><i class="far fa-trash-alt"></i></a>
									</nav>
									<button class="btn ripple btn-primary">Send</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End mail-compose modal-->
@endsection
@section('js')
<!-- Check-all-mail js-->
<script src="{{ URL::asset('assets/js/check-all-mail.js')}}"></script>
@endsection