<?php get_header(); ?>

<div class="container p-4">
	<?php if(have_posts()): ?>
        <div class="row m-auto pb-4 rtl">
            <div class="col-1"></div>
            <div class="col-10">
                
            <?php while(have_posts()): the_post(); ?>
                    <img class="py-4" src="<?php the_post_thumbnail_url(); ?>" >
                    <header class="pb-3 text-right">
                        <?php next_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
                        <?php previous_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="fs-12">
                            <span class="post-date"><i class="icon-clock"></i><?php the_time('l, jS, Y'); ?></span>
                            <span class="post-category">
                                <i class="icon-clipboard"></i>
                                <?php the_category(', '); ?>
                            </span> 
                        </div>
                    </header>
                    <?php the_content(); ?>

                    <div class="tagcloud text-center">
                        <ul><i class="icon-tag"></i><?php the_tags('<li>', '</li><li>', '</li>'); ?></ul>
                    </div>
            <?php endwhile; ?>

            </div>
            <div class="col-1"></div>
        </div>
	<?php else: ?>
	    ناموجود
	<?php endif; ?>
</div>

<!-- Footer -->
<?php get_footer(); ?>