<?php
/**
 * Title: Untitled Reusable Block
 * Slug: gt-2025/untitled-reusable-block
 * Categories: 
 */
?>
<!-- wp:newsletterglue/group -->
<section class="wp-block-newsletterglue-group"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/GTWeekendEdition-Logo.png" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is a 'br' HTML element, 4. is the start of a 'em' HTML element, 5. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sWeekend Edition #154 - Sat. January 16th, 2021%2$s%3$s%4$sHand-curated by Birgit Pauli-Haack%5$s', 'gt-2025' ), '<strong>', '</strong>', '<br>', '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"primary","textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-primary-background-color has-text-color has-background has-small-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'em' HTML element, 5. is a 'br' HTML element, 6. is the start of a 'em' HTML element, 7. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$s"History will have to record the greatest tragedy of this period of social transition was not the strident clamor of the bad people, but the appalling silence of the good people."%3$s %4$s%5$s%6$s Dr. Martin Luther King, Jr%7$s', 'gt-2025' ), '<em>', '<strong>', '</strong>', '</em>', '<br>', '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:newsletterglue/group -->