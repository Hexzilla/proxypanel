@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<link href="{{ URL::asset('assets/css/user-profile.css')}}" rel="stylesheet">
@endsection
@section('page-header')
	<!-- Page Header -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-20 mg-b-5">Profile</h2>
			<!-- <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Pages</a></li>
				<li class="breadcrumb-item active" aria-current="page">Profile</li>
			</ol> -->
		</div>
	</div>
	<!-- End Page Header -->
@endsection
@section('content')
    <form method="post" id="profile-form" enctype="multipart/form-data">
        @csrf
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6 col-md-6" style="margin: 0 auto">
                <div class="card custom-card">
                    <div class="card-body text-center">
                        <div class="text-center main-profile-overview widget-user-image text-center">
                            <div class="avatar-wrapper">
                                <input type="file" id="file-avatar" name="avatar" data-height="200">
                                <div class="main-img-user">
                                    @if (empty($userInfo->avatar))
                                        <img alt="avatar" src="{{URL::asset('assets/img/users/default.jpg')}}">
                                    @else
                                        <img alt="avatar" id="img-avatar" src="{{Storage::url($userInfo->avatar)}}">
                                    @endif
                                </div>
                                {{-- <div class="button-group">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div> --}}
                            </div>
                        </div>
                        <div class="item-user pro-user">
                            <!-- <h4 class="pro-user-username text-dark mt-2 mb-0">{{$userInfo->name}}</h4> -->
                            <!-- <p class="pro-user-desc text-muted mb-1">Web Designer</p> -->
                        </div>
                        <br>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">User Name <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" value="{{$userInfo->name}}" id="userName" name="userName" maxlength="50">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">First Name</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" value="{{$userInfo->first_name}}" id="firstName"  name="firstName" maxlength="50">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">Last Name</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" value="{{$userInfo->last_name}}" id="lastName" name="lastName" maxlength="50">
                            </div>
                        </div>	
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">Email <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="email" value="{{$userInfo->email}}" id="email" name="email" maxlength="50">
                            </div>
                        </div>	
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">Skype</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" value="{{$userInfo->skype_id}}" id="skype" name="skype" maxlength="50">
                            </div>
                        </div>	
                        <div class="row row-xs align-items-center mg-b-10">
                            <div class="col-md-4">
                                <label class="mg-b-0">Telegram</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" value="{{$userInfo->telegram_id}}" id="telegram" name="telegram" maxlength="50">
                            </div>
                        </div>	
                    </div>
                    <div class="form-group row justify-content-end mb-10">
                        <div class="col-md-8 pl-md-2">
                            <button class="btn ripple btn-primary pd-x-30 mg-r-5" type="submit">Save</button>
                            
                            <button class="btn ripple btn-primary pd-x-30 mg-r-5 saveLoadingBtn" disabled type="button">
                                <span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span>
                            </button>
                            <button class="modal-effect btn ripple btn-secondary pd-x-30"  data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </form>

	<!-- Modal effects -->
	<div class="modal" id="modaldemo8">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">Password</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row row-xs align-items-center mg-b-10">
						<div class="col-md-4">
							<label class="mg-b-0">Current Password</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="" type="password" id="currentPsd" maxlength="50">
						</div>
					</div>
					
					<div class="row row-xs align-items-center mg-b-10">
						<div class="col-md-4">
							<label class="mg-b-0">New Password</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="" type="password" id="newPsd" maxlength="50">
						</div>
					</div>
					
					<div class="row row-xs align-items-center mg-b-10">
						<div class="col-md-4">
							<label class="mg-b-0">Confirm</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="" type="password" id="confirmPsd" maxlength="50">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn ripple btn-primary" type="button" id="savePassword">Save</button>

					<button class="btn ripple btn-primary pd-x-30 mg-r-5 saveLoadingBtn" disabled type="button">
						<span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span>
					</button>
					<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal effects-->
</div>
</div>
<!-- End Main Content-->
@endsection
@section('js')
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<!--Fileuploads js-->
{{-- <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script> --}}
<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		})

        const readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-avatar').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#file-avatar").on('change', function(){
            console.log('file-avatar-change');
            readURL(this);
        });

		function validateEmail(mail) 
		{
			if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
			{
				return (true)
			}
			return (false)
		}

		$("#profile-form").submit(function(e) {
            e.preventDefault();
			const userName = $("#userName").val()
			const firstName = $("#firstName").val()
			const lastName = $("#lastName").val()
			const email = $("#email").val()
			const skype = $("#skype").val()
			const telegram = $("#telegram").val()
			const avatar = $("#avatar").val()
			if (!userName) {
				toastr.error("Please input username", "Error")
				$("#userName").focus()
				return
			}
			if (!email) {
				toastr.error("Please input email address", "Error")
				$("#email").focus()
				return
			}
			if (!validateEmail(email)) {
				toastr.error("Please input valid email address", "Error")
				$("#email").focus()
				return
			}

            let formData = new FormData(this);

			// const thisElement = $(this)
			// const nextElement = $(this).next()

			// thisElement.hide()
			// nextElement.show()
			$.ajax({
				type: "POST",
				url: "{{route('changeUser')}}",
				data: formData,
                contentType: false,
                processData: false,
				success: function(result) {
					// thisElement.show()
					// nextElement.hide()
					
					if (result == 1) {
						toastr.success("Profile has been saved successfully", "Success")
					} else {
						toastr.error("Something went wrong", "Error")
					}
				}
			})
		})

		$("#savePassword").click(function() {
			const current = $("#currentPsd").val()
			const newP = $("#newPsd").val()
			const confirm = $("#confirmPsd").val()

			if (!current) {
				toastr.error("Please input current password", "Error")
				$("#currentPsd").focus()
				return
			}
			if (!newP) {
				toastr.error("Please input new password", "Error")
				$("#newPsd").focus()
				return
			}
			if (!confirm) {
				toastr.error("Please input password confirm", "Error")
				$("#confirmPsd").focus()
				return
			}
			if (current.length < 8 || newP.length < 8 || confirm.length < 8) {
				toastr.warning("password must be at least 8 characters", "Warning")
				return
			}
			
			if (newP != confirm) {
				toastr.warning("Please confirm password again", "Warning")
				$("#confirmPsd").focus()
				return
			}

			const thisElement = $(this)
			const nextElement = $(this).next()
			thisElement.hide()
			nextElement.show()
			$.ajax({
				type: "POST",
				url: "{{route('changePassword')}}",
				data: {
					current_password: current,
					new_password: newP,
				},
				success: function(result) {
					thisElement.show()
					nextElement.hide()
					if (result && result.success) {
                        toastr.success(result.message, "Success")
					} else {
						toastr.error("Something went wrong", "Error")
					}
				},
                error: function(xhr, status, errorText) {
                    response = xhr.responseJSON
                    console.log('login-error', response, status, errorText)
                    if (response.errors && response.errors.current_password) {
                        toastr.error(response.errors.current_password)
                    }
                    else {
                        toastr.error(response.message)
                    }
					thisElement.show()
					nextElement.hide()
                }
			})
		})
	})
</script>
@endsection
