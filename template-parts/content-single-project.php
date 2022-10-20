<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $featured_video_url = get_field('featured_video_url'); ?>
	<?php if ($featured_video_url) : ?>
		<!-- Featured Video -->
		<figure class="featured-video">
			<div class="container">
				<video-embed>
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>
					<iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen src="" data-src="<?php the_field('featured_video_url'); ?>?autoplay=1"></iframe>
					<button aria-label="Play video"></button>
				</video-embed>
			</div>
		</figure>

	<?php elseif (has_post_thumbnail()) : ?>
		<!-- Featured Image -->
		<figure class="featured-image">
			<div class="container">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</figure>
	<?php endif; ?>


	<!-- Entry Header -->
	<header class="entry-header">
		<div class="container">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<?php $project_short_description = get_field('project_short_description'); ?>
			<?php if ($project_short_description) : ?>
				<h3 class="project-short-description"><?php the_field('project_short_description'); ?></h3>
			<?php endif ?>
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
					<?php $project_duration = get_field('project_duration'); ?>
					<?php if ($project_duration) : ?>
						<div class="project-duration"><?php esc_html_e('Διάρκεια', 'monoscopic'); ?>: <?php the_field('project_duration'); ?></div>
					<?php endif ?>
				</div>

			</div>
		</div>
	</div>

	<!-- Entry Gallery -->
	<section class="entry-gallery">
		<div class="container">
			<h2 class="section-title">
				<?php esc_html_e('Στιγμιότυπα', 'monoscopic'); ?>
			</h2>

			<!-- Slider main container -->
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-3.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-2.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-4.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-5.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-6.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-7.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-8.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-9.png" alt=""></div>
					<div class="swiper-slide"><img src="http://localhost/pro.smallplanet/wp-content/uploads/2022/10/Istoriki-Vivliothiki-10.png" alt=""></div>

				</div>
				
				<!-- Navigation -->
				<div class="swiper-navigation">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>

			</div>
		</div>
	</section>

</article>

<?php recent_projects(); ?>