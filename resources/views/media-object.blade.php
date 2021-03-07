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
							<h2 class="main-content-title tx-24 mg-b-5">Media Objects</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Media Objects</li>
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
						<div class="col-xl-9 col-lg-12">
							<div class="card custom-card" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Example</h6>
										<p class="text-muted card-sub-title">The media object helps build complex and repetitive components where some media is positioned alongside content that doesn’t wrap around said media. Plus, it does this with only two required classes thanks to flexbox.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="img" class="wd-100p wd-sm-200  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/1.jpg')}}">
												<div class="media-body">
													<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="img" class="wd-100p wd-sm-200  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/1.jpg')}}">
	<div class="media-body">
		<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#media1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="nesting">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Nesting</h6>
										<p class="text-muted card-sub-title">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code>.media</code> within the <code>.media-body</code> of a parent media object.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/2.jpg')}}">
												<div class="media-body">
													<h5>Media heading</h5>
													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
													<div class="media d-block d-sm-flex mg-t-25">
														<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/3.jpg')}}">
														<div class="media-body">
															<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/2.jpg')}}">
	<div class="media-body">
		<h5 class="tx-inverse">Media heading</h5>
		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
		<div class="media d-block d-sm-flex mg-t-25">
			<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/3.jpg')}}">
			<div class="media-body">
				<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#media2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="align">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alignment</h6>
										<p class="text-muted card-sub-title">Media in a media object can be aligned with flexbox utilities to the top (default), middle, or end of your .media-body content.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/media/4.jpg')}}">
												<div class="media-body">
													<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/media/4.jpg')}}">
	<div class="media-body">
		<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#media3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="order">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Order</h6>
										<p class="text-muted card-sub-title">Change the order of content in media objects by modifying the HTML itself, or by adding some custom flexbox CSS to set the order property (to an integer of your choosing).</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="media d-block d-sm-flex">
											<div class="media-body">
												<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
											</div><img alt="img" class="wd-100p wd-sm-200  mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/media/5.jpg')}}"></div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
<div class="media-body">
	<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
</div><img alt="img" class="wd-100p wd-sm-200  mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/media/5.jpg')}}"></div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#media4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="list">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Media List</h6>
										<p class="text-muted card-sub-title">Because the media object has so few structural requirements, you can also use these classes on list HTML elements.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="list-unstyled">
												<li class="media d-block d-sm-flex">
													<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/6.jpg')}}">
													<div class="media-body">
														<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/7.jpg')}}">
													<div class="media-body">
														<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/8.jpg')}}">
													<div class="media-body">
														<h5>Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													</div>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media5"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-unstyled">
	<li class="media d-block d-sm-flex">
		<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/6.jpg')}}">
		<div class="media-body">
			<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/7.jpg')}}">
		<div class="media-body">
			<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/media/8.jpg')}}">
		<div class="media-body">
			<h5 class="tx-inverse">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		</div>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#media5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#basic">Basic Example</a>
											<a class="nav-link" href="#nesting">Nesting</a>
											<a class="nav-link" href="#align">Alignment</a>
											<a class="nav-link" href="#order">Order</a>
											<a class="nav-link" href="#list">Media List</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="-circle" src="{{URL::asset('assets/img/users/5.jpg')}}">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Reynante</h5>
											<p class="mb-1 tx-inverse">Web Developer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="-circle" src="{{URL::asset('assets/img/users/4.jpg')}}">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Joyce Chua</h5>
											<p class="mb-1 tx-inverse">Team Leader</p>
											<span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-secondary btn-sm mt-3">View Profile</a>
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
<!-- Jquery.mCustomScrollbar js-->
<script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Clipboard js-->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js-->
<script src="{{ URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection