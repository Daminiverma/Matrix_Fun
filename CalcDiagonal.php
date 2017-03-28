<?php require("myfunction.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Matrix Mania</title>
	<script src="jQuery.js"></script>
	<script src="script.js"></script>
	<?php if(isset($_GET["inputn"]))
		{ ?>
		<script>
			window.showBorder = true;
		</script>
		<?php } ?>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Enter the number of rows and columns of a Square Matrix</h1>
	<form action="CalcDiagonal.php" method="GET" accept-charset="utf-8"⁄>
		<div id="rc-div">
			<input id="rows-and-columns" type="number" name="inputn" value="<?=$n?>" placeholder="Enter number of rows and columns" required> <input type="button" class="btn" name="okay" value="OK" id="okay">
		</div>
		<br/>
		<div class="square">
			<div class="div-border"><?php
				$matrix = input();
				// print_r($matrix);
					for($i=0;$i<$n;$i++)
					{
				?>
				<?php		
						for($j=0;$j<$n;$j++)
						{?><input type="number" class="inpt" name="input<?=$i.$j?>" value="<?= $matrix[$i][$j]?>" required><?}
				?><br/>
				<?php
					}
				?>
			</div>
		</div>
		<br/>
		<div class="btn-div">
			<input type="submit" id="calc-btn" name="calculate" class="calc" value="Calculate">
			<input type="button" id="reset" class="calc" value="Reset">
		</div>
	</form>
	<?php if(isset($_GET["inputn"]))
		{
		?>
	<div class="result-area-green" name="result">
		<?php print(calcMainDiagonal()."<br/>");?>
	</div>
	<div class="result-area-red" name="result">
		<?php print(calcSecondaryDiagonal());?>
	</div>
	<?php }?>

</body>
</html>