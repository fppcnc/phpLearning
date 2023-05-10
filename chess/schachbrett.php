<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schachbrett</title>
</head>
<body>
<link rel="stylesheet" href="chess.css">
<table class=table>
<thead>
<tr>
    <th></th>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>E</th>
    <th>F</th>
    <th>G</th>
    <th>H</th>

</thead>
    <?php

    $number = 8;
    $file = 0;

    for ($rank = 0; $rank < 8; $rank++) {
        ?>
        <th><?php echo $number ?></th>

            <?php
            $letter = 'A';
            for ($file = 0; $file < 8; $file++) {
                $cell = $file + $rank;
                ?>

    <?php
                if ($cell % 2 == 0) {
                    ?>
                    <td class="ivory"><?php echo $letter . $number ?></td>
                    <?php
                } else {
                    ?>
                    <td class="brown"><?php echo $letter . $number ?></td>
                    <?php
                }
                $letter++;
            }
            ?>
        </tr>
        <?php
        $number--;

    }

    ?>

</table>
</body>
</html>


