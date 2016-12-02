<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <?php
 include_once 'dbconfig.php';
 if(isset($_POST['btn-save']))
 {
 // variables for input data
  $name = $_POST['name'];
  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $homead = $_POST['homead'];
  $comment = $_POST['comment'];
  $gender = $_POST['gender'];
  // variables for input data
  
  // sql query for inserting data into database
  
         $sql_query = "INSERT INTO users(name,nickname,email,phone,homead,comment,gender) VALUES('$name','$nickname','$email','$phone','$homead','$comment','$gender')";
  mysqli_query($con,$sql_query);
        
       // sql query for inserting data into database
  
 }
 ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>add_data</title>
 <link rel="stylesheet" href="style.css" type="text/css" />
 </head>
 <body>
 <center>
 
 <div id="header">
  <div id="content">
     <label>hello!</label>
     </div>
 </div>
 <div id="body">
  <div id="content">
     <form method="post">
     <table align="center">
     <tr>
     <td align="center"><a href="homepage.php">back to main page</a></td>
     </tr>
     <tr>
     <td><input type="text" name="name" placeholder="Name" required /></td>
     </tr>
     <tr>
     <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
     </tr>
     <tr>
     <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
 	<tr>
     <td><input type="text" name="phone" placeholder="Phone Number" required /></td>
     </tr>
 	<tr>
     <td><input type="text" name="homead" placeholder="Home Address" required /></td>
     </tr>
 	<tr>
     <td><input type="text" name="comment" placeholder="Comment" required /></td>
   </tr>
 	<tr>
     <td><input type="text" name="gender" placeholder="Gender" required /></td>
     </tr>
     <tr>
     <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
     </tr>
 	
     </table>
     </form>
     </div>
 </div>
 
 </center>
 </body> 