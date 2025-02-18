<?php

function init(){
    require config('template_path') . '/template.php';
}

function site_name(){
    echo config('name');
}

function nav_menu($sep=' | '){
    $nav_menu='';
    $nav_item=config('nav_menu');

    foreach ($nav_item as $uri=>$name){
        $nav_menu.='<a href="' . 'content/' . $uri . ".phtml" . '">'. $name . '</a>'. $sep; 
    }
    echo trim($nav_menu,$sep);
}

function page_content()
{
    $page='home';
    $path=getcwd() . '/' . config('content_path') . '/'. $page . '.phtml';

    echo file_get_contents($path);
}