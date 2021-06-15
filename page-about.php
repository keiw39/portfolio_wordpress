<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: ABOUTページ
*/
?>
<div class="luxy">
  <!-- main -->
  <main class=" l-main">
    <article>
      <div class="p-section">
        <!-- page-hero -->
        <div class="anim-wrap js-scroll-trigger">
          <header class="l-pageHero l-container js-wrap">
            <h1 class="l-pageHero__title js-text"><?php the_title(); ?></h1>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-about__sec-about">
          <div class="p-about__scrollWrap">
            <p>TAKUYA NAKANO</p>
          </div>
          <span class="p-home__mv__catchTitle">
            TAKUYA <br />
            NAKANO
          </span>
          <div class="l-container">
            <div class="p-about__messageWrap anim-wrap js-scroll-trigger">
              <div class="js-wrap">
                <p class="l-section__text js-text">
                        拝見いただきありがとうございます。メッセージがまっすぐ届きやすく、インパクトのあるミニマルなものを得意しています。今回は最近制作したものをご紹介させていただきましが、それ以外のロゴやフライヤーなどは以下に掲載していますので、お時間よろしければそちらも拝見してみてください。
                      </p>
              </div>
            </div>
            <div class="p-about__detailWrap">
              <div class="p-about__imgContainer">
                <div class="p-about__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_01_pc@2x.jpg.webp' ); ?>" media="(min-width: 768px)" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_01_pc@2x.jpg' ); ?>" media="(min-width: 768px)" type="image/jpg" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_01@2x.jpg.webp' ); ?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_01@2x.jpg' ); ?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_01@2x.jpg' ); ?>" width="250" height="350" loading="lazy" alt="仲野 琢也の画像" class="p-about__img js-target-parallax" />
                  </picture>
                </div>
                <div class="p-about__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_02@2x.jpg.webp' ); ?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_02@2x.jpg' ); ?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-about__img_02@2x.jpg' ); ?>" width="370" height="270" loading="lazy" alt="仕事風景の画像" class="p-about__img js-target-parallax" />
                  </picture>
                </div>
              </div>
              <div class="p-about__textWrap anim-wrap js-scroll-trigger">
                <div class="js-wrap">
                  <h2 class="p-about__catch js-text">
                          I am a Web Designer<br />
                          based in Osaka.
                        </h2>
                </div>
                <div class="js-wrap">
                  <h3 class="p-about__name js-text">仲野 琢也</h3>
                </div>
                <div class="js-wrap">
                  <p class="l-section__text js-text">
                          1982年2月10日、北海道生まれ福島育ち。<br />
                          2010年デジタルハリウッド東京校を卒業後に制作会社、デザイン会社、インハウスなど系7社を経て
                          220年4月に独立。<br />
                          Webデザインを軸に、グラフィック、マーケティング、ブランディングなど様々な領域を手がける。全国を視野に入れて活動中。趣味は猫と遊ぶ。
                        </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>