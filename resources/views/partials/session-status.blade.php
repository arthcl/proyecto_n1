@if (session('status'))

<script>toastr.success("{{ session('status') }}")</script>
	
@endif


@if (session('status-fail'))

	<script>toastr.warning("{{ session('status-fail') }}")</script>
	
@endif