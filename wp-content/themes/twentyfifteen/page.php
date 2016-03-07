<?php get_header();
	
	if(have_rows('slideshow')):
		echo '<div class="flexslider">';
			echo '<ul class="slides">';
				while(have_rows('slideshow')): the_row();
					
					echo '<li></li>';
				endwhile;
			echo '</ul>';
		echo '</div>';
	endif;



<?php get_footer(); ?>
