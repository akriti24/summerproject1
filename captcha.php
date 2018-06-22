<?php
 session_start();
 $first_num=rand(1,10);
 $sec_num=rand(1,10);
 $operators=array("+","-","*");
 $operator=rand(0,count($operators)-1);
 $operator=$operators[$operator];
 $answer=0;
 switch($operator)
 {
	 case "+":
		$answer=$first_num + $sec_num;
		break;
	case "-":
		$answer=$first_num - $sec_num;
		break;
	case "*":
		$answer=$first_num * $sec_num;
 break;
 }
 $_SESSION["answer"]=$answer;
 
 
		
?>

