<?php

namespace arlo;

if(!function_exists('\\arlo\\init')) {
    function init()
    {
        $core = new core();
        $core->listen();

        $custom_post_types = new custom_post_types();
        $custom_post_types->listen();
        
        $acf_improvements = new acf_improvements();
        $acf_improvements->listen();
    }
}
add_action( 'plugins_loaded', '\\arlo\\init' );


?>
