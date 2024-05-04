<?php

function print_closet($data){

    $html = '<h2>' . $data . '</h2>';
    $html .= '<ul>';
    foreach($data as $key =>$qty){
        $html .= '<li>' . $key . ' ('.$qty.') <a href="armadio.php?action=prendi&key='.$key .'">prendi</a></li>';

    }
    $html .= '</ul>';
    return $html;

}

function print_case($data){
    $html = '<h2>' . $data . '</h2>';
    $html .= '<ul>';
    foreach($data as $key =>$qty){
        $html .= '<li>' . $key . ' ('.$qty.') <a href="armadio.php?action=togli&key='.$key .'">togli</a></li>';

    }
    $html .= '</ul>';
    return $html;
}

