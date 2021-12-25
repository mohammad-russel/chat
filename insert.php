<?php
session_start();
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "mychat");
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE nam ='{$name}' AND pass ='{$password}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION["nam"] = $row['id'];
    if (mysqli_num_rows($result) > 0) {
        header("location:user.php");
    } else {
        header("location:index.php");
        echo "not match";
    }
}
