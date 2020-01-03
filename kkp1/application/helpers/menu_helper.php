<?php
if(!function_exists('active_link')){
    function activate_menu($controller){
        // getting ci class instance
        $CI = get_instance();
        // getting active class
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }
}