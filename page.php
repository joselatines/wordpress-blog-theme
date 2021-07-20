<?php get_header() ?>

<!-- MAIN SECTION CARDS -->
<section class="cards_main_container">
    <div class="thumbnail_article">
        <?php 
            // check if the post or page has a Featured Image assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('post-thumbnails', array( 'class' => 'thumbnail_single') );
            }
        ?>
        <div class="tags_container">
            <?php the_tags('', ',', '') ?>
        </div>
    </div>
    <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia!</h1>
    <article class="article_content">
        <?php the_content(); ?>
    </article>
</section>
<!-- MAIN SECTION CARDS -->

<?php get_footer() ?>