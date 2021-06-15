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
            <div class="l-pageHero__title js-text">NEWS</div>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-news__sec-post">
          <div class="l-container">
            <main>
              <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
              <article>
                <header class="c-listNews__postHeader">
                  <div class="c-listNews__newsHeader">
                    <time class="c-listNews__newsDate"><?php the_time(
                      'Y.m.d'
                  ); ?></time>
                  </div>
                  <h1 class="c-listNews__newsTitle">
                        <?php the_title(); ?>
                      </h1>
                  <div class="c-listNews__thumb">
                    <picture>
                      <?php the_post_thumbnail(); ?>
                    </picture>
                  </div>
                </header>
                <div class="c-listNews__postInner">
                  <?php the_content(); ?>
                </div>
                <!-- ページャー -->
                <div class="l-pagination">
                  <div class="l-pagination__inner">
                    <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-pagination__link">
                      <p class="l-pagination__text">BACK TO LIST</p>
                    </a>
                  </div>
                </div>
                <!-- /ページャー -->
                <?php
                endwhile;
            endif; ?>
              </article>
            </main>
          </div>
        </section>
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer();
?>