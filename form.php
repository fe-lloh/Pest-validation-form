<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $gender = $house = $phone =$email = $pest = $date= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input_input($_POST["name"]);
  $gender = input_input($_POST["gender"]);
  $house = input_input($_POST["house"]);
  $email = input_input($_POST["email"]);
  $pest = input_input($_POST["pest"]);
  $date =input_input($_POST["date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PEST VALIDATION FORM</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  gender: <input type="text" name="gender">
  <br><br>
  House: <input type="text" name="house">
  <br><br>
 Email: <input type="text" name="email">
  <br><br>
  Pest: <input type="text" name="pest">
  <br><br>
   Date: <input type="text" name="date">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $gender;
echo "<br>";
echo $house;
echo "<br>";
echo $email;
echo "<br>";
echo $pest;
echo "<br>";
echo $date;
echo "<br>";
?>

</body>
</html>