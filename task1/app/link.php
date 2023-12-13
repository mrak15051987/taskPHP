<?php
require '../../res/header.php';
?>
<body>
    <section class="container col-2 m-auto g-3 mt-5 text-center">
        <p class="h1"><?=$_GET['name']?></p>
        <p class="h1"><?=$_GET['sourname']?></p>
        <p class="h1"><?=$_GET['department']?></p>
        <p class="h1"><?=$_GET['office']?></p>
        <p class="text-start mt-3"><a href="../../index.php" class="link-primary">home</a></p>
    </section>
</body>
</html>