<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package letswriteCode
 */

?>

<?php wp_footer(); ?>

	<!-- SIGN UP -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Are you ready to take your tech skills to the <strong>next level</strong>?</h2>
					<p><a href="#" class="btn btn-lg btn-block btn-success">Get started Now!</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/">letswrite<span class="melon">CODE</span>.com</a></p>
			</div>
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resources</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Get Started!</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-3">
				<p class="pull-right">&copy 2016 Mindi Torrey</p>
			</div>
		</div>
	</footer>

	<!-- MODAL -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Get Started with Coding Checklist</h4>
				</div><!-- header -->
					<div class="modal-body">
						<p>Simply enter your name and email for our very popular Getting Started Checklist</p>
						<form role="form" class="form-inline">
							<div class="form-group">
								<label for="subscribe-name" class="sr-only">Your first name</label>
								<input type="text" class="form-control" id="subscribe-name" placeholder="your first name">
							</div>
							<div class="form-group">
								<label for="subscribe-email" class="sr-only">Your email</label>
								<input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
							</div>
							<input type="submit" class="btn btn-danger" value="Subscribe!">
						</form>	
						<hr>
						<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. No spam. Just good stuff.</small></p>
					</div>
			</div><!-- content -->
		</div><!-- dialog -->
	</div>

<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
