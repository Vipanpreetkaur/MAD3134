<html>
<head>
<meta charset="UTF-8">
<title>first page</title>
</head>
<body>
<h1> "hello" </h1>
<?php
print "Vipan" . "preet";
echo "Vipan" . "preet";
echo "this is my first program";
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");


$y=5;
echo " x = " . $x ;
echo "<br>";
	$a=10;
echo " y = " . $y ;
function get(){
	echo GREETING;
global $a;
static $x=4;
echo $x;
$x++;
	echo "<p>value is:$a</p>";
}
get();
echo "<p>$a</p>";
get();
echo"<br>";
get();
echo"<br>";
get();
echo"<br>";
get();
echo"<br>";
$age = array("Vipan"=>"20", "preet"=> "21", "kaur"=>"22");
foreach($age as $x => $x_value) {
	echo "key=" . $x . ", Value=" .$x_value;

}
$cars = array
(
array("a",2,18),
array("b",3,44)
);
echo $cars[0][0]. " in stock " .$cars[0][1].",sold:".$cars[0][2].".<br>";
echo $cars[1][0]. " in stock " .$cars[1][1].",sold:".$cars[1][2].".<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>