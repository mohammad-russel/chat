<?php
session_start();
if (!isset($_SESSION["nam"])) {
    header("location:index.php");
}
$userid = $_SESSION["nam"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$con = mysqli_connect("localhost", "root", "", "mychat");
$sql = "SELECT * FROM user WHERE NOT id = $userid ";
$result = mysqli_query($con, $sql);

?>

<body>
    <a href="logout.php">logout</a>
    <br><br>
    <?php if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="chat.php?id=<?php echo $row['id']; ?>">
                <h3><?php echo $row['id']; ?>.<span><?php echo $row['nam']; ?></span></h3>
            </a>
        <?php } ?>
    <?php } ?>
</body>

</html>