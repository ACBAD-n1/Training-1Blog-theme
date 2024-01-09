<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php while(have_posts()): 
                    the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array('400', '400')); ?> </a>
                        <div class="meta__info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                            <p>Categorie: <?php the_category(' '); ?></p>
                            <p>Tags: <?php the_tags('', ' ') ?></p>
                        </div>

                        <div class="article__content">
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </div>

                <div class="ablog__pagination">
                    <div class="pages new">
                        <?php next_post_link() ?>      
                    </div>
                    <div class="pages old">
                        <?php previous_post_link() ?>
                    </div>
                </div>

                    <hr>
                    </article>

                    <?php  

                    if( comments_open() || get_comments_number() ) {

                        comments_template();

                    }

             endwhile; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>