<!---Sweet-Alert css-->
<link href="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<link href="{{ URL::asset('assets/css/proxies.css')}}" rel="stylesheet">

<div class="proxies-table">
    <!-- Proxy Table -->
    <div class="table-responsive">
        <table class="table table-hover mg-b-0">
            <thead>
                <tr>
                    <th width="10%" class="text-center">City</th>
                    <th class="text-center">Rotation</th>
                    <th class="text-center">Change IP</th>
                    <th class="text-center">Ip Auth</th>
                    <th class="text-center">Host</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Next Billing</th>
                    <th class="text-center">Status</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @if (count($ports) > 0)
                    @foreach ($ports as $p) 
                        <tr>
                            <td class="text-center" style="vertical-align: middle">
                                <input type="hidden" value="{{$p->id}}">
                                <button class="btn ripple btn-primary btn-sm mb-1 locationBtn">
                                    @if ($p->city == '*')
                                        Select Location
                                    @else
                                        {{$p->city}}
                                    @endif
                                </button><br>
                                <input type="hidden" value="{{$p->lastchangecitydate}}">
                                <input type="hidden" value="{{$p->id}}">
                                <button class="btn ripple btn-primary btn-sm mb-1 randBtn" city="{{$p->city}}">
                                    Random Location
                                </button>
                                <button class="btn ripple btn-primary btn-sm mb-1" id="loadingBtn1" disabled type="button">
                                    <span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span>
                                </button>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                @if (!$p->rotation)
                                    No<br>Rotations
                                @else
                                    {{$p->rotation}}
                                @endif
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <input type="hidden" value="{{$p->lastchangeipdate}}">
                                <input type="hidden" value="{{$p->id}}">
                                <input type="hidden" value="{{$p->username.'.'.$p->groupname}}">
                                <button class="btn btn-success btn-icon changeIPBtn" style=" margin: auto; border-radius: 20px" title="Change IP">
                                    <i class="fa fa-sync"></i>
                                </button>
                                <div class="spinner-border text-success" role="status" style="display: none">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </td>
                            <td class="text-center" style="vertical-align: middle;">
                                <input type="hidden" value="{{$p->fwdauthips}}">
                                <input type="hidden" value="{{$p->id}}">
                                <a class="modal-effect btn btn-success btn-sm openIPAuthBtn" data-effect="effect-scale" data-toggle="modal" href="#modaldemo9">
                                    IPv4 List
                                </a>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <div class="copyable" data-text="{{$p->server}}">http: {{$p->server}}</div>
                                <div class="copyable" data-text="{{$p->server}}">socks5: {{$p->server}}</div>
                                @if($p->fwdauthips)
                                    <div class="hostBtn2">socks5: 66.42.95.53:10072</div>
                                @endif
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php $usergroupname = $p->username . "." . $p->groupname; ?>
                                <div class="copyable" data-text="{{$usergroupname}}">{{$usergroupname}}</div>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <div class="copyable" data-text="{{$p->pass}}">{{$p->pass}}</div>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                {{$p->paidtill}}<br>
                                @if($p->paidtill <= $current)
                                    <input type="hidden" value="{{$p->id}}">
                                    <a class="modal-effect btn btn-success btn-sm payBtn" data-effect="effect-scale" data-toggle="modal" href="#modaldemo10">
                                        Renew
                                    </a>
                                @endif
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                @if($p->paidtill > $current)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                @if($p->paidtill <= $current)
                                    <input type="hidden" value="{{$p->id}}">
                                    <button class="btn ripple btn-danger btn-icon deleteBtn" title="delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="20" class="no-data">No data</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <!-- End Proxy Table -->

    <!-- Modal effects -->
    <div class="modal" id="modaldemo10">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <input type="hidden" value="" name="payId" id="payId">
                <div class="modal-header">
                    <h6 class="modal-title">Payment</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6 class="font-weight-bold">Order # <span id="paySpan"></span></h6>
                    <label class="rdiobox"><input name="rdio" id="typeMonth" type="radio" value="monthly" checked> <span>Monthly | $175</span></label>
                    <label class="rdiobox"><input name="rdio" id="typeWeek" type="radio" value="weekly"> <span>Weekly | $75</span></label>
                    <!-- <label class="rdiobox"><input name="rdio" id="typeDay" type="radio" value="daily"> <span>Daily | $20</span></label>
                    <label class="rdiobox"><input name="rdio" id="typeHour" type="radio" value="hour"> <span>One Hour | $10</span></label> -->
                    <label class="rdiobox"><input name="rdio" id="typeTest" type="radio" value="test"> <span>test(weekly) | $0.01</span></label>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="button" id="proceedPay">Pay by PayPal</button>
                    <button class="btn ripple btn-success" style="display: none" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Saving...</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal effects-->

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payForm" style="display:none">
        <input type="hidden" name="cmd" value="_xclick" id="id_cmd">
        <input type="hidden" name="charset" value="utf-8" id="id_charset">
        <input type="hidden" name="currency_code" value="USD" id="id_currency_code">
        <input type="hidden" name="no_shipping" value="1" id="id_no_shipping">
        <input type="hidden" name="business" value="vpnrgr@gmail.com" id="id_business">
        <input type="hidden" name="amount" value="100" id="id_amount">
        <input type="hidden" name="item_name" value="100$" id="id_item_name">
        <!-- <input type="hidden" name="invoice" value="invoice-1-1534-1079-9" id="id_invoice"> -->
        <input type="hidden" name="notify_url" value="{{route('notify')}}" id="id_notify_url">
        <input type="hidden" name="rm" value="1" id="id_rm">
        <input type="hidden" name="return" value="{{route('success')}}" id="id_return">
        <input type="hidden" name="cancel_return" value="{{url('cancel')}}" id="id_cancel_return">
        <input type="hidden" name="custom" value="premium_plan" id="id_custom">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Test pay 100$">
        </div>
    </form>

    <!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="payForm" style="display:none">
        <input type="hidden" name="cmd" value="_xclick" id="id_cmd">
        <input type="hidden" name="charset" value="utf-8" id="id_charset">
        <input type="hidden" name="currency_code" value="USD" id="id_currency_code">
        <input type="hidden" name="no_shipping" value="1" id="id_no_shipping">
        <input type="hidden" name="business" value="sb-1b2tq5457191@business.example.com" id="id_business">
        <input type="hidden" name="amount" value="100" id="id_amount">
        <input type="hidden" name="item_name" value="test" id="id_item_name">
        <input type="hidden" name="notify_url" value="{{route('notify')}}" id="id_notify_url">
        <input type="hidden" name="rm" value="1" id="id_rm">
        <input type="hidden" name="return" value="{{route('success')}}" id="id_return">
        <input type="hidden" name="cancel_return" value="{{url('cancel')}}" id="id_cancel_return">
        <input type="hidden" name="custom" value="premium_plan" id="id_custom">
        <div class="form-group">
            <button class="btn ripple btn-primary" type="submit">Test 100$</button>
        </div>
    </form> -->

    <!-- Modal effects -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-body">
                    <br>
                    <form method="post" action="{{route('changeAuthIP')}}" id="ipAuthForm">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" id="idForAuth" name="id">
                            <p class="mg-b-10">IPv4 whitelist</p>
                            <input type="text" class="form-control" name="ip" placeholder="IPv4" id="ipAuthInput">
                            <p class="text-muted card-sub-title">Enter comma seperated IPv4 addresses</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button" id="ipAuthBtn">Save</button>
                    <button class="btn ripple btn-primary" style="display: none" disabled type="button"><span aria-hidden="true" class="spinner-border spinner-border-sm" role="status"></span> Saving...</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal effects-->

    <form method="post" action="{{route('deleteProxy')}}" id="deleteForm">
        @csrf
        <input type="text" name="id" value="0" id="deleteId">
    </form>

    <form action="{{route('randomLocation')}}" method="post" id="randForm">
        @csrf
        <input type="hidden" name="id" value="0" id="randInput">
    </form>

    <form action="{{route('changeIp')}}" method="post" id="changeIpForm">
        @csrf
        <input type="hidden" name="userInfo" value="0" id="userInfo">
        <input type="hidden" name="portId" value="0" id="portId">
    </form>
