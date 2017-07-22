<?php

require WPATH . "core/include.php";
$currentPage = "";

if ( is_menu_set('logout') != "" ) 
    App::logOut();

else if ( is_menu_set('?') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Site Title | Home");
}

else if (!empty($_GET)) {
    App::redirectTo("?");
}

else{
    $currentPage = WPATH . "modules/home.php";
    if ( App::isLoggedIn() ) {
		set_title("Home | Site Title");                
	}        
}

if (App::isAjaxRequest())
    include $currentPage;
else {
    require WPATH . "core/template/layout.php";
}
?>
<a href="?home"> Home</a>