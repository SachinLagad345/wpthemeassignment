<?php
/**
 * This class extends from WP_Widget class defines all code necessary to run this custom widget.
 *
 * @since           1.0.0
 * @package         wpthemeassignment
 * @subpackage      wpthemeassignment/widgets
 * @author          Sachin Lagad <sachin.lagad@hbwsl.com>
 * Description      widget to display portfolio thumbnails.
 */
class designfly_portfolio_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        // Base ID of your widget
        'designfly_portfolio_widget',

        // Widget name will appear in UI
        __('Portfolio Widget', 'portfolio') ,

        // Widget description
        array(
            'description' => __('Widget to Show Portfolio Thumbnails', 'portfolio') ,
        )
      );
    }

    /**
     * Displays the content in backend widget
     * @param   array   $instance   Previously saved values from database.
     */
    public function form($instance) {

        echo '<p>Shows Portfolio Thumbnails</p>';

    }

    /**
     * Creating widget front-end
     * @since    1.0.0
     * @param    array    $args     Widget arguments.
     * @param    array    $instance Saved values from database.
     */
    public function widget($args, $instance)
    {

?>
        <div class="single-post-card">
        <h3 class="sidebar__heading">Portfolio</h3>
        <hr class="sidebar__hr">
        <div class="porfolio--gallery">
<?php
          $portfolio_query_options = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => 8,
          );

          $portfolio_query = new WP_Query( $portfolio_query_options );
          if( $portfolio_query->have_posts() ) {
            while ( $portfolio_query->have_posts() ) {
              $portfolio_query->the_post();
?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="image-1.png" class="portfolio--gallery-item">
              </a>
<?php
          }
        }
?>
      </div>
    </div>
<?php
    }
    
}

/**
 * Register and load the widget
 */
function designfly_load_portfolio_widget()
{
    register_widget('designfly_portfolio_widget');
}
add_action('widgets_init', 'designfly_load_portfolio_widget');

?>