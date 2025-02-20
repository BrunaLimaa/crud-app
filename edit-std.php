<?php
include("connect.php");
include("header.php"); 


if(isset($_GET['id'])){
    $id = $_get['id'];

    $query = 'SELECT * FROM `students` WHERE `id` = '.$id;
    $result = mysqli_query($connection, $query);

    if(!$result){
        
    }
}

?>



<form>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
</form>



<?php
include("footer.php");
?>