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

else if ( is_menu_set('about') != ""){
    $currentPage = WPATH . "modules/about.php";
    set_title("Dreampower Ricciardi SRL LTD  | About Us");
}

else if ( is_menu_set('faqs') != ""){
    $currentPage = WPATH . "modules/faqs.php";
    set_title("Dreampower Ricciardi SRL LTD  | FAQs");
}

else if ( is_menu_set('power_backups') != ""){
    $currentPage = WPATH . "modules/power_backups.php";
    set_title("Dreampower Ricciardi SRL LTD  | Power Backups");
}

else if ( is_menu_set('solar_features') != ""){
    $currentPage = WPATH . "modules/solar_features.php";
    set_title("Dreampower Ricciardi SRL LTD  | Solar Features");
}

else if ( is_menu_set('knowledge_base') != ""){
    $currentPage = WPATH . "modules/knowledge_base.php";
    set_title("Dreampower Ricciardi SRL LTD  | Knowledge Base");
}

else if ( is_menu_set('contact') != ""){
    $currentPage = WPATH . "modules/contact.php";
    set_title("Dreampower Ricciardi SRL LTD  | Contact Us");
}

else if ( is_menu_set('partners') != ""){
    $currentPage = WPATH . "modules/partners.php";
    set_title("Dreampower Ricciardi SRL LTD  | Partners");
}

else if ( is_menu_set('heat_pumps') != ""){
    $currentPage = WPATH . "modules/heat_pumps.php";
    set_title("Dreampower Ricciardi SRL LTD  | Heat Pumps");
}

else if ( is_menu_set('transformers') != ""){
    $currentPage = WPATH . "modules/transformers.php";
    set_title("Dreampower Ricciardi SRL LTD  | Transformers");
}

else if ( is_menu_set('wind_power') != ""){
    $currentPage = WPATH . "modules/wind_power.php";
    set_title("Dreampower Ricciardi SRL LTD  | Wind Power");
}

else if ( is_menu_set('led_lighting') != ""){
    $currentPage = WPATH . "modules/led_lighting.php";
    set_title("Dreampower Ricciardi SRL LTD  | LED Lighting");
}

else if ( is_menu_set('generator_sets') != ""){
    $currentPage = WPATH . "modules/generator_sets.php";
    set_title("Dreampower Ricciardi SRL LTD  | Generator Sets");
}

else if ( is_menu_set('solar_power') != ""){
    $currentPage = WPATH . "modules/solar_power.php";
    set_title("Dreampower Ricciardi SRL LTD  | Solar Power");
}

else if ( is_menu_set('expansion_tanks') != ""){
    $currentPage = WPATH . "modules/expansion_tanks.php";
    set_title("Dreampower Ricciardi SRL LTD  | Expansion Tanks");
}

else if ( is_menu_set('thermostatic') != ""){
    $currentPage = WPATH . "modules/thermostatic.php";
    set_title("Dreampower Ricciardi SRL LTD  | Thermostatic And Temp Pressure Relief Valve");
}

else if ( is_menu_set('solar_controller') != ""){
    $currentPage = WPATH . "modules/solar_controller.php";
    set_title("Dreampower Ricciardi SRL LTD  | Solar Controller");
}

else if ( is_menu_set('solar_heating') != ""){
    $currentPage = WPATH . "modules/solar_heating.php";
    set_title("Dreampower Ricciardi SRL LTD  | Solar Heating");
}

else if ( is_menu_set('projects') != ""){
    $currentPage = WPATH . "modules/projects.php";
    set_title("Dreampower Ricciardi SRL LTD  | Projects");
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