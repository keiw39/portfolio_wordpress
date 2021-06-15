       <div class="p-bg__black">
         <!-- section-works -->
         <section id="works" class="p-home__sec-works">
           <div class="l-container">
             <h2 class="l-section__title">WORKS</h2>
             <a href="<?php echo esc_url( home_url('works') ); ?>" class="c-btn">LEARN MORE</a>
           </div>
           <div class="l-container slider-wrap">
             <ul class="c-listWorks__slider">
               <?php
            $count = 1; // ナンバリング出力
            $args = [
                'post_type' => 'works', // 投稿タイプを指定
                'posts_per_page' => 10, // 表示する記事数
            ];
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()):
                while ($news_query->have_posts()):
                    $news_query->the_post(); ?>
               <li class="c-listWorks__sliderItem">
                 <a href="<?php the_permalink(); ?>" class="c-listWorks__sliderLink">
                   <div class="c-listWorks__sliderImg__wrap">
                     <picture>
                       <?php the_post_thumbnail(); ?>
                     </picture>
                   </div>
                 </a>
               </li>
               <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
             </ul>
           </div>
         </section>
         <!-- /section-works -->
         <!-- section-contact -->
         <section id="contact" class="p-home__sec-contact">
           <div class="l-container">
             <div class="p-home__sec-contact__linkWrap">
               <div>
                 <a href="<?php echo esc_url( home_url('contact') ); ?>" class="p-home__sec-contact__link">
                   <div class="anim-wrap js-scroll-trigger">
                     <div class="p-home__sec-contact__titleWrap js-wrap">
                       <h2 class="p-home__sec-contact__title js-text">
                            GET IN TOUCH
                          </h2>
                     </div>
                     <div class="js-wrap">
                       <p class="p-home__sec-contact__text js-text">
                            あなたの個性を聞かせてください
                          </p>
                     </div>
                   </div>
                 </a>
               </div>
             </div>
           </div>
         </section>
         <!-- /section-contact -->
         <!-- section-instagram -->
         <section id="insta" class="p-home__sec-insta">
           <div class="l-container">
             <h2 class="l-section__title">INSTAGRAM</h2>
             <div class="c-listInsta__wrap">
               <ul class="c-listInsta__imgWrap">
                 <?php
      $instagram = null;
      $instagram_business_id = '17841448503464622'; // InstagramビジネスアカウントのID
      $access_token =
          'EAAFfHF8c0RoBAEREVoI4AfDWOilmpqUZBPdHuIAWFgoeOXaRs1OJZAsW8opZBySrZATL4KwSVgCsUSN3c9G4XHLtMqP5sto8Jgj5BBmnUnBP8wgDnZA0zfxUZCuvSN5m3ESN0F4f1qFEdfczHJJmentwDYXvIum2MSdCjTz9ZCpoW9HZApnNGOPW'; // 有効期限無期限のアクセストークン
      $post_count = 21;
      $query =
          'name,media.limit(' .
          $post_count .
          '){caption,like_count,media_url,permalink,timestamp,username,comments_count}';
      $get_url =
          'https://graph.facebook.com/v7.0/' .
          $instagram_business_id .
          '?fields=' .
          $query .
          '&access_token=' .
          $access_token;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $get_url);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($curl);
      curl_close($curl);
      if ($response) {
          $instagram = json_decode($response);
          if (isset($instagram->error)) {
              $instagram = null;
          }
      }
      ?>
                 <?php foreach ($instagram->media->data as $post):

          $caption = $post->caption;
          $caption = preg_replace('/\n/', '<br />', $caption);
          ?>
                 <li class="c-listInsta__item">
                   <picture>
                     <a href="<?php echo $post->permalink; ?>" target="_blank" rel="noopener noreferrer">
                       <span class="thumbnail">
                         <img class="c-listInsta__img" src="<?php if (
                  $post->media_type == 'VIDEO'
              ) {
                  echo $post->thumbnail_url;
              } else {
                  echo $post->media_url;
              } ?>" alt="<?php echo $caption; ?>" />
                       </span>
                     </a>
                   </picture>
                 </li>
                 <?php
      endforeach;
?>
               </ul>
             </div>
           </div>
         </section>
         <!-- /section-instagram -->
       </div>
       </article>
       </main>
       <!-- /main -->
       <!-- footer -->
       <footer class="l-footer">
         <div class="l-footer__inner l-container">
           <div class="l-footer__detailWrap">
             <nav class="l-footer__nav">
               <ul class="l-footer__navList">
                 <li class="l-footer__navItem">
                   <a href="<?php echo esc_url( home_url() ); ?>" class="l-footer__navLink">TOP</a>
                 </li>
                 <li class="l-footer__navItem">
                   <a href="<?php echo esc_url( home_url('about') ); ?>" class="l-footer__navLink">ABOUT</a>
                 </li>
                 <li class="l-footer__navItem">
                   <a href="<?php echo esc_url( home_url('works') ); ?>" class="l-footer__navLink">WORK</a>
                 </li>
                 <li class="l-footer__navItem">
                   <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-footer__navLink">NEWS</a>
                 </li>
                 <li class="l-footer__navItem">
                   <a href="<?php echo esc_url( home_url('contact') ); ?>" class="l-footer__navLink">CONTACT</a>
                 </li>
               </ul>
             </nav>
             <div>
               <nav class="l-footer__socialNav">
                 <li class="l-footer__socialNav__item">
                   <a href="https://www.instagram.com/codementor_test/?utm_medium=copy_link" class="l-footer__socialNav__link">INSTAGRAM</a>
                 </li>
                 <li class="l-footer__socialNav__item">
                   <a href="https://twitter.com/codementor2" class="l-footer__socialNav__link">TWITTER</a>
                 </li>
               </nav>
             </div>
           </div>
         </div>
       </footer>
       </div>
       <?php wp_footer(); ?>
       <!--システム・プラグイン用-->
       <!-- /footer -->
       <script>
luxy.init();
       </script>
       </div>
       </body>
       </html>