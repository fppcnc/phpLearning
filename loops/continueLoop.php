<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$x = array();

for ($x = 20; $x >= 0; $x--) {
    if ($x === 13) {
        continue;
    }
    ?>
    <button class="dickerKnopf">
        <?php echo $x; ?>
    </button><br>
    <?php
}
?>

</body>
</html>
