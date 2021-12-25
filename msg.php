<?php

session_start();
$userid = $_SESSION["nam"];

$con = mysqli_connect("localhost", "root", "", "mychat");
$sql = "SELECT * FROM user WHERE id={$userid}";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    $outg = $row['unid'];
}
if (isset($_POST['submit'])) {
    $in = $_POST['incoming'];
    $message = $_POST['message'];
    $sql2 = "INSERT INTO msg(inc,outg,masg) VALUES({$in},{$outg},'{$message}') ";
    $result2 = mysqli_query($con, $sql2);
}
