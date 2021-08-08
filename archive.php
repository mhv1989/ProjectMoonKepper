<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<div class="container p-4">
    <div class="row pb-5 rtl ta-r">
    	<?php while ( have_posts() ) : the_post();  ?>
        <div class="col-md-4 p-5 p-md-0">
          <div class="card border-gray rounded rtl ta-r p-md-2 m-md-4">
          	<a href="<?php the_permalink(); ?>">
		  	<img class="card-img-top px-lg-4 pt-lg-4 rounded" src="<?php the_post_thumbnail_url(); ?>" >
			</a>
			  <div class="card-body">
			    <h6 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			    <p class="card-text">
			    	<small class="text-muted">
			    		<?= the_time('l, jS, Y'); ?><br><?php the_category(', '); ?>
			    	</small>
			    </p>
			    <p class="card-text fs-14"><?= excerpt(30); ?></p>
			    <a href="<?php the_permalink(); ?>" class="btn btn-link text-danger p-0">بیشتر</a>
			  </div>
			</div>  
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>

<!-- Footer -->
<?php get_footer(); ?>