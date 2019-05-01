<div class="job-card block <?php echo strtolower($type); ?>">
    
    <div class="content">
	    
	    <h2 class="heading heading__sm"><?php echo $title; ?></h5>  
	    
	    <div class="description mt1 mb1"><?php echo substr(wp_strip_all_tags($description), 0, 110) . "..."; ?></div>
	    
	    <div class="info">
		    
		    <p class="salary"><?php echo $salary; ?></p>
		    
		    <h5 class="heading font200"><?php echo implode(" | ", [$location, $type]); ?></h5> 
		    
		    <p class="time"><i class="fas fa-clock"></i><?php echo $time; ?></p>      
		
	    </div>
    
    </div>
    
    <a href="<?php echo $link; ?>"><i class="fas fa-angle-double-right"></i></a>    
    
</div>