<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<div class="navigation">
    <?php require_once ('vendor/connect.php')?>
    <a href="index.php"><img src="images/logo.jpg"></a>
    <input type="search" placeholder="События, артисты и места ">
    <a href="event.php"><img class="event" src="images/event.png"></a>
    <?php if (isset($_SESSION['user'])){
        echo '<a href="vendor/logout.php"><button>Выйти</button></a>';
    }
    else{
        echo '<a href="login.php"><button>Войти</button></a>';
    }
    ?>
</div>
</body>
</html>