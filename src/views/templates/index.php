<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/styles/styles.css">
    <title>Administration</title>
</head>
<body>
    <header>   <?php include __DIR__ . "/header.php"; ?>   </header>
    <main>     {% content %}  </main>
    <footer>   <?php include __DIR__ . "/footer.php"; ?>   </footer>


    <?php
        if( isset($_POST['title'])){
            echo "Post title: " . $_POST['title'] . "\n\n";
            echo "\nPost text: " . $_POST['post-body'];
        }

    ?>
</body>
</html>









