<!--
This is the most basic calculator which I have created in PHP.


-->



<!DOCTYPE html>
<html>
<head>
<title>Calculator in PHP</title>
</head>
<body bgcolor="skyblue">
<form method="post" action="#" align="center">
<b>Value 1:</b>
<input type="text" name="value1" size="10" placeholder="Enter a value"/>
<b>Value 2:</b>
<input type="text" name="value2" size="10" placeholder="Enter a value"/>
<b>Select Operator:</b>
<select name="operator">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="submit" name="cal" value="Calculate"/>
</form><hr>
<?php
if(isset($_POST['cal'])){
$value1 = $_POST['value1'];$value2 = $_POST['value2'];
$opt = $_POST['operator'];
if($opt=='+'){
echo "<center><h2>Your Answer is: <b style='color:brown;'>";
echo $value1+$value2;
echo "</b></h2></center>";
}
if($opt=='*'){
echo "<center><h2>Your Answer is: <b style='color:brown;'>";
echo $value1*$value2;
echo "</b></h2></center>";
}
if($opt=='-'){
echo "<center><h2>Your Answer is: <b style='color:brown;'>";
echo $value1-$value2;
echo "</b></h2></center>";
}
if($opt=='/'){echo "<center><h2>Your Answer is: <b style='color:brown;'>";
echo round($value1/$value2);
echo "</b></h2></center>";
}
}
?>
</body>
</html>
