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
							<h2 class="main-content-title tx-24 mg-b-5">Pagination</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pagination</li>
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
							<div class="card custom-card overflow-hidden" id="basic">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Basic Pagination</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav>
												<ul class="pagination mb-0">
													<li class="page-item"><a class="page-link" href="#">Previous</a></li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#">Next</a></li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav>
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="#">Previous</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="icon">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pagination with Icons</h6>
										<p class="text-muted card-sub-title">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav>
												<ul class="pagination mb-0">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<span aria-hidden="true">&laquo;</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<span aria-hidden="true">&raquo;</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav>
	<ul class="pagination">
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card overflow-hidden" id="disactive">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Disabled and active Pagination</h6>
										<p class="text-muted card-sub-title">Pagination links are customizable for different circumstances.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav>
												<ul class="pagination mb-0">
													<li class="page-item disabled">
													  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active" aria-current="page">
													  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
													</li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
													  <a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav>
	<ul class="pagination">
		<li class="page-item disabled">
		  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active" aria-current="page">
		  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
		</li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
		  <a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="sizes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pagination Sizes</h6>
										<p class="text-muted card-sub-title">Fancy larger or smaller pagination Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm">
												<div class="col-sm-6 col-md-6">
													<nav>
														<ul class="pagination pagination-lg mb-0">
															<li class="page-item active" aria-current="page">
																<span class="page-link">1</span>
															</li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item"><a class="page-link" href="#">3</a></li>
														</ul>
													</nav>
												</div>
												<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
													<nav>
														<ul class="pagination pagination-sm mb-0">
															<li class="page-item active" aria-current="page">
															  <span class="page-link">1</span>
															</li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item"><a class="page-link" href="#">3</a></li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-sm-6 col-md-6">
		<nav>
			<ul class="pagination pagination-lg">
				<li class="page-item active" aria-current="page">
					<span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
		<nav>
			<ul class="pagination pagination-sm">
				<li class="page-item active" aria-current="page">
				  <span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card overflow-hidden" id="align">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alignment Pagination</h6>
										<p class="text-muted card-sub-title">Change the alignment of pagination components.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</nav>
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</nav>
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end mb-0">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination5"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="Page navigation example">
	<ul class="pagination">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="circled">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Circled Pagination</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination pagination-circled mb-0">
												<li class="page-item">
													<a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">1</a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination6"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination pagination-circled">
	<li class="page-item">
		<a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a>
	</li>
	<li class="page-item active">
		<a class="page-link" href="#">1</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#">2</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#">3</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination6"><i class="fa fa-clipboard"></i></div>
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
											<a class="nav-link" href="#basic">Basic Pagination</a>
											<a class="nav-link" href="#icon">Pagination with Icons</a>
											<a class="nav-link" href="#disactive">Disabled and active Pagination</a>
											<a class="nav-link" href="#sizes">Pagination Sizes</a>
											<a class="nav-link" href="#align">Alignment Pagination</a>
											<a class="nav-link" href="#circled">Circled Pagination</a>
										</nav>
									</div>
								</div>
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