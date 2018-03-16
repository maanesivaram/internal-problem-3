
<?php
include "connect.php";
if(isset($_SESSION["email"])) 
header('user.php');

    if(isset($_POST["sub"])) 
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `user` WHERE  `email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION["email"] = $row['email'];
            header('location:user.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>customer login</title>
    </head>   
    <body>
        <div class="header">
            <?php include "includes/header.php"?>   
        </div>
        <div class="content">
            <div class="disp">
                <h2>CUSTOMER LOGIN</h2>
                <h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="">
                Email&nbsp;&nbsp;&nbsp;:<input type="text" name="email"></br><br>
                Password:<input type="password" name="pass"></br><br>
                <input type="submit" name="sub" value="SIGN IN">
            </form>
            </div> 
            
        </div>
    </body>  
</html>
