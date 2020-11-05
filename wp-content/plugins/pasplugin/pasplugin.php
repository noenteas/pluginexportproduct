<?php
/*
Plugin Name: BrayanPlugin PAS
Plugin URI: https://pasplugin.com
Description: Este plugin nos servira como una demo
Version: 1.0
Author: Brayan Dayor Beraun Jaimes
Author URI: https://brayandayor.com
License: MITM
*/

add_action( 'wp_head', 'agregar_ga' );

function agregar_ga() {
    echo "

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-68399627-4');
    </script>";
 }