<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>&lt;My Web Page&gt;</title>
	<style>
	body { border-left: 1px solid blue; }
</style>

	
</head>
<body>

<?php
echo "<p>Nested Loop</p>";
echo "<ul>";
for($i =0; $i<4; $i++){
  echo "<li>".($i+1)."</li>";
  echo "<ul>";
  for($j=0;$j<5;$j++){
    echo "<li>".($j+1)."</li>";
  }
  echo "</ul>";
}
echo "</ul>";
?>	

</body>
</html>	

