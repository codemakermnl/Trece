<div class="page-body">
	<div class="container">
		<div class="section-title">
			<h3>Reports</h3>
		</div>
		<div class="section-body">
			<table id="reports" class="table table-hover dt-responsive" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Report ID #</th>
						<th>Civilian ID #</th>
						<th>Subject</th>
						<th>Details</th>
						<th>Report Type</th>
						<th>Reported By</th>
						<th>Date Reported</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Report ID #</th>
						<th>Civilian ID #</th>
						<th>Subject</th>
						<th>Details</th>
						<th>Report Type</th>
						<th>Reported By</th>
						<th>Date Reported</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>


<script>
	var time_logs;
	$(document).ready(function() {
		$('#view-reports a').removeClass('nav-color');
		$('#view-reports a').addClass('nav-active');
			time_logs = $("#reports").DataTable({
				ajax: {
					url: "<?=base_url()?>ajax/get-view-reports",
					dataSrc: ''
				},
				responsive:true,
				// "order": [[ 5, "desc" ]],
				// columns: [
				// { data: 'account_id'},
				// { data: 'first_name' },
				// { data: 'last_name' },
				// { data: 'vehicle_type'},
				// { data: 'vehicle_plate_number'},
				// { data: 'entry_time'},
				// { data: 'exit_time'},
				// { data: 'building_name'}

				// ],
				columnDefs: [
	              {
	              "targets": 0,
	              "data" : "report_id"
	              },
	            {
	              "targets": 1,
	              "render": function ( data, type, row ) {
	                    var html = row['civilian_id'] ? row['civilian_id'] : 'N/A';

	                    return html;
	                  } 
	              },

	              {
	              "targets": 2,
	              "data" : "subject"
	              },
	              {
	              "targets": 3,
	              "data" : "description"
	              },

	              {
	              "targets": 4,
	              "data" : "report_type"
	              },
	              {
	              "targets": 5,
	              "data" : "name"
	              },
	              {
	              "targets": 6,
	              "data" : "date_reported"
	              },



	              ]
		});

	});
</script>