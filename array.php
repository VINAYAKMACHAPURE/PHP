/*   Q.Write a PHP script to sort the followong assosciative array:
array("Sophia"=>"31","Jacob"=>"4","William"=>"39","Ramesh"=>"40") in
1.ascending order sort by value.
2.ascending order sort by key.
3.descending order sort by value.
4.descending order sort by key.
*/


<?php
$a=array("sophia"=>"31","jacob"=>"41","william"=>"39","Ramesh"=>"40");
 
 asort($a);
 echo ("<br>Array Sorted In Ascending Order By Value");
print_r($a);


ksort($a);
echo("<br>Array Sorted In Ascending Order By Key");
print_R($a);

arsort($a);
echo("<br>Array Sorted In Descending Order By value");
print_R($a);

krsort($a);
echo("<br>Array Sorted In Descending Order By Key");
print_R($a);


?>
