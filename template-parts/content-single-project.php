<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header>

	<!-- The Post Thumbnail -->


	<?php $event_date = get_field('project_description'); ?>
	<?php if ($event_date) : ?>
		<div class="date"><?php echo esc_html($event_date); ?></div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>

