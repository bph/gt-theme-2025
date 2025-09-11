<?php
/**
 * Title: WeekendEditing Header graphic and text
 * Slug: gt-2025/weekendediting-header-graphic-and-text
 * Categories: 
 */
?>
<!-- wp:group {"blockVisibility":{"hideBlock":true}} -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/GTWeekendEdition-Logo.png" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is a 'br' HTML element, 4. is the start of a 'em' HTML element, 5. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sWeekend Edition #155 - Sat, January 23, 2021%2$s%3$s%4$sHand-curated by Birgit Pauli-Haack %5$s', 'gt-2025' ), '<strong>', '</strong>', '<br>', '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"primary","textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-primary-background-color has-text-color has-background has-small-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$s“I, not events, have the power to make me happy or unhappy today. I can choose which it shall be. Yesterday is dead, tomorrow hasn\'t arrived yet. I have just one day, today, and I\'m going to be happy in it.”%3$s%4$s Croucho Marx', 'gt-2025' ), '<em>', '<strong>', '</strong>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group -->