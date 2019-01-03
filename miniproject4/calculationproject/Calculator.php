<?php
class Calculator {
    function calc($oper, $op1, $op2){
        if(!isset($oper)|| !isset($op1)|| !isset($op2))
        {
            return 'missing data';
            
        }
        if(!is_numeric($op1)||!is_numeric($op2))
        {
            return "Please enetr the numbers only";
        }
        switch($oper){
            case '+':
                return "The sum of these numbers is: ".($op1+$op2);
                
            case '-':
               return "the first num subtracted from the second is: ".($op1-$op2);
               
            
            case '*':
               return "the product of the two numbers is: ".($op1*$op2);
             
            case '/':
                if($op2==0)
                {
                    return'canot divide by zero';
                 
                }
                return "the division of two numbers: ".($op1/$op2);
               
            default:
                return "Invalid operator";
        }
    }
}
?>
