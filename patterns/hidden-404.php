<?php
/**
 * Title: 404
 * Slug: gt-2025/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage GT_2025
 * @since GT-2025 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">
		<?php echo esc_html_x( 'Page not found', '404 error message', 'gt-2025' ); ?>
	</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'The page you are looking for doesn\'t exist, or it has been moved. Please try searching using the form below.', '404 error message', 'gt-2025' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
</div>
<!-- /wp:group -->
