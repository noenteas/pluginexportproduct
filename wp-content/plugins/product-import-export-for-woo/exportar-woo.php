<?php
/*
  Plugin Name: Exportar productos de Woo
  Plugin URI: https://brayandayor@gmail.com
  Description: Exporta los productos de woocommerce.
  Author: BrayanDayor
  Author URI: https://brayandayor@gmail.com	
  Version: 1.0.0
  License:           MITM
  License URI:       https://brayandayor.com
 
 */

if ( !defined( 'ABSPATH' ) || !is_admin() ) {
	return;
}

if ( !class_exists( 'WF_Product_Import_Export_CSV' ) ) :

	/**
	 * Main CSV Import class
	 */
	class WF_Product_Import_Export_CSV {

		/**
		 * Constructor
		 */
		public function __construct() {
			if ( !defined( 'WF_ProdImpExpCsv_FILE' ) ) {
				define( 'WF_ProdImpExpCsv_FILE', __FILE__ );
			}

			if ( !defined( 'WF_ProdImpExpCsv_BASE' ) ) {
				define( 'WF_ProdImpExpCsv_BASE', plugin_dir_path( __FILE__ ) );
			}

			add_action( 'init', array( $this, 'catch_export_request' ), 20 );
			
			include_once( 'includes/class-export-admin.php' );
		}

	
		/**
		 * Catches an export request and exports the data. This class is only loaded in admin.
		 */
		public function catch_export_request() {

			if ( !empty( $_GET[ 'action' ] ) && !empty( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'wf_woocommerce_csv_im_ex' ) {
				switch ( $_GET[ 'action' ] ) {
					case "export" :
						$user_ok = self::hf_user_permission();
						if ( $user_ok ) {
							include_once( 'includes/exporter/class-export.php' );
							WF_ProdImpExpCsv_Exporter::do_export( 'product' );
						} else {
							wp_redirect( wp_login_url() );
						}
						break;
				}
			}
		}

	
		public static function hf_user_permission() {
			// Check if user has rights to export
			$current_user		 = wp_get_current_user();
			$current_user->roles = apply_filters( 'hf_add_user_roles', $current_user->roles );
			$current_user->roles = array_unique( $current_user->roles );
			$user_ok			 = false;
			$wf_roles			 = apply_filters( 'hf_user_permission_roles', array( 'administrator', 'shop_manager' ) );
			if ( $current_user instanceof WP_User ) {
				$can_users = array_intersect( $wf_roles, $current_user->roles );
				if ( !empty( $can_users ) || is_super_admin( $current_user->ID ) ) {
					$user_ok = true;
				}
			}
			return $user_ok;
		}

		public function WT_admin_footer_text( $footer_text ) {
			if ( !self::hf_user_permission() ) {
				return $footer_text;
			}
		

		}

	
	}

	endif;

new WF_Product_Import_Export_CSV();
