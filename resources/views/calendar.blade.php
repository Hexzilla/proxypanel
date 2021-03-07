@extends('layouts.master')
@section('css')
<!---Prism css-->
<link href="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">
<!---Jquery.mCustomScrollbar css-->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Calendar</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Apps</a></li>
								<li class="breadcrumb-item active" aria-current="page">Calendar</li>
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
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div class="main-content-calendar">
										<div class="main-content-left-calendar">
											<a href="#" data-toggle="modal" data-target="#add-category" class="btn ripple btn-secondary btn-block mb-3">
												<i class="fa fa-plus"></i> Create New
											</a>
											<label class="main-content-label tx-13 tx-bold mg-b-10">Event List</label>
											<nav class="nav main-nav-column main-nav-calendar-event mb-4 border">
												<a class="nav-link p-2" href="">
													<i class="fe fe-calendar tx-primary"></i>
													<div>Calendar Events</div>
												</a>
												<a class="nav-link p-2" href="">
													<i class="fe fe-calendar tx-success"></i>
													<div>Birthday Events</div>
												</a>
												<a class="nav-link p-2" href="">
													<i class="fe fe-calendar tx-danger"></i>
													<div>Holiday Calendar</div>
												</a>
												<a class="nav-link p-2" href="">
													<i class="fe fe-calendar tx-warning"></i>
													<div>Other Calendar</div>
												</a>
												<a class="nav-link p-2" href="">
													<i class="fe fe-calendar tx-info"></i>
													<div>Discovered Events</div>
												</a>
											</nav>
											<div class="fc-datepicker main-datepicker mb-4 mb-lg-0"></div>
										</div>
										<div class="main-content-body main-content-body-calendar">
											<div class="main-calendar" id="calendar"></div>
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
			<!-- Modal-Calendar -->
			<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="calendar.html" id="mainFormCalendar" method="post" name="mainFormCalendar">
								<div class="form-group">
									<input class="form-control" placeholder="Add title" type="text">
								</div>
								<div class="form-group d-flex align-items-center">
									<label class="rdiobox mg-r-60"><input checked name="etype" type="radio" value="event"> <span>Event</span></label> <label class="rdiobox"><input name="etype" type="radio" value="reminder"> <span>Reminder</span></label>
								</div>
								<div class="form-group mg-t-30">
									<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2-modal main-event-time" data-placeholder="Select time" id="mainEventStartTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2-modal main-event-time" data-placeholder="Select time" id="EventEndTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
								</div>
								<div class="d-flex mg-t-15 mg-lg-t-30">
									<button class="btn ripple btn-main-primary pd-x-25 mg-r-5" type="submit">Save</button> <a class="btn ripple btn-light" data-dismiss="modal" href="">Discard</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--End Modal-Calendar -->

			<!-- Modal-Calendar -->
			<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<nav class="nav nav-modal-event">
								<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a> <a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a> <a class="nav-link" data-dismiss="modal" href="#"><i class="icon ion-md-close"></i></a>
							</nav>
						</div>
						<div class="modal-body">
							<div class="row row-sm">
								<div class="col-sm-6">
									<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
									<p class="event-start-date"></p>
								</div>
								<div class="col-sm-6">
									<label class="tx-13 mg-b-2">End Date</label>
									<p class="event-end-date"></p>
								</div>
							</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
							<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn ripple btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal-Calendar -->

			<!-- Modal Add Category -->
			<div class="modal fade none-border" id="add-category">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title mt-0"><strong>Add a category </strong></h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<form class="form">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label">Category Name</label>
										<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
									</div>
									<div class="col-md-6">
										<label class="control-label">Choose Category Color</label>
										<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
											<option value="success">Success</option>
											<option value="danger">Danger</option>
											<option value="info">Info</option>
											<option value="pink">Pink</option>
											<option value="primary">Primary</option>
											<option value="warning">Warning</option>
											<option value="inverse">Inverse</option>
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn ripple btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn ripple btn-primary" data-dismiss="modal">Save</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
@endsection
@section('js')
<!-- Moment js-->
<script src="{{ URL::asset('assets/plugins/moment/min/moment.min.js')}}"></script>
<!-- Datepicker js-->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Fullcalendar js-->
<script src="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!--Calendar-events js-->
<script src="{{ URL::asset('assets/js/calendar-events.js')}}"></script>
<!-- Calendar js-->
<script src="{{ URL::asset('assets/js/calendar.js')}}"></script>
@endsection