
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    if(isset($_GET["name"]) || isset($_GET["age"])){
    echo "<h1>" . $_GET['name'] . "</h1>";
    echo "<h2>" . $_GET['age'] . "</h2>";
    }

?>
</head>
<body>
    <form action="<?php $PHP_SELF?>" method="GET">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit">
    </form>
</body>
</html>