<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package SmokeMyGlass
 * @since FoundationPress 1.0.0
 */
?>

<footer id="page-footer" class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
		<div class="footer-credits text-center">
			<p>Proudly Powered by Smoke My Glass | Copyright&copy; 2018 - <?php echo date("Y"); ?> </p>
		</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>