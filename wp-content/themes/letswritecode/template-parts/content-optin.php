<?php  
$optin_button_text 		= get_post_meta( 9, 'optin_button_text', true );
$get_checklist 			= get_post_meta( 9, 'get_checklist', true );
?>

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