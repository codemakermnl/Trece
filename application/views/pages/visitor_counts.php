<div class="page-body">
	<div class="container">
		<div class="section-title">
			<h3>Visitor Counts</h3>
		</div>
		<div class="section-body">
			<table id="visitors" class="table table-hover dt-responsive" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Building ID</th>
						<th>Building Name</th>
						<th>Officer Assigned</th>
						<th>Visitors Today</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Building ID</th>
						<th>Building Name</th>
						<th>Officer Assigned</th>
						<th>Visitors Today</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>
</div>


<script>
	var visitors;
	$(document).ready(function() {
		$('#admin-home a').removeClass('nav-color');
		$('#admin-home a').addClass('nav-active');
			visitors = $("#visitors").DataTable({
				ajax: {
					url: "<?=base_url()?>ajax/get-visitor-counts",
					dataSrc: ''
				},
				responsive:true,
				// "order": [[ 5, "desc" ]],
				// columns: [
				// { data: 'building_id'},
				// { data: 'building_name' },
				// { data: 'username' },
				// { data: 'visitor_count' }
				// ],
				columnDefs:  [

		              {
		              "targets": 0,
		              "data" : "building_id"
		              },
		              {
		              "targets": 1,
		              "render": function ( data, type, row ) {
		                    var html = "";
		                    html += '<a href="view_buildings/' + row['building_id'] + '">'+ row['building_name'] +'</a>';

		                    return html;
		                  } 
		              },

		              {
		              "targets": 2,
		              "data" : "username"
		              },
		              {
		              "targets": 3,
		              "render": function ( data, type, row ) {
		                    var html = "";
		                    html += row['visitor_count'] ? row['visitor_count'] : 0 ;

		                    return html;
		                  } 
		              }




              ]
		});

	});
</script>