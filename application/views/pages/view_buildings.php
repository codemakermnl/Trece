<div class="page-body">
	<div class="container">
		<div class="section-title">
			<h3>Time Logs for <?= $result[0]->building_name ?></h3>
		</div>
		<a href="<?=base_url()?>admin-home" class="mb-3">Back to Home</a>
		<input type="hidden" id="building_id" value="<?=$result[0]->building_id?>"/>
		<div class="section-body">
			<div class="mb-3">
				<h5>Visitor Count Today: <b id="visitor_count" ></b></h5>
			</div>
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
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>


<script>
	var time_logs;
	$(document).ready(function() {
		var building_id = $('#building_id').val();
		time_logs = $("#time_logs").DataTable({
			ajax: {
				url: "<?=base_url()?>ajax/get-view-building-time-logs",
				dataSrc: '',
				data: {building_id: building_id},
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
			{ data: 'exit_time'}

			],
			columnDefs: [
				// { className: "hidden", "targets": [0]},
				// { className: "acct-name", "targets": [1]},
			]
		});

		// 

		$.ajax({
            url: '<?=base_url()?>ajax/get-visitor-counts-for-building',
            type: 'GET',
            data: {building_id: building_id},
          success:function(data) {
          	var result = JSON.parse(data);
            $('#visitor_count').text(result[0].visitor_count ? result[0].visitor_count : 0);
          },
          error:function(data) {
            console.log(data);
          }
        });

	});
</script>