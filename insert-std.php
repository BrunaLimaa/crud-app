<?php
include("connect.php");

    if(isset($_POST['add_students'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; 

        if(empty($name) || empty($email) || empty($password)){
            header('Location: index.php?message=Preencha todos os campos!');

        } else {

        $query = "INSERT INTO `students` (`name`, `email`, `password`) VALUES('$name','$email','$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            header('Location: index.php?message=Estudante adicionado com sucesso!');
        } else {
            header('Location: index.php?message=Erro ao adicionar estudante!');
        }
    }
}

?>