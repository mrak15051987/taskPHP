<?php
require '../../res/header.php';
$name = $_GET['name'];
$sourname = $_GET['sourname'];
$department = $_GET['department'];
$office = $_GET['office'];
$link = "./link.php?name=$name&sourname=$sourname&department=$department&office=$office";
?>
<body>
    <section class="container col-4 m-auto g-3 mt-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Sourname</th>
                <th scope="col">Department</th>
                <th scope="col">Office</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?=$name?></td>
                <td><?=$sourname?></td>
                <td><?=$department?></td>
                <td><?=$office?></td>
                </tr>
            </tbody>
        </table>
        <p><a href=<?=$link?> class="link-primary">next page</a></p>
    </section>
</body>
</html>