<link rel="stylesheet" href="calc.css" type="text/css" />
<?php

	//Final Calcudoku//
	$ans['00']=1;
	$ans['01']=2;
	$ans['02']=1;
	if(($_REQUEST['00'] == $ans['00']) && ($_REQUEST['01'] == $ans['01']) && ($_REQUEST['02'] == $ans['02']))
	{
	}
	else
	{
		header("Location:test1.php");
	}
	echo $_REQUEST['01'];

?>

<form method="post" action="test3.php" >

<?php	$row=3; 
		$col=3;
		$i=0;
?>

<table border='1' cellspacing=0 >
<?php 
	for(;$i<$row;$i++)
	{
		echo "<tr>";
			for($j=0;$j<$col;$j++)
			{
				echo "<td><input type='text' value='1' id='ip' name='".$i.$j."' /></td>";
			}
		echo "</tr>";
	}
?>
</table>
<input type="submit" value="submit" />
</form>