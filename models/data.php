<?php
/* Modulate our input data */
	require_once 'phpData.php';
 // Transform Input data (integer) in (float) type 
// This function means that input values we transform
// in float types which we use in diagram 

function transform_data($inputData)
{
	$total_count = $inputData['total_count'];
	$delivered = $inputData['delivered'];
	$fail = $inputData['fail'];
	$open = $inputData['open'];
	$click = $inputData['click'];
	$progress = 0;

	// total_count is main value for transform in percent formul
	// main formul x = a*100/total_count
	$total_count_inpercent = 100; 
	$delivered_inpercent   = (100 * $delivered / $total_count);
	$fail_inpercent        = (100 * $fail / $total_count);
	// progress will be
	$progress_inpercent = $total_count_inpercent - $delivered_inpercent - $fail_inpercent;	

	// percent transform for OPEN and CLICK
	// main value is delivered oparetion
	$delivered_as_main = 100; // in percent;
	$open_inpercent    = (100 * $open / $delivered);
	$click_inpercent   = (100 * $click / $delivered);

	// format value 
	$inputData['total_count'] = number_format($total_count_inpercent, 2, '.', '');
	$inputData['delivered']   = number_format($delivered_inpercent, 2, '.', '');
	$inputData['fail'] 		  = number_format($fail_inpercent, 2, '.', '');
	$inputData['open']        = number_format($open_inpercent, 2, '.', '');
	$inputData['click']		  = number_format($click_inpercent, 2, '.', '');
	$progress_inpercent 	  = number_format($progress_inpercent, 2, '.', '');

	return array(
		'total_count' => $inputData['total_count'],
		'delivered'   => $inputData['delivered'],
		'fail'		  => $inputData['fail'],
		'open'		  => $inputData['open'],
		'click'		  => $inputData['click'],
		'progress'    => $progress_inpercent
		);	
};

print_r(transform_data($inputData));