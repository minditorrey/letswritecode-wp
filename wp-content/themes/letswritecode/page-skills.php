<?php  
/* Template Name: Skills Page */

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!--   FEATURE IMAGE  -->

	<?php if( has_post_thumbnail() ) { ?>
		<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; backbround-size: cover;" data-type="background" data-speed="2">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</section>
	<?php  } else { ?>
		
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

	<?php } ?>

	<section class="intro-skills">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

		<?php endwhile; ?>
	</section>		


	<div class="container">
		<div class="row" id="primary">
			<div id="skills" class="col-sm-12">
				<section class="main-content">

					<div class="skills-row clearfix">
						<div class="row category">
							<h1>HTML</h1>
						</div>	
					<?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php  
						$html_video 			= get_field('html_video');
						$html_topic 			= get_field('html_topic');
						$html_description 		= get_field('html_description');
						?>


						<div class="skills">
							<object><?php echo $html_video; ?></object>
							<h5 class="melon"><?php echo $html_topic; ?></h5>
							<p><?php echo $html_description; ?></p>
						</div>
					<?php endwhile; wp_reset_query(); ?>
					
					</div>
					<hr>


					<div class="skills-row clearfix">
						<div class="row category">
							<h1>CSS</h1>
						</div>

					<?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php 
						$css_video 				= get_field('css_video');
						$css_topic 				= get_field('css_topic');
						$css_description 		= get_field('css_description');
						?>

						<div class="skills">
							<object><?php echo $css_video; ?></object>
							<h5 class="melon"><?php echo $css_topic; ?></h5>
							<p><?php echo $css_description; ?></p>
						</div>
					
					<?php endwhile; wp_reset_query(); ?>

					</div>
					<hr>


					<div class="skills-row clearfix">
						<div class="row category">
							<h1>Javascript</h1>
						</div>

					<?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php 
						$javascript_video 		= get_field('javascript_video');
						$javascript_topic 		= get_field('javascript_topic');
						$javascript_description = get_field('javascript_description');
						?>
			
						<div class="skills">
							<object><?php echo $javascript_video; ?></object>
							<h5 class="melon"><?php echo $javascript_topic; ?></h5>
							<p><?php echo $javascript_description ?></p>
						</div>
						
						<?php endwhile; wp_reset_query(); ?>
					
					</div> <!-- end clearfix -->
					<hr>

				</section>
			</div> <!-- end column -->
		</div> <!-- end row -->
	</div> <!-- end container -->


<?php get_footer(); ?>