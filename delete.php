<?php 
 include 'connect.php';

 if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];
    $sql3= "DELETE FROM `student` WHERE ID = $id";
    $result3= mysqli_query($conn,$sql3);
    if(!$result3){
        die("Delete failed");
    }
    header('location:index.php');
 }

?>