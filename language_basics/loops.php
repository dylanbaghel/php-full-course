<?php 
    /**
     * Loops
     */

    /**
     * For Loops
     */
    for ($i = 0; $i < 5; $i++) {
        echo "For Loop ";
    }

    /**
     * While Loop
     */
    echo "<br>";
    $index = 0;
    while ($index < 5) {
        echo "While Loop";
        $index++;
    }
    echo "<br>";
    $index2 = 6;
    do {
        echo "Do-While Loop";
    }while ($index2 < 5);

    /**
     * Looping Arrays
     *      --> Can Use Foreach Loop
     *      --> See HTML Below
     *      --> foreach ($posts as $post) {
     *          "using $post";   
     *       }
     */
    $posts = [
        ["title"=> "This is First Article", "body"=> "This is First Article Body"],
        ["title"=> "This is Second Article", "body"=> "This is Second Article Body"],
        ["title"=> "This is Power Rangers", "body"=> "Just Amazing Article"]
    ];
    echo "<br>";
    for ($i = 0; $i < count($posts); $i++) {
        echo "Title: ".$posts[$i]["title"].", Body: ".$posts[$i]["body"];
        echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <h3>Posts</h3>
    <hr>
    <?php foreach($posts as $post) { ?>
        <p>Title: <?php echo $post["title"]; ?></p>
        <p>Body: <?php echo $post["body"] ?></p>
    <?php } ?>
    <hr><hr>
    <?php foreach($posts as $post): ?>
        <p>Title: <?php echo $post["title"]; ?></p>
        <p>Body: <?php echo $post["body"]; ?></p>
    <?php endforeach; ?>
</body>
</html>