<?php
include("connection.php");
error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1">
        <title>responsive form</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <div class="container">
            <h2>Registration Form</h2>
            <div class="form-container">
                  <form>

                    <div class="input-name">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="First Name" name="firstname" class="name">

                        <span>
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="roll no" name="rollno" class="name">

                        </span>
                    </div>

                    <div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="text" placeholder="department" name="department" class="text-name">

                    </div>

                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <input type="text" placeholder="hostel" name="hostel" class="text-name">

                    </div>

                   
               
             

                    

                   

                    <div class="input-name">
                        <input type="submit" class="button" name="submit" value="Register">
                    </div>

                    <?php
                    $fn=$_GET['firstname'];
                    $rn=$_GET['rollno'];
                    $de=$_GET['department'];
                    $ho=$_GET['hostel'];
                   

                    $query="insert into student values ('$fn','$rn','$de','$ho')";
                    $data=mysqli_query($conn,$query);   
                    if($data){
                        echo "data inserted into database";
                    }    
                    else{
                        echo "failed to insert";
                    }      
                    ?>
                       
                       
                     






                  </form>
            </div>
        
         </div>
    </body>
</html>