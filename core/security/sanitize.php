<?php

// Functions to check data and display errors 

/**
 * This function was taken from http://myphpform.com/php-form-tutorial.php. If you are
 * new to forms or PHP, I would suggest you check the site out. Very useful and I still
 * refer to it quite often. Although forms are quite simple, the above site has a lot 
 * of really good info and best practices. 
 */

function check_input($data, $problem=''){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0){	
		show_error($problem);
	}
	return $data;	
}

function show_error($pageError){

echo '<p><b>Please correct the follow errors with your meter submission:</b><br />';
	
echo "<ul>";
echo "<li>$pageError</li>";
echo "</ul>";

exit(); 

}

?>