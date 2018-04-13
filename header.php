<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
?>
</title>
	
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		
	  <!-- Header -->
	  <div class="dev-header">
		<div class="dev-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="">
						<?php
						if ( ! is_null( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
										?>
						<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
										<strong class="text-uppercase dev-brand-title d-inline-block pl-2"><?php bloginfo( 'name' ); ?></strong>
									</a>
						</div>
					</div>
					<div class="col-md-12">
						<div id="dev-head-navigation">
								<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
										<div class="container">
											<h3 class="navbar-brand"><?php bloginfo( 'description' ); ?></h3>
											<button class="navbar-toggler" data-toggle="collapse" data-target="#startKBmenu">
												<span class="navbar-toggler-icon"></span>
											</button>
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
													'container_class' => 'collapse navbar-collapse',
													'container_id' => 'startKBmenu',
													'menu_class' => 'navbar-nav ml-auto text-center',
													'fallback_cb' => '',
													'menu_id' => 'main-menu',
													'walker'  => new PLAYFULBLOG_WP_Bootstrap_Navwalker(),
												)
											);
											?>
										</div>
									</nav>
								</div>
					</div>
				</div>
			</div>
		</div>
	 </div>  <!-- Header Ends -->
