<?php
require_once 'index.php';

$movie = randomMovie()

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Случайный фильм</title>
    <style>
body {
    font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
    background: white;
    border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }
        h1 {
    font-size: 24px;
            margin-bottom: 10px;
        }
        .movie-info {
    margin-bottom: 20px;
        }
        .button {
    background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
    background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Случайный фильм</h1>
    <div class="movie-info">
        <p><strong>Название:</strong> <?= !empty($movie['name']) ? $movie['name'] : $movie['alternativeName'] ?></p>
        <p><strong>Год:</strong> <?= $movie['year'] ?></p>
        <p><strong>Длительность:</strong> <?= !empty($movie['movieLength']) ? $movie['movieLength'] : '???' ?> минут </p>
        <p><strong>Описание:</strong> <?= !empty($movie['description']) ? $movie['description'] : $movie['shortDescription'] ?> </p>
    </div>
    <form method="POST" action="">
        <button type="submit" class="button" name="randomMovieButton">Показать другой фильм</button>
    </form>
</div>

</body>
</html>
