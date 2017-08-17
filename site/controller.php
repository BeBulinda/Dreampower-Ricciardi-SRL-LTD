<?php

require WPATH . "core/include.php";
$currentPage = "";

if ( is_menu_set('logout') != "" ) 
    App::logOut();

else if ( is_menu_set('?') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Dreampower Ricciardi SRL LTD  | Home");
}

else if ( is_menu_set('home') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Dreampower Ricciardi SRL LTD  | Home");
}

else if ( is_menu_set('services') != ""){
    $currentPage = WPATH . "modules/services.php";
    set_title("Dreampower Ricciardi SRL LTD  | Product & Services");
}

else if (!empty($_GET)) {
    App::redirectTo("?");
}

else{
    $currentPage = WPATH . "modules/home.php";
    if ( App::isLoggedIn() ) {
		set_title("Home | Dreampower Ricciardi SRL LTD ");                
	}        
}

if (App::isAjaxRequest())
    include $currentPage;
else {
    require WPATH . "core/template/layout.php";
}
?>