<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-9">

            <?php the_archive_title('<h1 class="archive__title"', '</h1>'); ?>
            <?php the_archive_description('<div class="archive__description"', '</div>') ?>
                <div class="archive__items">

               
                <?php
                if( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                
                    get_template_part('parts/content', 'archive' );
                
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

                <div class="col-3">

                <?php get_sidebar(); ?>

                </div>

            </div>
        </div>

<?php get_footer(); ?>