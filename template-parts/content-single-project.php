<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





	<?php if (have_rows('project_video_group')) : ?>
		<?php while (have_rows('project_video_group')) : the_row(); ?>
			<?php $project_video_url = get_sub_field('project_video_url'); ?>
			<!-- Entry Video -->
			<?php if ($project_video_url) : ?>
				<figure class="featured-video">
					<div class="container">
						<video-embed>
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
							<iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen src="" data-src="<?php the_sub_field('project_video_url'); ?>?autoplay=1"></iframe>
							<button aria-label="Play video"></button>
						</video-embed>
					</div>
				</figure>
				<!-- Featured Image -->
			<?php elseif (has_post_thumbnail()) : ?>
				<figure class="featured-image">
					<div class="container">
						<?php the_post_thumbnail('large'); ?>
					</div>
				</figure>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<!-- Entry Header -->
	<header class="entry-header">
		<div class="container">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<h2>Documentary on families impacted by Columbus police shootings part of Wexner Center film festival</h2>
			<h3>Παρουσίαση της Ιστορικής Βιβλιοθήκης του Ιδρύματος Αικατερίνης Λασκαρίδη</h3>
		</div>
	</header>

	<!-- Entry Content -->
	<div class="entry-content">
		<div class="container">
			<div class="column-wrap">
				<div class="col">
					<?php the_content(); ?>
				</div>
				<div class="col">
					<div>Πελάτης: Ίδρυμα Αικατερίνης Λασκαρίδη</div>
					<div>Διάρκεια: 11:51</div>
				</div>

			</div>
		</div>
	</div>

</article>





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