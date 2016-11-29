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
 <?php
 include_once 'dbconfig.php';
 
 // delete condition
 if(isset($_GET['delete_id']))
 {
  $sql_query="DELETE FROM dbtuts WHERE name=".$_GET['delete_id'];
  mysql_query($sql_query);
  header("Location: $_SERVER[PHP_SELF]");
  }
 // delete condition
 ?>
  
 .button:hover span:after {
   opacity: 1;
   right: 0;
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Thomas</title>
 <link rel="stylesheet" href="style.css" type="text/css" />
 <script type="text/javascript">
 function edt_id(id)
 {
  if(confirm('Sure to edit ?'))
  {
   window.location.href='edit_data.php?edit_id='+id;
  }
  }
 div {background-color: #ccf3ff;}
 div a {
   text-decoration: none;
     color: black;
 	padding: 5px;
     font-size: 20px;
     display:inline-block;
 
 function delete_id(id)
 {
  if(confirm('Sure to Delete ?'))
  {
   window.location.href='index.php?delete_id='+id;
  }
  }
 
 
 </style>
 </script>
  </head>
 <center>
  <body>
 <div>
 <hr width="120%" size="2" color="teal">
 <center>
 
 <div id="header">
  <div>
 
  <a href="homepage.php" target.xml> | Home
  <a href="javascript.html" target.xml>| About Me | 
  <a href="javascript2.html" target.xml> Trivias | 
  </a>
 <hr width="120%" size="2" color="teal">
 </div>
 </center>
  
 </div>
 </div>
  
 <div id="body">
  <div id="content">
     <table align="center">
     <tr>
     <th colspan="8"><a href="add_data.php">add data here.</a></th>
     </tr>
    <th>Name</th>
     <th>Nickname</th>
     <th>Email</th>
 	<th>Phone</th>
 	<th>Home Address</th>
 	<th>Comment</th>
 	<th>Gender</th>
 	
   <th colspan="2">Operations</th>
     </tr>
     <?php
  $sql_query="SELECT * FROM dbtuts";
  $result_set=mysqli_query($con,$sql_query);
  while($row=mysqli_fetch_row($result_set))
  {
   ?>
         <tr>
         <td><?php echo $row[0]; ?></td>
         <td><?php echo $row[1]; ?></td>
       <td><?php echo $row[2]; ?></td>
 		<td><?php echo $row[3]; ?></td>
 		<td><?php echo $row[4]; ?></td>
 		<td><?php echo $row[5]; ?></td>
 		<td><?php echo $row[6]; ?></td>
 		
   <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
         <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
         </tr>
         <?php
  }
  ?>
     </table>
     </div>
 </div>
  
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
 
 
 </center>
  </body>
  </html> 