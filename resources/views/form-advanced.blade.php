@extends('layouts.master')
@section('css')
<!---Select2 css-->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Daterangepicker css-->
<link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<!---Fileupload css-->
<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet">
<!---Fancy uploader css-->
<link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet">
<!--Sumoselect css-->
<link href="{{ URL::asset('assets/plugins/sumoselect/sumoselect.css')}}" rel="stylesheet">
<!--TelephoneInput css-->
<link href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Advanced Forms</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
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
										<h6 class="card-title mb-1">Telephone Input</h6>
										<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
									</div>
									<div class="input-group">
										<input class="form-control" id="phone" name="phone" type="tel">
										<span class="input-group-btn">
											<button class="btn ripple btn-primary" type="button">Submit</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Select2</h6>
										<p class="text-muted card-sub-title">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
									</div>
									<div class="row row-sm mg-b-20">
										<div class="col-lg-4">
											<p class="mg-b-10">Single Select</p>
											<select class="form-control select2-no-search">
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<p class="mg-b-10">Single Select with Search</p>
											<select class="form-control select2">
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div><!-- col-4 -->
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<p class="mg-b-10">Single Select (Disabled)</p>
											<select class="form-control select2" disabled>
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div><!-- col-4 -->
									</div>
									<div class="row row-sm">
										<div class="col-lg-4">
											<p class="mg-b-10">Multiple Select</p>
											<select class="form-control select2" multiple="multiple">
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div>
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<p class="mg-b-10">Multiple Select with Pre-Filled Input</p>
											<select class="form-control select2" multiple="multiple">
												<option selected value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div>
										<div class="col-lg-4 mg-t-20 mg-lg-t-0">
											<p class="mg-b-10">Multiple Select (Disabled)</p>
											<select class="form-control select2-no-search" disabled multiple="multiple">
												<option selected value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Date Range Picker</h6>
										<p class="text-muted card-sub-title">Date Range Picker</p>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-calendar  lh--9 op-6"></i>
													</div>
												</div><input type="text" class="form-control pull-right" id="reservation">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Single Select Style</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Single Select</p>
										<select name="somename" class="form-control SlectBox">
											<!--placeholder-->
											<option value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select class="SlectBox form-control" disabled>
											<option value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option disabled value="opt1">option1</option>
											<option value="opt2">option2</option>
											<option value="opt3">option3</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Inline Select</p>
										<select class="SlectBox form-control">
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
											<option>Volvo</option>
											<option>Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select</p>
										<select multiple="multiple" class="testselect2">
											<option value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Disabled Select</p>
										<select multiple="multiple" class="testselect2" disabled >
										   <option  value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="audi">Audi</option>
										   <option class="someclass" value="bmw">BMW</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Optgroup Support</p>
										<select   multiple="multiple" class="testselect2">
										   <option value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option class="someclass" value="audi">Audi</option>
										   <option class="someclass" value="bmw">BMW</option>
										   <option class="someclass" value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="hyundai">Hyundai</option>
										   <option value="mitsubishi">Mitsubishi</option>
									   </select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Multiple Select Styles</h6>
										<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
									</div>
									<div class="mb-4">
										<p class="mg-b-10">Multiple Select-1</p>
										<select multiple="multiple"  class="selectsum1">
										   <option value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option  value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
									<div>
										<p class="mg-b-10">Multiple Select-2</p>
										<select multiple="multiple" class="selectsum2">
										   <option value="volvo">Volvo</option>
										   <option value="saab">Saab</option>
										   <option disabled="disabled" value="mercedes">Mercedes</option>
										   <option value="audi">Audi</option>
										   <option value="bmw">BMW</option>
										   <option value="porsche">Porche</option>
										   <option value="ferrari">Ferrari</option>
										   <option value="mitsubishi">Mitsubishi</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">File Upload</h6>
										<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
									</div>
									<div class="row mb-4">
										<div class="col-sm-12 col-md-4">
											<input type="file" class="dropify" data-height="200" />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/media/1.jpg')}}" data-height="200"  />
										</div>
										<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" disabled="disabled"  />
										</div>
									</div>
									<div>
										<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
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
<!-- Jquery-Ui js-->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Daternagepicker js-->
<script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!--Fileuploads js-->
<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Fancy uploader js-->
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!-- Form-elements js-->
<script src="{{ URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{ URL::asset('assets/js/select2.js')}}"></script>
<!--Sumoselect js-->
<script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!--TelephoneInput js-->
<script src="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection