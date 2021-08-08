	<div class="container footer py-5">
		<div class="row py-5 rtl ta-r">

			<div class="col-5">
				<h6><?php bloginfo('name'); ?></h6>
				<p class="mt-3 ff-IL"><?php if ( dynamic_sidebar('footer-one') ); ?></p>
				<h6 class="mt-5 fs-13">&copy; ۲۰۱۸ <?php bloginfo('name'); ?>, ساخته شده با ♡ و مقدار زیادی ☕</h6>
			</div>

			<?php if ( dynamic_sidebar('footer-two') ); ?>
			<?php if ( dynamic_sidebar('footer-three') ); ?>
			<?php if ( dynamic_sidebar('footer-four') ); ?>

		</div>
	</div>
    <?php wp_footer(); ?>
  </body>
</html>