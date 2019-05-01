<?php
    $heroImage = get_field('hero_image');		            
    $salary   = get_field("salary") ? "£ " . number_format(get_field("salary"), 0, '.', ',') : "";
    $location = get_the_terms(get_the_ID(), 'location')[0]->name;
    $type     = get_the_terms(get_the_ID(), 'type')[0]->name; 
    $description = get_field("description"); ?>
       
<div class="job-card block <?php echo strtolower($type); ?>" style="background-image: url(<?php echo $heroImage['url']; ?>); ">
    
    <div class="content">
	    
	    <h2 class="heading heading__sm"><?php the_title(); ?></h5>  
	    
	    <div class="description mt1 mb1"><?php echo substr(wp_strip_all_tags($description), 0, 110) . "..."; ?></div>
	    
	    <div class="info">
		    
		    <p class="salary"><?php echo $salary; ?></p>
		    
		    <h5 class="heading font200"><?php echo implode(" | ", [$location, $type]); ?></h5> 
		    
		    <p class="time"><i class="fas fa-clock"></i><?php echo $time; ?></p>      
		
	    </div>
    
    </div>
    
    <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i></a>    
    
</div>