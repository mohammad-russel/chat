<?php
session_start();
if (isset($_SESSION["nam"])) {
    header("location:user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <input type="text" name="name" id="name" placeholder="name" required>
        <input type="password" name="password" id="password" placeholder="password" required>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>