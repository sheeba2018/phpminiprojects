<!DOCTYPE html>
<html lang="en">
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<h2>Bordered Table</h2>
<?php
 echo '<table>';
 for($i=0; $i<15; $i++)
 {
  echo "<tr>";
  for($j=0; $j<5; $j++)
  {
    echo '<td>Row '.($i+1).' Cell '.($j+1).' </td>';
  }
  echo "</tr>";
  
 }
 echo "</table>";
?>
</body>
</html>

