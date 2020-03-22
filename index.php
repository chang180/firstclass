<?php
echo "Hello World!";
$aa;
$bb;
$cc;
?>
<!-- 終端機視窗： ctrl+` -->
<h1>hello world</h1>


<?php
// <!-- 增加一行註解，測試git版本更新的功能 -->
define("PI",3.14);
echo PI."<br>";
echo pi()."<br>";
echo M_PI."<br>"; //M_PI為常數，執行效率比pi()快


$a=true;
echo $a."<br>";
echo !$a."<br>";

// 直譯式語言，運算子會有先後順序，須注意控制效果
$b=1;
echo $b++."<br>";
echo ++$b."<br>";
echo $b."<br>";
echo "<br>";



// 抄一個太空船運算符參考一下
// 整型比较
print( 1 <=> 1);print(PHP_EOL."<br>");
print( 1 <=> 2);print(PHP_EOL."<br>");
print( 2 <=> 1);print(PHP_EOL."<br>");
print(PHP_EOL); // PHP_EOL."<br>" 为换行符

// 浮点型比较
print( 1.5 <=> 1.5);print(PHP_EOL."<br>");
print( 1.5 <=> 2.5);print(PHP_EOL."<br>");
print( 2.5 <=> 1.5);print(PHP_EOL."<br>");
print(PHP_EOL);

// 字符串比较
print( "a" <=> "a");print(PHP_EOL."<br>");
print( "a" <=> "b");print(PHP_EOL."<br>");
print( "b" <=> "a");print(PHP_EOL."<br>");



?>
