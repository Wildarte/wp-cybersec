<?php get_header(); ?>

    <main>
        <div class="page_default container">
            <h2><?= get_the_title(); ?></h2>

            <?php the_content(); ?>
        </div>
    </main>

<?php get_footer(); ?>