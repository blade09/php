<!--
This is the basic currency convertor which I have created using PHP.This is my first small project in PHP.

NB:One thing I want to add is that in this project I haven't included every currency.

©Bunty Chakraborty
Founder of Algorin Technical Productions(Youtube Channel);

-->



<!DOCTYPE html>
<html>
<head>
<title>Currency Converter in PHP</title>
</head>
<body bgcolor="skyblue">
<form method="post" action="#" align="center">
<b>Enter Amount:</b>
<input type="text" name="amount" size="10" placeholder="Enter Amount"/>
<b>From:</b>
<select name="from">
<option>USD</option>
<option>GBP</option>
<option>PKR</option>
<option>INR</option>
<option>MYR</option>
<option>AED</option>
</select>
<b>To:</b>
<select name="to">
<option>USD</option>
<option>GBP</option>
<option>PKR</option>
<option>INR</option>
<option>MYR</option><option>AED</option>
</select>
<input type="submit" name="convert" value="Convert Now!"/>
</form><hr>
<?php
if(isset($_POST['convert'])){
$amount = $_POST['amount'];
$from = $_POST['from'];
$to = $_POST['to'];
if($from=='USD' AND $to=='PKR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*101;
echo " Pakistani Rupees!</b></h2></center>";
}
if($from=='USD' AND $to=='INR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*64.92;
echo " Indian Rupees!</b></h2></center>";
}
if($from=='USD' AND $to=='AED'){echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*4;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='USD' AND $to=='GBP'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.60;
echo " British Pound!</b></h2></center>";
}
if($from=='USD' AND $to=='MYR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*3.20;
echo " Malaysian Ringgits!</b></h2></center>";
}

if($from=='INR' AND $to=='USD'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/64.92;
echo " United States Dollars!</b></h2></center>";
}
if($from=='AED' AND $to=='USD'){echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/4;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='GBP' AND $to=='USD'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/0.60;
echo " United States Dollars!</b></h2></center>";
}
if($from=='MYR' AND $to=='USD'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/3.20;
echo " United States Dollars!</b></h2></center>";
}
if($from=='PKR' AND $to=='USD'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/101;
echo "United States Dollars!</b></h2></center>";
}
if($from=='PKR' AND $to=='INR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.62;
echo " Indian Rupees!</b></h2></center>";
}
if($from=='PKR' AND $to=='MYR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.042;
echo " Malaysian Ringgits!</b></h2></center>";
}
if($from=='PKR' AND $to=='GBP'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.0077;
echo " British Pound!</b></h2></center>";
}
if($from=='PKR' AND $to=='AED'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.035;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='INR' AND $to=='PKR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*1.61;
echo " Pakistani Rupees!</b></h2></center>";
}
if($from=='INR' AND $to=='AED'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.057;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='INR' AND $to=='MYR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.068;
echo " Malaysian Ringgit!</b></h2></center>";
}
if($from=='INR' AND $to=='GBP'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.012;
echo " British Pound!</b></h2></center>";
}
if($from=='GBP' AND $to=='INR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*80.78;
echo "Indian Rupees!</b></h2></center>";
}
if($from=='GBP' AND $to=='AED'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*4.57;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='GBP' AND $to=='PKR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*130.40;
echo " Pakistani Rupees!</b></h2></center>";
}
if($from=='GBP' AND $to=='MYR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*5.50;
echo " Malaysian Ringgit!</b></h2></center>";
}
if($from=='AED' AND $to=='INR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*17.68;
echo " Indian Rupees!</b></h2></center>";
}
if($from=='AED' AND $to=='GBP'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/4.57;
echo " British Pound!</b></h2></center>";
}
if($from=='AED' AND $to=='PKR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/0.035;
echo " Pakistani Rupees!</b></h2></center>";
}
if($from=='AED' AND $to=='MYR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount/0.035;
echo " Malaysian Ringgit!</b></h2></center>";
}
if($from=='MYR' AND $to=='INR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*14.69;
echo " Indian Rupees!</b></h2></center>";
}
if($from=='MYR' AND $to=='AED'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.83;
echo " UAE Dirham!</b></h2></center>";
}
if($from=='MYR' AND $to=='GBP'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*0.18;
echo " British Pound!</b></h2></center>";
}
if($from=='MYR' AND $to=='PKR'){
echo "<center><h2>Your Answer is:<b style='color:brown;'>";
echo $amount*23.72;
echo " Pakistani Rupees!</b></h2></center>";
}
}
?>
</body>
</html>
