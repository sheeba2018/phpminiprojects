<?php
include 'Calculator.php';

$calc=new Calculator();
$number1=""; 
$number2="";
$answer="";
if(isset($_POST['num1'])&& isset($_POST['num2']))
{
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $flag = true;
     
    $oper=$_POST['selectaoperator'];
    if(is_numeric($number1)&& is_numeric($number2)){
        $answer= $calc->calc($oper, $number1, $number2);
   }
   else
   {
       $answer="please enter only number";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>&lt;My Web Page&gt;</title>
    <style>
	
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <form action="" method="post">
            <select name="selectaoperator">
                <option value="select">Select a Operator</option>
                <option value="+">Add</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiply</option>
                <option value="/">Division</option>
            </select>
            <br/>
            <p>Enter First Number</p>
            <input type="text" name="num1"/>
            <br/>
            <p>Enter Second Number</p>
            <input type="text" name="num2"/>
            <br/>
            <input type="submit" class="btn-primary" name="submit" value="Calculate Numbers"/>

        </form>
        <?php
            echo "Answer: ".$answer;

        ?>
    </div>
	

</body>
</html>	


