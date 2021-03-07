@extends('layouts.master')
@section('css')
<!---Lightslider css-->
<link href="{{ URL::asset('assets/plugins/lightslider/css/lightslider.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Chat</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chat</li>
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
						<div class="col-sm-12 col-md-5 col-xl-4">
							<div class="card custom-card">
								<div class="main-content-app pt-0">
									<div class="main-content-left main-content-left-chat">
										<div class="card-body">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search ...">
												<span class="input-group-append">
													<button class="btn ripple btn-primary" type="button">Search</button>
												</span>
											</div>
										</div>
										<nav class="nav main-nav-line main-nav-line-chat card-body">
											<a class="nav-link active" data-toggle="tab" href="">Recent Chat</a>
											<a class="nav-link" data-toggle="tab" href="">Calls</a>
											<a class="nav-link" data-toggle="tab" href="">Contacts</a>
										</nav>
										<div class="main-chat-list" id="ChatList">
											<div class="media">
												<div class="main-img-user online">
													<img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}">
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Jacob	Henderson</span> <span>2 hours</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user">
													<img alt="avatar" src="{{URL::asset('assets/img/users/3.jpg')}}">
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Maria	Brown</span> <span>3 hours</span>
													</div>
													<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media selected">
												<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/4.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Harry	Blake</span> <span>10 hours</span>
													</div>
													<p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/5.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Ella Hart</span> <span>2 days</span>
													</div>
													<p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/6.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Keith	Forsyth</span> <span>2 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user">
													<img alt="avatar" src="{{URL::asset('assets/img/users/7.jpg')}}">
												</div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Grace	Lee</span> <span>3 days</span>
													</div>
													<p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/8.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Anthony Clark</span> <span>4 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/9.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Andrea Baker</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/10.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Steven Pullman</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/11.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Emily	James</span> <span>5 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/12.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Jake Butler</span> <span>6 days</span>
													</div>
													<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>David	Parr</span> <span>6 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="avatar" src="{{URL::asset('assets/img/users/3.jpg')}}"></div>
												<div class="media-body">
													<div class="media-contact-name">
														<span>Diane	Nash</span> <span>7 days</span>
													</div>
													<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
												</div>
											</div>
										</div><!-- main-chat-list -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-7 col-xl-8">
							<div class="card custom-card">
								<div class="main-content-app pt-0">
									<div class="main-content-body main-content-body-chat">
										<div class="main-chat-header pt-3">
											<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg')}}"></div>
											<div class="main-chat-msg-name">
												<h6>Sonia Taylor</h6>
												<span class="dot-label bg-success"></span><small class="mr-3">online</small>
											</div>
											<nav class="nav">
												<a class="nav-link" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right shadow">
													<a class="dropdown-item" href="#"><i class="fe fe-phone-call mr-1"></i> Phone Call</a>
													<a class="dropdown-item" href="#"><i class="fe fe-video mr-1"></i> Video Call</a>
													<a class="dropdown-item" href="#"><i class="fe fe-user-plus mr-1"></i> Add Contact</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-1"></i> Delete</a>
												</div>
												<a class="nav-link" data-toggle="tooltip" href="" title="Phone Call"><i class="fe fe-phone-call"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Video Call"><i class="fe fe-video"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Add Contact"><i class="fe fe-user-plus"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Delete"><i class="fe fe-trash-2"></i></a>
											</nav>
										</div><!-- main-chat-header -->
										<div class="main-chat-body" id="ChatBody">
											<div class="content-inner">
												<label class="main-chat-time"><span>3 days ago</span></label>
												<div class="media flex-row-reverse">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
														</div>
														<div class="main-msg-wrapper">
															rhoncus ut, imperdiet a, venenatis vitae, justo...
														</div>
														<div>
															<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
														</div>
														<div>
															<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												<div class="media flex-row-reverse">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Nullam dictum felis eu pede mollis pretium
														</div>
														<div>
															<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div><label class="main-chat-time"><span>Yesterday</span></label>
												<div class="media">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
														</div>
														<div>
															<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												<div class="media flex-row-reverse">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
														</div>
														<div class="main-msg-wrapper">
															Nullam dictum felis eu pede mollis pretium
														</div>
														<div>
															<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div><label class="main-chat-time"><span>Today</span></label>
												<div class="media">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/1.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Maecenas tempus, tellus eget condimentum rhoncus
														</div>
														<div class="pd-0">
															<img alt="avatar" class="wd-150 mb-1" src="{{URL::asset('assets/img/media/3.jpg')}}">
															<img alt="avatar" class="wd-150 mb-1" src="{{URL::asset('assets/img/media/4.jpg')}}">
															<img alt="avatar" class="wd-150 mb-1" src="{{URL::asset('assets/img/media/5.jpg')}}">
														</div>
														<div>
															<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
												<div class="media flex-row-reverse">
													<div class="main-img-user online"><img alt="avatar" src="{{URL::asset('assets/img/users/2.jpg')}}"></div>
													<div class="media-body">
														<div class="main-msg-wrapper">
															Maecenas tempus, tellus eget condimentum rhoncus
														</div>
														<div class="main-msg-wrapper">
															Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
														</div>
														<div>
															<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-chat-footer">
											<nav class="nav">
												<a class="nav-link" data-toggle="tooltip" href="" title="Add Photo"><i class="fe fe-image"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Attach a File"><i class="fe fe-paperclip"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Emoji"><i class="far fa-smile"></i></a>
												<a class="nav-link" data-toggle="tooltip" href="" title="Record Voice"><i class="fe fe-mic"></i></a>
											</nav>
											<input class="form-control" placeholder="Type your message here..." type="text">
											<a class="main-msg-send" href=""><i class="far fa-paper-plane"></i></a>
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
<!-- Check-all-mail js-->
<script src="{{ URL::asset('assets/js/check-all-mail.js')}}"></script>
<!-- Chat js-->
<script src="{{ URL::asset('assets/js/chat.js')}}"></script>
@endsection