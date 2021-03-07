@extends('layouts.master')
@section('css')
<!---Line-icons css-->
<link href="{{ URL::asset('assets/plugins/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Icons</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Icons</li>
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
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">FontAwesome5 Free Icons</h6>
										<p class="text-muted mb-2 card-sub-title">The world’s most popular and easiest to use icon set just got an upgrade. More icons, More styles, More options .<span class="text-dark">See more FontAwesome icons at <a href="https://fontawesome.com/icons" target="_blank">FontAwesome Icons.</a></span></p>
										<p><code>&lt;i class="far fa-ICON_NAME"&gt;&lt;/i&gt;</code>,  <code>&lt;i class="fab fa-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="far fa-address-book"></i></li>
											<li class="icons-list-item"><i class="far fa-address-card"></i></li>
											<li class="icons-list-item"><i class="far fa-arrow-alt-circle-down"></i></li>
											<li class="icons-list-item"><i class="far fa-arrow-alt-circle-left"></i></li>
											<li class="icons-list-item"><i class="far fa-arrow-alt-circle-up"></i></li>
											<li class="icons-list-item"><i class="far fa-arrow-alt-circle-right"></i></li>
											<li class="icons-list-item"><i class="fas fa-ban"></i></li>
											<li class="icons-list-item"><i class="far fa-bell"></i></li>
											<li class="icons-list-item"><i class="far fa-bell-slash"></i></li>
											<li class="icons-list-item"><i class="far fa-bookmark"></i></li>
											<li class="icons-list-item"><i class="far fa-calendar"></i></li>
											<li class="icons-list-item"><i class="far fa-calendar-check"></i></li>
											<li class="icons-list-item"><i class="far fa-check-circle"></i></li>
											<li class="icons-list-item"><i class="far fa-clock"></i></li>
											<li class="icons-list-item"><i class="far fa-clone"></i></li>
											<li class="icons-list-item"><i class="far fa-comment"></i></li>
											<li class="icons-list-item"><i class="far fa-compass"></i></li>
											<li class="icons-list-item"><i class="far fa-envelope"></i></li>
											<li class="icons-list-item"><i class="fas fa-envelope-open-text"></i></li>
											<li class="icons-list-item"><i class="far fa-eye"></i></li>
											<li class="icons-list-item"><i class="far fa-eye-slash"></i></li>
											<li class="icons-list-item"><i class="far fa-file-alt"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Ionicons Icons</h6>
										<p class="text-muted mb-2 card-sub-title">Premium designed icons for use in web, iOS, Android, and desktop apps. Support for SVG and web font.<span class="text-dark">See more Ionicons icons at <a href="https://ionicons.com" target="_blank">Ionicons</a></span></p>
										<p><code>&lt;i class="icon ion-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="icon ion-md-alarm"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-chatboxes"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-copy"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-cube"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-filing"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-eye"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-globe"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-images"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-laptop"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-paper"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-paper-plane"></i></li>
											<li class="icons-list-item"><i class="icon ion-md-pricetags"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-settings"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-stats"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-share-alt"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-rocket"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-rainy"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-print"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-pie"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-mic"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-locate"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-list-box"></i></li>
											<li class="icons-list-item"><i class="icon ion-ios-home"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Line Awesome</h6>
										<p class="text-muted mb-2 card-sub-title">Replace Font Awesome with modern line icons with a single line of code.<span class="text-dark">See more Line Awesome icons at <a href="https://icons8.com/line-awesome" target="_blank">Line Awesome</a></span></p>
										<p><code>&lt;i class="la la-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="la la-archive"></i></li>
											<li class="icons-list-item"><i class="la la-bar-chart"></i></li>
											<li class="icons-list-item"><i class="la la-bell"></i></li>
											<li class="icons-list-item"><i class="la la-bug"></i></li>
											<li class="icons-list-item"><i class="la la-calendar"></i></li>
											<li class="icons-list-item"><i class="la la-camera"></i></li>
											<li class="icons-list-item"><i class="la la-cog"></i></li>
											<li class="icons-list-item"><i class="la la-cube"></i></li>
											<li class="icons-list-item"><i class="la la-envelope"></i></li>
											<li class="icons-list-item"><i class="la la-film"></i></li>
											<li class="icons-list-item"><i class="la la-folder"></i></li>
											<li class="icons-list-item"><i class="la la-gift"></i></li>
											<li class="icons-list-item"><i class="la la-home"></i></li>
											<li class="icons-list-item"><i class="la la-inbox"></i></li>
											<li class="icons-list-item"><i class="la la-image"></i></li>
											<li class="icons-list-item"><i class="la la-life-buoy"></i></li>
											<li class="icons-list-item"><i class="la la-lock"></i></li>
											<li class="icons-list-item"><i class="la la-microphone"></i></li>
											<li class="icons-list-item"><i class="la la-phone"></i></li>
											<li class="icons-list-item"><i class="la la-pie-chart"></i></li>
											<li class="icons-list-item"><i class="la la-rocket"></i></li>
											<li class="icons-list-item"><i class="la la-ship"></i></li>
											<li class="icons-list-item"><i class="la la-sticky-note"></i></li>
											<li class="icons-list-item"><i class="la la-tags"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Typicons Icons</h6>
										<p class="text-muted mb-2 card-sub-title">Typicons are free-to-use vector icons embedded in a webfont for easy use in any UI, whether it be on the web or in a native app.<span class="text-dark">See more Typicons icons at <a href="https://www.s-ings.com/typicons/" target="_blank">Typicons Icons</a></span></p>
										<p><code>&lt;i class="typcn typcn-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="typcn typcn-archive"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-arrow-back-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-arrow-right-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-bell"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-book"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-bookmark"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-briefcase"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-calendar-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-camera-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chart-pie-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-coffee"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-add"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-delete"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-text"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-edit"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-export-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flash-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder-open"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-group-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-mail"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-message"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-shopping-cart"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Feather Icons</h6>
										<p class="text-muted mb-2 card-sub-title">Simply beautiful open source icons.<span class="text-dark">See more feather icons at <a href="https://feathericons.com/" target="_blank">Feather Icons</a></span></p>
										<p><code>&lt;i class="fe fe-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="fe fe-airplay"></i></li>
											<li class="icons-list-item"><i class="fe fe-alert-triangle"></i></li>
											<li class="icons-list-item"><i class="fe fe-align-left"></i></li>
											<li class="icons-list-item"><i class="fe fe-align-right"></i></li>
											<li class="icons-list-item"><i class="fe fe-anchor"></i></li>
											<li class="icons-list-item"><i class="fe fe-aperture"></i></li>
											<li class="icons-list-item"><i class="fe fe-at-sign"></i></li>
											<li class="icons-list-item"><i class="fe fe-award"></i></li>
											<li class="icons-list-item"><i class="fe fe-bell"></i></li>
											<li class="icons-list-item"><i class="fe fe-bell-off"></i></li>
											<li class="icons-list-item"><i class="fe fe-book"></i></li>
											<li class="icons-list-item"><i class="fe fe-book-open"></i></li>
											<li class="icons-list-item"><i class="fe fe-box"></i></li>
											<li class="icons-list-item"><i class="fe fe-briefcase"></i></li>
											<li class="icons-list-item"><i class="fe fe-calendar"></i></li>
											<li class="icons-list-item"><i class="fe fe-camera"></i></li>
											<li class="icons-list-item"><i class="fe fe-cast"></i></li>
											<li class="icons-list-item"><i class="fe fe-chrome"></i></li>
											<li class="icons-list-item"><i class="fe fe-clipboard"></i></li>
											<li class="icons-list-item"><i class="fe fe-clock"></i></li>
											<li class="icons-list-item"><i class="fe fe-codepen"></i></li>
											<li class="icons-list-item"><i class="fe fe-compass"></i></li>
											<li class="icons-list-item"><i class="fe fe-cpu"></i></li>
											<li class="icons-list-item"><i class="fe fe-credit-card"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Flags Icons</h6>
										<p class="text-muted mb-2 card-sub-title"><span class="text-dark">See more flag icons <a href="icons.html" target="#flags">Flag Icons</a></span></p>
										<p><code>&lt;i class="flag-icon flag-icon-ICON_NAME"&gt;&lt;/i&gt;</code></p>
									</div>
									<div class="main-icon-group main-icon-list">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="flag-icon flag-icon-us" data-toggle="tooltip" title="flag-icon flag-icon-us"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ad" data-toggle="tooltip" title="flag-icon flag-icon-ad"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ae" data-toggle="tooltip" title="flag-icon flag-icon-ae"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-af" data-toggle="tooltip" title="flag-icon flag-icon-af"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ag" data-toggle="tooltip" title="flag-icon flag-icon-ag"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ai" data-toggle="tooltip" title="flag-icon flag-icon-ai"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-al" data-toggle="tooltip" title="flag-icon flag-icon-al"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-am" data-toggle="tooltip" title="flag-icon flag-icon-am"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ao" data-toggle="tooltip" title="flag-icon flag-icon-ao"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-aq" data-toggle="tooltip" title="flag-icon flag-icon-aq"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ar" data-toggle="tooltip" title="flag-icon flag-icon-ar"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-as" data-toggle="tooltip" title="flag-icon flag-icon-as"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-at" data-toggle="tooltip" title="flag-icon flag-icon-at"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-au" data-toggle="tooltip" title="flag-icon flag-icon-au"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-aw" data-toggle="tooltip" title="flag-icon flag-icon-aw"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ax" data-toggle="tooltip" title="flag-icon flag-icon-ax"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-az" data-toggle="tooltip" title="flag-icon flag-icon-az"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ba" data-toggle="tooltip" title="flag-icon flag-icon-ba"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bb" data-toggle="tooltip" title="flag-icon flag-icon-bb"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bd" data-toggle="tooltip" title="flag-icon flag-icon-bd"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-be" data-toggle="tooltip" title="flag-icon flag-icon-be"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bf" data-toggle="tooltip" title="flag-icon flag-icon-bf"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bg" data-toggle="tooltip" title="flag-icon flag-icon-bg"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bh" data-toggle="tooltip" title="flag-icon flag-icon-bh"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bi" data-toggle="tooltip" title="flag-icon flag-icon-bi"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bj" data-toggle="tooltip" title="flag-icon flag-icon-bj"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bl" data-toggle="tooltip" title="flag-icon flag-icon-bl"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bm" data-toggle="tooltip" title="flag-icon flag-icon-bm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bn" data-toggle="tooltip" title="flag-icon flag-icon-bn"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bo" data-toggle="tooltip" title="flag-icon flag-icon-bo"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bq" data-toggle="tooltip" title="flag-icon flag-icon-bq"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-br" data-toggle="tooltip" title="flag-icon flag-icon-br"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bs" data-toggle="tooltip" title="flag-icon flag-icon-bs"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bt" data-toggle="tooltip" title="flag-icon flag-icon-bt"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bv" data-toggle="tooltip" title="flag-icon flag-icon-bv"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bw" data-toggle="tooltip" title="flag-icon flag-icon-bw"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-by" data-toggle="tooltip" title="flag-icon flag-icon-by"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-bz" data-toggle="tooltip" title="flag-icon flag-icon-bz"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ca" data-toggle="tooltip" title="flag-icon flag-icon-ca"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cc" data-toggle="tooltip" title="flag-icon flag-icon-cc"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cd" data-toggle="tooltip" title="flag-icon flag-icon-cd"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cf" data-toggle="tooltip" title="flag-icon flag-icon-cf"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cg" data-toggle="tooltip" title="flag-icon flag-icon-cg"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ch" data-toggle="tooltip" title="flag-icon flag-icon-ch"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ci" data-toggle="tooltip" title="flag-icon flag-icon-ci"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ck" data-toggle="tooltip" title="flag-icon flag-icon-ck"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cl" data-toggle="tooltip" title="flag-icon flag-icon-cl"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cm" data-toggle="tooltip" title="flag-icon flag-icon-cm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cn" data-toggle="tooltip" title="flag-icon flag-icon-cn"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-co" data-toggle="tooltip" title="flag-icon flag-icon-co"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cr" data-toggle="tooltip" title="flag-icon flag-icon-cr"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cu" data-toggle="tooltip" title="flag-icon flag-icon-cu"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cv" data-toggle="tooltip" title="flag-icon flag-icon-cv"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cw" data-toggle="tooltip" title="flag-icon flag-icon-cw"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cx" data-toggle="tooltip" title="flag-icon flag-icon-cx"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cy" data-toggle="tooltip" title="flag-icon flag-icon-cy"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-cz" data-toggle="tooltip" title="flag-icon flag-icon-cz"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-de" data-toggle="tooltip" title="flag-icon flag-icon-de"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-dj" data-toggle="tooltip" title="flag-icon flag-icon-dj"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-dk" data-toggle="tooltip" title="flag-icon flag-icon-dk"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-dm" data-toggle="tooltip" title="flag-icon flag-icon-dm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-do" data-toggle="tooltip" title="flag-icon flag-icon-do"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-dz" data-toggle="tooltip" title="flag-icon flag-icon-dz"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ec" data-toggle="tooltip" title="flag-icon flag-icon-ec"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ee" data-toggle="tooltip" title="flag-icon flag-icon-ee"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-eg" data-toggle="tooltip" title="flag-icon flag-icon-eg"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-eh" data-toggle="tooltip" title="flag-icon flag-icon-eh"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-er" data-toggle="tooltip" title="flag-icon flag-icon-er"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-es" data-toggle="tooltip" title="flag-icon flag-icon-es"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-et" data-toggle="tooltip" title="flag-icon flag-icon-et"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fi" data-toggle="tooltip" title="flag-icon flag-icon-fi"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fj" data-toggle="tooltip" title="flag-icon flag-icon-fj"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fk" data-toggle="tooltip" title="flag-icon flag-icon-fk"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fm" data-toggle="tooltip" title="flag-icon flag-icon-fm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fo" data-toggle="tooltip" title="flag-icon flag-icon-fo"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-fr" data-toggle="tooltip" title="flag-icon flag-icon-fr"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ga" data-toggle="tooltip" title="flag-icon flag-icon-ga"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gb" data-toggle="tooltip" title="flag-icon flag-icon-gb"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gd" data-toggle="tooltip" title="flag-icon flag-icon-gd"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ge" data-toggle="tooltip" title="flag-icon flag-icon-ge"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gf" data-toggle="tooltip" title="flag-icon flag-icon-gf"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gg" data-toggle="tooltip" title="flag-icon flag-icon-gg"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gh" data-toggle="tooltip" title="flag-icon flag-icon-gh"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gi" data-toggle="tooltip" title="flag-icon flag-icon-gi"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gl" data-toggle="tooltip" title="flag-icon flag-icon-gl"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gm" data-toggle="tooltip" title="flag-icon flag-icon-gm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gn" data-toggle="tooltip" title="flag-icon flag-icon-gn"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gp" data-toggle="tooltip" title="flag-icon flag-icon-gp"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gq" data-toggle="tooltip" title="flag-icon flag-icon-gq"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gr" data-toggle="tooltip" title="flag-icon flag-icon-gr"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gs" data-toggle="tooltip" title="flag-icon flag-icon-gs"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gt" data-toggle="tooltip" title="flag-icon flag-icon-gt"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gu" data-toggle="tooltip" title="flag-icon flag-icon-gu"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gw" data-toggle="tooltip" title="flag-icon flag-icon-gw"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-gy" data-toggle="tooltip" title="flag-icon flag-icon-gy"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-hk" data-toggle="tooltip" title="flag-icon flag-icon-hk"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-hm" data-toggle="tooltip" title="flag-icon flag-icon-hm"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-hn" data-toggle="tooltip" title="flag-icon flag-icon-hn"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-hr" data-toggle="tooltip" title="flag-icon flag-icon-hr"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ht" data-toggle="tooltip" title="flag-icon flag-icon-ht"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-hu" data-toggle="tooltip" title="flag-icon flag-icon-hu"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-id" data-toggle="tooltip" title="flag-icon flag-icon-id"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-ie" data-toggle="tooltip" title="flag-icon flag-icon-ie"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-il" data-toggle="tooltip" title="flag-icon flag-icon-il"></i></li>
											<li class="icons-list-item"><i class="flag-icon flag-icon-in" data-toggle="tooltip" title="flag-icon flag-icon-in"></i></li>
										</ul>
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
@endsection