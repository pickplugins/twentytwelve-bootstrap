<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer class="site-footer" id="colophon" role="contentinfo">
        <?php
        do_action('twentytwelve_footer')
        ?>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
