<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>wsSimpleDisplay</title>

		<!-- css needed for jquery UI -->
		<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" /> 
		<!-- purecss simple css -->
		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<style>
.right {
	text-align: right;
}
</style>
	</head>
	<body>

<script type="text/JavaScript">

$.ajaxSetup({ cache: false }); 

function commaSeparateNumber(val){
	while (/(\d+)(\d{3})/.test(val.toString())){
		val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	}
	return val;
}

function cardinalDirection(degrees) {
	if ( degrees >= 338 || degrees < 23 )
		return "N";
	if ( degrees < 68 )
		return "NE";
	if ( degrees < 113 )
		return "E";
	if ( degrees < 158 )
		return "SE";
	if ( degrees < 203 )
		return "S";
	if ( degrees < 248 )
		return "SW";
	if ( degrees < 293 )
		return "W";

	return "NW";
} 

function loadNewData(){
	var url="http://cam.aprsworld.com:8888/data/now.json/A4753";

	$.getJSON(url, 
		function(data) {
			hideWarn();

			/* set the title of the page */
			$(document).attr("title", data.title + ": wsSimpleDisplay");

			/* iterate through data.sensors */
			$.each(data.sensors, function( index, value ) {
				if ( data.sensors[index].title !== undefined ) {
//						console.log( "data.sensors[" + index + "]: " + data.sensors[index].title + "=" + data.sensors[index].value);

					//Try to get tbody first with jquery children. works faster!
					var tbody = $('#autoData').children('tbody');


					//Then if no tbody just select your table 
					var table = tbody.length ? tbody : $('#autoData');

					var rowCode = '<tr id="autoData_' + index + '"><td class="right"><b>' + data.sensors[index].title + '</b></td><td>' + data.sensors[index].value + '</td></tr>';

					if ( $("#autoData_" + index).length ) {
						// replace row contents
						$("#autoData_" + index).replaceWith(rowCode);
					} else {
						console.log('adding row to table');
						table.append(rowCode);
					}

				}
			});

			$('#displayName').html(data.displayName);

			console.log("camera url: " + data.cameras[0].image_url);

			/* cameras */
			if (  data.cameras[0].image_url !== undefined ) {
				$("#camStatic0").attr("src", data.cameras[0].image_url);
				$("#camDisplayName0").html(data.camDisplayName0);
				/* $("#camURLPrimary0").html(data.camURLPrimary0); */
				$("#camURLPrimary0").attr("href", data.camURLPrimary0);
				$("#camStatic").show();
			} else {
				$("#camStatic").hide();
			}
		}
		); 

	setTimeout(loadNewData,5000);
}

function hideWarn(){
	$("#connection_warn").hide();
}

$(document).ready(function(){
	$( document ).ajaxError(function(event){
		console.log("no response from JSON server");
		$("#connection_warn").show();
		$("#connection_warn").append(event);
		//$("#cover").hide();
		//clearInterval(loadTimerVar);
	});
	loadNewData();

	/* make auto data table sortable */
//	$('#autoData').children('tbody').sortable();

	$('#autoData').children('tbody').sortable({
		axis: 'y',
		update: function (event, ui) {
			var data = $(this).sortable('serialize');

			console.log('sortable serialize: ' + data);
    	}
	});
});
</script>
<div id="connection_warn" style="text-align: center; width: 800px; padding: 10px; margin-right: auto; margin-left: auto; background-color: orange; color: white; display: none;" onclick="hideWarn()">
	<h1>No Response From Server. Please check to make sure you are still connected to the internet</h1>
</div>

<h1>Live Data</h1>
<table id="autoData" class="pure-table pure-table-horizontal pure-table-striped">
	<thead>
		<tr>
			<th>title</th>
			<th>value</th>
		</tr>
	</thead>
	<tbody>
<!-- will insert data automatically here -->
	</tbody>
</table>

<h1>Live Camera</h1>
<img class="pure-img" src="http://data.asrichards.com/images/logo.png" id="camStatic0" alt="Web Camera 0" style="width: 100%; margin-left: auto; margin-right: auto; display: block;" />

</body>
</html>
