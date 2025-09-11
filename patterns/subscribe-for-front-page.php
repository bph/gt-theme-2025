<?php
/**
 * Title: subscribe for Front page.
 * Slug: gt-2025/subscribe-for-front-page
 * Categories: 
 */
?>
<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the start of a 'a' HTML element, 3. is the end of a 'a' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$sSubscribe to our eNews%3$s%4$s', 'gt-2025' ), '<strong>', '<a href="' . esc_url( 'https://paulisystems.us1.list-manage.com/subscribe?u=e3062ef0fb204dbbc2135b555&id=26f81bd8ae' ) . '">', '</a>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Receive your Block Editor &amp; Gutenberg Fix every Saturday at noon EDT. Gutenberg Times Weekend Edition.', 'gt-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-button {"buttonText":"Subscribe","buttonSize":"gb-button-size-large","buttonTarget":true} -->
<div class="wp-block-genesis-blocks-gb-button gb-block-button"><a href="http://eepurl.com/dh9Qi5" target="_blank" rel="noopener noreferrer" class="gb-button gb-button-shape-rounded gb-button-size-large" style="color:#ffffff;background-color:#3373dc">Subscribe</a></div>
<!-- /wp:genesis-blocks/gb-button -->