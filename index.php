<?php
include 'config.php';
function loadClass($className)
{
    if (is_file("models/$className.php"))
        include "./models/$className.php";
    else {
        echo 'Err';
        exit;
    }
}

spl_autoload_register('loadClass');

$x = new Database();
$controller = Utilities::get('controller', 'sanpham');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
<div class="head">
    <?php
    include './pages/head.php';
    ?>
</div>

<div class="chinh">

    <div class="leftbar">
        <?php
        include './pages/leftbar.php';
        ?>
    </div>
    <?php
    if ($controller == 'danhmuc') {
        include './controllers/danhmuc.php';
    }
    if ($controller == 'sanpham') {
        include './controllers/sanpham.php';
    }
    if ($controller == 'taikhoan') {
        include './controllers/taikhoan.php';
    }
    ?>
</div>
<br>
<div>
    <?php
    include './views/banner.php';
    ?>
</div>
<br>
<div class="foot">
    <?php
    include './pages/footer.php';
    ?>
</div>

</body>
</html>
