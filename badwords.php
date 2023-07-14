<?php

// from index
$full_text = $_GET['full_text'];
$censored_word = $_GET['censored_word'];

// replace

$censored = str_replace($censored_word, '***', $full_text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

    <h1>non censurato</h1>
    <p> <?= $full_text ?> </p>

    <h1>lunghezza non censurato</h1>
    <p> lunghezza del testo <?= strlen($full_text) ?> </p>
    
    
    <h1>censurato</h1>
    <p> <?= $censored ?> </p>
    
    
    <h1>lunghezza censurato</h1>
    <p> lunghezza del testo <?= strlen($censored) ?> </p>


</body>
</html>