<?php

$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, inventore non minima, harum, ipsum nulla numquam provident cumque fuga temporibus laboriosam iste quis. Sed dolorem pariatur suscipit fuga ipsa iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, inventore non minima, harum, ipsum nulla numquam provident cumque fuga temporibus laboriosam iste quis. Sed dolorem pariatur suscipit fuga ipsa iusto!';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2 class="mt-5 mb-3">Censorer</h2>
        <form action="./server.php" method="post">

            <div class="mb-3">
                <label for="sentence" class="form-label">Sentence</label>
                <textarea class="form-control" name="sentence" id="sentence" cols="30" rows="10"><?= $sentence ?></textarea>

                <small id="sentenceHelper" class="form-text text-muted">Add a paragraph</small>

            </div>

            <div class="mb-3">

                <label for="word" class="form-label">Word</label>
                <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelper" placeholder="Type a word" />
                <small id="wordHelper" class="form-text text-muted">Add a word to censor</small>

            </div>

            <button type="submit" class="btn btn-primary">Censor</button>

        </form>
    </div>

</body>

</html>