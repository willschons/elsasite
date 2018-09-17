 <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elsa
 */

?>

</article>

	<footer id="colophon footer" class="site-footer">
		<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elsa' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'elsa' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'elsa' ), 'elsa', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/browser.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
