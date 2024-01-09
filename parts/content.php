                <article>
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(array('400', '400')); ?> </a>
                        <div class="meta__info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                            <p>Categorie: <?php the_category(' '); ?></p>
                            <p>Tags: <?php the_tags('', ' ') ?></p>
                        </div>

                        <div class="article__content">
                            <?php the_excerpt(); ?>
                        </div>
                    <hr>
                </article>