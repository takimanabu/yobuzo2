<!DOCTYPE html>
<html lang="ja" style="margin-top: 0px !important;">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="介護タクシーを手軽にネット予約。「よぶぞー」は東京、神奈川(横浜、川崎)、埼玉、千葉等の関東近郊エリアや大阪、兵庫を中心に介護タクシーの予約が出来るアプリです。車椅子等の利用条件や行先指定をアプリで簡単に指定可能です。" />
    <meta name="keywords" content="介護タクシー,福祉タクシー,ケアタクシー,車椅子,配車,予約,受付,料金,アプリ,よぶぞー" />
    <title><?php the_title(); ?>​|介護タクシー呼ぶなら「よぶぞー」</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="190×190" href="/apple-touch-icon.png" />
    <link rel="canonical" href="<?php the_permalink(); ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="telephone=no" name="format-detection" />
    <!--font-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp_s-noto.min.css" media="print" onload="this.media='all'" />
    <style>
      body {
        position: relative;
      }
      body::after {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        display: block;
        z-index: 100;
        pointer-events: none;
      }
      body.active::after {
        display: none;
      }
    </style>
    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/easing.js?20230308" defer></script>
    <script src="/js/common.js?20240815_2" defer></script>
    <script src="/js/ofi.min.js?20230308" defer></script>
    <script>
      $(window).on('load', function () {
        $('body').addClass('active');
      });
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5WXMJ4F');
    </script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
  </head>
  <body id="app-driver">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WXMJ4F" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--header-->
    <div class="header">
      <div class="logo">
        <img src="/images/common/app-logo.webp" alt="よぶぞーPLUS" width="0" height="0" />
      </div>
    </div>
    <!--//header-->
    <section id="maincontainer">
      <!--sectioncont-->
      <section class="news">
        <div class="news-inner">
          <div class="news-block">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="news-date"><?php echo get_the_date(); ?></div>
              <div class="news-title"><?php the_title(); ?></div>
              <div class="news-contents"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php else : ?>
            <div class="error">
              <p>お探しの記事は見つかりませんでした。</p>
            </div>
            <?php endif; ?>
          </div>
      </section>
    </section>
    <!--maincontainer-->
    <!--footer-->
    <footer>
      <div class="copy font-inter">&copy;IT FORCE, Inc. All Rights Reserved.</div>
    </footer>
    <!--//footer-->
    <?php wp_footer(); ?>
  </body>
</html>
