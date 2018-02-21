<?php
	$date =  date('Y/m/d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";

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
?>