<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sanai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class="mainSiteOverlay">
	<span class="overlayCloseBtn"><svg width="30" height="30" viewBox="40 40 430 430" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48Zm75.31 260.69a16 16 0 1 1-22.62 22.62L256 278.63l-52.69 52.68a16 16 0 0 1-22.62-22.62L233.37 256l-52.68-52.69a16 16 0 0 1 22.62-22.62L256 233.37l52.69-52.68a16 16 0 0 1 22.62 22.62L278.63 256Z"/></svg></span>
</div>

<div class="mobileMenuParent">
	<div class="mobileMenuHeader">
		<a href="#">دریافت نوبت</a>
		<a href="#">از دکتر بپرسید</a>
	</div>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'container_class'  => 'mobileMenu',
		)
	);
	?> 
</div>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<div class="mainHeaderParent">
	<div class="mainHeader mainView">
		<a href="#" class="headerLogo">
			<object data="<?php echo get_template_directory_uri()?>/img/logo.svg" type="image/svg+xml" style="height:60px;"></object>
		</a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class'  => 'desktopMenu',
				)
			);
		?>
		<div class="headerIcon">
			<span class="mainSearchIcon" ><svg  height="25" width="25" stroke="#258a52" stroke-width="30" viewBox="40 40 430 430" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64Z"></path><path d="M338.29 338.29 448 448"></path></svg></span>
			<span class="mobileMenuIcon"><svg height="25" width="25" fill="#258a52" stroke="#258a52" xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 55 60" xml:space="preserve"><path d="M28 0C12.561 0 0 12.561 0 28s12.561 28 28 28 28-12.561 28-28S43.439 0 28 0zm0 54C13.663 54 2 42.336 2 28S13.663 2 28 2s26 11.664 26 26-11.663 26-26 26z"/><path d="M15 17h26a1 1 0 1 0 0-2H15a1 1 0 1 0 0 2zm30 14H11a1 1 0 1 0 0 2h34a1 1 0 1 0 0-2zm0-8H11a1 1 0 1 0 0 2h34a1 1 0 1 0 0-2zm-4 16H15a1 1 0 1 0 0 2h26a1 1 0 1 0 0-2z"/></svg></span>
		</div>
	</div>
</div>


<div class="mainHeaderParent stickyHeader">
	<div class="mainHeader mainView">
		<a href="#" class="headerLogo">
			<object data="<?php echo get_template_directory_uri()?>/img/logo.svg" type="image/svg+xml" style="height:60px;"></object>
		</a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class'  => 'desktopMenu',
				)
			);
		?>
		<div class="headerIcon">
			<span class="mainSearchIcon" ><svg  height="25" width="25" stroke="#258a52" stroke-width="30" viewBox="40 40 430 430" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64Z"></path><path d="M338.29 338.29 448 448"></path></svg></span>
			<span class="mobileMenuIcon"><svg height="25" width="25" fill="#258a52" stroke="#258a52" xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 55 60" xml:space="preserve"><path d="M28 0C12.561 0 0 12.561 0 28s12.561 28 28 28 28-12.561 28-28S43.439 0 28 0zm0 54C13.663 54 2 42.336 2 28S13.663 2 28 2s26 11.664 26 26-11.663 26-26 26z"/><path d="M15 17h26a1 1 0 1 0 0-2H15a1 1 0 1 0 0 2zm30 14H11a1 1 0 1 0 0 2h34a1 1 0 1 0 0-2zm0-8H11a1 1 0 1 0 0 2h34a1 1 0 1 0 0-2zm-4 16H15a1 1 0 1 0 0 2h26a1 1 0 1 0 0-2z"/></svg></span>
		</div>
	</div>
</div>




