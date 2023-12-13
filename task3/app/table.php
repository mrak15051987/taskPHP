<?php
$li = rand(1, 10);
?>

<body>
    <section class="container col-4 m-auto g-3 mt-5">
        <ul class="list-group">
        <? for ($i=1; $i < $li; $i++): ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?=rand(100, 999)?>
          </li>
        <? endfor; ?>
        </ul>
        <a href="../index.php" class="link-primary">home</a>
    </section>
</body>
</html>
