<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php while(have_posts()): 
                    the_post(); 

                    get_template_part('parts/content', 'search' );
                     
                        the_posts_pagination();
             endwhile; ?>

               

        </div>
    </div>
</div>

<?php get_footer(); ?>