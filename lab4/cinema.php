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
        <div class="curr_event">
            <form>
                <?php
                $find_event="SELECT * FROM cinema";
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
                    <div class="info" style="margin-bottom:50px;border-radius: 20px; background: url(<?=$event['avatar'];?>);background-size: cover; width: 550px; height: 300px;">
                        <div class="curr_info">
                            <h2><?= $event['title']; ?> <a href="?del=ok&id=<?= $event['id']; ?>"><img src="images/delete.png" width="25px"></a></h2>
                            <p ><?=$event['date']?></p>
                            <p><?=$event['price']?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>