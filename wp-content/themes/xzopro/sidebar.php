<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xzopro
 */
?>

<?php if(is_active_sidebar( 'sidebar-1' )) : ?>
<div class="col-lg-4 col-xs-12">
	<aside class="sidebar-widget-area">
		<?php dynamic_sidebar( 'sidebar-1' );?>
	</aside>
</div>
<?php endif; ?>
