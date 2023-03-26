<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

$joinedPhrase =
<<< END_OF_TEXT
In "$title" by $author, $android has "a brain $brain_size."
END_OF_TEXT;

echo $joinedPhrase;