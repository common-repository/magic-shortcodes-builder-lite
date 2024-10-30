<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.codetides.com/
 * @since      1.0.0
 *
 * @package    Magic_Shortcodes
 * @subpackage Magic_Shortcodes/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="ms-panel">
	<div class="ms-panel-div">
        <label for="width"><?php _e('Your Content','magic-shortcodes')?></label>
        <div class="control-input">
        	<textarea class="" id="ct_ms_content" name="ct_ms_content" rows="10" cols="10"><?php echo get_text_value(get_the_ID(),'ct_ms_content','')?></textarea>          
        </div>        
    </div>        
</div>
<div id="magic-shortcodes-meta-box-nonce" class="hidden">
  <?php wp_nonce_field( 'magic_shortcodes_save', 'magic_shortcodes_nonce' ); ?>
</div>
