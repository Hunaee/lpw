<?php

$host = 'sg.be';
$db   = 'test';
$user = 'seetuser';
$pass = '01@rfba[W.f77-n3';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected to the database successfully");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$sql = 'SELECT * FROM post';
$stmt = $conn->prepare($sql);
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php 
        foreach ($posts as $post) {
            echo '<div class="bloc">';
                echo '<h1 class="sous_bloc">';
                    echo $post['title'] . ' ';
                echo '</h1>';

                echo '<div class="sous_bloc">';
                    echo $post['content'] . ' ';
                echo '</div>';

            echo '</div>';
        }
        ?>

    
</body>
</html>
