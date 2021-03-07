@extends('layouts.master')
@section('css')
<!---Prism css-->
<link href="{{ URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!---Jquery.mCustomScrollbar css-->
<link href="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
<!---Darggable css-->
<link href="{{ URL::asset('assets/plugins/darggable/jquery-ui-darggable.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Darggable Cards</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Darggable Cards</li>
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
					<div class="sortable">
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<div class="card custom-card card-body card-draggable">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="img-fluid draggable-img draggable-img" src="{{URL::asset('assets/img/media/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer">
										January, 20, 2017 4:30am
									</div>
								</div>
								<div class="card custom-card  bg-primary tx-white card-draggable">
									<div class="card-body">
										<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12">
								<div class="card custom-card card-body card-draggable bg-secondary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
									</div>
								</div>
								<div class="card custom-card card-body tx-white-8 bg-gray-800 card-draggable">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<img alt="Image" class="img-fluid draggable-img " src="{{URL::asset('assets/img/media/3.jpg')}}">
								</div>
							</div>
							<div class="col-lg-4 col-sm-12">
								<div class="card custom-card card-body card-draggable bg-primary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="card-img img-fluid draggable-img" src="{{URL::asset('assets/img/media/6.jpg')}}">
									<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
										<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
										<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<div class="card-header tx-medium">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
								<div class="card custom-card card-draggable">
									<img alt="Image" class="img-fluid draggable-img draggable-img" src="{{URL::asset('assets/img/media/1.jpg')}}">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
						</div><!-- Row -->
					</div><!-- Row -->

				</div>
			</div>
			<!-- End Main Content-->
@endsection
@section('js')
<!-- Jquery.mCustomScrollbar js-->
<script src="{{ URL::asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!---Darggable js-->
<script src="{{ URL::asset('assets/plugins/darggable/jquery-ui-darggable.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/darggable/darggable.js')}}"></script>
<!-- Clipboard js-->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js-->
<script src="{{ URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection