<?php get_header();  
/*
/   Default Page Template
/   @package firstpress
*/ 
?>

<?php if( get_field('hero_height') == 'd-none' ): ?>

    <div class="content no-hero">    
        
    <?php else:?>

    <div class="content has-hero">

<?php endif;?>

<?php if( get_field('hero_background_image') ): 

    get_template_part('template-parts/hero');?>

<?php endif;?>

    <div class="container">
    
        <div class="row">
            
            <div class="col-7">
                
            </div><!--col-->
            
            <div class="col-5">
                
                <div class="sidebar-cta">
                    
                    <h2 class="heading heading__lg font400">Find Your Perfect Job In Catering</h2>
                    
                    <a href="" class="button button__ghost button__fullwidth mt2">Submit CV</a>
                    
                </div>
                
                <div class="sidebar">

                    <h3 class="heading heading__md heading__alt-color mb1">Latest Jobs</h3>
                    
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  
                    
                </div>

                <div class="sidebar-cta text-center">
                    
                    <a href="" class="heading__light"><h2 class="heading heading__md font400">Search All Jobs</h2></a>
                    
                </div>
                
                
            </div><!--col-->            
            
    
        </div>
      
    </div><!--c-->

</div><!--content-->
 
<?php get_footer(); ?>