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

	echo "The value of \$date is now ".$date."<br>";

	if (($date - $tar) > 0)
	{
	  echo "The future<br>";
	}
	else if (($date - $tar) < 0)
	{
	  echo "The past<br>";
	}
	else
	{
	  echo "oops<br>";
	}

	echo "Backslashes appear at the following positions in \$date: ";
	for($stringIndex = 0; $stringIndex < strlen($date); $stringIndex++)
	{
		if ($date[$stringIndex] == "/")
		{
			echo $stringIndex." ";
		}
	}
	echo "<br>";

	$dateArray = explode("/", $date);
	echo "There are ".count($dateArray)." words in \$date.<br>";

	echo "Length of \$date: ".strlen($date)."<br>";

	echo "The ASCII value of the first letter in \$date: ".ord($date)."<br>";

	echo "The last two characters of \$date are: ".substr($date, -2)."<br>";

	echo "Date Array: ";

	print_r($dateArray);
	echo "<br>";

	echo "Leap Years: <br>";

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