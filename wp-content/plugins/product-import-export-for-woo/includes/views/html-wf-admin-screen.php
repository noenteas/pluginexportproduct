<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="woocommerce">
	<div class="icon32" id="icon-woocommerce-importer"><br></div>
    <h2 class="nav-tab-wrapper woo-nav-tab-wrapper">
        <a href="" class="nav-tab"><?php _e('Exportar productos', 'exportar-woo'); ?></a>
      

    </h2>
        	<?php
		switch ($tab) {
			case "help" :
				$this->admin_help_page();
			break;
                    
                        case "export":
			default :
				$this->admin_export_page();
			break;
		}
	?>
</div>