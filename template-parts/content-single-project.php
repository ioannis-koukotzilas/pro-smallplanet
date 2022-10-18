<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail()) : ?>
		<figure class="featured-image">
			<?php the_post_thumbnail('large'); ?>
		</figure>
	<?php endif ?>

	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<h2>Παρουσίαση της Ιστορικής Βιβλιοθήκης του Ιδρύματος Αικατερίνης Λασκαρίδη</h2>
		<div>Πελάτης: Ίδρυμα Αικατερίνης Λασκαρίδη</div>
				<div>Διάρκεια: 11:51</div>
	</header>

	<div class="entry-content">
		
			<?php the_content(); ?>
			
				
			
			
			
		
		
	</div>

</article>


<div class="entry-content">

	<?php if (have_rows('project_video_group')) : ?>
		<?php while (have_rows('project_video_group')) : the_row(); ?>
			<?php $project_video_url = get_sub_field('project_video_url'); ?>
			<?php if ($project_video_url) : ?>
				<video-embed>
					<?php $project_video_cover = get_sub_field('project_video_cover'); ?>
					<?php if ($project_video_cover) : ?>
						<?php echo wp_get_attachment_image($project_video_cover, 'full'); ?>
					<?php endif; ?>
					<iframe allow="autoplay" src="" data-src="<?php the_sub_field('project_video_url'); ?>?autoplay=1"></iframe>
					<button aria-label="Play video"></button>
				</video-embed>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

</div>



<!-- Slider main container -->
<div class="swiper">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-2.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-3.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-4.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-5.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-6.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-7.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-8.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-9.png" alt=""></div>
		<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-10.png" alt=""></div>


	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>

	<!-- If we need scrollbar -->
	<div class="swiper-scrollbar"></div>
</div>