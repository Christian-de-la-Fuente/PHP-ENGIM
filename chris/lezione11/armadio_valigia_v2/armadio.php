<?php
include 'functions.php';
// $_SESSION['armadio'] e $_SESSION['valigia']
session_start();
if (!isset($_SESSION['armadio'])){
    $_SESSION['armadio']=[
        'maglia'=>2,
        'pantaloni' =>3,
        'calze'=>23,
        'mutande'=>3,
        'maglietta'=>3,
        'camicia'=>1
    ];
    $_SESSION['valigia']=[];

}
// gestisci input utente
if( isset($_GET['action']) &&
    $_GET['action'] =='prendi' &&
    isset($_GET['key'])
  ){
    $key =  $_GET['key'];
    // se non esiste crealo
    if(!isset($_SESSION['valigia'][$key])){
        $_SESSION['valigia'][$key]=0;
    }
    $_SESSION['valigia'][$key]++;
    $_SESSION['armadio'][$key]--;
    // se è finito toglilo
    if($_SESSION['armadio'][$key]==0){
        unset ($_SESSION['armadio'][$key]);
    }

    header('location:armadio.php');
    die();

}
if( isset($_GET['action']) &&
    $_GET['action'] =='togli' &&
    isset($_GET['key'])
  ){
    $key =  $_GET['key'];
    // se non esiste crealo
    if(!isset($_SESSION['armadio'][$key])){
        $_SESSION['armadio'][$key]=0;
    }
    $_SESSION['armadio'][$key]++;
    $_SESSION['valigia'][$key]--;
    // se è finito toglilo
    if($_SESSION['valigia'][$key]==0){
        unset ($_SESSION['valigia'][$key]);
    }

    header('location:armadio.php');
    die();

}



// display
echo '<a href="reset.php">RESET</a><br>';


echo print_closet($_SESSION['armadio']);

echo print_case($_SESSION['valigia']);
