<?php
$today = date("Y-m-d H:i:s");
$date = "2015-12-10 03:00:00";
if ( strtotime($date) > strtotime($today) ) {
	echo "
	<script type="text/javascript">
		alert('done!');
	</script>
	";
}
?>