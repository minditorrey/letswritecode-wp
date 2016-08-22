<?php  

$action_call_one 		= get_post_meta( 9, 'action_call_one', true );
$action_call_two 		= get_post_meta( 9, 'action_call_two', true );
$action_call_three 		= get_post_meta( 9, 'action_call_three', true );

?>

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