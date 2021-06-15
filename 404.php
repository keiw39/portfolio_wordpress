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
            <h1 class="l-pageHero__title -sec-404 js-text">404</h1>
            <p>NOT FOUND</p>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-404">
          <div class="l-container">
            <div class="p-404__inner">
              <p class="p-404__message">
                      お探しのページは見つかりません。<br />
                      削除されたかURLが変更された可能性があります。
                    </p>
              <div class="c-btn__wrap">
                <a href="<?php echo esc_url( home_url() ); ?>" class="c-btn">TOP</a>
              </div>
            </div>
          </div>
        </section>
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>