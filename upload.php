<?php
   require "connect.php";
   session_start();
    if(isset($_POST['sub'])){
      	$name=$_POST['pname'];
      	$des=$_POST['des'];
		if(isset($_FILES['image'])){
	    	 $filename=$_FILES['image']['name']; 
	    	 $tmpname=$_FILES['image']['tmp_name'];
             $filesize=$_FILES['image']['size'];  
     	
	     	move_uploaded_file($tmpname,"uploads/".$filename);
	     	$qry="INSERT INTO `property`(pname,description,image)VALUES('$name','$des','$filename')";
	     	mysqli_query($conn,$qry);
		}
		else{"select a file";
		}
		
	}
?>
<!DOCTYPE html>
<html>
      <head>
           <title>upload property</title>
      </head>
      <body>
<h3 align="center">property upload</h3>
<div class="header">
              
        </div>
        <div class="content" cellpading="2">
            <div class="disp">
                <form class="form" method="post">
			<form action="" method="post" enctype="multipart/form-data">
			     <label>Property Name:</label>
			     <input type="text" name="pname" required></br><br>
			     <label>Description:</label>
			     <textarea rows="10" cols="100" name="description"></textarea></br><br>
			     <label>Upload image:</label>
			     <input type="file" name="image"></br><br>
			      <input type="submit" name="sub" value="upload property"> <input type="reset"></br><br>
			</form>
      </body>
</html>

