<?php
/**
 * The template for displaying search results pages for jobs
 *
 * @package firstpress
 */

get_header();
?>

	<section id="primary" class="content-area mt5">
				
		<h3>Search Result for: <?php echo "$s" ?> </h3>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<div id="post-<?php the_ID(); ?>" class="posts">
		
			<article>
				
				<div class="job-found">
					<?php
						$id 		 = get_the_ID();
						$salary 	 = get_field("salary", $id);
						$time   	 = get_the_date('j F Y');
						$type		 = get_the_terms($id, 'type')[0]->name;
						$title 		 = get_the_title();
						$location 	 = get_the_terms($id, 'location')[0]->name;
						$description = get_field("description", $id);
						
						$salary = "£ " . number_format($salary, 0, '.', ',');
						
						include 'template-parts/job-card-search.php';
						
					?>
				</div>

			</article><!-- #post -->
			
		</div>
	
		<?php endwhile; endif; ?>
		
	</section><!-- #primary -->

<?php
get_footer();
