<?php get_header(); ?>

<main class="site-main">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', get_post_type());  ?>

		<!-- Related Posts Query -->

	<?php endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();
