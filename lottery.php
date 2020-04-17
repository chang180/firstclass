<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩_php</title>
</head>
<body>
    <h2>
<?php

$roll=array_rand(range(1,38),6);
$special = array_rand(range(1,8));

echo "A區的號碼為";
foreach($roll as $value) echo ($value+1)."&nbsp";
echo "<br>"."<br>"."B區的號碼為".($special+1);

?>
</h2>
</body>
</html>