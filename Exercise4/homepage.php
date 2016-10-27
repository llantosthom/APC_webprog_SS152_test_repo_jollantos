<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #e6f9ff;
	
	font-family: verdana;
}
p.one {
	font-size: 200%;
	padding-top: 50px;
	text-align: center;
}
h1 {
	font-family: Satisfy, cursive;
	font-weight:normal;
    color: maroon;
	font-size: 450%;
	padding-top: 50px;
	text-align: center;
}
.button {
  display: inline-block;
  border-radius: 8px;
  background-color: powderblue;
  border: none;
  color: maroon;
  text-align: center;
  font-size: 25px;
  padding: 20px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.800s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
div {background-color: #ccf3ff;}
div a {
    text-decoration: none;
    color: black;
	padding: 5px;
    font-size: 20px;
    display:inline-block;

}


</style>
</head>
<center>
<body>
<div>
<hr width="120%" size="2" color="teal">
<a href="homepage.php" target.xml> | Home
<a href="javascript.html" target.xml>| About Me | 
<a href="javascript2.html" target.xml> Trivias | 
</a>
<hr width="120%" size="2" color="teal">
</div>
</center>



<center>
<?php


// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $phoneErr = $homeadErr = "";
$name =$nickname= $email = $gender = $comment = $phone = $homead = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-0-9]*$/",$name)) {
      $nameErr = "Only letters,numbers and white space allowed"; 
    }
  }
    if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if (empty($_POST["phone"])) {
    $phoneErr = "Phonenumber is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^([0-9]*)$/",$phone)) {
      $phoneErr = "Only numbers allowed"; 
    }
  }
    
  if (empty($_POST["homead"])) {
    $homead = "";
  } else {
    $homead = test_input($_POST["homead"]);
    }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h1> Registration </h1>
<p class="one"><span class="error">Required items have " * " beside them.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phonenumber : &nbsp;
  <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Home Address: &nbsp;&nbsp;&nbsp;
  <input type="text" name="homead" value="<?php echo $homead;?>">
  <span class="error"><?php echo $homeadErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="4" cols="30"><?php echo $comment;?> </textarea>
  <br><br>
  Gender:  &nbsp;&nbsp;
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
  <br>
  <br>
  <button class="button" style="vertical-align:middle"><span>Submit </span></button>

</form>
<p class="one">Your Input:</p>

<?php
echo "Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $name;
echo "<br>";
echo "Nickname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $nickname;
echo "<br>";
echo "Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $email;
echo "<br>";
echo "Home Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;";
echo $homead;
echo "<br>";
echo "Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $gender;
echo "<br>";
echo "Cell phone number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $phone;
echo "<br>";
echo "Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo $comment;
echo "<br><br>";
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>
</body>
</html>