<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<?php $name = get_bloginfo('name');
			$add = get_theme_mod('setting_address');
			$city = get_theme_mod('setting_city');
			$state = get_theme_mod('setting_state');
			$zip = get_theme_mod('setting_zip');
			$phone = get_theme_mod('setting_phone');
			$fax = get_theme_mod('setting_fax');
			?>
			<svg id="eho" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.77 31.99"><defs><style>#eho .cls-1{fill:#231f20;}</style></defs><title>eho</title><path class="cls-1" d="M14.1,0.19L0.11,8.6V12H1.93L2,22.66H27V12h1.88V8.89C24.1,5.7,19.1,3,14.1.19m9.71,19.64H5.33V9.68L14.46,4a94.23,94.23,0,0,1,9.35,5.65V19.83Z" transform="translate(-0.11 -0.19)"/><rect class="cls-1" x="9.48" y="14.28" width="9.57" height="3.04"/><rect class="cls-1" x="9.46" y="10.41" width="9.57" height="3.04"/><polygon class="cls-1" points="3.4 27.11 1.72 27.11 1.72 23.93 3.38 23.93 3.38 24.31 2.03 24.31 2.03 25.28 3.28 25.28 3.28 25.66 2.03 25.66 2.03 26.73 3.4 26.73 3.4 27.11"/><path class="cls-1" d="M5.79,27.54l-0.35-.38a0.86,0.86,0,0,1-.59.21c-0.85,0-1.11-1-1.11-1.67S4,24,4.85,24,6,25,6,25.71A2.25,2.25,0,0,1,5.63,27l0.31,0.34ZM5.1,26.38l0.29,0.31a1.72,1.72,0,0,0,.25-1c0-.75-0.3-1.29-0.79-1.29a1.07,1.07,0,0,0-.79,1.29A1.07,1.07,0,0,0,4.85,27a0.57,0.57,0,0,0,.34-0.1l-0.24-.26Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M8.06,24.12v2.06a1,1,0,0,1-.92,1.2,1,1,0,0,1-.88-1.14V24.12H6.58v2c0,0.69.3,0.88,0.58,0.88s0.6-.18.6-0.87v-2H8.06Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M8.85,26.37l-0.24.92H8.29l0.86-3.17H9.5l0.82,3.17H10l-0.23-.92H8.85ZM9.65,26l-0.34-1.4h0L8.94,26H9.65Z" transform="translate(-0.11 -0.19)"/><polygon class="cls-1" points="10.74 26.73 11.89 26.73 11.89 27.11 10.43 27.11 10.43 23.93 10.74 23.93 10.74 26.73"/><polygon class="cls-1" points="14.45 23.93 14.76 23.93 14.76 27.11 14.45 27.11 14.45 25.63 13.26 25.63 13.26 27.11 12.95 27.11 12.95 23.93 13.26 23.93 13.26 25.25 14.45 25.25 14.45 23.93"/><path class="cls-1" d="M16.28,27.38c-0.85,0-1.11-1-1.11-1.67S15.43,24,16.28,24s1.11,1,1.11,1.67-0.26,1.67-1.11,1.67m0-3a1.07,1.07,0,0,0-.79,1.29A1.07,1.07,0,0,0,16.28,27a1.07,1.07,0,0,0,.79-1.29,1.07,1.07,0,0,0-.79-1.29" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M19.19,24.12v2c0,0.69-.32.87-0.6,0.87S18,26.81,18,26.12v-2H17.71v2.12a1,1,0,0,0,.88,1.14,1,1,0,0,0,.92-1.2V24.12H19.19Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M21.3,25a0.57,0.57,0,0,0-.57-0.65,0.49,0.49,0,0,0-.52.56,0.37,0.37,0,0,0,.27.4l0.65,0.21a0.78,0.78,0,0,1,.52.85,0.85,0.85,0,0,1-.89,1,0.77,0.77,0,0,1-.69-0.3,1.2,1.2,0,0,1-.23-0.8h0.29a0.63,0.63,0,0,0,.63.74,0.52,0.52,0,0,0,.6-0.53,0.51,0.51,0,0,0-.49-0.56l-0.47-.15A0.7,0.7,0,0,1,19.91,25a0.85,0.85,0,0,1,.78-1,0.88,0.88,0,0,1,.89,1H21.3Z" transform="translate(-0.11 -0.19)"/><rect class="cls-1" x="21.91" y="23.93" width="0.31" height="3.17"/><polygon class="cls-1" points="24.19 23.93 24.49 23.93 24.49 27.11 24.15 27.11 22.99 24.54 22.98 24.54 22.98 27.11 22.68 27.11 22.68 23.93 23.05 23.93 24.19 26.5 24.19 26.5 24.19 23.93"/><path class="cls-1" d="M26,25.6h1v1.7h-0.2l-0.07-.41a0.86,0.86,0,0,1-.75.5,0.8,0.8,0,0,1-.7-0.36,2.14,2.14,0,0,1-.36-1.34c0-.77.34-1.65,1.08-1.65a1,1,0,0,1,1,1h-0.3A0.68,0.68,0,0,0,26,24.42c-0.41,0-.75.46-0.75,1.29,0,0.65.15,1.31,0.76,1.31a0.58,0.58,0,0,0,.47-0.2A1.18,1.18,0,0,0,26.73,26H26V25.6Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M2.86,32.18a1.46,1.46,0,0,1-1.3-1.67,1.46,1.46,0,0,1,1.3-1.67,1.46,1.46,0,0,1,1.3,1.67,1.46,1.46,0,0,1-1.3,1.67m0-3a1.09,1.09,0,0,0-.93,1.29,1.09,1.09,0,0,0,.93,1.29,1.09,1.09,0,0,0,.93-1.29,1.09,1.09,0,0,0-.93-1.29" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M4.91,32.1H4.55V28.92h1.2a0.8,0.8,0,0,1,.79.89,0.83,0.83,0,0,1-.79.94H4.91V32.1Zm0-1.71H5.62a0.49,0.49,0,0,0,.54-0.57,0.47,0.47,0,0,0-.53-0.53H4.91v1.1Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M7.31,32.1H6.95V28.92h1.2a0.8,0.8,0,0,1,.79.89,0.83,0.83,0,0,1-.79.94H7.31V32.1Zm0-1.71H8a0.49,0.49,0,0,0,.54-0.57A0.47,0.47,0,0,0,8,29.29H7.31v1.1Z" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M10.47,32.18a1.46,1.46,0,0,1-1.3-1.67,1.46,1.46,0,0,1,1.3-1.67,1.46,1.46,0,0,1,1.3,1.67,1.46,1.46,0,0,1-1.3,1.67m0-3a1.09,1.09,0,0,0-.93,1.29,1.09,1.09,0,0,0,.93,1.29,1.09,1.09,0,0,0,.93-1.29,1.09,1.09,0,0,0-.93-1.29" transform="translate(-0.11 -0.19)"/><path class="cls-1" d="M12.53,32.1H12.17V28.92H13.4a0.78,0.78,0,0,1,.88.85,0.8,0.8,0,0,1-.37.76,0.54,0.54,0,0,1,.32.6l0,0.57a0.31,0.31,0,0,0,.13.32V32.1H13.93a4.7,4.7,0,0,1-.06-0.8,0.46,0.46,0,0,0-.48-0.57H12.53V32.1Zm0-1.73h0.83a0.48,0.48,0,0,0,.54-0.55,0.44,0.44,0,0,0-.48-0.53h-0.9v1.08Z" transform="translate(-0.11 -0.19)"/><polygon class="cls-1" points="14.38 28.73 14.38 29.11 15.28 29.11 15.28 31.91 15.64 31.91 15.64 29.11 16.55 29.11 16.55 28.73 14.38 28.73"/><path class="cls-1" d="M18.67,28.92v2a0.71,0.71,0,1,1-1.38,0v-2H16.93V31a1,1,0,0,0,1,1.14A1.06,1.06,0,0,0,19,31V28.92H18.67Z" transform="translate(-0.11 -0.19)"/><polygon class="cls-1" points="21.18 28.73 21.18 31.3 21.17 31.3 19.84 28.73 19.41 28.73 19.41 31.91 19.76 31.91 19.76 29.34 19.77 29.34 21.12 31.91 21.52 31.91 21.52 28.73 21.18 28.73"/><rect class="cls-1" x="22.07" y="28.73" width="0.36" height="3.17"/><polygon class="cls-1" points="22.74 28.73 22.74 29.11 23.64 29.11 23.64 31.91 24 31.91 24 29.11 24.9 29.11 24.9 28.73 22.74 28.73"/><polygon class="cls-1" points="26.88 28.73 26.12 30.26 25.35 28.73 24.93 28.73 25.94 30.63 25.94 31.91 26.3 31.91 26.3 30.63 27.3 28.73 26.88 28.73"/></svg>

			<div class="contact-info" itemscope itemtype="http://schema.org/ApartmentComplex">
				<?php if($name): ?><span itemprop="name" class="ftr-name ftr-info"><?php echo $name; ?></span><?php endif; ?>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<?php if($add): ?><span itemprop="streetAddress" class="ftr-address ftr-info"><?php echo $add; ?></span><?php endif;
					if ($city): ?><span itemprop="addressLocality" class="ftr-contact"><?php echo $city; ?></span><?php echo ', ' ; endif;
					if ($state): ?><span itemprop="addressRegion" class="ftr-contact"><?php echo $state; ?></span><?php echo ' '; endif;
					if($zip): ?><span itemprop="postalCode" class="ftr-contact"><?php echo $zip; ?></span><?php endif; echo "\n"; ?>
				</div>
				<?php if($phone) { ?>
					<div class="colophon-ph ftr-info">
						<span itemprop="telephone"><a class="tel" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
					</div>
				<?php } ?>
				<?php if($fax) { ?>
					<div class="colophon-fx ftr-info">
						<span itemprop="faxNumber"><a class="tel" href="fax:<?php echo $fax; ?>"><?php echo $fax; ?></a></span>
					</div>
				<?php } ?>
			</div><!-- .contact-info -->

			<a href="http://www.res1.net" target="_blank" id="res-one-link">Professionally Managed By: <svg id="res1-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.38 22.5"><title>ResOne</title><path d="M96.55,3.8A11.19,11.19,0,0,0,93,1.38a11,11,0,0,0-8.65,0A11.25,11.25,0,0,0,80.84,3.8a11.43,11.43,0,0,0-2.38,3.6,11.14,11.14,0,0,0-.85,3.89h4.55a6.35,6.35,0,0,1,.5-2.05,7.12,7.12,0,0,1,1.42-2.13,6.65,6.65,0,0,1,2.07-1.46,6.13,6.13,0,0,1,2.54-.54,6,6,0,0,1,2.53.54,6.72,6.72,0,0,1,2.06,1.46,6.91,6.91,0,0,1,1.4,2.13,6.81,6.81,0,0,1,0,5.18,6.71,6.71,0,0,1-1.4,2.12A6.83,6.83,0,0,1,91.23,18a5.74,5.74,0,0,1-.71.27V23a10.47,10.47,0,0,0,2.5-.73,11.15,11.15,0,0,0,3.54-2.42,11.69,11.69,0,0,0,2.39-3.59,11,11,0,0,0,.89-4.41,11.11,11.11,0,0,0-.89-4.43,11.66,11.66,0,0,0-2.39-3.6" transform="translate(-0.64 -0.49)"/><polygon points="116.37 14.11 106.77 0.43 105.09 0.43 101.35 0.43 101.35 22.41 105.09 22.41 105.09 6.38 116.37 22.41 120.38 22.41 120.38 0.43 116.37 0.43 116.37 14.11"/><polygon points="127.34 18.31 127.34 13.64 133.85 13.64 133.85 9.38 127.34 9.38 127.34 4.45 138.38 4.45 138.38 0.4 122.77 0.4 122.77 22.36 138.38 22.36 138.38 18.31 127.34 18.31"/><path d="M2.32,16.24H4.85q2.53,0,2.53-1.69V13.71Q7.38,12,4.85,12H2.32v4.22Zm-1.69-5.9H4.85q4.22,0,4.22,3.37v0.84q0,3.37-3.37,3.37l1.69,2.53L9.07,23H7L3.59,17.93H2.32V23H0.64V10.34Z" transform="translate(-0.64 -0.49)"/><path d="M12,17.93H14.5q2.53,0,2.48-1.27t-2.5-1.26q-2.53,0-2.51,1.26v1.27Zm5.88,3.37V23H14.47q-4.22,0-4.22-3.37V17.09q0-3.37,4.22-3.37t4.22,2.53v0.84q0,2.53-4.22,2.53H11.94q0,1.69,2.53,1.69h3.37Z" transform="translate(-0.64 -0.49)"/><path d="M24.34,15.4q-2.53,0-2.53,1.24,0,0.84,2.53.84,4.22,0,4.22,2.54,0,3-4.22,3t-4.22-2.53h1.69q0,0.84,2.53.84t2.53-1.21q0-1.32-2.53-.93-4.22,0-4.22-2.53,0-2.93,4.22-2.93t4.22,2.53H26.87q0-.84-2.53-0.84" transform="translate(-0.64 -0.49)"/><path d="M31.69,23H30V13.71h1.69V23Zm0-11H30V10.34h1.69V12Z" transform="translate(-0.64 -0.49)"/><path d="M40.12,15.4H37.59q-2.53,0-2.53,1.69v2.53q0,1.69,2.53,1.69h2.53V15.4ZM37.59,23q-4.22,0-4.22-4.22V17.09q0-3.37,4.22-3.37h2.53V10.34H41.8V23H37.59Z" transform="translate(-0.64 -0.49)"/><path d="M45.2,17.93h2.53q2.53,0,2.48-1.27t-2.5-1.26q-2.53,0-2.51,1.26v1.27Zm5.88,3.37V23H47.71q-4.22,0-4.22-3.37V17.09q0-3.37,4.22-3.37t4.22,2.53v0.84q0,2.53-4.22,2.53H45.18q0,1.69,2.53,1.69h3.37Z" transform="translate(-0.64 -0.49)"/><path d="M55.29,23H53.61V13.71h4.22q4.22,0,4.22,3.37V23H60.35v-5.9q0-1.69-2.53-1.69H55.29V23Z" transform="translate(-0.64 -0.49)"/><path d="M64.92,10.34H66.6v3.37h2.53V15.4H66.6v4.22q0,1.69,2.53,1.69H70V23H69.13q-4.22,0-4.22-3.37V15.4H63.23V13.71h1.69V10.34Z" transform="translate(-0.64 -0.49)"/><path d="M73.35,23H71.66V13.71h1.69V23Zm0-11H71.66V10.34h1.69V12Z" transform="translate(-0.64 -0.49)"/><path d="M81.75,18.77H79.23q-2.53,0-2.48,1.27t2.5,1.26h2.53ZM75.88,15.4V13.71h3.37q4.22,0,4.22,3.37V23H79.25Q75,23,75,20.46V19.62q0-2.53,4.22-2.53h2.53q0-1.69-2.53-1.69H75.88Z" transform="translate(-0.64 -0.49)"/><polygon points="83.03 9.85 86.4 9.85 86.4 20.82 88.09 20.82 88.09 22.5 84.72 22.5 84.72 11.54 83.03 11.54 83.03 9.85"/></svg></a>

			<img class="mihu-footer" src="http://dev.columbialandingapartments.com/wp-content/uploads/2016/07/MIHU.png" />

			<a id="slug" href="http://www.mm4solutions.com/" target="_blank">Website by Millennium Marketing Solutions</a>
		</div><!-- .wrapper -->
	</footer><!-- #colophon -->

	<nav id="site-navigation-mobile" class="mobile-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'container' => '' ) ); ?>
	</nav><!-- #site-navigation-mobile -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
