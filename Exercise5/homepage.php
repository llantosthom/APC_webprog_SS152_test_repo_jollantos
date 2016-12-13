<!DOCTYPE html>
 <html>
 <head>
 <style>
	body {
    background-color: #e6f9ff;
	text-align: center;
	font-family: verdana;
}
#b {background-color: #ccf3ff;}
	div a {
    text-decoration: none;
    color: black;
	padding: 5px;
    font-size: 20px;
    display:inline-block;
	}
	#header
{
 width:100%;
 height:50px;
 background:#00a2d1;
 color:#f9f9f9;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}
	
	table {
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:#999;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:#00a2d1;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:#00a2d1;
 padding:9px 15px 9px 15px;
 color:#f9f9f9;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
	
    
 
 
 
 

 
 
 
 
 
   </style>
 <?php
 include_once 'dbconfig.php';
 
 // delete condition
 if(isset($_GET['delete_id']))
 {
  $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
  mysqli_query($con,$sql_query);
  header("Location: $_SERVER[PHP_SELF]");
  }
 // delete condition
 ?>
  

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Thomas</title>
 
 <script type="text/javascript">
 function edt_id(id)
 {
  if(confirm('Sure to edit ?'))
  {
   window.location.href='edit_data.php?edit_id='+id;
  }
  }
 function delete_id(id)
 {
  if(confirm('Sure to Delete ?'))
  {
   window.location.href='homepage.php?delete_id='+id;
  }
  }
 
 </script>
  </head>
 <center>
  <body>

 <div id='b'> 
 <hr width="120%" size="2" color="teal">
<a href="homepage.php" target.xml> | Home
<a href="javascript.html" target.xml>| About Me | 
<a href="javascript2.html" target.xml> Trivias | 
</a>
<hr width="120%" size="2" color="teal">
</div>
  
 <div id="table">
  
     <table align="center">
	 
	 
     <tr>
	 
     <th colspan="9"><a  href="add_data.php">add data here.</a></th>
	 
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
  $sql_query="SELECT * FROM users";
  $result_set=mysqli_query($con,$sql_query);
  while($row=mysqli_fetch_row($result_set))
  {
   ?>
   
         <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
 		<td><?php echo $row[4]; ?></td>
 		<td><?php echo $row[5]; ?></td>
 		<td><?php echo $row[6]; ?></td>
 		<td><?php echo $row[7]; ?></td>
 		
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