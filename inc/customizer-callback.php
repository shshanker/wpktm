<?php
/*select page for trending news*/
if (!function_exists('twentyseventeen_show_latest_posts_callback')) :

    /**
     * Check if slider section page/post is active.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function twentyseventeen_show_latest_posts_callback($control)
    {

        if (true == $control->manager->get_setting('twentyseventeen_show_latest_posts')->value()) {
            return true;
        } else {
            return false;
        }

    }

endif;