<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Loop3-Digital
 */

?>

<!-- Header -->
<header class="bg-black text-white py-4" id="masthead">
	<div class="container mx-auto flex justify-between items-center px-6">
		<h1 class="text-2xl font-bold k-font-color-gold">Koro Filipino</h1>
		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'loop3-digital' ); ?>">
			<ul class="flex space-x-6">
				<?php esc_html_e( '', 'loop3-digital' ); ?>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'items_wrap'     => '<ul id="%1$s"  class="flex space-x-6" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				<li><a href="#" class="hover:text-gray-400 k-font-color-gold">About Us</a></li>

			</ul>
		</nav>
		<!-- #site-navigation -->
	</div>
</header>

<!--end Header -->
<!-- #masthead -->