</div>

@push('proxies-table-scripts')
<!-- Sweet-Alert js-->
<script src="{{ URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
<script src="{{ URL::asset('assets/js/modal.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		<?php if (session('delete-success')){?>
			toastr.success("{{session('delete-success')}}", "Success")
		<?php } else if (session('delete-failed')){?>
			toastr.error("{{session('delete-failed')}}", "Error")
		<?php }?>

		<?php if (session('paymentSuccess')){?>
			toastr.success("{{session('paymentSuccess')}}.\n Date will be updated after some time", "Success")
		<?php } else if (session('paymentCancel')){?>
			toastr.info("{{session('paymentCancel')}}", "Info")
		<?php } else if (session('paymentFailed')){?>
			toastr.error("{{session('paymentFailed')}}", "error")
		<?php }?>

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		})

		$(".locationBtn").click(function(){
			const id = $(this).prev().val()
			window.location = "{{url('/location_')}}?id=" + id
		})

		$(".randBtn").click(function(){
			const cityName = $(this).attr('city')

			const lastDate = $(this).prev().prev().val()
			const last = new Date(lastDate)
			const d1 = new Date()
			const now = new Date(d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds())

			const diff = (now.getTime() - last.getTime()) / 1000;
			if (cityName != '*' && diff < 180) {
				const seconds = 180 - diff
				const min = Math.ceil(seconds / 60)
				toastr.info("You can change this location after " + min + " minutes.")
			} else {
				const id = $(this).prev().val()
				$(this).hide()
				$(this).next().show()
				$("#randInput").val(id)
				$("#randForm").submit()
			}
		})

		$(".hostBtn").click(function(){
			swal("Success!", "Copied", "success");
		})

		$(".deleteBtn").click(function(){
			const id = $(this).prev().val()

			swal({
				title: "Are you sure?",
				text: "Delete",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: 'Yes, delete it!',
				closeOnConfirm: false,
			},
			function(){
				$("#deleteId").val(id)
				$("#deleteForm").submit();
				swal.close()
			});
		})

		$(".copyable").click(function(){
			const text = $(this).attr("data-text")
			swal("Copied!", text + " has been copied to the clipboard!", "success");
		})

		$(".changeIPBtn").click(function(){
			const lastDate = $(this).prev().prev().prev().val()
			const last = new Date(lastDate)
			const d1 = new Date()
			const now = new Date(d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds())

			const diff = (now.getTime() - last.getTime()) / 1000;
			if (diff < 180) {
				const seconds = 180 - diff
				const min = Math.ceil(seconds / 60)
				toastr.info("You can change Ip after " + min + " minutes.")
				return
			}
			$(this).hide()
			$(this).next().show()

			const id = $(this).prev().prev().val()
			const userInfo = $(this).prev().val()
			
			$("#userInfo").val(userInfo)
			$("#portId").val(id)
			$("#changeIpForm").submit()
		})

		$(".payBtn").click(function() {
			const id = $(this).prev().val()
			$("#payId").val(id)
			$("#paySpan").html(id)
		})

		$("#proceedPay").click(function() {
			const month = $("#typeMonth").is(':checked');
			const week = $("#typeWeek").is(':checked');
			const day = $("#typeDay").is(':checked');
			const hour = $("#typeHour").is(':checked');
			const test = $("#typeTest").is(':checked');

			const id = $("#payId").val()

			let amount = 0
			let item_name = ''
			if (month) {
				amount = 175
				item_name = 'monthly | $175 | order | ' + id
			} else if (week) {
				amount = 75
				item_name = 'weekly | $75 | order | ' + id
			} else if (day) {
				amount = 20
				item_name ='daily | $20 | order | ' + id
			} else if (hour) {
				amount = 10
				item_name ='hour | $10 | order | ' + id
			} else if (test) {
				amount = 0.01
				item_name ='test | $0.01 | order | ' + id
			}

			$(this).hide()
			$(this).next().show()

			$("#id_amount").val(amount)
			$("#id_item_name").val(item_name)
			$("#payForm").submit()
		})

		$(".openIPAuthBtn").click(function () {
			const id = $(this).prev().val()
			const ips = $(this).prev().prev().val()
			$("#idForAuth").val(id)
			$("#ipAuthInput").val(ips)
		})

        function ValidateIPaddress(ipaddress) {
            if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ipaddress)) {
                return (true)
            }
            return (false)
        }

        $("#ipAuthBtn").click(function() {
            const ip = $("#ipAuthInput").val()
            if (!ip) {
                toastr.error("Please input ip address", "Error")
                return
            } else {
                const ips = ip.split(',')
                for(let i in ips) {
                    const item = ips[i].trim()
                    if (!ValidateIPaddress(item)) {
                        toastr.error("Please input valid ip address", "Error")
                        return
                    }
                }
            }
            $(this).hide()
            $(this).next().show()
            $("#ipAuthForm").submit()
        })
	}) 
</script>
@endpush