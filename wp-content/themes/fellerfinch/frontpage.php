<?php /** Template Name: Home Page **/
get_header(); 

	if(have_rows('slideshow')):
		echo '<section class="flexslider slideshow"><ul class="slides">';
			while(have_rows('slideshow')): the_row();
				$image = wp_get_attachment_image(get_sub_field('image'), 'slideshow');
				$title = get_sub_field('title');
				$description = get_sub_field('text');
				echo '<li><div class="row"><article class="text"><h2>'.$title.'</h2><p>'.$description.'</p></article></div>'.$image.'</li>';
				//echo '<li><div class="row"></div>'.$image.'</li>';
			endwhile;
		echo '</ul></section>';
	endif; ?>

	<a name="history" data-magellan-destination="history"></a>
	
	<section id="history" class="section" data-equalizer>

		<div class="row">
			<section class="columns medium-7" data-equalizer-watch>
				<h2><?php the_field('main_title');?></h2>
				<?php the_field('main_text');?>
			</section>
			<?php $image = wp_get_attachment_image_src(get_field('image'), 'full'); //echo $image;?>
			<section id="offscreen-container" style="background: url(<?php echo $image[0];?>) center center no-repeat;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;" data-equalizer-watch>
			</section>
		</div><!-- row-->
	</section>

	
	<a name="services" data-magellan-destination="services"></a>
	<section id="services" class="section">
		<div class="row">
			<section class="columns large-5 medium-5">
				<h2><?php the_field('services_title');?></h2>
				<?php the_field('services_text');?>
				<a href="#<?php the_field('button_link');?>" class="featured-btn scroll"><?php the_field('button_text');?></a>
			</section>
			
			
			<section class="columns large-5 medium-6 large-offset-2" id="services-icons">				
				<?php $xnum = 1;
					  $znum=55;
					if(have_rows('services')):
						while(have_rows('services')):the_row();
							$icon = wp_get_attachment_image(get_sub_field('icon'), 'full');
							$imageid = get_sub_field('icon');
							$iconsrc = wp_get_attachment_image_src($imageid)[0];
							$text = get_sub_field('text');
							$serviceslist = get_sub_field('services_list');
							$x='trigger'.$xnum;
							$z='modal'.$znum;
							echo '<article><a href="#" data-reveal-id="'.$x.'">'.$icon.'<p>'.$text.'</p></a></article>';
							echo '<div id="'.$x.'" class="reveal-modal medium columns large-5 medium-6 small-10" data-reveal aria-labelledby="'.$z.'" aria-hidden="true" role="dialog">'.$icon.'<h2 id="'.$z.'">'.$text.'</h2>'.$serviceslist.'<a class="close-reveal-modal" aria-label="Close">&#215;</a></div>';
							$xnum++;$znum++;
						endwhile;
					endif;?>
			</section>
		</div>
	</section>
	<?php if(get_field('bid_list_title')) { ?>
		<section id="bid-list" class="section">
			<div class="row">
				<div class="columns small-10 small-centered text-center">
					<h2><?php the_field('bid_list_title');?></h2>
					<p><?php the_field('bid_list_text');?></p>
					<a href="<?php the_field('bid_link');?>" class="featured-btn"><?php the_field('bid_button_text');?></a>
				</div>
			</div>
		</section>
	<?php } ?>
	
	<a name="portfolio" data-magellan-destination="portfolio"></a>
	<section id="portfolio">
		<?php if(have_rows('portfolio')):?>
				<section class="flexslider portfolio row"><ul class="slides">
					<?php while(have_rows('portfolio')):the_row();
						$portfoliopic = wp_get_attachment_image(get_sub_field('image'),'portfolio');
						$title = get_sub_field('title');
						$by = get_sub_field('project_by');
						$projectinfo = get_sub_field('project_info');
						$description = get_sub_field('description');
						$pdf = get_sub_field('pdf');
						
						echo '<li>'.$portfoliopic.'<article><h4>'.$title.'</h4><p class="info">'.$by.'</p><div class="description">'.$projectinfo.'</div>';
						if ($pdf) {
							?><a class="featured-btn" target="_blank" href="<?php echo $pdf;?>">See PDF</a><?php
						}
						echo '</article></li>';
					endwhile; ?>
				</ul></section>
			<?php endif;?>
	</section>


	<a name="team" data-magellan-destination="team"></a>
	<section id="team" class="section">
		<div class="row">
			<section class="columns large-12 large-centered">
				<h2><?php the_field('our_team_title');?></h2>
			</section>
			<section class="columns medium-8">
				<?php if(have_rows('our_team')):
					while(have_rows('our_team')):the_row();
						$teampic = wp_get_attachment_image(get_sub_field('picture'),'team');
						$name = get_sub_field('name');
						$email = get_sub_field('email_address');
						$position = get_sub_field('title');
						echo '<div class="columns medium-3 small-6 with-bump">';
							echo $teampic;
							if($email) {
								echo '<a class="employee-email" href="mailto:'.$email.'"></a>';
							}
							echo '<h5>'.$name.'</h5><em class="title">'.$position.'</em>';
						echo '</div>';
					endwhile;
				endif;?>
			</section>
			<section class="columns medium-3 medium-offset-1">
				<?php the_field('join_our_team_text');?>
				<a href="#<?php the_field('join_our_team_button_link');?>" class="scroll2 featured-btn"><?php the_field('join_our_team_button_text');?></a>
			</section>
		</div>
	</section>
	
	<a name="contact" data-magellan-destination="contact"></a>
	<section id="contact" class="section">
		<div class="row">
			<section class="columns large-7 medium-7 small-12 medium-centered small-centered large-centered">
				<h2><?php the_field('contact_title');?></h2>
				<?php the_field('contact_text');?>
				<br/><br/>
				<div class="columns medium-6">
					<p><strong>Ohio</strong><br/>
						1683 Woodlands Drive<br/>
						Maumee, OH 43537<br/>
						419.893.3680</p>
				</div>
				<div class="columns medium-6">
					<p><strong>Tennessee</strong><br/>
						725 Cool Springs Blvd, Suite 600<br/>
						Franklin, TN 37067<br/>
						615.732.6229</p>
				</div>
			</section>
		</div>
	</section>
<?php get_footer();?>