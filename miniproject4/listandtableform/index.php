<?php
$radio = "";
$number1 = "";
$number2 = "";
$answer = "";
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    if (isset($_POST['listtable']))
        $radio = $_POST['listtable'];
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
   /* $flag = true;*/

    if ($radio == 'list') {
        if (is_numeric($number1) && is_numeric($number2)) {

            $answer = "<ul>";
            for ($i = 0; $i < $number1; $i++) {
                $answer .= "<li>" . ($i + 1) . "</li>";
                $answer .= "<ul>";
                for ($j = 0; $j < $number2; $j++) {
                    $answer .= "<li>" . ($j + 1) . "</li>";
                }
                $answer .= "</ul>";
            }
            $answer .= "</ul>";
        } else {
            $answer = 'please enter only number';
        }
    } elseif ($radio == 'table') {
        if (is_numeric($number1) && is_numeric($number2)) {
            $answer = '<table>';
            for ($i = 0; $i < $number1; $i++) {
                $answer .= "<tr>";
                for ($j = 0; $j < $number2; $j++) {
                    $answer .= '<td>Row ' . ($i + 1) . ' Cell ' . ($j + 1) . ' </td>';
                }
                $answer .= "</tr>";
            }
            $answer .= "</table>";
            //echo 'createlisttable';
        } else {
            $answer = 'please enter only number';
        }
    }else{
        $answer='Please select the one Radio Button';
    }
    
}
?>



<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>&lt;My Web Page&gt;</title>
        <style>
      
table, th, td {
    border: 1px solid black;
}
        </style>


    </head>
    <body>
        <form action="" method="post">
            <input type="radio" name="listtable" value="list">Create List<br>
            <input type="radio" name="listtable" value="table">Create Table<br>
            <br/>
            <p>Number of rows or outer unordered List</p>
            <input type="text" name="num1"/>
            <br/>
            <p>Number of cells of inner unordered List</p>
            <input type="text" name="num2"/>
            <br/>
            <input type="submit"  name="submit" value="Generate List or Table"/>

        </form>
        <br/>
        <?php
        echo $answer;
        ?>	

    </body>
</html>	
