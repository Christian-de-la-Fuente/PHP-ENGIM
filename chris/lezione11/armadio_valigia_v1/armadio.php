<?php
include 'functions.php';
// $_SESSION['armadio'] e $_SESSION['valigia']
session_start();
if (!isset($_SESSION['armadio'])){
    $_SESSION['armadio']=[
        'maglia',
        'pantaloni',
        'calze',
        'mutande',
        'magliatta',
        'camicia'
    ];
    $_SESSION['valigia']=[];

}
// gestisci input utente
if( isset($_GET['action']) &&
    $_GET['action'] =='prendi' &&
    isset($_GET['id'])
  ){
    // sposta l'entità
    $id =  $_GET['id'];
    array_push( $_SESSION['valigia'], $_SESSION['armadio'][$id]) ;
    unset($_SESSION['armadio'][$id]);
    header('location:armadio.php');
    die();

}

if( isset($_GET['action']) &&
    $_GET['action'] =='togli' &&
    isset($_GET['id'])
  ){
    // sposta l'entità
    $id =  $_GET['id'];
    array_push( $_SESSION['armadio'], $_SESSION['valigia'][$id]) ;
    unset($_SESSION['valigia'][$id]);
    header('location:armadio.php');
    die();

}




// display
echo '<a href="reset.php">RESET</a><br>';


echo print_closet($_SESSION['armadio']);

echo print_case($_SESSION['valigia']);
