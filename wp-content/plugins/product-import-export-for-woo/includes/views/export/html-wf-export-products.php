<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<script>
    jQuery(document).ready(function (a) {
    "use strict";
          
            jQuery( "body" ).on( "click", "#pselectall", function() {
          
                jQuery(':checkbox').each(function () {
                    this.checked = true;
                });
            });
             
        });
</script>
<div class="pipe-main-box">
    <div class="tool-box bg-white p-20p pipe-view">
        <h3 class="title" style="font-size: 1.3em !important;font-weight: 600;"><?php _e('Exportar productos', 'exportar-woo'); ?></h3>
        
        <form action="<?php echo admin_url('admin.php?page=wf_woocommerce_csv_im_ex&action=export'); ?>" method="post">
            <table class="form-table">
               
                <tr>
                    <th colspan="2">
                        <label for="v_columns"><?php _e('Columnas', 'exportar-woo'); ?></label>
                      
                    </th>
                <table id="datagrid">
                    <th style="text-align: left; padding:6px 25px !important; font-weight: normal !important;color:#000;">
                        <label for="v_columns"><?php _e('Nombre del producto Woo', 'exportar-woo'); ?></label>
                    </th>
                    <th style="text-align: left; padding:6px 25px !important; font-weight: normal !important;color:#000;">
                        <label for="v_columns_name"><?php _e('Nombre de la columna en el csv', 'exportar-woo'); ?></label>
                    </th>
                    <!-- selecciona todas las opciones -->
                  
                    <?php foreach ($post_columns as $pkey => $pcolumn) {
                        ?>
                        <tr>
                            <td>
                                <input name= "columns[<?php echo $pkey; ?>]" type="checkbox" value="<?php echo $pkey; ?>" checked>
                                <label for="columns[<?php echo $pkey; ?>]"><?php _e($pcolumn, 'exportar-woo'); ?></label>
                            </td>
                            <td>
                                <?php
                                $tmpkey = $pkey;
                                if (strpos($pkey, 'yoast') === false) {
                                    $tmpkey = ltrim($pkey, '_');
                                }
                                ?>
                                <input type="text" name="columns_name[<?php echo $pkey; ?>]"  value="<?php echo $tmpkey; ?>" class="input-text" />
                            </td>
                        </tr>
                    <?php } ?>

                </table><br/>
                </tr>
            </table>
            <p class="submit"><input type="submit" class="button button-primary" value="<?php _e('Exportar productos', 'exportar-woo'); ?>" /></p>
         
        </form>
    </div>

<div class="clearfix"></div>
</div>