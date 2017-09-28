<html>
<body>
<?php
$errname="";
$name = "";
$erremail="";
$email="";
$rdo1=$rdo2=$rdo3=$errrdo="";
$tech=array();
$url="";
$errurl="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset ($_POST["name"])){
if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){
	$errname="Only letters and white spaces alowed";
}
else{
	$name=$_POST["name"];
}
}
if (empty ($_POST["name"])){
$errname="Please enter your name";
}
}


if(isset ($_POST["email"])){
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	  $erremail = "Invalid email format"; 
	}
	else{
		$email=$_POST["email"];
	}
}
if (empty ($_POST["email"])){
	$erremail="Please enter your email";
}

if(isset($_POST["tech"])){
	$tech=$_POST["tech"];
}


if(isset ($_POST["url"])){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL"; 
}
}
if (empty ($_POST["url"])){
$errurl="Please enter your url";
}



if (isset($_POST["frequency"])){
	if ($_POST["frequency"]=="Weekly"){
		$rdo1="checked";
	}
	else if ($_POST["frequency"]=="monthly"){
		$rdo2="checked";
	}
	else if($_POST["frequency"]=="yearly"){
		$rdo3="checked";
	}
}
else{
	$errrdo="please select radio button";
}


echo "<h1>" . $email . "asdf</h1>";

var_dump($_POST);

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >
<label for="name">Name:</label><br>
 <input type="text" name="name"  placeholder="Enter name" value="<?php echo htmlspecialchars($name) ?>"><br>
 <span style="color:red"><?php echo $errname ?></span><br>
<label for="mail"  placeholder="Enter Email ID" >E-mail:</label><br>
 <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
 <span style="color:red"><?php echo $erremail ?></span><br>
 <label for="address">Address</label><br>
 <textarea name="address"></textarea><br>
 <label for="link" >Linked In Profile</label><br>
 <input type="text" name="link" value="<?php echo htmlspecialchars($url) ?>" placeholder="Enter your linkedIn profile URl"><br>
  <span style="color:red"><?php echo $errurl ?></span><br>
 Which Technology you are interested in?<br>

 <select name="tech[]" size=4 >
<?php
 $techList = array("PHP","Java", "Android", "iOS", "Shell Scripting");
 $cnt = count($techList);
 for($i=0;$i<$cnt;$i++){
	 echo '<option value="'. $techList[$i] . '"';
	 if(in_array($techList[$i],$tech)){
		 echo "Selected";
	 }
	 echo '>' . $techList[$i].'</option>';
 } ?>

</select><br>
  <input type="checkbox" name="php">Would you like to Subscribe our newsleter?<br>

 How frequent do you want to receive the newsletter?<br>
 <input type="radio" name="frequency" value="<?php echo htmlspecialchars($rdo1) ?>">Weekly<br>
 <input type="radio" name="frequency" value="<?php echo htmlspecialchars($rdo2) ?>">Monthly<br>
  <input type="radio" name="frequency" value="<?php echo htmlspecialchars($rdo3) ?>">Yealy<br>
   <span style="color:red"><?php echo $errrdo ?></span><br>
<input type="submit">
</form>

</body>
</html>