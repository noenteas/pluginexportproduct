<?php
if (!defined('ABSPATH')) {
    exit;
}

class WF_ProdImpExpCsv_Admin_Screen {

    /**
     * Constructor
     */
    public function __construct() {

        add_action('admin_menu', array($this, 'admin_menu'));
  
    }

  
    /**
     * Boton en el menu del admin
     */
    public function admin_menu() {
        
        $page = add_submenu_page('woocommerce', __('Exportar productos Woo', 'exportar-woo'), __('Exportar productos Woo', 'exportar-woo'), apply_filters('woocommerce_csv_product_role', 'manage_woocommerce'), 'wf_woocommerce_csv_im_ex', array($this, 'output'));
        
    }



    /**
     * Llama a la vista principal
     */
    public function output() {
         include( 'views/html-wf-admin-screen.php' );
    }

    /**
     * Admin Page for exporting
     */
    public function admin_export_page() {
        $post_columns = include( 'exporter/data/data-columnas-post.php' );
        include( 'views/export/html-wf-export-products.php' );
    }





}

new WF_ProdImpExpCsv_Admin_Screen();