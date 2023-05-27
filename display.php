<html>
    <head>
        <title>
            display records
</title>
</head>

<body>
    <table border="2">

    <tr>
        <th>first name</th>
        <th>roll no</th>
        <th>department</th>
        <th>hostel</th>
        
</tr>

<?php
include("connection.php");
error_reporting(0);
$query="select * from student";
$data=mysqli_query($conn,$query);
$total=mysqli_fetch_assoc($data);
$result=mysqli_fetch_assoc($data);

if($total!=0)
{

     while($result=mysqli_fetch_assoc($data))
     {
        echo "
        <tr>
        <td>".$result['first name']."</td>
        <td>".$result['roll no']."</td>
        <td>".$result['department']."</td>
        <td>".$result['hostel']."</td>
    
        </tr>
        ";


     
    }
}





        