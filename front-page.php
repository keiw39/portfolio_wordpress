<!-- header呼び出し -->
<?php get_header(); ?>
<div class="luxy">
  <!-- main -->
  <main class="l-main">
    <article>
      <div class="p-bg__change">
        <!-- main visual -->
        <div class="p-home__mv">
          <div class="p-home__mv__bg parallax">
            <div class="p-home__mv__scrollWrap -gray">
              <h1>TAKUYA NAKANO</h1>
            </div>
            <div class="p-home__mv__scrollWrap -black">
              <h1>TAKUYA NAKANO</h1>
            </div>
            <h1 class="p-home__mv__textWrap anim-wrap js-scroll-trigger">
                  <span class="p-home__mv__catchTitle js-wrap">
                    <span class="js-text">TAKUYA</span><span class="js-text">NAKANO</span>
                    </span>
                </h1>
            <div class="anim-wrap js-scroll-trigger">
              <div class="js-wrap">
                <span class="p-home__mv__subTitle js-text">
                  I am a FREELANCE WEB DESIGNER.
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- /main visual -->
        <!-- section-about -->
        <section id="about" class="p-home__sec-about">
          <div class="l-container">
            <div class="anim-wrap js-scroll-trigger">
              <h2 class="p-home__sec-about__title js-wrap">
                    <span class="js-text">
                      個性を引き出し<br />
                      最大化させる
                    </span>
                  </h2>
            </div>
            <p class="l-section__bgText">ABOUT<br />US</p>
            <div class="anim-wrap js-scroll-trigger">
              <div class="p-home__sec-about__textWrap js-wrap">
                <p class="l-section__text js-text">
                      デザインといえば、あるモノを実物以上にカッコよく見せたり、デザインする事で原形がなくなるような。まるで特殊メイクみたいな印象を持たれてる人が多いと思います。
                    </p>
                <p class="l-section__text js-text">
                      わたしはそういった表層的に取り繕う提案ではなく、クライアント様が持っている個性を見つけ出し、最大限に引き出し、その人特有の魅せ方をご提案させていただきます。
                    </p>
                <div class="c-btn__wrap">
                  <a href="<?php echo esc_url( home_url('about') ); ?>" class="c-btn">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /section-about -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>