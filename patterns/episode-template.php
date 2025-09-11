<?php
/**
 * Title: Episode Template
 * Slug: gt-2025/episode-template
 * Categories: 
 */
?>
<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sShow Notes %2$s/ %3$sTranscript%4$s', 'gt-2025' ), '<a href="' . esc_url( '#shownotes' ) . '">', '</a>', '<a href="' . esc_url( '#transcript' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:more -->
<!--more-->
<!-- /wp:more -->

<!-- wp:pattern {"slug":"gt-2025/podcast-logos"} /-->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size" id="shownotes"><?php esc_html_e('Show Notes', 'gt-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size" id="transcript"><?php esc_html_e('Transcript', 'gt-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->