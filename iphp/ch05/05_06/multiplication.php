<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
<?php
    echo '<tr>';
    echo '<th></th>';
    for ($i = 1; $i <= 12; $i++) :
        echo "<th>$i</th>";
    endfor;
    echo '</tr>';

    for ($row=1, $collumn = 1; $row <= 12 ; $row++) { 
        echo '<tr>';
        if ($collumn == 1) {
            echo "<th>$row</th>";
        } 
        while ($collumn <= 12) {
                echo '<td>' . $row*$collumn++ . '</td>';
        }
        echo '</tr>';
        $collumn = 1;
    }
    ?>
</table>
</body>
</html>