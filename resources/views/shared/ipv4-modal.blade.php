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

@push('ipv4-scripts')
<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
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