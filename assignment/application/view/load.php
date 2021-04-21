<?php
class Load {
	// takes file and includes it to show to user
	// extracts data to use for that page
	function view($file_name, $data = null)
	{
		if( is_array($data) ) {
			extract($data);
		}
		include $file_name . '.php';
	}
}
?>