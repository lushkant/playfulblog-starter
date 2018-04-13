
<!-- Footer Widgets Section -->
<section id="dev-footer-widgets">
	<div class="dev-footer-widgets-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-5 mr-auto py-5">
					<h2 class="dev-widget-title">Some Information.</h2>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem esse nulla reiciendis enim nisi
						illum eum corporis fuga eius ipsum ipsa, autem commodi! Odit perspiciatis iste rem. Consectetur,
						obcaecati exercitationem unde, modi hic sed, aut assumenda veniam deserunt temporibus distinctio.</p>
					<a href="#" class="dev-button">Learn More</a>
				</div>
				<div class="col-md-5 mr-auto py-5">
					<h2 class="dev-widget-title">About Us.</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque in culpa consequuntur laudantium,
						reprehenderit praesentium!</p>
					<a href="#" class="dev-button">Know More</a>
				</div>
				<div class="col-md-5 mr-auto py-5">
					<h2 class="dev-widget-title">Support Us.</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium non sequi ab provident! Doloremque
						incidunt illo corporis dolore dolorum!</p>
					<a href="#" class="dev-button">Let's Help Each Other</a>
				</div>

				<div class="col-md-5 mr-auto py-5">
					<h2 class="dev-widget-title">Recents.</h2>
					<a href="#" class="dev-post-title">We're Just Starting Up!</a>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut obcaecati quam voluptatibus molestias accusamus,
						enim est! Ea ex ullam vel! ....</p>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer id="dev-footer">
	<div class="dev-footer-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 justify-content-md-center">
					<div class="row">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => 'col-lg-12 text-center',
							'container_id'    => '',
							'menu_class'      => 'row justify-content-center',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'link_before'     => '<div class="dev-footer-nav"><strong>',
							'link_after'      => '</strong></div>',
							'walker'          => new PLAYFULBLOG_WP_Bootstrap_Navwalker(),
						)
					); ?>
						<div class="col-md-12 m-auto">
							<div class="dev-footer-social text-center">
								<a href="#" class="dev-footer-ico">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" class="dev-footer-ico">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#" class="dev-footer-ico">
									<i class="fa fa-google-plus"></i>
								</a>
								<a href="#" class="dev-footer-ico ">
									<i class="fa fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 text-center">
					<p class="text-muted">CC 4.0 License &copy; 2017 By
						<strong>
							<a href="<?php bloginfo( 'url' ); ?>" class="dev-credit-text"><?php bloginfo( 'name' ); ?></a>
						</strong> | Proudly Powered by
						<strong class="dev-credit-text">
							<a href="http://wordpress.org" class="dev-credit-text">WordPress</a>
						</strong>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>
</body>

</html>
