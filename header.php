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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<!-- <div class="topHeaderParent">
	<div class="topHeader mainView">
	<div class="topHeaderLink">
		<a href="#">درباره ما</a>
		<a href="#">تماس با ما</a>
		<a href="#">نوبت دهی آنلاین</a>
		<a href="#">مقالات</a>
	</div>	
	<span class="mainSearchIcon" ><svg width="25" height="25" stroke="#707070" stroke-width="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64Z"/><path d="M338.29 338.29 448 448"/></svg></span>
	</div>
</div> -->
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
			<span class="mobileMenuIcon"><svg height="12" width="12" fill="#3a3a3a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.5 293.5" xml:space="preserve"><path d="M171.603 0h-49.705c-8.612 0-15.618 7.006-15.618 15.618v49.705c0 8.612 7.006 15.618 15.618 15.618h49.705c8.612 0 15.618-7.006 15.618-15.618V15.618C187.221 7.006 180.215 0 171.603 0zm0 106.279h-49.705c-8.612 0-15.618 7.006-15.618 15.618v49.705c0 8.612 7.006 15.618 15.618 15.618h49.705c8.612 0 15.618-7.006 15.618-15.618v-49.705c0-8.612-7.006-15.618-15.618-15.618zm0 106.28h-49.705c-8.612 0-15.618 7.006-15.618 15.618v49.705c0 8.612 7.006 15.618 15.618 15.618h49.705c8.612 0 15.618-7.006 15.618-15.618v-49.705c0-8.613-7.006-15.618-15.618-15.618z"/></svg></span>
			<span class="mainSearchIcon" ><svg width="25" height="25" stroke="#707070" stroke-width="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64Z"/><path d="M338.29 338.29 448 448"/></svg></span>
		</div>
	</div>
</div>




