<?php
session_start();
$userid = $_SESSION["nam"];
$con = mysqli_connect("localhost", "root", "", "mychat");
$sql3 = "SELECT * FROM user WHERE id = {$userid}";
$result3 = mysqli_query($con, $sql3);
if (mysqli_num_rows($result3)) {
    $row3 = mysqli_fetch_assoc($result3);
    $outg = $row3['unid'];
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
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$con = mysqli_connect("localhost", "root", "", "mychat");
$sql = "SELECT * FROM user WHERE id = $id ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result)) {
?>

    <body>
        <?php
        $row = mysqli_fetch_assoc($result);
        $incomeid = $row['unid']
        ?>
        <div class="name">
            <h1> <?php echo $row['nam']; ?> </h1>
        </div>

        <div class="box">
            <?php
            $con = mysqli_connect("localhost", "root", "", "mychat");
            $sql2 = "SELECT * FROM msg LEFT JOIN user ON user.unid = msg.outg WHERE ( outg = $outg and inc = $incomeid) OR (outg = $incomeid AND inc = $outg ) Order by mid ";
            $result2 = mysqli_query($con, $sql2);

            if (mysqli_num_rows($result2)) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
            ?>
                    <?php
                    if ($row2['outg'] === $outg) {
                    ?>
                        <div class="outgoing">
                            <p> <span>you:</span> <?php echo $row2['masg']; ?></p>
                        </div>
                    <?php } else { ?>
                        <div class="incoming">
                            <p> <span><?php echo $row2['nam']; ?></span> <?php echo $row2['masg']; ?></p>
                        </div>
                    <?php } ?>
            <?php
                }
            }

            ?>
        </div>

        <form action="msg.php" method="POST">
            <input type="text" class="incoming_id" name="incoming" value="<?php echo $row['unid']; ?>" hidden>
            <input type="text" name="message" placeholder="Type a message here...">
            <input type="submit" name="submit" value="send">
        </form>
    </body>
<?php }
header("loaction:chat.php"); ?>

</html>