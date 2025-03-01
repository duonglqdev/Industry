<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<div class="xl:col-span-3 lg:col-span-4 col-span-12">
	<aside class="side-bar lg:sticky top-25">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
</div>
