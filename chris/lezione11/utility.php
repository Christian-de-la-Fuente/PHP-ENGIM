<?php

class Utility {

    public static function listItems(array $items): string{

        $html = '<ul>';
        foreach($items as $item){
            $html .= '<li>' . $item . '</li>';
        }
        $html .= '</ul>';
        return $html;

    }
}

