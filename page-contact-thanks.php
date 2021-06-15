<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: CONTACT THANKSページ
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
        <section class="p-contact__sec-contactThanks">
          <div class="l-container">
            <p class="p-contact__message">お問い合わせが完了しました。</p>
            <div class="p-contact__inner">
              <p class="p-contact__thanks-text">
                    このたびはお問い合わせいただきありがとうございます。<br />
                    ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br />
                    確認メールが届いていない場合には、メールアドレスが誤っているか、確認メールが迷惑メールフォルダ等に振り分けられている可能性がありますので、再度ご確認をお願いいたします。<br />
                    なお、お問い合わせ内容につきましては、通常3営業日程度を目処に、弊社担当者よりご回答させていただきます。いましばらくお待ちくださいませ。<br />
                    万一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br />
                    今後ともご愛顧賜りますようよろしくお願い申し上げます。
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