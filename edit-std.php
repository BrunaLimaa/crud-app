<?php
include("connect.php");
include("header.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = 'SELECT * FROM `students` WHERE `id` = ' . $id;
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('falha: ' . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);


    }
}


if (isset($_POST['edit-students'])) {

    if (isset($_GET['id_new'])) {
    $idnew = $_GET['id_new']; }

    $name = $_POST['name']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = 'UPDATE `students` SET `name`="'.$name.'", `email`="'.$email.'", `password`="'.$password.'" WHERE `id` = '.$idnew;
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die('falha: ' . mysqli_error($connection));
    } else {
        header('Location: index.php?message=Estudante editado com sucesso!');


    }

}


?>


<form action="edit-std.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
    </div>

    <input type="submit" name="edit-students" class="btn btn-success" id="save-edit" value="Save Changes">
</form>



<?php
include("footer.php");
?>