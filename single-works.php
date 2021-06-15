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
            <h1 class="l-pageHero__title js-text"><?php the_title();?></h1>
          </header>
        </div>
        <!-- /page-hero -->
        <!-- section-works-detail -->
        <section class="p-works__sec-detail">
          <div class="l-container">
            <?php $count = 1; // ナンバリング出力
                           if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
            <div class="c-listWorks__detailWrap">
              <div class="c-listWorks__detailBlock">
                <dl class="c-listWorks__detailList">
                  <dt>ROLE</dt>
                  <dd><?php the_field('role'); ?></dd>
                </dl>
                <dl class="c-listWorks__detailList">
                  <dt>URL</dt>
                  <dd>
                    <a href="https://test.com/" class="c-listWorks__detailLink">
                      <?php the_field('url'); ?>
                    </a>
                  </dd>
                </dl>
              </div>
              <div class="c-listWorks__detailBlock">
                <dl class="c-listWorks__detailList">
                  <dt>DATE</dt>
                  <dd><?php the_field('date'); ?></dd>
                </dl>
                <dl class="c-listWorks__detailList">
                  <dt>DESCRIPTION</dt>
                  <dd>
                    <?php the_field('description'); ?>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="c-listWorks__thumbWrap">
              <picture>
                <?php the_post_thumbnail(); ?>
              </picture>
            </div>
            <div class="c-listWorks__detailText">
              <?php the_content(); ?>
            </div>
            <div class="c-listWorks__item -first">
              <picture>
                <img src="<?php the_field('works-photo02'); ?>" loading="lazy" alt="" class="c-listWorks__item__img" />
              </picture>
            </div>
            <div class="c-listWorks__itemWrap">
              <div class="c-listWorks__itemWrap-odd">
                <div class="c-listWorks__itemBlock -one">
                  <picture>
                    <img src="<?php the_field('works-photo03'); ?>" loading="lazy" alt="" class="l-contents__img" />
                  </picture>
                </div>
                <div class="c-listWorks__itemBlock -two">
                  <picture>
                    <img src="<?php the_field('works-photo04'); ?>" loading="lazy" alt="" class="l-contents__img" />
                  </picture>
                </div>
              </div>
              <div class="c-listWorks__itemWrap-even">
                <div class="c-listWorks__itemBlock -three">
                  <picture>
                    <img src="<?php the_field('works-photo05'); ?>" loading="lazy" alt="" class="l-contents__img" />
                  </picture>
                </div>
                <div class="c-listWorks__itemBlock -four">
                  <picture>
                    <img src="<?php the_field('works-photo06'); ?>" loading="lazy" alt="" class="l-contents__img" />
                  </picture>
                </div>
              </div>
            </div>
            <div class="l-pagination">
              <?php
$count = 1;
$prev_post = get_previous_post();
$next_post = get_next_post();
$next_number = get_post_number('works') + 1 ;
$prev_number = get_post_number('works') - 1 ;

if( !empty($prev_post) || !empty($next_post) ):
?>

              <div class="l-pagination__inner">
                <?php if(!empty($prev_post)):
	$prev_url = get_permalink( $prev_post->ID );
?>
                <a href="<?php echo $prev_url; ?>" class="l-pagination__link -prev">
                  <p class="l-pagination__no"><?php
$prev_number = sprintf('%02d', $prev_number);
echo $prev_number;
$prev_number++;
?>.</p>
                  <p class="l-pagination__text">PREV</p>
                </a>
                <?php endif; ?>
                <?php if(!empty($next_post)):
	$next_url = get_permalink( $next_post->ID );
?>
                <a href="<?php echo $next_url; ?>" class="l-pagination__link -next">
                  <p class="l-pagination__no"><?php
$next_number = sprintf('%02d', $next_number);
echo $next_number;
$next_number++;
?>.</p>
                  <p class="l-pagination__text">NEXT</p>
                </a>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
            <?php
                endwhile;
            endif; ?>
          </div>
        </section>
        <!-- section-works-detail -->
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- footer呼び出し -->
      <?php get_footer(); ?>