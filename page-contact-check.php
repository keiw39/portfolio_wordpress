<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: CONTACT CHECKページ
*/
?>
<!-- main -->
<div>
<main class="l-main">
  <article>
    <div class="p-section">
      <!-- page-hero -->
      <header class="l-pageHero l-container">
        <h1 class="l-pageHero__title">CONTACT</h1>
      </header>
      <!-- /page-hero -->
      <!-- section-works-list -->
      <section class="p-contact__sec-contactCheck">
        <div class="bg-black">
          <div class="l-container">
            <p class="p-contact__message">
                  入力内容にお間違いがないか<br class="u-hidden-md">
                  ご確認ください
                </p>
            <p class="p-contact__message">
                  再度、入力される場合は、
                  <br class="u-hidden-md">
                  「BACK」ボタンを押してください。
                </p>
            <div class="p-contact__inner">
              <!-- <form>
                    <div class="l-form"> -->
              <?php the_content(); ?>
              <!-- </div>
                  </form> -->
            </div>
          </div>
      </section>
      <!-- section-works-list -->
    </div>
    <!-- footer呼び出し -->
    <?php get_footer(); ?>
