<div class="page-body">
	<div class="container">
		<div class="section-title">
			<h3>Time Logs</h3>
		</div>
		<div class="section-body">
			<table id="time_logs" class="table table-hover dt-responsive" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Account ID #</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Vehicle</th>
						<th>Plate #</th>
						<th>Entry Time</th>
						<th>Exit Time</th>
						<th>BLDG Name</th>
						<th>Purpose</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Account ID #</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Vehicle</th>
						<th>Plate #</th>
						<th>Entry Time</th>
						<th>Exit Time</th>
						<th>BLDG Name</th>
						<th>Purpose</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>


<script>
	var time_logs;
	$(document).ready(function() {
		$('#time-logs a').removeClass('nav-color');
		$('#time-logs a').addClass('nav-active');
			time_logs = $("#time_logs").DataTable({
				ajax: {
					url: "<?=base_url()?>ajax/get-view-time-logs",
					dataSrc: ''
				},
				responsive:true,
				// "order": [[ 5, "desc" ]],
				columns: [
				{ data: 'account_id'},
				{ data: 'first_name' },
				{ data: 'last_name' },
				{ data: 'vehicle_type'},
				{ data: 'vehicle_plate_number'},
				{ data: 'entry_time'},
				{ data: 'exit_time'},
				{ data: 'building_name'},
				{ data: 'purpose'}

				],
				columnDefs: [
					// { className: "hidden", "targets": [0]},
					// { className: "acct-name", "targets": [1]},
				]
		});

	});
</script>