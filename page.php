<?php get_header(); ?>

	<div class="container py-5">
		<div class="row m-auto rtl">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

					<div class="pb-2 text-right">
						<h4><?php the_title(); ?></h4>
					</div>

					<?php the_content(); ?>

				<?php endwhile; else: ?>

					<div class="pb-2 text-right">
						<h4>Oh No!</h4>
					</div>		

					<p>No content appearing for this page!</p>

				<?php endif; ?>

			</div>
			<div class="col-md-1"></div>

		</div>
	</div>	

<!-- Footer -->
<?php get_footer(); ?>