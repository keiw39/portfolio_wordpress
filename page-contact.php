<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: CONTACTページ
*/
?>
<div class="luxy">
  <!-- main -->
  <main class="l-main">
    <article>
      <div class="p-section">
        <!-- page-hero -->
        <div class="anim-wrap js-scroll-trigger">
          <header class="l-pageHero l-container js-wrap">
            <h1 class="l-pageHero__title js-text">CONTACT</h1>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-contact__sec-contact">
          <div class="l-container">
            <p class="p-contact__message">
                  まずは、お気軽にご相談ください。
                </p>
            <div class="p-contact__inner">
              <?php the_content(); ?>
            </div>
          </div>
        </section>
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>