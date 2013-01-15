<html>
<title>Math Modelling Kurukshetra</title>


<body>
<table border="1">

<?php
$row= 7;
$column = 7;
//echo "<th>Name</th><th>College</th><th>City</th>";
for ($i=1; $i<=$row; $i++)
  {
  Print '<tr>';
  for($j=1;$j<=$column;$j++)
  	{
 	 echo '<td><input type="text" name = "cell_'.$i.$j.'" style="width:30px;height:30px;" maxlength="1"> </input></td>';
 	}
  echo'</tr>';
  }
?>

</table>

<br/>
<Button name="Submit">Submit</Button>

<?php
//echo $_GET["cell_11"];
?>





</body>

</html>