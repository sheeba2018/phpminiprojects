<?php

class Calculator {
    function calc($oper, $op1, $op2){
        if(!isset($oper)|| !isset($op1)|| !isset($op2))
        {
            echo'missing data<br>';
            return;
        }
        switch($oper){
            case '+':
                echo ($op1+$op2).'<br>';
                break;
            case '-':
                echo ($op1-$op2).'<br>';
                break;
            
            case '*':
                echo ($op1*$op2).'<br>';
                break;
            case '/':
                if($op2==0)
                {
                    echo'canot divide by zero<br>';
                    break;
                }
                echo ($op1/$op2).'<br>';
                break;
        }
        
           
        
    }
}
