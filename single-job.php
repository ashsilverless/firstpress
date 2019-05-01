<?php
/**
 * ============== Template Name: Jobs
 * ============== Template Post Type: job
 *
 * @package firstpress
 */
get_header();?>

<!-- ******************* Hero Content ******************* -->

<div class="content has-hero">

	<?php 
	    if( get_field('hero_type') == 'image' ): 
	        $heroImage = get_field('hero_background_image');
	    elseif ( get_field('hero_type') == 'color' ): 
	        $heroColor = get_field('hero_background_colour');
	    endif;
	?>
	
	<?php 
	    if( get_field('hero_type') !== 'slider'):
	?>
	
	    <div class="hero h50" style="background-image: url(<?php echo get_template_directory_uri() . "/inc/img/job-hero.jpg"; ?>); background-color: <?php echo $heroColor; ?>;">
	
	    <div class="container">
	    
	        <div class="row">
	                
	            <div class="hero__content">       
	
				    <?php $brandImage = get_field('logo', 'options');?>	
				
					<a href="<?php echo home_url(); ?>" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>" class="logo">
						
						<img src="<?php echo $brandImage['url'];?>" alt="" title=""/>
						
					</a>
	
	                <h1 class="heading heading__xl heading__light"><?php the_title(); ?></h1>
	           
	            </div>       
	                
	        </div>
	    
	    </div>
	    
	</div><!--hero-->
	
	<?php endif;?>



    <div class="container">
    
        <div class="row">
            
            <div class="col-6 pt3">
	            
	            <?php
		            
		           $salary   = get_field("salary") ? "£ " . number_format(get_field("salary"), 0, '.', ',') : "";
		           $location = get_the_terms(get_the_ID(), 'location')[0]->name;
		           $type     = get_the_terms(get_the_ID(), 'type')[0]->name;
		        
		        ?>
	            
	            <h2 class="heading heading__lg font700 mb0"><?php the_title(); ?></h2>
	            
	            <h5 class="heading__md font200 mb1"><?php echo get_the_date('j F Y'); ?></h5>
	            
	            <h5 class="heading heading__lg font200 mb1"><?php echo $salary; ?></h5>
	            
	            <h3 class="heading heading__md font200 mb1"><?php echo implode(" | ", [$location, $type]); ?></h3>
	            
	            <div class="description"><?php the_field("description"); ?></div>
                
            </div><!--col-->
            
            <div class="col-5 offset-1 sticky-sidebar">

                <?php get_template_part('template-parts/sidebar');?>
                
            </div><!--col-->            

        </div>
      
    </div><!--c-->

</div><!--content-->

<?php get_footer(); ?>
