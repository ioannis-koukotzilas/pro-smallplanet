<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>
	</header>

	<!-- The Post Thumbnail -->

	<div class="entry-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>

</article>