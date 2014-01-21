<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>

<?php omega_do_atomic( 'before' ); // omega_before ?>

<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">
	<div id="site-header" style="width: 960px; float: left;">
	<div style="margin: 0 auto; width: 640px;">
	<?php if( function_exists('cyclone_slider') ) cyclone_slider('71'); ?>
	</div>
	<div id="site-header-menu" style="width: 320px; float: left;">
		<ul>
			<li><a href="#">Link 1</li>
			<li><a href="#">Link 2</li>
			<li><a href="#">Link 3</li>
			<li><a href="#">Link 4</li>
			<li><a href="#">Link 5</li>
		</ul>
	</div>
	</div>
	<?php //omega_do_atomic( 'before_header' ); // omega_before_header ?>
	<?php //omega_do_atomic( 'header' ); // omega_header ?>
	<?php omega_do_atomic( 'after_header' ); // omega_after_header ?>

	<div class="site-inner">

		<?php omega_do_atomic( 'before_main' ); // omega_before_main ?>