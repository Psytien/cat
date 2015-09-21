<?php
	//get the data from the request
	date_default_timezone_set('America/Chicago');
	
	
	//Getting size information and calculating area/perimeter 
	$height = $_POST['txtHeight'];
	$width = $_POST['txtWidth'];
	
	$area = $height * $width;
	$perimeter = ($height*2) + ($width*2);
	
	echo "The height is <br>";
	echo $height;
	echo "<br>The width is <br>";
	echo $width;	
	echo "<br>The area is <br>";
	echo $area;	
	echo "<br>The perimeter is <br>";
	echo $perimeter;
	echo "<br>";
	
	//Getting Date information *Main Code*
	$enteredDate = $_POST['txtDate'];
	
	$validDate = DateChecker($enteredDate);
	
	If ($validDate == 1)
	{
		echo $enteredDate;
		echo " is a valid Date<br>";
	}
	else
	{
		echo $enteredDate;
		echo " is not a valid Date<br>";
	}
	
	$increasedDate = DateIncrement($enteredDate);
	
	echo date('m-d-Y', $increasedDate);
	echo " is the increased Date<br>";
	
	
	//Breaking date apart to check for validation
	function DateChecker($date)
	{
		$dateparts = explode("/", $date);
		$month = $dateparts[0];
		$day   = $dateparts[1];
		$year  = $dateparts[2];
		
		return checkdate($month, $day, $year);
	}	
	
	//Increasing the date by entered increments
	function DateIncrement($enteredDate)
	{
		$dayIncrease = $_POST['txtIncreaseDay'];
		$monthIncrease = $_POST['txtIncreaseMonth'];
		$yearIncrease = $_POST['txtIncreaseYear'];
		
		$dateparts = explode("/", $enteredDate);
		$mo = $dateparts[0];
		$da  = $dateparts[1];
		$yr  = $dateparts[2];
		
		$dateIncrease = mktime(0,0,0, $mo + $monthIncrease, $da + $dayIncrease, $yr + $yearIncrease);
		
		
		return $dateIncrease;
		
		
	}
	
?>