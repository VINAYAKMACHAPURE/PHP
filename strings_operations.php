<html>
<body>
<form method="post" action="#">
	Enter String:
	<input type="text" name="t1"><br>
	<input type="radio" name="r1" value="1">
	Length Of String <br>
	<input type="radio" name="r1" value="2">
	Vowels Count <br>
	<input type="radio" name="r1" value="3">
	Lower and Title Case<br>
	<input type="radio" name="r1" value="4">
	Padding Both Side <br>
	<input type="radio" name="r1" value="5">
	Remove Spaces <br>
	<input type="radio" name="r1" value="6">
	Reverse String <br>
	<input type="submit">
	</form>
</body>
</html>

<?php
$s=$_POST["t1"];
$ch=$_POST["r1"];
switch ($ch)
 {
	case '1':
		$length=0;
		while (isset($s[$length]))
		{
			$length++;
		}
		echo("<br> length=".$length);
		break;

	case '2':
	 $c=0;
  	for($i=0;$i<strlen($s);$i++)
  	{
  		if($s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u')
  	       $c=$c+1;
  	}
  	echo("<br>Total vowels=".$c);
    break;

     case '3':
     echo("<br> Lowercase String =".strtolower($s));
     echo ("<br> Title String =".ucwords($s));
     break;

     case '4':
     $s1=str_pad($s,15,"*");
     echo("<br> Padding String =".$s1);
     break;

     case '5':
     $s1=trim($s);
     echo("<br> Removed spaces=".$s1);
     break;

     case'6':
     $s1=strrev($s);
     echo ("<br>Revrsed String=".$s1);
     break;

	default:
	echo ("Invalid Choice");
		break;
}
?>