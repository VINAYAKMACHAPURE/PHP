<html>
<body>
	<form method="post" action="#">
	enter first number:
	<input type="number" name="t1"> <br>
	enter second number:
	<input type="number" name="t2"> <br> 
    <input type="radio" name="r1" value="1"> Addition <br>
    <input type="radio" name="r1" value="2"> Multiplication <br>
    <input type="radio" name="r1" value="3"> Substraction <br>
    <input type="radio" name="r1" value="4"> Division <br>
    <input type="submit">
</form>
</body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
switch ($ch)
{

	case 1: $c=$a+$b;
	  echo("<br>Addition=".$c);
	  break;

	 case 2: $c=$a*$b;
       echo("<br>Multiplication=".$c);
       break;

     case 3:$c=$a-$b;
     echo("<br>Substraction=".$c);
     break; 
     
     

     case 4: $c=$a/b;
     echo("<br>Division".$c);
     break;
      
}
?>