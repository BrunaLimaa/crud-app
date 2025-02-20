<?php 
include("connect.php");

 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `students` WHERE `id` =".$id;
    
    $result = mysqli_query($connection, $query);
    if($result){
        header("Location: index.php?message=Student deleted succesfully!");
    } else {
        header("Locaton: index.php?message=" . mysqli_error($connection, $query));
        
    }

 }

?>