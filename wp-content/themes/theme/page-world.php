<?php get_header(); ?>

<body>
<main>
    <div class="main__wrapper">
        <section class="news">
            <?php

            $posts = get_posts( array(
                'numberposts'      => 12,
                'post_type'        => 'news',
                'suppress_filters' => true,
                'cat'              => 7,
            ) );

            foreach ( $posts as $post ) {
                setup_postdata( $post );
                ?>

                <article class="new-section">
                    <div class="new__wrapper">
                        <div class="img__wrapper">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post_thumb' ); ?></a>
                        </div>
                        <div class="description__wrapper">
                            <h1 class="new-text"><?php the_title(); ?></h1>
                            <div class="date"><?php the_time( 'F jS Y' ); ?></div>
                            <p class="new-text-p"> <?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <a class="go-to-new" href="<?php the_permalink(); ?>">Посмотреть новость</a>
                </article>

                <?php
            }
            wp_reset_postdata(); ?>
        </section>
        <?php get_sidebar(); ?>

    </div>
</main>
</body>
</html>
