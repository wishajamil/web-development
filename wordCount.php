<!DOCTYPE html>
<html>
<head>
    <title> words in a sentence </title>
</head>

<body>

<?php
    function word_count($word) {
        echo str_word_count($word);
        }
    word_count("hello, how are you?");
?>

</body>
</html>