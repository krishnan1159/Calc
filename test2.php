

<link rel="stylesheet" href="ca.css" type="text/css" />
<?php

	//Input is taken as 31,32,33//

	//Answers until the Level he has completed//
	$ans['77']=""; $ans['71']=""; $ans['72']=""; $ans['73']=""; $ans['74']=""; $ans['75']=""; $ans['76']="";
	
	$ans['17']=""; $ans['11']=1; $ans['12']=1; $ans['13']=""; $ans['14']=""; $ans['15']=""; $ans['16']="";
	
	$ans['27']=""; $ans['21']=1; $ans['22']=""; $ans['23']=""; $ans['24']=""; $ans['25']=""; $ans['26']="";
	
	$ans['37']=""; $ans['31']=""; $ans['32']=""; $ans['33']=""; $ans['34']=""; $ans['35']=""; $ans['36']="";
	
	$ans['47']=""; $ans['41']=""; $ans['42']=""; $ans['43']=""; $ans['44']=""; $ans['45']=""; $ans['46']="";
	
	$ans['57']=""; $ans['51']=""; $ans['52']=""; $ans['53']=""; $ans['54']=""; $ans['55']=""; $ans['56']="";
	
	$ans['67']=""; $ans['61']=""; $ans['62']=""; $ans['63']=""; $ans['64']=""; $ans['65']=""; $ans['66']="";
	
	if(($_REQUEST['11'] == $ans['11']) && ($_REQUEST['21'] == $ans['21']) && ($_REQUEST['12'] == $ans['12']))
	{
	}
	else
	{
	//	header("Location:test1.php");
	}
	echo $_REQUEST['12'];

?>

<form method="post" action="test3.php" >

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
				if( ($i == 3 && $j==1) || ($i == 3 && $j==2) || ($i == 3 && $j==3) )
					echo '<td><input type="text" id="'.$i.$j.'" name="'.$i.$j.'" style="width:30px;height:30px;" maxlength="1"/></td>';
				else
				{
					$temp=$ans[$i.$j];
					echo '<td id="cell_'.$i.$j.'">'.$temp.'</td>';
				}
			}
		echo "</tr>";
	}
?>

</table>
<input type="submit" value="submit" />
</form>