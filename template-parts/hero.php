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

    <div class="hero <?php the_field( 'hero_height' );?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <div class="container">
    
        <div class="row">
                
            <div class="hero__content">       

        				    <?php $brandImage = get_field('logo', 'options');?>	
        				
    						<a href="<?php echo home_url(); ?>" alt="<?php wp_title(''); ?>" title="<?php wp_title(''); ?>" class="logo">
        						
        						<img src="<?php echo $brandImage['url'];?>" alt="" title=""/>
        						
    						</a>

                <h1 class="heading heading__xl heading__light"><?php the_field( 'hero_heading' );?></h1>

                <?php if ( is_front_page() ) {?>
                
                <form role="search" method="get" class="search-form mt3 mb3" action="<?php echo home_url( '/' ); ?>">
                    
                    <label>
                        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                        <input type="search" class="search-field"
                            placeholder="<?php echo esc_attr_x( 'Job Title/Job Keywords', 'placeholder' ) ?>"
                            value="<?php echo get_search_query() ?>" name="s"
                            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    </label>
                    <input type="submit" class="search-submit"
                        value="<?php echo esc_attr_x( 'Search Jobs', 'submit button' ) ?>" />
                </form>

                <?php }?>
           
            </div>       
                
        </div>
    
    </div>
    
</div><!--hero-->

<?php endif;?>

