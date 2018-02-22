<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";

	$date = str_replace("-", "/", $date);

	echo "2.) The value of \$date is now ".$date."<br><br>";

	echo "3.) ";
	if (($date - $tar) > 0)
	{
	  echo "The future<br><br>";
	}
	else if (($date - $tar) < 0)
	{
	  echo "The past<br><br>";
	}
	else
	{
	  echo "oops<br><br>";
	}

	echo "4.) Backslashes appear at the following positions in \$date: ";
	for($stringIndex = 0; $stringIndex < strlen($date); $stringIndex++)
	{
		if ($date[$stringIndex] == "/")
		{
			echo $stringIndex." ";
		}
	}
	echo "<br><br>";

	$dateArray = explode("/", $date);
	echo "5.) There are ".count($dateArray)." words in \$date.<br><br>";

	echo "6.) Length of \$date: ".strlen($date)."<br><br>";

	echo "7.) The ASCII value of the first letter in \$date: ".ord($date)."<br><br>";

	echo "8.) The last two characters of \$date are: ".substr($date, -2)."<br><br>";

	echo "9.) Date Array: ";

	print_r($dateArray);
	echo "<br><br>";

	echo "10.) Leap Years: <br>";

	foreach($year as $myYear)
	{
		if(($myYear % 4) == 0)
		{
			if(($myYear % 400 != 0) && ($myYear % 100 == 0))
			{
				echo $myYear." is not a leap year.";
			}
			else
			{
				echo $myYear." is a leap year.";
			}
		}
		else
		{
			echo $myYear." is not a leap year.";
		}

		echo "<br>";
	}
?>