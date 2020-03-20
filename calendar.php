<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<php?
//萬年曆程式 
//date計算 
$ctime = "+0"; //時差換算 
if(!isset($newyear)) {
$year = date("Y",time() + $ctime * 3600);
} else {
$year = $newyear;
}

if(!isset($newmon)) { 
$mon = date("n",time() + $ctime * 3600);
} else {
$mon = $newmon;
}
if(!isset($newday)) {
$day = date("j",time() + $ctime * 3600);
} else {
$day = $newday;
}
$timetemp = mktime(12,0,0,$mon,1,$year);

$year1 = date("Y",$timetemp); //該月之月初(年) 
$mon1 = date("n",$timetemp); //該月之月初(月)
$day1 = date("j",$timetemp); //該月之月初(日)
$day2 = date("t",$timetemp); //該月天數 
$day3 = date("w",$timetemp); //月初為星期幾 
if($day3 == 0) { $day3 = 7; }

//年計算
echo "<center>";
echo "移至";
echo "\n<select name=\"newyear\" on<x>change=\"MM_jumpMenu('self',this,0)\">\n";
for($i=($year-5);$i<=($year+5);$i++) {
if($i == $year) {
echo "<option value='index.php?newyear=$i&newmon=$mon&newday=$newday' selected>$i</option>\n";
} else {
echo "<option value='index.php?newyear=$i&newmon=$mon&newday=$newday'>$i</option>\n";
}
}
echo "</select> 年 ";
//月計算
echo "\n<select name=\"newmon\" on<x>change=\"MM_jumpMenu('self',this,0)\">\n";
for($i=1;$i<=12;$i++) {
if($i == $mon) {
echo "<option value='index.php?newmon=$i&newyear=$year&newday=$newday' selected>$i</option>\n";
} else {
echo "<option value='index.php?newmon=$i&newyear=$year&newday=$newday'>$i</option>\n";
}
}
echo "</select> 月 <br>";

for($i=1;$i<$day3;$i++) {
$days[$i] = "";
}
for($j=1;$j<=$day2;$j++) { 
$days[] = $j;
}
//列出日曆 
echo "
<font size='3'><b>$year 年 $mon 月</b></font>
<table border='0' cellspacing='0' cellpadding='3%' bgcolor='#DFDFDF'>
<tr align='center' bgcolor='silver' valign='bottom'>
<td><font size='2'><b>一</b></font></td>
<td><font size='2'><b>二</b></font></td> 
<td><font size='2'><b>三</b></font></td>
<td><font size='2'><b>四</b></font></td>
<td><font size='2'><b>五</b></font></td>
<td><font size='2'><b>六</b></font></td>
<td><font size='2'><b>日</b></font></td>
</tr>
<tr align='center'>";

//列出每日
//first row of days
for($i=1;$i<=7;$i++){
if($days[$i] == $day) //如為當日顯示紅色
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>";
else 
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>";
}
echo "</tr><tr align='center'>";
for($i=8;$i<=14;$i++){
if($days[$i] == $day)
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>";
else
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>";
}
echo "</tr><tr align='center'>";
for($i=15;$i<=21;$i++){
if($days[$i] == $day)
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>";
else
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>"; 
}
echo "</tr><tr align='center'>";
for($i=22;$i<=28;$i++){
if($days[$i] == $day)
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>"; 
else
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>"; 
} <br />
echo "</tr><tr align='center'>";
for($i=29;$i<=35;$i++){
if($days[$i] == $day)
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>";
else
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>";
}
echo "</tr><tr align='center'>";
for($i=36;$i<=37;$i++){
if($days[$i] == $day)
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2' color='red'>{$days[$i]}</font></a></td>";
else
echo "<td><a href='index.php?newyear=$year&newmon=$mon&newday=$days[$i]'><font face='sans-serif' size='2'>{$days[$i]}</font></a></td>";
}
echo "</tr><tr align='center'></table></center>";
//顯示現今日期
$nowyear = date("Y",time() + $ctime * 3600);
$nowmon = date("n",time() + $ctime * 3600);
$nowday = date("j",time() + $ctime * 3600); 
echo "<br><center><font size=2><b>今天日期 $nowyear 年 $nowmon 月 $nowday 日</font><br></center>";

//萬年曆結束
?>
</body>
</html>