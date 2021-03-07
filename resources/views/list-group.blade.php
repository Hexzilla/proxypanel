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
							<h2 class="main-content-title tx-24 mg-b-5">List-Group</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">List-Group</li>
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
										<p class="text-muted card-sub-title">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
													<li class="list-group-item">Cras justo odio</li>
													<li class="list-group-item">Dapibus ac facilisis in</li>
													<li class="list-group-item">Morbi leo risus</li>
													<li class="list-group-item">Porta ac consectetur ac</li>
													<li class="list-group-item">Vestibulum at eros</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup1"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="active">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Active Item</h6>
										<p class="text-muted card-sub-title">Add active class to a <code>.list-group-item</code> to indicate the current active selection.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
													<li class="list-group-item">Cras justo odio</li>
													<li class="list-group-item active">Dapibus ac facilisis in</li>
													<li class="list-group-item">Morbi leo risus</li>
													<li class="list-group-item">Porta ac consectetur ac</li>
													<li class="list-group-item">Vestibulum at eros</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup2"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item active">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="disabled">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Disabled Item</h6>
										<p class="text-muted card-sub-title">Add disabled class to a <code>.list-group-item</code> to indicate the current active selection.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
													<li class="list-group-item">Cras justo odio</li>
													<li class="list-group-item disabled">Dapibus ac facilisis in</li>
													<li class="list-group-item">Morbi leo risus</li>
													<li class="list-group-item">Porta ac consectetur ac</li>
													<li class="list-group-item">Vestibulum at eros</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup3"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item disabled">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="link">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Link and Buttons</h6>
										<p class="text-muted card-sub-title">Use link tag or button to create actionable list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<div class="list-group">
													<a class="list-group-item list-group-item-action active" href="#">Cras justo odio</a>
													<a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
													<a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a>
													<a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
													<a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="list-group">
	<a class="list-group-item list-group-item-action active" href="#">Cras justo odio</a>
	<a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
	<a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a>
	<a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
	<a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="image">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Using Avatars</h6>
										<p class="text-muted card-sub-title">A list that contain an image with the help of utility classes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
													<li class="list-group-item d-flex align-items-center">
														<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/2.jpg')}}">
														<div>
															<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
														</div>
													</li>
													<li class="list-group-item d-flex align-items-center">
														<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/3.jpg')}}">
														<div>
															<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
														</div>
													</li>
													<li class="list-group-item d-flex align-items-center">
														<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/4.jpg')}}">
														<div>
															<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup5"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group wd-md-50p">
	<li class="list-group-item d-flex align-items-center">
		<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/2.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/3.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="avatar" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/users/4.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="flush">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Flush List</h6>
										<p class="text-muted card-sub-title">Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group list-group-flush">
												  <li class="list-group-item">Cras justo odio</li>
												  <li class="list-group-item">Dapibus ac facilisis in</li>
												  <li class="list-group-item">Morbi leo risus</li>
												  <li class="list-group-item">Porta ac consectetur ac</li>
												  <li class="list-group-item">Vestibulum at eros</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup6"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group list-group-flush">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card overflow-hidden" id="hor">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizontal List</h6>
										<p class="text-muted card-sub-title">Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across all breakpoints. </p>
									</div>
									<div class="text-wrap overflow-hidden">
										<div class="example">
											<div class="">
												<ul class="list-group list-group-horizontal">
												  <li class="list-group-item">Cras justo odio</li>
												  <li class="list-group-item">Dapibus ac facilisis in</li>
												  <li class="list-group-item">Morbi leo risus</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup7"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group list-group-horizontal">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="context">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Contextual classes</h6>
										<p class="text-muted card-sub-title">Use contextual classes to style list items with a stateful background and color.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
												  <li class="list-group-item">Dapibus ac facilisis in</li>
												  <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
												  <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
												  <li class="list-group-item list-group-item-success">A simple success list group item</li>
												  <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
												  <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
												  <li class="list-group-item list-group-item-info">A simple info list group item</li>
												  <li class="list-group-item list-group-item-light">A simple light list group item</li>
												  <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup8"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
  <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
  <li class="list-group-item list-group-item-success">A simple success list group item</li>
  <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
  <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
  <li class="list-group-item list-group-item-info">A simple info list group item</li>
  <li class="list-group-item list-group-item-light">A simple light list group item</li>
  <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="badge">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">With badges</h6>
										<p class="text-muted card-sub-title">Add badges to any list group item to show unread counts, activity, and more with the help of some.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<ul class="list-group">
												  <li class="list-group-item d-flex justify-content-between align-items-center">
													Cras justo odio
													<span class="badge badge-primary badge-pill">14</span>
												  </li>
												  <li class="list-group-item d-flex justify-content-between align-items-center">
													Dapibus ac facilisis in
													<span class="badge badge-primary badge-pill">2</span>
												  </li>
												  <li class="list-group-item d-flex justify-content-between align-items-center">
													Morbi leo risus
													<span class="badge badge-primary badge-pill">1</span>
												  </li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup9"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
	Cras justo odio
	<span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
	Dapibus ac facilisis in
	<span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
	Morbi leo risus
	<span class="badge badge-primary badge-pill">1</span>
  </li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="content">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Custom content</h6>
										<p class="text-muted card-sub-title">Add badges to any list group item to show unread counts, activity, and more with the help of some.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="">
												<div class="list-group">
												  <a href="#" class="list-group-item list-group-item-action active">
													<div class="d-flex w-100 justify-content-between">
													  <h5 class="mb-1">List group item heading</h5>
													  <small>3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small>Donec id elit non mi porta.</small>
												  </a>
												  <a href="#" class="list-group-item list-group-item-action">
													<div class="d-flex w-100 justify-content-between">
													  <h5 class="mb-1">List group item heading</h5>
													  <small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												  </a>
												  <a href="#" class="list-group-item list-group-item-action">
													<div class="d-flex w-100 justify-content-between">
													  <h5 class="mb-1">List group item heading</h5>
													  <small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												  </a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="listgroup10"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
	<div class="d-flex w-100 justify-content-between">
	  <h5 class="mb-1">List group item heading</h5>
	  <small>3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
	<div class="d-flex w-100 justify-content-between">
	  <h5 class="mb-1">List group item heading</h5>
	  <small class="text-muted">3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
	<div class="d-flex w-100 justify-content-between">
	  <h5 class="mb-1">List group item heading</h5>
	  <small class="text-muted">3 days ago</small>
	</div>
	<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	<small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#listgroup10"><i class="fa fa-clipboard"></i></div>
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
											<a class="nav-link" href="#active">Active Item</a>
											<a class="nav-link" href="#disabled">Disabled Item</a>
											<a class="nav-link" href="#link">Link and Buttons</a>
											<a class="nav-link" href="#image">Using Image</a>
											<a class="nav-link" href="#flush">Flush List</a>
											<a class="nav-link" href="#hor">Horizontal List</a>
											<a class="nav-link" href="#context">Contextual classes</a>
											<a class="nav-link" href="#badge">With badges</a>
											<a class="nav-link" href="#content">Custom content</a>
										</nav>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h6 class="card-title mb-0">Project Status</h6>
									</div>
									<div class="">
										<div class="list d-flex align-items-center p-3">
											<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Planning</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Desiging</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#eb6f33", "#77778e33"], "innerRadius": 14, "radius": 20 }'>4/6</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Development</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-spinner mr-2"></i>76% Progress</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list d-flex align-items-center  p-3 border-top">
											<span class="peity-donut" data-peity='{ "fill": ["#ff473d", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1/5</span>
											<div class="wrappe ml-3">
												<h6 class="mb-1">Project Testing</h6>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<span class="mb-0 text-muted"><i class="fas fa-info-circle mr-2"></i>Waiting</span>
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
@endsection
@section('js')
<!-- Jquery.mCustomScrollbar js-->
<script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Peity js-->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/widgets.js')}}"></script>
<!-- Clipboard js-->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js-->
<script src="{{ URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection