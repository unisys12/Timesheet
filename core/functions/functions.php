<?php

//function to enter the first days inputs.
function day_one($conn, $day_1){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_1')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) . "<br />" ;
	}
	
	
}

function day_two($conn, $day_2){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_2')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_three($conn, $day_3){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_3')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_four($conn, $day_4){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_4')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}


function day_five($conn, $day_5){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_5')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_six($conn, $day_6){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_6')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_seven($conn, $day_7){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_7')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_eight($conn, $day_8){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_8')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_nine($conn, $day_9){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_9')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_ten($conn, $day_10){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_10')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_eleven($conn, $day_11){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_11')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_twelve($conn, $day_12){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_12')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_thirteen($conn, $day_13){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_13')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}

function day_fourteen($conn, $day_14){
	
	$query = mysqli_query($conn, "INSERT INTO `timesheet` (
		`name`, `beginDate`, `endDate`, `curDate`, `wrkHrs`, `vacHrs`, `sickHrs`)
			VALUES ('$day_14')", MYSQLI_STORE_RESULT);
	if(!$query){
		echo "Could not complete INSERT because: " . mysqli_error($conn) ;
	}
	
}
?>