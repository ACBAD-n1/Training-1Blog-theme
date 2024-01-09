<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">

<div class="container-fluid home__services">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php if(is_active_sidebar('services-1')): ?>
                    <?php dynamic_sidebar('services-1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-4">
                <?php if(is_active_sidebar('services-2')): ?>
                    <?php dynamic_sidebar('services-2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-4">
                <?php if(is_active_sidebar('services-3')): ?>
                    <?php dynamic_sidebar('services-3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


    <div class="container pt-5 pb-5">
        <div class="blog__items">
             <div class="row">

                <?php
                // Custom WP_Query
                $home_query = new WP_Query(array(
                    'post_type'      => 'post', // Replace with your actual post type
                    'posts_per_page' => 3,
                    'orderby'        => 'date', // You can change the orderby parameter as needed
                    'order'          => 'DESC',
                ));

                // Loop through the custom query
                $count = 0;
                while ($home_query->have_posts()) : $home_query->the_post();
                    $count++;

                    if ($count === 1) {
                        // First post - larger size
                        echo '<div class="col-12">';
                        // Your content here for the first post
                        ?> <a href="<?php the_permalink() ?>"> <?php the_title('<h2>', '</h2>'); ?> </a>
                        <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('large'); ?> </a>
                        
                        <div class="meta__info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                            <p>Categorie: <?php the_category(' '); ?></p>
                            <p>Tags: <?php the_tags('', ' ') ?></p>
                        </div>
                        
                        <?php
                        the_excerpt();
                        echo '</div>';
                    } else {
                        // 2nd and 3rd posts - smaller size
                        echo '<div class="col-6">';
                        // Your content here for the 2nd and 3rd posts
                        ?> <a href="<?php the_permalink(); ?>"> <?php the_title('<h2>', '</h2>'); ?> </a> 
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?> </a> 
                       
                        <div class="meta__info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                            <p>Categorie: <?php the_category(' '); ?></p>
                            <p>Tags: <?php the_tags('', ' ') ?></p>
                        </div>

                        <?php
                        the_excerpt();
                        echo '</div>';
                    }

                endwhile;

                // Restore original post data
                wp_reset_postdata();
                ?>

                </div>
            </div>
        </div>

<?php get_footer(); ?>