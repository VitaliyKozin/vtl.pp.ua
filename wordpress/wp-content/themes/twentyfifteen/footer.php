<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a></br></br><p><a href="http://vk.com"><img src="images/ico_vk.gif"/></a> 
<a href="http://facebook.com"> <img  src="images/ico_facebook.gif"/></a></p>
<p> Сайт сделал Виталий Козин</p>

		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
