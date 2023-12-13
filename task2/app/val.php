<?php
require '../../res/header.php';
$num = $_GET['num'];
$err = "не корректное число";

if (is_numeric($num) && $num>=0 && $num<120) {
    $mess = $num;
} else {
    $mess = $err;
}
?>

<body>
    <section class="container m-auto mt-5 col-4 m-auto text-center">
        <h1><?=$mess?></h1>
        <p class="text-start mt-3"><a href="../../index.php" class="link-primary">home</a></p>
    </section>
</body>
</html>