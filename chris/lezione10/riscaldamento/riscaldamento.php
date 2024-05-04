<?php

include 'config.php';

    date_default_timezone_set('CET');

    $seasons = [
        'Primavera',
        'Estate',
        'Autunno',
        'Inverno'
    ];

    $filename = $configs['filename'];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        print_r($_POST);

        $row = date('Y-m-d H:i:s') . ';' . $_POST['season'] . ';' . $_POST['period'] . ';' . "\n";

        file_put_contents($filename, $row, FILE_APPEND);
        
    }
?>

<form method="post">
    <select name="season">
        <?php

        foreach($seasons as $season){
            echo '<option value="' . strtolower($season) . '">' . $season . '</option>';
        }

        ?> 
        <!-- <option value="">Primavera</option>
        <option value="">Estate</option>
        <option value="">Autunno</option>
        <option value="">Inverno</option> -->
    </select><br>
    <label for="">Inizio</label>
    <input type="radio" name="period" value="begin"><br>
    <label for="">Fine</label>
    <input type="radio" name="period" value="end"><br>
    <input type="submit" value="Invia">
</form>