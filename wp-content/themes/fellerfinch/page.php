<?php include('header-not-home.php'); ?>
	
<div class="page-header">
	<div class="row">
		<?php while ( have_posts() ) : the_post();
			$content = get_the_content();
			if($content) {?>
				<div class="columns medium-4"><h1 class="page-title"><?php the_title();?></h1></div>
				<div class="columns medium-7 medium-offset-1"><?php the_content();?></div>
			<?php } else { ?>
				<div class="columns medium-12"><h1 class="page-title"><?php the_title();?></h1></div>
			<?php } 
		endwhile;?>
	</div>
</div>
<div class="row">	
	<?php if(have_rows('bid_list')) {?>
	<div class="columns large-12">
		
		<section class="table">
			<div class="row small-collapse project-line">
				<div class="columns large-3 medium-3 small-6"><strong>Project Name</strong></div>
				<div class="columns large-9 medium-9 small-6"><strong>Relevant PDFs</strong></div>
			</div>

			<?php while(have_rows('bid_list')): the_row();?>
			<div class="row small-collapse project-line">
					<?php $name = get_sub_field('project_name');
					$bid = get_sub_field('invitation_to_bid');
					$tabulation = get_sub_field('bid_tabulation');
					$addendumOne = get_sub_field('addendum_no_1');
					$addendumTwo = get_sub_field('addendum_no_2');
					$planHolders = get_sub_field('plan_holders_list');
					$clar1 = get_sub_field('clarification_no_1');
					$clar2 = get_sub_field('clarification_no_2');?>
					
					<div class="columns large-3 medium-3 small-6"><strong><?php echo $name?></strong></div>
					<div class="columns large-9 medium-9 small-12">
						<div class="columns medium-3 small-6">
							<?php if($bid) {
								echo '<a href="'.$bid.'" target="_blank" class="pdf">Bid PDF</a>';
							} ?>
						</div>
						<div class="columns medium-3 small-6">
							<?php if($planHolders) {
								echo '<a href="'.$planHolders.'" target="_blank" class="pdf">Plan Holders PDF</a>';
							} ?>
						</div>
						<div class="columns medium-3 small-6">
							<?php if($tabulation) {
								echo '<a href="'.$tabulation.'" target="_blank" class="pdf">Bid Tabulation</a>';
							}?>
						</div>
						<div class="columns medium-3 small-6">
							<?php if($addendumOne) {
								echo '<a href="'.$addendumOne.'" class="pdf" target="_blank">Addendum No. 1</a>';
							} ?>
						</div>
						<div class="columns medium-3 small-6">
							<?php if($addendumTwo) {
								echo '<a href="'.$addendumTwo.'" target="_blank" class="pdf">Addendum No. 2</a>';
							} ?>
						</div>
						<div class="columns medium-3 small-6">
							<?php if($clar1) {
								echo '<a href="'.$clar1.'" target="_blank" class="pdf">Clarification No. 1</a>';
							} ?>
						</div>
						<div class="columns medium-3 small-6 left">
							<?php if($clar2) {
								echo '<a href="'.$clar2.'" target="_blank" class="pdf">Clarification No. 2</a>';
							} ?>
						</div>
					</div>
			</div>
			<?php endwhile;?>

		</section><!-- table -->

			
			
	</div><!-- large 12 -->
	<?php } else { ?>
		<p style="margin:4.5em 0;"><?php the_field('no_current_listings_text');?></p>
	<?php } ?>
</div><!-- row -->

<?php get_footer();
