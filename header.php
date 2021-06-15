<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8" />
  <?php if ( is_single()): ?>
  <?php if ($post->post_excerpt){ ?>
  <meta name="description" content="<? echo $post->post_excerpt; ?>" />
  <?php } else {
        $summary = strip_tags($post->post_content);
        $summary = str_replace("\n", "", $summary);
        $summary = mb_substr($summary, 0, 120). "…"; ?>
  <meta name="description" content="<?php echo $summary; ?>" />
  <?php } ?>
  <?php elseif ( is_home() || is_front_page() ): ?>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <?php else: ?>
  <meta name="description" content="<?php the_excerpt();?>" />
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- PC・スマホページでの相互の関係性 -->
  <link rel=”canonical” href=”/http://example.com//”>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/27f7c35d10.js" crossorigin="anonymous"></script>
  <!-- Adobe Fonts -->
  <script>
  (function(d) {
    var config = {
        kitId: 'uta6gmi',
        scriptTimeout: 3000,
        async: true,
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className =
          h.className.replace(/\bwf-loading\b/g, '') + ' wf-inactive';
      }, config.scriptTimeout),
      tk = d.createElement('script'),
      f = false,
      s = d.getElementsByTagName('script')[0],
      a;
    h.className += ' wf-loading';
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || (a && a != 'complete' && a != 'loaded')) return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config);
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s);
  })(document);
  </script>
  <link rel="stylesheet" href="https://use.typekit.net/jol6dsm.css" />
  <!-- ファビコンの設定 -->
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/tk.ico' ); ?>" />
  <!-- スマホ用のアプリアイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/img/apple-touch-icon.png' ); ?>" />
  <?php wp_head(); ?>
  <!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
  <div id="top" class="wrap" ontouchstart="">
    <!-- mouse cursor -->
    <div class="p-cursor"></div>
    <div class="p-cursor__follower"></div>
    <!-- /mouse cursor -->
    <!-- header -->
    <header class="l-header">
      <p class="p-home__mv__copy">© TAKUYA NAKANO 2021</p>
      <p class="p-home__mv__copy">© TAKUYA NAKANO 2021</p>
      <div class="l-header__wrap">
        <!-- header-desktop-menu -->
        <div class="l-desktopMenu">
          <nav class="l-desktopMenu__nav">
            <div class="l-desktopMenu__navWrap">
              <ul class="l-desktopMenu__navList">
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url() ); ?>" class="l-desktopMenu__navLink">TOP</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('about') ); ?>" class="l-desktopMenu__navLink">ABOUT</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('works') ); ?>" class="l-desktopMenu__navLink">WORK</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-desktopMenu__navLink">NEWS</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('contact') ); ?>" class="l-desktopMenu__navLink">CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- /header-desktop-menu -->
        <!-- header-nav-toggle -->
        <a id="js-hamburger__toggle" class="l-hamburger__toggle disable">
          <div class="l-hamburger__toggleWrap">
            <span class="l-hamburger__toggleSpan"></span>
            <span class="l-hamburger__toggleSpan"></span>
          </div>
        </a>
        <!-- /header-nav-toggle -->
      </div>
    </header>
    <!-- /header -->
    <!-- header-sp-menu -->
    <div class="l-spMenu">
      <div class="l-spMenu__inner l-container">
        <div class="l-spMenu__title">MENU</div>
        <nav class="l-spMenu__nav">
          <ul class="l-spMenu__navList">
            <li class="l-spMenu__navItem anim-wrap">
              <a href="<?php echo esc_url( home_url() ); ?>" class="l-spMenu__navLink js-wrap">
                <span class="l-spMenu__navItem__num js-text">01.</span>
                <span class="l-spMenu__navItem__title js-text">TOP</span>
              </a>
            </li>
            <li class="l-spMenu__navItem anim-wrap">
              <a href="<?php echo esc_url( home_url('about') ); ?>" class="l-spMenu__navLink js-wrap">
                <span class="l-spMenu__navItem__num js-text">02.</span>
                <span class="l-spMenu__navItem__title js-text">ABOUT</span>
              </a>
            </li>
            <li class="l-spMenu__navItem anim-wrap">
              <a href="<?php echo esc_url( home_url('works') ); ?>" class="l-spMenu__navLink js-wrap">
                <span class="l-spMenu__navItem__num js-text">03.</span>
                <span class="l-spMenu__navItem__title js-text">WORKS</span>
              </a>
            </li>
            <li class="l-spMenu__navItem anim-wrap">
              <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-spMenu__navLink js-wrap">
                <span class="l-spMenu__navItem__num js-text">04.</span>
                <span class="l-spMenu__navItem__title js-text">NEWS</span>
              </a>
            </li>
            <li class="l-spMenu__navItem anim-wrap">
              <a href="<?php echo esc_url( home_url('contact') ); ?>" class="l-spMenu__navLink js-wrap">
                <span class="l-spMenu__navItem__num js-text">05.</span>
                <span class="l-spMenu__navItem__title js-text">CONTACT</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /header-sp-menu -->
    <!-- bg-black -->
    <div class="l-spMenu__bg"></div>
    <!-- /bg-black -->