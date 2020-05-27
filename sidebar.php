<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary"   aria-label="<?php esc_attr_e('Blog Sidebar', 'twentyseventeen'); ?>">
    <!--    New Latest Posts Section Starts -->
    <?php do_action('twentyseventeen_latest_posts_on_sidebar_action'); ?>
    <!--    New Latest Posts Section Starts -->

    <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->
