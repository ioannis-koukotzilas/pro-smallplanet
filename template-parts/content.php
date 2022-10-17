<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php if (is_singular()) : the_title('<h1 class="entry-title">', '</h1>'); ?>
		<?php else : the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
		<?php endif; ?>

	</header>

	<!-- The Post Thumbnail -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>