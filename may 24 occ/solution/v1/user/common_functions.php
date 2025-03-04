<?php

function usr_error(&$session){
    if(isset($session['message'])) {
        $temp = $session['message'];
        unset($session['message']);
        return $temp;
    } else {
        return "";
    }
}