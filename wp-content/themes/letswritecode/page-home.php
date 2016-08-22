<?php
/*
Template name: Home Page
*/

// Custom Fields
$action_call_one 		= get_post_meta( 9, 'action_call_one', true );
$action_call_two 		= get_post_meta( 9, 'action_call_two', true );
$action_call_three 		= get_post_meta( 9, 'action_call_three', true );
$site_url 				= get_post_meta( 9, 'site_url', true );
$optin_button_text 		= get_post_meta( 9, 'optin_button_text', true );
$get_checklist 			= get_post_meta( 9, 'get_checklist', true );

// Advanced Custom Fields

$income_feature_image 			= get_field('income_feature_image');
$income_section_title 			= get_field('income_section_title');
$income_section_description 	= get_field('income_section_description');
$reason_1_title 				= get_field('reason_1_title');
$reason_1_description			= get_field('reason_1_description');
$reason_2_title 				= get_field('reason_2_title');
$reason_2_description			= get_field('reason_2_description');

$who_feature_image 				= get_field('who_feature_image');
$who_section_title 				= get_field('who_section_title');
$who_section_body 				= get_field('who_section_body');

$features_section_image 		= get_field('features_section_image');
$features_section_title 		= get_field('features_section_title');
$features_section_body  		= get_field('features_section_body');

$site_uses_title 				= get_field('site_uses_title');
$site_uses_body 				= get_field('site_uses_body');

$video_featurette_title 		= get_field('video_featurette_title');
$video_featurette_video 		= get_field('video_featurette_video');

$instructor_section_title 		= get_field('instructor_section_title');
$instructor_name 		 		= get_field('instructor_name');
$bio_excerpt 					= get_field('bio_excerpt');
$full_bio 	 					= get_field('full_bio');
$twitter_username 				= get_field('twitter_username');
$linkedin_username 				= get_field('linkedin_username');
$github_username 				= get_field('github_username');

get_header(); ?>

	<!-- HERO -->
	<section id="hero" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix">
				<div class="row">
					<div class="col-sm-3 wrapper">
						<img class="mindi img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mindi.png" alt="Image of author">
					</div><!-- col -->
					<div class="col-sm-3 hero-text">
						<h1><?php echo $action_call_one; ?></h1>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/computer.png" alt="chart" alt="">
					</div><!-- col -->
					<div class="col-sm-3 hero-text">
						<h1><?php echo $action_call_two; ?> </h1>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pencil.png" alt="chart" alt="">
					</div><!-- col -->
					<div class="col-sm-3 hero-text">
						<h1><?php echo $action_call_three; ?></h1>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/money.png" alt="chart" alt="">
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</article>
		
	</section>

	<!-- OPT IN SECTION -->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?php echo $get_checklist; ?></p>
				</div>
				<div class="col-sm-4">
					<button class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
				</div>
			</div>

		</div>
	</section>

	<!-- BOOST INCOME -->
	<section id="boost-income">
		<div class="container">
			<div class="section-header">

			<!-- If image added -->
				<?php if( !empty($income_feature_image) ) :  ?>
				
				<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">

				<?php endif; ?>

				<h2><?php echo $income_section_title; ?></h2>
			</div>
			<p class="lead"><?php echo $income_section_description; ?></p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php  echo $reason_1_title; ?></h3>
					<p><?php echo $reason_1_description; ?></p>
				</div>
				<div class="col-sm-6">
					<h3><?php echo $reason_2_title; ?></h3>
					<p><?php echo $reason_2_description; ?></p>
				</div>
			</div>
		</div>
	</section>

	

	<!-- WHO BENEFITS -->
	<section id="who-benefits">
		<div class="container">
			<div class="section-header">

			<!-- If image added -->
				<?php if( !empty($who_feature_image) ) :  ?>
				
				<img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">

				<?php endif; ?>

				<h2><?php echo $who_section_title; ?></h2>

			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

				<?php echo $who_section_body; ?>

				</div>
			</div>
		</div>
	</section>

	<!-- COURSE FEATURES -->
	<section id="course-features">
		<div class="container">
			<div class="section-header">
				<!-- If image added -->
				<?php if( !empty($features_section_image) ) :  ?>
				
				<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">

				<?php endif; ?>
				
				<h2><?php echo $features_section_title; ?></h2>

				<!-- If user aded body text -->
				<?php if( !empty($features_section_body) ) : ?>

				<p class="lead"><?php echo $features_section_body; ?></p>

				<?php endif; ?>


			</div>
			<div class="row">

				<?php $loop = new WP_Query( array( 'post_type' => 'site_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col-sm-2">
					<i class="<?php the_field('site_feature_icon'); ?>"></i>
					<h4><?php the_title(); ?></h4>
				</div>

				<?php endwhile; ?>
				
			</div>
		</div>
	</section>

	<!-- PROJECT FEATURES -->
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

				<?php endwhile; ?>
					
				</div>
		</div>
	</section>

	<!-- VIDEO FEATURETTE -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_featurette_title; ?></h2>				
					<object><?php echo $video_featurette_video; ?></object>
				</div>
			</div>
		</div>
	</section>

	<!-- INSTRUCTOR SECTION -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div>
						<div class="col-lg-4">
							<a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://linkedin.com/in/<?php echo $linkedin_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-linkedin-square"></i></a>
							<a href="https://github.com/<?php echo $github_username; ?>" target="_blank" class="badge social ghub"><i class="fa fa-github"></i></a>
						</div>
					</div>
					<p class="lead"><?php echo $bio_excerpt; ?></p>
					<?php echo $full_bio; ?>
					
					<!-- <h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									41,000+ <span>students</span>
								</div>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									568 <span>reviews</span>
								</div>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									8 <span>courses</span>
								</div>
							</div>
						</div> 
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<!-- TESTIMONIALS -->
	<section id="kudos">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>What People Are Saying About letswrite<span class="melon">CODE</span>.com</h2>
					
					<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="row testimonial">
						<div class="col-sm-4">

							<?php 							
								if( has_post_thumbnail() ) {
									the_post_thumbnail( array( 200, 200 ) );
								}
							?>
							
						</div>
						<div class="col-sm-8">		
							<blockquote>
								<?php the_content(); ?>
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div>
					</div>
					
					<?php endwhile; ?>
					
				</div>

			</div>
		</div>
	</section>


<?php get_footer(); ?>

