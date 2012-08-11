<?php

include '/core/init.php';
/**
 * $array is a multi-dimentional array that contains
 * the input for each day of the week, minus the 
 * input for Holiday. That will have to be handled 
 * with a seperate isset function I think. 
 */

$array = array(

	$monday_1 = array(
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_1' => check_input($_POST[('date_1')]),
	'wkrHrs_1' => check_input($_POST[('wrkHrs_1')]),
	'vacHrs_' => check_input($_POST[('vacHrs_1')]),
	'sickHrs_1' => check_input($_POST[('sickHrs_1')])
	),
	$tuesday_1 = array(
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_2' => check_input($_POST[('date_2')]),
	'wrkHrs_2' => check_input($_POST[('wrkHrs_2')]),
	'vacHrs_2' => check_input($_POST[('vacHrs_2')]),
	'sickHrs_2' => check_input($_POST[('sickHrs_2')])
	),
	$wednesday_1 = array(
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_3' => check_input($_POST[('date_3')]),
	'wrkHrs_3' => check_input($_POST[('wrkHrs_3')]),
	'vacHrs_3' => check_input($_POST[('vacHrs_3')]),
	'sickHrs_3' => check_input($_POST[('sickHrs_3')])
	),
	$thursday_1 = array(
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_4' => check_input($_POST[('date_4')]),
	'wrkHrs_4' => check_input($_POST[('wrkHrs_4')]),
	'vacHrs_4' => check_input($_POST[('vacHrs_4')]),
	'sickHrs_4' => check_input($_POST[('sickHrs_4')])
	),
	$friday_1 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_5' => check_input($_POST[('date_5')]),
	'wrkHrs_5' => check_input($_POST[('wrkHrs_5')]),
	'vacHrs_5' => check_input($_POST[('vacHrs_5')]),
	'sickHrs_5' => check_input($_POST[('sickHrs_5')])
	),
	$monday_2 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_6' => check_input($_POST[('date_6')]),
	'wrkHrs_6' => check_input($_POST[('wrkHrs_6')]),
	'vacHrs_6' => check_input($_POST[('vacHrs_6')]),
	'sickHrs_6' => check_input($_POST[('sickHrs_6')])
	),
	$tuesday_2 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_7' => check_input($_POST[('date_7')]),
	'wrkHrs_7' => check_input($_POST[('wrkHrs_7')]),
	'vacHrs_7' => check_input($_POST[('vacHrs_7')]),
	'sickHrs_7' => check_input($_POST[('sickHrs_7')])
	),
	$wednesday_2 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_8' => check_input($_POST[('date_8')]),
	'wrkHrs_8' => check_input($_POST[('wrkHrs_8')]),
	'vacHrs_8' => check_input($_POST[('vacHrs_8')]),
	'sickHrs_8' => check_input($_POST[('sickHrs_8')])
	),
	$thursday_2 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_9' => check_input($_POST[('date_9')]),
	'wrkHrs_9' => check_input($_POST[('wrkHrs_9')]),
	'vacHrs_9' => check_input($_POST[('vacHrs_9')]),
	'sickHrs_9' => check_input($_POST[('sickHrs_9')])
	),
	$friday_2 = array(	
	'name' => check_input($_POST[('name')]),
	'beginDate' => check_input($_POST[('beginDate')]),
	'endDate' => check_input($_POST[('endDate')]),
	'date_10' => check_input($_POST[('date_10')]),
	'wrkHrs_10' => check_input($_POST[('wrkHrs_10')]),
	'vacHrs_10' => check_input($_POST[('vacHrs_10')]),
	'sickHrs_10' => check_input($_POST[('sickHrs_10')])
	)


	
);

/**
 * Next, we impole each array. Using "', '" to place
 * the proper single quotes around each of the inputs
 * as well as a comma between each. This way, they can
 * be used properly in the INSERT statements later.
 */
$day_1 = implode("', '", $monday_1);
$day_2 = implode("', '", $tuesday_1);
$day_3 = implode("', '", $wednesday_1);
$day_4 = implode("', '", $thursday_1);
$day_5 = implode("', '", $friday_1);
$day_6 = implode("', '", $monday_2);
$day_7 = implode("', '", $tuesday_2);
$day_8 = implode("', '", $wednesday_2);
$day_9 = implode("', '", $thursday_2);
$day_10 = implode("', '", $friday_2);

/**
 * Then, we create an if statement for each day. If a
 * day is empty (nothing entered for that day), then
 * pass the 
 */
if(!empty($monday_1)){
	day_one($conn, $day_1);
}
if(!empty($tuesday_1)){
	day_two($conn, $day_2);
}
if(!empty($wednesday_1)){
	day_three($conn, $day_3);
}
if(!empty($thursday_1)){
	day_four($conn, $day_4);
}
if(!empty($friday_1)){
	day_five($conn, $day_5);
}
if(!empty($monday_2)){
	day_six($conn, $day_6);
}
if(!empty($tuesday_2)){
	day_seven($conn, $day_7);
}
if(!empty($wednesday_2)){
	day_eight($conn, $day_8);
}
if(!empty($thursday_2)){
	day_nine($conn, $day_9);
}
if(!empty($friday_2)){
	day_ten($conn, $day_10);
}
?>	