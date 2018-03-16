<?php
include "connect.php";
if(isset($_POST["sub"]))

 {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "insert into user(name,email,password) VALUES('$name','$email', '$pass')";
        mysqli_query($conn,$qry);
       header('location:login.php');
    }
?>
<html>
<head>
<title> Customer Registration</title>
</head>
<body>
<h3 align="center">customer registration</h3>
<div class="header">
              
        </div>
        <div class="content" cellpading="2">
            <div class="disp">
                <form class="form" method="post">
                Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"></br><br>
                Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"></br><br>
                Password&nbsp;&nbsp;<input type="password" name="pass"></br><br>

                <input type="submit" name="sub" value="SIGN UP">
                <input type="reset">
            </form>
            </div> 
            
        </div>
