<?php get_header(); ?>
<main>
    <div class="main__wrapper">
        <article class="inside__new">
            <h1><?php the_title(); ?></h1>
            <text class="date"><?php the_time( 'F jS Y' ); ?></text>
            <text class="caategory"><?php the_category( ' , ' ); ?></text>
            <div class="new__info">
                <img src=<?php the_post_thumbnail(); ?>
                     <p><?php the_content(); ?></p>
            </div>
        </article>
        <?php get_sidebar(); ?>
        <adticle class="comment_wrapper">
            </article>
    </div>

</main>
