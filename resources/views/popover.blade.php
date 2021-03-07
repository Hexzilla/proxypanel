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
							<h2 class="main-content-title tx-24 mg-b-5">Popover</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Popover</li>
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
							<div class="card custom-card" id="static">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Static Example</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>
									</div>
									<div class="popover-static-demo">
										<div class="row">
											<div class="col-md-6">
												<div class="popover bs-popover-top">
													<div class="arrow"></div>
													<h3 class="popover-header">Popover bottom</h3>
													<div class="popover-body">
														<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6 mg-t-30 mg-md-t-0">
												<div class="popover bs-popover-bottom">
													<div class="arrow"></div>
													<h3 class="popover-header">Popover top</h3>
													<div class="popover-body">
														<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6 mg-t-30">
												<div class="popover bs-popover-left">
													<div class="arrow"></div>
													<h3 class="popover-header">Popover Left</h3>
													<div class="popover-body">
														<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
													</div>
												</div>
											</div>
											<div class="col-md-6 mg-t-30">
												<div class="popover bs-popover-right">
													<div class="arrow"></div>
													<h3 class="popover-header">Popover Right</h3>
													<div class="popover-body">
														<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card custom-card" id="default">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Default Popover</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm tx-center">
												<div class="col-sm-6 col-lg-3">
													<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Popover Top</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Popover Bottom</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn ripple btn-info" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Popover Left</button>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button class="btn ripple btn-danger" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Popover Right</button>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pover1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="default" data-toggle="popover" title="Popover top" type="button">Popover Top</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-popover-color="default" data-toggle="popover" title="Popover bottom" type="button">Popover Bottom</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-info" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-popover-color="default" data-toggle="popover" title="Popover left" type="button">Popover Left</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-danger" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-popover-color="default" data-toggle="popover" title="Popover right" type="button">Popover Right</button>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pover1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="card custom-card" id="color">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Colored Head Popover</h6>
												<p class="text-muted card-sub-title">A demonstration of colored title background of popover available in all four directions.</p>
											</div>
											<div class="text-wrap">
												<div class="example">
													<div class="btn btn-list">
														<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Header Color</button>
														<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-secondary" title="Popover top" type="button">Header Color</button>
													</div>
												</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pover2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-primary" title="Popover top" type="button">Header Color</button>
	<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="head-secondary" title="Popover top" type="button">Header Color</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pover2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card" id="full">
										<div class="card-body">
											<div>
												<h6 class="card-title mb-1">Full Colored Popover</h6>
												<p class="text-muted card-sub-title">A demonstration of colored body background of popover available in all four directions.</p>
											</div>
											<div class="text-wrap">
												<div class="example">
													<div class="btn btn-list">
														<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Full Color</button>
														<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="secondary" title="Popover top" type="button">Full Color</button>
													</div>
												</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pover3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="primary" title="Popover top" type="button">Full Color</button>
	<button class="btn ripple btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-popover-color="secondary" title="Popover top" type="button">Full Color</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pover3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
							<div class="main-content-left-components">
								<div class="card custom-card">
									<div class="card-body component-item">
										<nav class="nav flex-column">
											<a class="nav-link" href="#static">Static Example</a>
											<a class="nav-link" href="#default">Default Popover</a>
											<a class="nav-link" href="#color">Colored Head Popover</a>
											<a class="nav-link" href="#full">Full Colored Popover</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
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
						</div>
					</div>
					<!-- End Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Popover js-->
<script src="{{ URL::asset('assets/js/popover.js')}}"></script>
<!-- Jquery.mCustomScrollbar js-->
<script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Clipboard js-->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js-->
<script src="{{ URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection