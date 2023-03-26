<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>
    <?=
    "Book is called '{$book['title']}' and was written by {$book['author']}";
    ?>
</h1>
<p> 
    <?=
    "Description is something like this: {$book['description']}.";
    ?>
</p>
<h2>Main Characters</h2>
<ul>
    <?php
    foreach ($characters as $character) {
        echo "<li> $character";
    };
    ?>
</ul>
</body>
</html>