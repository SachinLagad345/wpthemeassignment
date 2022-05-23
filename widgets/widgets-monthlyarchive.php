<?php
/**
 * This class extends from WP_Widget class defines all code necessary to run this custom widget.
 *
 * @since           1.0.0
 * @package         wpthemeassignment
 * @subpackage      wpthemeassignment/widgets
 * @author          Sachin Lagad <sachin.lagad@gmail.com>
 * Description      widget to display monthly archives.
 */
class designfly_monthly_archive_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        // Base ID of your widget
        'designfly_monthly_archive_widget',

        // Widget name will appear in UI
        __('Monthly Archive Widget', 'portfolio') ,

        // Widget description
        array(
            'description' => __('Widget to Show Monthly Archive', 'portfolio') ,
        )
      );
    }

    /**
     * Displays the content in backend widget
     * @param   array   $instance   Previously saved values from database.
     */
    public function form($instance) {

        echo '<p>Shows Monthly Archive</p>';

    }

    /**
     * Creating widget front-end
     * @since    1.0.0
     * @param    array    $args     Widget arguments.
     * @param    array    $instance Saved values from database.
     */
    public function widget($args, $instance) {
        ?>
        <div class="single-post-card">
        <h3 class="sidebar__heading">Archive</h3>
        <hr class="sidebar__hr">
        <ul>
        <?php
          wp_get_archives(
            array(
              'type' => 'monthly',
            )
          );
        ?>
        </ul>
    </div>
    <?php
    }
    
}

/**
 * Register and load the widget
 */
function designfly_load_monthly_archive_widget()
{
    register_widget('designfly_monthly_archive_widget');
}
add_action('widgets_init', 'designfly_load_monthly_archive_widget');

?>