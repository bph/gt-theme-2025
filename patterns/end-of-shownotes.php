<?php
/**
 * Title: End of shownotes
 * Slug: gt-2025/end-of-shownotes
 * Categories: 
 */
?>
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Did you like this episode? Please write us a reviewhttps://lovethepodcast.com/gutenbergchangelog', 'gt-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e(' ', 'gt-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sIf you have questions or suggestions, or news you want us to include, send them to %2$schangelog@gutenbergtimes.com%3$s. %4$s', 'gt-2025' ), '<em>', '<a href="' . esc_url( 'mailto:changelog@gutenbergtimes.com' ) . '">', '</a>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sPlease write us a review on iTunes! %2$s(Click here to learn how)%3$s%4$s', 'gt-2025' ), '<em>', '<a href="' . esc_url( 'https://gutenbergtimes.com/itunes/' ) . '">', '</a>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->