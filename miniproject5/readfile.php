
<?php

$myfile = file_get_contents('./file.txt');
$string = explode(";",$myfile);

for($x=0; $x<count($string);$x++) {
   $tempvar=explode(",",$string[$x]);
   $string[$x]=$tempvar[1].','.$tempvar[0];
}
asort($string);
foreach($string as $names)
{
    echo $names."<br/>";
}
fclose($myfile);
?>
