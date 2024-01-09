<?php
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">

    <div class="container pt-5 pb-5">
        <div class="blog__items">

         <?php
        if( have_posts() ) : 
            while ( have_posts() ) : the_post();
        ?>

            <article>
                <h1><?php the_title(); ?></h1>

                    <div class="article__content">
                        <?php the_content(); ?>
                    </div>
              
            </article>

        <?php endwhile ;
        else: ?>
            <p>Nathing to displayed</p>
        <?php endif; ?>

            </div>
        </div>

<?php get_footer(); ?>