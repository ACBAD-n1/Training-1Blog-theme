<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-8">

                <div class="blog__items">

                <h1>Blog</h1>

                <?php
                if( have_posts() ) : 
                    while ( have_posts() ) : the_post();

                    
               get_template_part("parts/content", get_post_format() );

                   

               endwhile ; ?>

                <div class="ablog__pagination">
                    <div class="pages new">
                        <?php previous_posts_link('<< Newer posts') ?>
                    </div>
                    <div class="pages old">
                    <?php next_posts_link(' Older posts >>') ?>
                    </div>
                </div>

                    <?php
                else: ?>
                    <p>Nathing to displayed</p>
                <?php endif; ?>

                    </div>
                </div>

                <div class="col-4">

                <?php get_sidebar(); ?>

                </div>

            </div>
        </div>

<?php get_footer(); ?>