<?php 
    //Plugin name: Modo oscuro
    //Description: Activa el modo oscuro en tu tema
    //Version: 1.0
    //Author: Jose Moreno
    //Author URI: https://github.com/JoeySolen

    function estilos_plugin(){

        $estilos_url = plugin_dir_url(__FILE__);

        wp_enqueue_style('modo_oscuro', $estilos_url.'/assets/css/estilo.css', '', '1.0', 'all');

    }

    add_action('wp_enqueue_scripts', 'estilos_plugin');
?>