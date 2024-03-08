<?php

/* var_dump($_GET);
var_dump($_GET['sentence']);
var_dump($_GET['word']); */

$sentenceToCensor = trim($_POST['sentence']);
$wordToFind = trim($_POST['word']);

var_dump($sentenceToCensor, $wordToFind);

echo 'Original sentence:' .  ' ' . $sentenceToCensor;
echo '<br>';
echo 'Original sentence length' . ' ' . strlen($sentenceToCensor);
echo '<br>';
echo '<br>';

//var_dump(str_replace($wordToFind, '***', $sentenceToCensor));
$censoredSentence = str_replace($wordToFind, '***', $sentenceToCensor);

echo 'Original sentence:' .  ' ' . $censoredSentence;
echo '<br>';
echo 'Original sentence length' . ' ' . strlen($censoredSentence);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords-output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Original sentence
            <span class="badge bg-primary"><?= strlen($sentenceToCensor); ?> characters</span>
        </h2>
        <p><?= $sentenceToCensor; ?></p>
        <h2>Censored sentence
            <span class="badge bg-primary"><?= strlen($censoredSentence) . ' characters' ?></span>
        </h2>
        <p><?= $censoredSentence; ?></p>
    </div>

</body>

</html>