<?php
/**
 * Template for displaying search forms
 *
 * @package xzopro
 */

?>

<?php $unique_id = uniqid( 'xzopro-search-form-' ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr($unique_id); ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'xzopro' ); ?></span>
		<input type="search" id="<?php echo esc_attr($unique_id); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'xzopro' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
		<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'xzopro' ); ?></span><i class="fa fa-search"></i></button>
	
</form>