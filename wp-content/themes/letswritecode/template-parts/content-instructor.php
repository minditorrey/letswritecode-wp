<?php 
$instructor_section_title 		= get_field('instructor_section_title');
$instructor_name 		 		= get_field('instructor_name');
$bio_excerpt 					= get_field('bio_excerpt');
$full_bio 	 					= get_field('full_bio');
$twitter_username 				= get_field('twitter_username');
$linkedin_username 				= get_field('linkedin_username');
$github_username 				= get_field('github_username');
?>
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