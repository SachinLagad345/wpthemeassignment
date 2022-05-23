<?php
/**
 * This class extends from WP_Widget class defines all code necessary to run this custom widget.
 *
 * @since           1.0.0
 * @package         wpthemeassignmemt
 * @subpackage      wpthemeassignment/widgets
 * @author          Sachin Lagad <sachin.lagad@hwsl.com>
 * Description      widget to display recent post.
 */
class designfly_recent_post_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        // Base ID of your widget
        'designfly_recent_post_widget',

        // Widget name will appear in UI
        __('Recent Post Widget', 'portfolio') ,

        // Widget description
        array(
            'description' => __('Widget to Show Recent Post', 'portfolio') ,
        )
      );
    }

    /**
     * Displays the content in backend widget
     * @param   array   $instance   Previously saved values from database.
     */
    public function form($instance) {

        echo '<p>Shows Recent Post</p>';

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
        <h3 class="sidebar__heading">Recent Posts</h3>
        <hr class="sidebar__hr">
<?php
        $recent_post_query_options = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 5,
        );

        $recent_post_query = new WP_Query( $recent_post_query_options );
        if( $recent_post_query->have_posts() ) {
          while ( $recent_post_query->have_posts() ) {
            $recent_post_query->the_post();
?>
            <div class="row">
              <div class="sidebar__recent-post-image-box">
                <img class="sidebar__recent-post-image" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="">
              </div>
              <div class="sidebar__recent-post-details" style="margin-top:-6px;">
                <span class="sidebar__recent-post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></span><br>
                <span class="sidebar__recent-post-details">by <a class="blog__author-name" href="<?php get_the_author_link(true, get_the_author_ID()); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></span>
              </div>
            </div>
<?php
        }
      }
?>
    </div>
<?php
    }
    
}

/**
 * Register and load the widget
 */
function designfly_load_recent_post_widget()
{
    register_widget('designfly_recent_post_widget');
}
add_action('widgets_init', 'designfly_load_recent_post_widget');

?>