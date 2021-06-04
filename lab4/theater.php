<?php
require_once 'vendor/connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/css.css">
    <title>Cinema</title>
</head>
<body>
    <?php require_once ('templates/header.php');?>
    <div class="cinema_list"><br>
        <h1>Кино в Томске</h1>
        <form>
            <?php
            $find_event="SELECT * FROM theater";
            $res=mysqli_query($connect, $find_event);
            if(!$res)die(mysqli_error($connect));
            if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                $id = (int)$_GET['id'];
                $delete_event = "DELETE FROM cinema WHERE id=$id";
                $res = mysqli_query($connect, $delete_event);
            }
            $delete_event = "SELECT * FROM cinema";
            $res = mysqli_query($connect, $delete_event);
            if (!$res) die (mysqli_error($connect));
            while($event=mysqli_fetch_assoc($res)){
                ?>
                <p>
                    <img src="<?=$event['avatar'];?>" style="width:80px; height:80px">
                <h3><?= $event['title']; ?> <a href="?del=ok&id=<?= $event['id']; ?>"><img src="images/remove.svg"></a></h3>
                <p><?=$event['date']?></p>
                <p><?=$event['price']?></p>
                </p>
                <?php
            }
            ?>
        </form>
    </div>
</body>
</html>