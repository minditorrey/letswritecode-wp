<?php
$site_uses_title 		= get_field('site_uses_title');
$site_uses_body 		= get_field('site_uses_body');
?>
	
<section id="project-features">
	<div class="container">
		<h2><?php echo $site_uses_title; ?></h2>
			<p class="lead"><?php echo $site_uses_body; ?></p>
			<div class="row">
			<?php $loop = new WP_Query( array( 'post_type' => 'site_use', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-sm-4">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}						
					?>
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>
				
			</div>
	</div>
</section>