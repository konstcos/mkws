<?php

// загрузка шаблона страницы
function get_tmp($name){

    $content = file_get_contents(SCRIPT_TMP ."/$name");

    return $content;

}