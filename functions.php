<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('twentyseventeen_locale_css')):
    function twentyseventeen_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'twentyseventeen_locale_css');

if (!function_exists('twentyseventeen_parent_css')):
    function twentyseventeen_parent_css()
    {
        wp_enqueue_style('twentyseventeen_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'twentyseventeen_parent_css', 10);

// END ENQUEUE PARENT ACTION

//BEGIN NEW CUSTOMIZER PANEL
/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';


//BEGIN DISPLAYING LATEST POST
if (!function_exists('twentyseventeen_latest_posts_on_sidebar')):
    function twentyseventeen_latest_posts_on_sidebar()
    {
        // Get layout.
        $show_latest_posts_section = get_theme_mod('twentyseventeen_show_latest_posts');

        if ($show_latest_posts_section == false) {
            return;
        }

        $latest_posts_section_title = get_theme_mod('twentyseventeen_latest_posts_section_title');
        $latest_posts_section_title = (!empty($latest_posts_section_title)) ? $latest_posts_section_title : __('Latest Posts', 'twentyseventeen');

        $latest_posts_category = get_theme_mod('twentyseventeen_latest_posts_category');

        $all_posts = twentyseventeen_get_latest_posts(3, $latest_posts_category);

        ?>
        <section id="latest-posts-on-sidebar" class="widget widget_recent_entries group-blog">
            <h2 class="widget-title">
                <?php echo esc_html($latest_posts_section_title); ?>
            </h2>
            <ul>
                <?php
                if ($all_posts->have_posts()) :
                    while ($all_posts->have_posts()) : $all_posts->the_post();
                        global $post;
                        ?>
                        <li>

                            <?php the_post_thumbnail(); ?>
                            <div class="entry-meta">
                                <?php echo get_the_category_list('/ '); ?>
                            </div>
                            <h4><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <div class="entry-meta">
                                <?php twentyseventeen_posted_on(); ?>
                            </div>

                        </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;

                ?>
            </ul>
        </section>

        <?php
    }
endif;
add_action('twentyseventeen_latest_posts_on_sidebar_action', 'twentyseventeen_latest_posts_on_sidebar', 10);


function twentyseventeen_get_latest_posts($number_of_posts = 3, $category = 0)
{
    $ins_args = array(
        'post_type' => 'post',
        'posts_per_page' => absint($number_of_posts),
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => true
    );

    $category = isset($category) ? $category : '0';

    if (absint($category) > 0) {
        $ins_args['cat'] = absint($category);
    }

    $all_posts = new WP_Query($ins_args);

    return $all_posts;

}
