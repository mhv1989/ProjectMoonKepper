<!-- Header -->
<?php get_header(); ?>
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble1.png" class="d-none d-md-block t-0 l-0 position-absolute w-9" />
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble2.png" class="d-none d-md-block t-670 l-0 position-absolute w-4" />
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble3.png" class="d-none d-md-block t-670 l-8 position-absolute w-20" />
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble4.png" class="d-none d-md-block t-860 r-0 position-absolute w-50" />
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble5.png" class="d-none d-md-block t-1650 l-0 position-absolute w-42" />
	<img src="<?php bloginfo('template_directory');?>/assets/svg/bubble6.png" class="d-none d-lg-block t-85 l-5 position-absolute w-6" />

	<div class="container">
		<!-- Section 1 -->
		<div class="row my-5 py-5 rtl ta-r">
			<div class="col-md-6 px-5 align-self-center">
				<h3>کریپتو کارنسی</h3>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
			</div>
			<div class="col-md-6 mx-5 mx-md-0 px-5 px-sm-5 px-md-0 px-lg-5">
				<img src="<?php bloginfo('template_directory');?>/assets/svg/505.png" class="w-75 mx-auto d-block">
			</div>
		</div>


	<!-- Section 2 -->
<?php if(get_posts()): ?>
<?php
$args = array(
    'numberposts' => 2,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);

$lastposts = get_posts( $args );
?>
	    <div class="row m-10 py-5">
	    	<div class="col-1"></div>

	    	<?php foreach($lastposts as $post) : ?>
	        <div class="col-md-5 px-5 px-md-3 px-lg-5 pt-4 pt-md-0">
				<div class="card border-gray rounded rtl ta-r">
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
	        <?php endforeach; ?>

	    	<div class="col-1"></div>
	    </div>
<?php endif; ?>

	   <!-- Section 3 -->
		<div class="row m-10 rtl ta-r">
			<div class="col-md-6 px-5 align-self-center">
				<h3>استخراج  ارز دیجیتال</h3>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
			</div>
			<div class="col-md-6 mx-5 mx-md-0 px-5 px-sm-0 px-md-0 px-lg-5">
				<img src="<?php bloginfo('template_directory');?>/assets/svg/bitcoin-server.png" class="w-100 px-5 px-md-0 mx-auto d-block">
			</div>
		</div>

		<!-- Section 4 -->
		<div class="row mt-12">
			<div class="col-12">
				<img src="<?php bloginfo('template_directory');?>/assets/svg/block-chain.png" class="w-50 mx-auto d-block">
			</div>
		</div>

		<div class="row my-5 justify-content-center rtl">
			<div class="col-sm-8 col-lg-5">			
				<h3 class="text-center my-4">بلاک چین</h3>
				<p class="text-center">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
			</div>
		</div>

		<div class="row justify-content-center mt-5">
			<div class="m-auto">
				<div class="tooltips">
					<button class="btn-copy" onclick='copy()' onmouseout='out()'>
						<span class="tooltiptext" id="tooltip">Copy to clipboard</span>
						کپی لینک
					</button>
				</div>
				<label class="link">
					<input id="cryptoLink" class="input-link" type="text" value="https://get.cryptobrowser.site/3508259">
				</label>
			</div>
		</div>		
	</div>

<!-- Footer -->
<?php get_footer(); ?>