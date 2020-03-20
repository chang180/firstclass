<?php
define("PI",3.14);
echo PI."<br>";

echo M_PI."<br>"; //這是定值，比較快
echo pi()."<br>"; //這是函數，慢一點點

$a=1;
$a=2.1;
echo $a."<br>";
print($a)."<br>";

$studentInSchool=true;


$c=-1;
if($c) echo "true";
else echo "false";
echo "<br>";
if(false==false) echo "true";
else echo "false";

?>