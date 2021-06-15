<!-- header呼び出し -->
<?php get_header(); ?>
<div class="luxy">
  <!-- main -->
  <main class="l-main">
    <article>
      <div class="p-section">
        <!-- page-hero -->
        <div class="anim-wrap js-scroll-trigger">
          <header class="l-pageHero l-container js-wrap">
            <h1 class="l-pageHero__title js-text">NEWS</h1>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-news__sec-news">
          <div class="l-container">
            <div class="c-listNews__newsInner">
              <ul class="c-listNews__newsList">
                <?php if (have_posts()):
                  while (have_posts()):
                      the_post(); ?>
                <li class="c-listNews__newsItem">
                  <a href="<?php the_permalink(); ?>" class="c-listNews__newsLink">
                    <div class="c-listNews__newsHeader">
                      <time class="c-listNews__newsDate"><?php the_time(
                        'Y.m.d'
                    ); ?></time>
                    </div>
                    <h3 class="c-listNews__newsTitle">
                     <?php the_title(); ?>
                        </h3>
                  </a>
                </li>
                <?php
                  endwhile;
              endif; ?>
              </ul>
            </div>
            <!-- ページャー -->
            <?php wp_pagenavi(); ?>
            <!-- /ページャー -->
          </div>
          <?php wp_reset_postdata(); ?>
        </section>
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>