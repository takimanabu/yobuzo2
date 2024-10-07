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
    <!--Safari SmartBanner-->
    <meta name="apple-itunes-app" content="app-id=1667789310">
    <!--Android SmartBanner-->
    <meta name="smartbanner:title" content="個人・家族で介護タクシーがよべる予約アプリ「よぶぞー」">
    <meta name="smartbanner:author" content="IT FORCE Inc.">
    <meta name="smartbanner:price" content="無料">
    <meta name="smartbanner:price-suffix-google" content=" - Google Play"> <!-- Android用suffix -->
    <meta name="smartbanner:icon-google" content="/app-icon.png">
    <meta name="smartbanner:button" content="表示"> <!-- ボタンの表示名 -->
    <meta name="smartbanner:button-url-google" content="https://play.google.com/store/apps/details?id=jp.co.itforce.yobuzo">
    <meta name="smartbanner:enabled-platforms" content="android"> <!-- スマートバナーを利用するOSの指定 -->
    <meta name="smartbanner:close-label" content="Close">
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
    <script src="/js/smartbanner.min.js" defer></script>
    <script src="/js/common.js?20240815_2" defer></script>
    <script src="/js/ofi.min.js?20230308" defer></script>
    <script>
      $(window).on('load', function () {
        $('body').addClass('active');

        var pageNavInner = document.querySelector('.pagination.inner ul');
        var prevLinkInner = document.querySelector('.page-item.arrow.prev');
        var nextLinkInner = document.querySelector('.page-item.arrow.next');
        if (prevLinkInner === null){
          let prevBlockInner = document.createElement('li');
          prevBlockInner.classList.add('prev-block-inner');
          pageNavInner.prepend(prevBlockInner);
        }
        if (nextLinkInner === null){
          let nextBlockInner = document.createElement('li');
          nextBlockInner.classList.add('next-block-inner');
          pageNavInner.append(nextBlockInner);
        }
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
  <body id="howto">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WXMJ4F" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--header-->
    <header class="smartBn">
      <div class="logo">
        <a href="/"><img src="/images/common/logo.webp?20230308" alt="介護タクシー呼ぶなら「よぶぞー」" width="0" height="0" /></a>
      </div>
      <div class="sp-right-block">
        <div class="hum"><span></span><span></span><span></span></div>
      </div>
      <nav>
        <div class="box-wrap">
          <div class="box"><a href="/">トップ</a></div>
          <div class="box"><a href="/area/">対応エリア</a></div>
          <div class="box"><a href="/price/"><span class="header-pc-only">料金の目安</span><span class="header-sp-only">乗車時のご利用料金の目安​</span></a></div>
          <div class="box"><a href="/howto/">予約アプリの使い方</a></div>
          <div class="box"><a href="/support/"><span class="header-pc-only">よくある質問</span><span class="header-sp-only">よくある質問/お問い合わせ​</span></a></div>
          <div class="box"><a href="/taxi/">タクシー会社様向け</a></div>
        </div>
        <div class="member-link">
          <div class="link regist header-sp-only"><a href="https://apps.apple.com/jp/app/id1667789310" target="_blank"><img src="/images/howto/store-apple.webp?20230612" alt=""></a></div>
          <div class="link header-sp-only"><a href="https://play.google.com/store/apps/details?id=jp.co.itforce.yobuzo" target="_blank"><img src="/images/howto/store-google.webp?20230612" alt=""></a></div>
        </div>
      </nav>
    </header>
    <!--//header-->
    <section id="maincontainer" class="smartBn">
      <div class="submain_visual">
        <div id="pan">
          <a href="/">よぶぞー</a>&nbsp;&gt;&nbsp;
          <h1 class="index">お知らせ</h1>
        </div>
        <div class="tlcont">
          <div class="tl">お知らせ</div>
          <div class="subtl font-inter">News</div>
        </div>
        <img src="/images/news/main.webp" class="object-fit-img" alt="" width="0" height="0" />
      </div>
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
          <div class="pagination inner">
            <ul>
              <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
              <li class="page-item arrow prev">
                <a href="<?php echo get_permalink($prevpost->ID); ?>" rel="prev"><span>前へ</span></a>
              </li>
              <?php endif; ?>
              <li class="page-item for-news-top"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">お知らせ一覧に戻る</a></li>
              <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
              <li class="page-item arrow next">
                <a href="<?php echo get_permalink($nextpost->ID); ?>" rel="next"><span>次へ</span></a>
              </li>
              <?php endif; ?>
            </ul>
        </div>
      </section>
      <!--sectioncont-->
      <section class="banner">
        <div class="tl">予約アプリを使ってみる</div>
        <div class="banner-link">
          <a href="https://apps.apple.com/jp/app/id1667789310" target="_blank"><img src="/images/howto/store-apple.webp?20230612" alt=""></a>
          <a href="https://play.google.com/store/apps/details?id=jp.co.itforce.yobuzo" target="_blank"><img src="/images/howto/store-google.webp?20230612" alt=""></a>
        </div>
      </section>
    </section>
    <!--maincontainer-->
    <!--footer-->
    <footer>
      <div class="copy font-inter">&copy;IT FORCE, Inc. All Rights Reserved.</div>
      <nav>
        <div class="box"><a href="/company/">運営会社</a></div>
        <div class="box"><a href="/privacy/">プライバシーポリシー</a></div>
        <div class="box"><a href="/terms/">利用規約</a></div>
        <div class="box"><a href="/contact/">お問い合わせ</a></div>
      </nav>
    </footer>
    <!--//footer-->
    <?php wp_footer(); ?>
  </body>
</html>
