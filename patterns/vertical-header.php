<?php
/**
 * Title: Vertical site header
 * Slug: gt-2025/vertical-header
 * Categories: header
 * Block Types: core/template-part/vertical-header
 * Description: Left side vertical navigation sidebar with a centered menu toggle.
 *
 * @package GT_2025
 */

?>
<!-- wp:group {"className":"gt-vertical-header","align":"full","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
<div class="wp-block-group gt-vertical-header alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:site-title {"level":0,"className":"gt-vertical-header__site-title"} /-->
	<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"contrast","overlayTextColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} /-->
</div>
<!-- /wp:group -->
