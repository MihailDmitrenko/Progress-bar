<?php

// Modulate our input data 
// which require in data.php
// it just modulate file for future 

// inpute your data values from FORM in this array
if (isset($_POST)) {

	$inputData = array (
		'total_count' => $_POST['total_count'],
		'delivered' => $_POST['delivered'],
		'fail' => $_POST['fail'],
		'open' => $_POST['open'],
		'click' => $_POST['click']
		);
}
print_r($inputData);
echo "</br>";




