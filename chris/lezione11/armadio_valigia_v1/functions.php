<?php

function print_closet(array $data):string{

    $html = '<h2>' . $data .'</h2>';
    $html .= '<ul>';
    foreach($data as $id =>$item){
        $html.= '<li>' . $item . ' <a href="armadio.php?action=prendi&id='.$id .'">prendi</a></li>';

    }
    $html.= '</ul>';
    return $html;

}

function print_case(array $data):string{

    $html = '<h2>' . $data .'</h2>';
    $html .= '<ul>';
    foreach($data as $id =>$item){
        $html.= '<li>' . $item . ' <a href="armadio.php?action=togli&id='.$id .'">togli</a></li>';

    }
    $html.= '</ul>';
    return $html;
    
}

