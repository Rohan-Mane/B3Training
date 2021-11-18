

<?php
//date()
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");       //gives day like monday,tuesday .... of the week

echo "<br>";

echo "<br>";

$d=mktime(11, 14, 54, 8, 12, 2021);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";

echo "The time is " . date("h:i:sa");

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
echo "<br>";

$d1=strtotime("10:30pm November 17 2021");
echo "Created date is " . date("Y-m-d h:i:sa", $d1);
echo "<br>";
echo "<br>";


include 'footer.php';

?>
<br>
<!-- &copy; 2018-<?php //echo date("Y");?> -->