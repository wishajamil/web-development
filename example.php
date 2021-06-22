
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $age = $education = $contact = $email = $phone = $address = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $age = test_input($_POST["age"]);
  $education = test_input($_POST["education"]);
  $contact = test_input($_POST["contact"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $address = test_input($_POST["address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <textarea type="text" name="name"></textarea>
  <br>
  Age: <textarea type="text" name="age"></textarea>
  <br>
  Education: <textarea type="text" name="education"></textarea>
  <br>
  Contact: <textarea type="text" name="contact"></textarea>
  <br>
  E-mail: <textarea type="text" name="email"></textarea>
  <br>
  Phone: <textarea type="text" name="phone"></textarea>
  <br>
  Address: <textarea type="text" name="address"></textarea>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $education;
echo "<br>";
echo $contact;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $address;
?>

</body>
</html>