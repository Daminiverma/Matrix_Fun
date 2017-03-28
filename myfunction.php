<?php
		// print_r($_GET);
		if(isset($_GET["inputn"]))
		{
			$n = $_GET["inputn"];
		}
		$matrix = array(array(),array(),array());

		function input()
		{
			global $matrix;
			global $n;
			for($i=0;$i<$n;$i++)
			{
				for($j=0;$j<$n;$j++)
				{
					$matrix[$i][$j] = $_GET["input$i$j"];
					// print("$i and $j = ".$matrix[$i][$j]);
				}
			}
			return($matrix);
		}

		function calcMainDiagonal()
		{
			global $matrix;
			global $n;
			$sum = 0;
			for($i=0;$i<$n;$i++)
			{
				$sum += $matrix[$i][$i];
			}
			return("Main Diagonal is: ".$sum);
		}

		function calcSecondaryDiagonal()
		{
			global $matrix;
			global $n;
			$sum = 0;
			for($i=0,$j=$n-1;$i<$n;$i++,$j--)
			{
				$sum += $matrix[$i][$j];
			}
			return("Secondary Diagonal is: ".$sum);
		}
		input();
		$main = calcMainDiagonal();
		$sec = calcSecondaryDiagonal();
?>