<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail()) : ?>
		<div class="cover">
			<figure class="featured-image">
				<?php the_post_thumbnail('large'); ?>
			</figure>
			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header>
		</div>
	<?php endif ?>








	<?php $project_short_description = get_field('project_description'); ?>
	<?php if ($project_short_description) : ?>
		<div class="short-description"><?php echo esc_html($project_short_description); ?></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>