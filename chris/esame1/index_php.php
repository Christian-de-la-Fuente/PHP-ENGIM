<?php

$links = [
    'hello.php',
    'string.php',
    'count.php',
    'fruits.php',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php

        foreach($links as $link){
            echo '<li><a href="' . $link . '">' . $link . '</a></li>';
        }

        ?>
    </ul>
</body>
</html>

