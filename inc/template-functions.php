<?php

/**
 * Related Projects
 */

function recent_projects()
{

    $query = new WP_Query([
        'post_type' => 'project',
        'post__not_in' => [get_the_ID()],
        'posts_per_page' => 4,
        'order' => 'DESC',
        'orderby' => 'date',
    ]);


    if ($query->have_posts()) : ?>

        <section class="related-projects">
            <div class="container">
                <h2 class="section-title">
                    <?php esc_html_e('Δείτε επίσης', 'monoscopic'); ?>
                </h2>
                <ul class="projects">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li id="project-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                                <?php the_title('<h3 class="entry-title">', '</h3>'); ?>
                                <?php $project_short_description = get_field('project_short_description'); ?>
                                <?php if ($project_short_description) : ?>
                                    <div class="project-short-description"><?php the_field('project_short_description'); ?></div>
                                <?php endif ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>

        <?php wp_reset_postdata(); ?>

<?php endif;
}
