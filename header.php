<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。" />
  <meta name="keywords" content="音楽,学校,歌手" />
  <meta name="robots" content="noindex" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon_logo/fvicon_music.svg" sizes="any" />
  <meta property="og:title" content="きたむらミュージックスクール" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://hamakoro-i.com/music_school/" />
  <meta property="og:image" content="https://hamakoro-i.com/music_school/img/top/music-pc_fv.jpg" />
  <title>きたむらミュージックスクール</title>
  <!---------------------------------スタイルシート-------------------------------------->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <!---------------------------------ヘッダー部分------------------------------------------->
  <header class="header">
    <div class="header_container">
      <?php if (is_front_page() || is_search()): ?>
      <h1 class="header_logo">
        <?php else: ?>
        <div class="header_logo">
          <?php endif; ?>
          <a href="index.html">
            <div class="logo_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_logo/music-school_logo_pc.svg"
                alt="きたむらミュージックスクール" />
            </div>
            <span class="logo_text">きたむら<br class="pc_only" />
              <span class="logo_text_smallsize">ミュージックスクール</span></span>
          </a>
          <?php if (is_front_page() || is_search()): ?>
      </h1>
      <?php else: ?>
    </div>
    <?php endif; ?>

    <button class="toggle_menu js_toggolenav">
      <span class="toggle_line"></span>
    </button>
    <nav class="header_nav">
      <ul class="header_list">
        <li class="header_item">
          <a href="<?php echo home_url('/plan'); ?>" class="">料金</a>
        </li>
        <li class="header_item">
          <a href="<?php echo home_url('/blog'); ?>" class="">ブログ</a>
        </li>
        <li class="header_item">
          <a href="<?php echo home_url('/result'); ?>" class="">卒業実績</a>
        </li>
      </ul>
      <a href="<?php echo home_url('/contact'); ?>" class="c_button button__head">お問い合わせ</a>
    </nav>
    </div>
  </header>