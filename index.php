<?php get_header(); ?>

<!-- Posts Section -->
<section id="dev-posts-section">
	<div class="dev-posts-inner">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-8 py-3">
					<div class="row">
						<?php if ( is_home() ) : ?>
						<div class="col-sm-12 col-md-12">
							<div>
								<h1 class="dev-intro">Simple Blogging Theme
									<span>.</span>
								</h1>
							</div>
							<div>
								<h2 class="dev-intro-2 py-2">This is a starter blogging template, you can hack it to use it your way and customize accordingly.</h2>
							</div>
							<div>
								<h4 class="dev-intro-para py-2">
									If something doesn't seem easy, you know that's where you gotta start rolling. Drake had his plan from a waiter to a world class singer, you better have your own. Your thing starts now!
								</h4>
							</div>
							<hr>
						</div>
						<?php endif; ?>
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
							?>
						<div class="col-sm-12 col-md-12">
							<div class="dev-post-card">
								<h1 class="dev-post-intro">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
										<span>.</span>
									</a>
								</h1>
								<div class="dev-post-img">
							<?php
							if ( ! is_single() ) :
?>
<a href="<?php the_permalink(); ?>"><?php endif; ?>
										<?php
										if ( has_post_thumbnail() ) :
											the_post_thumbnail();
										endif;
										?>
									<?php
									if ( ! is_single() ) :
?>
</a><?php endif; ?>
								</div>
								<div class="dev-post-body">
									<div class="dev-post-content">
										<?php
										if ( is_single() ) :
											the_content();
										else :
											the_excerpt();
									endif;
									?>
									</div>
								</div>
								<?php the_category( '' ); ?>

								<hr>
							</div>
						</div>
							<?php
							endwhile;
						else : // The.
						endif;
						?>
						<div class="col-sm-12 col-md-12">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-12">
										<div class="dev-post-nav">
											<span class="float-left"><?php previous_post_link(); ?></span>
											<span class="float-right"><?php next_post_link(); ?></span>
										</div>
									</div>
								</div>
							</div>
							<hr>
						</div>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<!-- Themes Section -->



<?php get_footer(); ?>
