<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package fullwidth
 */

get_header(); ?>

<div class="hero h50" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <div class="container">
    
        <div class="row">
                
            <div class="hero__content">       

        				    <?php $brandImage = get_field('logo', 'options');?>	
        				
    						<a href="<?php echo home_url(); ?>" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>" class="logo">
        						
        						<img src="<?php echo $brandImage['url'];?>" alt="" title=""/>
        						
    						</a>

                <h1 class="heading heading__xl heading__light">xx Jobs</h1>
           
            </div>       
                
        </div>
    
    </div>
    
</div><!--hero-->



        <?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
<?php get_footer(); ?>