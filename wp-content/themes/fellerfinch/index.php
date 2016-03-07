<?php get_header(); ?>
<header class="entry-header">
	<div class="row">
		<h1 class="entry-title">News</h1>	
	</div>
</header>

<div id="main-content" class="main-content">
  <section class="row one">
	<div id="primary" class="content-area column large-12">
		<div id="content" class="site-content" role="main">

			<?php 
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content');

				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
  </section><!-- row -->
</div><!-- #main-content -->

<?php get_footer();

