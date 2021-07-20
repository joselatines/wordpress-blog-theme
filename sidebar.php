<aside class="aside">
    <h4 class="title_section">Aside</h4>
    <hr>
    <!-- <section class="news">
        <h4 class="title_section">Mi Aside</h4>
        <hr>
        <div class="news_cards_container">
            <article class="news_card">
                <div class="news_card_img">
                    <a href="single.html">
                    </a>
                    <div class="news_date">
                        <time datetime="2018-07-07">07-15-2021</time>
                    </div>
                </div>
                <div class="news_title">
                    <h3>
                        <a class="title_a" href="single.html">Title article</a> 
                    </h3>
                    <div class="tags_container">
                        <a class="tag" href="#">Tag</a>
                        <a class="tag" href="#">Tag</a>
                        <a class="tag" href="#">Tag</a>
                    </div>
                </div>
            </article>
        </div> 
    </section> -->

    <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</aside>