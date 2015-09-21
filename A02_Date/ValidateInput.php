<html>
<head>
<title>Results</title>
</head>
<body>
<H2>Welcome My Test<BR>
 </H2>
<?PHP

/* Main Code */
$height = $_POST['txtHeight'];
$width = $_POST['txtWidth'];
$area = $height * $width;
$perimeter = ($height * 2) + ($width * 2);
echo "<p>The height is: ";
echo $height;
echo "</br> the width is: ";
echo $width;
echo "</br> the area is";
echo $area;
echo "</br> the Perimeter is:";
echo $perimeter;
echo "</br></p>";



date_default_timezone_set('America/Chicago');
$date = ($_GET["Date"]);
$validDate = DateChecker($date);
 
   function DateChecker( $date )
  {
      $dateparts = explode( "/", $date);
	  $month       = $dateparts[0];
	  $day         = $dateparts[1];
	  $year        = $dateparts[2];
        
	  return checkdate($month, $day, $year);

  } 
 
  If ($validDate == 1)
  {
	  echo "date entered: ";
	  echo $date;
	  $dateInc = DateIncres($date);	 
		echo "the increased date is : ";
		echo date('m-d-Y', $dateInc);
  }
  else{echo "Please enter a valid date";}
  function DateIncres($date)
  {
		$dayInc = $_POST['txtIncreaseDay'];
		$monthInc = $_POST['txtIncreaseMonth'];
		$yearInc = $_POST['txtIncreaseYear'];
		
		$dateparts = explode("/", $enteredDate);
		$mo = $dateparts[0];
		$da  = $dateparts[1];
		$yr  = $dateparts[2];		
		$dateInc = mktime(0,0,0, $mo + $monthInc, $da + $dayIn, $yr + $yearInc);
		return $dateInc;
  }
  

 
?>

  
 
</body>

</html>
