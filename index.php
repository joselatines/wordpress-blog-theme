<?php get_header() ?>

    <!-- MAIN SECTION CARDS -->
    <section class="cards_main_container">
        <h2 class="title_section"><i class="fas fa-calendar"></i>Last posted</h2>
        <div class="cards_container"> 
  
            <!-- THE LOOP -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="card">
                    <a class="card_img_container" href="<?php the_permalink(); ?>">
                        <?php 
                            // check if the post or page has a Featured Image assigned to it.
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array ( 'class' => 'card_img') );
                            }
                        ?>
                        <!-- <img class="card_img" src="img/fornite.jpg" alt=""> -->
                    </a>
                    <h2>
                        <a class="title_a" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                    <div class="tags_container">
                        <?php the_tags('', ',', '') ?>
                    </div>
                </article> 
            <?php endwhile;  endif; ?>
             <!-- THE LOOP -->
        </div>

        <!-- PAGINATION -->
        <nav class="pagination">
            <?php get_template_part( 'template-parts/content', 'pagination'); ?>
        </nav>
        <!-- PAGINATION -->
    </section> 
    <!-- MAIN SECTION CARDS -->

    <!-- ASIDE -->
    <?php get_sidebar(); ?>
    <!-- ASIDE -->

<?php get_footer() ?>