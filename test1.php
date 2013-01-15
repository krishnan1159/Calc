<link rel="stylesheet" href="ca.css" type="text/css" />
<form method="post" action="test2.php" >

<?php	$row=7; 
		$col=7;
		$i=0;
?>

<table>
<?php 
	for($i=1;$i<=$row;$i++)
	{
		echo "<tr>";
			for($j=1;$j<=$col;$j++)
			{
				if( ($i == 1 && $j==1) || ($i == 1 && $j==2) || ($i == 2 && $j==1) )
					echo '<td><input type="text" id="'.$i.$j.'" name="'.$i.$j.'" style="width:30px;height:30px;" maxlength="1"/></td>';
				else
					echo '<td id="cell_'.$i.$j.'"></td>';
			}
		echo "</tr>";
	}
?>

</table>
<input type="submit" value="submit" />
</form>