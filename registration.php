<?php
include 'db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $id = $_POST['id'];   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO fatih (id, username, password) VALUES ('$id', '$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: register.php');
    } else {
        header('Location: register.php?error=Registrasi gagal');
    }
} else {
    header('Location: register.php');
}
?>