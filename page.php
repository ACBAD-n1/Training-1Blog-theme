<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">

    <div class="container pt-5 pb-5">
        <div class="page__item">

        <?php while(have_posts()): the_post(); 

                get_template_part('parts/content','page');

            if( comments_open() || get_comments_number() ) {

                comments_template();

                } ?>

        <?php endwhile; ?>
            </div>
        </div>

<?php get_footer(); ?>