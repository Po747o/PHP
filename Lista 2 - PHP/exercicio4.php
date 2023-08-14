<?php
$num1= $_POST["numero1"];
$num2= $_POST["numero2"];
$opc= $_POST["opc"];


switch($opc){
  case 1:
    echo $num1 , '+' , $num2 , '=' , $num1 + $num2;
    break;

    case 2:
      echo $num1 , '-' , $num2 , '=' , $num1 - $num2;
      break;

      case 3:
        echo $num1 , 'x' , $num2 , '=' , $num1 * $num2;
        break;

        case 4:
          echo $num1 , '/' , $num2 , '=' , $num1 / $num2;
          break;
}


?>