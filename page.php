<?php get_header(); ?>

	  <!-- Posts Section -->
	  <section id="dev-posts-section">
		  <div class="dev-posts-inner">
			<div class="container">
				<div class="row">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
						?>
						<div class="col-12 col-sm-8 col-md-8 py-3">
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<div>
										<h1 class="dev-intro"><?php the_title(); ?><span>.</span></h1>
									</div>
									<div>
										<h2 class="dev-intro-2 py-2"><?php the_excerpt(); ?>
										</h2>
									</div>
									<div>
										<h4 class="dev-intro-para py-2">
												Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi hic nostrum doloremque pariatur accusantium magni.
										
									</div>
									<hr>
								</div>
								<div class="col-sm-12 col-md-12">
									<div class="dev-page-card">
										<div class="dev-page-img">
											<a href="#"><img class="img img-fluid" src="img/post_img02.jpeg" alt=""></a>
											<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail( 'full' );
											endif;
											?>
										</div>
										<div class="dev-page-body">
										  <div class="dev-single-page-content">
												<?php the_content(); ?>
											</div>
										</div>
										<?php the_category( '' ); ?>
										<hr>
									</div>
								</div>
							</div>
						</div>
<?php
endwhile;
					 endif;
                        ?>
                        <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	  </section>

<?php
get_footer();
?>
