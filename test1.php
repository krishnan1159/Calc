<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="calc.css" type="text/css" />
<form method="post" action="test2.php" >

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
				echo "<td><input type='text' value='1' maxlength='2' id='ip' name='".$i.$j."' /></td>";
			}
		echo "</tr>";
	}
?>
</table>
<input type="submit" value="submit" />
</form>