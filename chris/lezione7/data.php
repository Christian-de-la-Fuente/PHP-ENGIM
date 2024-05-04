<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<b>anno corrente: <?php echo date('Y') ?></b>
<?php

date_default_timezone_set('CET');

echo date('d/n/Y');

echo '<br>' . date('g:i');

?>
</body>
</html>