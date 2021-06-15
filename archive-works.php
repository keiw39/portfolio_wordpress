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
            <h1 class="l-pageHero__title js-text">WORKS</h1>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-list -->
        <section class="p-works__sec-works">
          <div class="l-container">
            <ul class="c-listWorks__btnList">
              <a href="<?php echo esc_url( home_url('works') ); ?>" class="c-listWorks__catLink">
                <li class="filter sort00 is-active" data-filter="all">All</li>
              </a>
              <a href="<?php echo esc_url( home_url('works_category/web') ); ?>" class="c-listWorks__catLink">
                <li class="filter sort01" data-filter=".sort01">Web</li>
              </a>
              <a href="<?php echo esc_url( home_url('works_category/apps') ); ?>" class="c-listWorks__catLink">
                <li class="filter sort02" data-filter=".sort02">Apps</li>
              </a>
              <a href="<?php echo esc_url( home_url('works_category/brand') ); ?>" class="c-listWorks__catLink">
                <li class="filter sort03" data-filter=".sort03">Brand</li>
              </a>
            </ul>
            <ul id="Container" class="grid c-listWorks__worksList">
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
              <li class="mix sort01">
                <a href="<?php the_permalink(); ?>" class="c-listWorks__worksLink">
                  <figure>
                    <div class="c-listWorks__worksImg__wrap">
                      <picture>
                        <?php the_post_thumbnail(); ?>
                      </picture>
                    </div>
                    <figcaption class="c-listWorks__worksInfo">
                      <div class="c-listWorks__worksDetail">
                        <span class="c-listWorks__worksNo">
                          <?php
                        $count = sprintf('%02d', $count); // 一桁を二桁に
                        echo $count; // 01を出力
                        $count++;
                        ?>
                          .</span>
                        <span class="c-listWorks__worksCat">
                          <?php
                        $term = get_the_terms($post->ID, 'works_category');
                        echo $term[0]->name;
                        ?>
                        </span>
                      </div>
                      <div class="c-listWorks__worksName">
                        <p class="c-listWorks__worksClient">
                    <?php
                    $term = get_the_terms($post->ID, 'client');
                    echo $term[0]->name;
                    ?>
                    </p>
                        <p class="c-listWorks__works"><?php the_title(); ?></p>
                      </div>
                    </figcaption>
                  </figure>
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
        <!-- section-works-list -->
      </div>
      <!-- footer呼び出し -->
      <?php get_footer();
?>