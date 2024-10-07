<?php 
define("WP_USE_THEMES", false);
require_once(dirname(__FILE__)."/news/wp-load.php");
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="介護タクシーを手軽にネット予約。「よぶぞー」は東京、神奈川(横浜、川崎)、埼玉、千葉等の関東近郊エリアや大阪、兵庫を中心に介護タクシーの予約が出来るアプリです。車椅子等の利用条件や行先指定をアプリで簡単に指定可能です。" />
    <meta name="keywords" content="介護タクシー,福祉タクシー,ケアタクシー,車椅子,予約,受付,料金,アプリ,よぶぞー" />
    <title>個人・家族で介護タクシーがよべる予約アプリ「よぶぞー」|東京、神奈川(横浜、川崎)、埼玉、千葉、大阪、兵庫</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="190×190" href="/apple-touch-icon.png" />
    <link rel="canonical" href="https://yobuzo.jp/">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="telephone=no" name="format-detection" />
    <!--og-->
    <meta property="og:url" content="https://yobuzo.jp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="介護タクシー呼ぶなら「よぶぞー」" />
    <meta property="og:description" content="「よぶぞー」はアプリから介護タクシーを依頼できるサービスです。" />
    <meta property="og:site_name" content="よぶぞー" />
    <meta property="og:image" content="https://yobuzo.jp/images/common/ogp.png" />
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
    <script src="/js/index.js?20240311" defer></script>
    <script src="/js/lite-yt-embed.js" defer></script>
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
  <body id="index">
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
          <div class="box nav-active"><a href="/">トップ</a></div>
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
      <div id="pan"><h1 class="index">個人・家族で介護タクシーがよべる予約アプリ「よぶぞー」のご案内</h1></div>
      <section class="main_visual">
        <div class="maintl">
          <picture class="main_title">
            <source srcset="/images/index/main_tl_pc.webp?20230308" media="(max-width: 768px)" />
            <img src="/images/index/main_tl_pc.webp?20230308" alt="登録無料 介護タクシーを簡単に呼べるアプリ" />
          </picture>
          <a href="#content1" class="taxi_company"><img src="/images/index/taxi_company_100.webp?20230929" alt="連携タクシー会社 100社以上" /></a>
        </div>
        <div class="mainph">
          <picture>
            <source srcset="/images/index/main_sp.webp" media="(max-width: 768px)" />
            <img src="/images/index/main_pc.webp" alt="" />
          </picture>
          <div class="main-app-link">
            <div class="app-flex">
              <div class="app-view"><img src="/images/index/app-view.webp" alt="" /></div>
              <div class="app-links">
                <a href="https://apps.apple.com/jp/app/id1667789310" target="_blank"><img src="/images/howto/store-apple.webp?20230612" alt=""></a>
                <a href="https://play.google.com/store/apps/details?id=jp.co.itforce.yobuzo" target="_blank"><img src="/images/howto/store-google.webp?20230612" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="maincont">
        <!--sectioncont-->
        <section class="news">
          <div class="benefitcont">
            <div class="subtlcont">
              <h2>お知らせ</h2>
              <span class="font-inter">- News -</span>
            </div>
            <ul class="news-lists">

            <?php
            $cat_posts = get_posts(array(
              'posts_per_page' => 3, // 表示件数（全件取得時は-1）
              'post_type' => 'post', // 投稿タイプ
              'orderby' => 'date', // 表示順の基準
              'order' => 'DESC', // 昇順(ASC)か降順か(DESC）
              'category' => '1',
            ));
            global $post;
            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
 
            <!-- ループはじめ -->
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="news-date"><?php echo get_the_date(); ?></div>
                <div class="news-text"><?php the_title(); ?></div>
              </a>
            </li>
            <!-- ループおわり -->
            <?php endforeach; endif; wp_reset_postdata(); ?>

            </ul>
            <div class="for-news-list">
              <a href="/news/">お知らせ一覧を見る</a>
            </div>
          </div>
        </section>
        <section class="sectioncont" id="content1">
          <div class="areacont">
            <div class="subtlcont">
              <h2>対応エリア</h2>
              <span class="font-inter">- Area -</span>
            </div>
            <div class="accordion">
              <div class="accordion-item">
                <a href="/area/#tokyo" class="accordion-title"><h3>東京都</h3></a>
              </div>
              <div class="accordion-item">
                <a href="/area/#kanagawa" class="accordion-title"><h3>神奈川県</h3></a>
              </div>
              <div class="accordion-item">
                <a href="/area/#saitama" class="accordion-title"><h3>埼玉県</h3></a>
              </div>
              <div class="accordion-item">
                <a href="/area/#chiba" class="accordion-title"><h3>千葉県</h3></a>
              </div>
              <div class="accordion-item">
                <a href="/area/#osaka" class="accordion-title"><h3>大阪府</h3></a>
              </div>
              <div class="accordion-item">
                <a href="/area/#hyogo" class="accordion-title"><h3>兵庫県</h3></a>
              </div>
            </div>
          </div>
        </section>
        <section class="sectioncont" id="content2">
          <div class="benefitcont">
            <div class="subtlcont">
              <h2>よぶぞーとは？</h2>
              <span class="font-inter">- About YOBUZO -</span>
            </div>
            <div class="listcont">
              <div class="box">
                <div class="icon pc_none"><img data-src="/images/index/icon01-index.webp" alt="" class="lazyload" width="0" height="0" /></div>
                <div class="inbox">
                  <div class="tl">無料予約アプリで<br />簡単予約</div>
                  <div class="icon sp_none"><img data-src="/images/index/icon01-index.webp" alt="" class="lazyload" width="0" height="0" /></div>
                  <div class="tx">ご乗車される方の介護情報や待ち合わせ場所、過去の行先を記録し、次回予約時に再度入力不要で簡単に予約ができます。</div>
                </div>
              </div>
              <div class="box">
                <div class="icon pc_none"><img data-src="/images/index/icon01.webp" alt="" class="lazyload" width="0" height="0" /></div>
                <div class="inbox">
                  <div class="tl">介護条件に合う<br />タクシーのみに依頼</div>
                  <div class="icon sp_none"><img data-src="/images/index/icon01.webp" alt="" class="lazyload" width="0" height="0" /></div>
                  <div class="tx">予約時に指定された必要な介護サービスや介助人数、車椅子、ストレッチャーの利用可否等のご利用条件に合う介護タクシーを依頼します。</div>
                </div>
              </div>
              <div class="box">
                <div class="icon box2 pc_none"><img data-src="/images/index/icon02.webp?20240815" alt="" class="lazyload" width="0" height="0" /></div>
                <div class="inbox">
                  <div class="tl">お気に入りドライバ―の<br />指名依頼</div>
                  <div class="icon box2 sp_none"><img data-src="/images/index/icon02.webp?20240815" alt="" class="lazyload" width="0" height="0" /></div>
                  <div class="tx">過去に依頼したドライバ―を指名しての予約が可能です。過去に利用しているため、乗降場所や運賃・料金、介護サービスを理解した上で安心してご依頼出来ます。</div>
                </div>
              </div>
              <div class="box">
                <div class="icon box2 pc_none"><img data-src="/images/index/icon03.webp?20240815" alt="" class="lazyload" width="0" height="0" /></div>
                <div class="inbox">
                  <div class="tl">予約前の目安料金の提示</div>
                  <div class="icon box2 sp_none"><img data-src="/images/index/icon03.webp?20240815" alt="" class="lazyload" width="0" height="0" /></div>
                  <div class="tx">利用区間から想定される距離や、乗車時間から算出したその目安運賃・料金を、ドライバ―毎にご提示し、ご要望に合うドライバ―を指定してのご依頼が可能です。</div>
                </div>
              </div>
            </div>
            <div class="about-attention">
              <div class="attention-item">※目安料金は対応エリア等の条件が合うドライバーが料金表を設定している場合のみ表示されます。</div>
              <div class="attention-item">※目安料金はあくまで目安であり実際の乗車状況によって異なる場合があります。</div>
              <div class="attention-item">※本サービスに活用した技術に関しては、現在特許出願中です。</div>
            </div>
          </div>
        </section>
        <!--sectioncont-->
        <section class="sectioncont" id="content3">
          <div class="topmoviecont">
            <div class="movie-inner">
              <div class="movie-block">
                <lite-youtube videoid="LrODRmFTTQI" playlabel="Play: Keynote (Google I/O '18)" style="width:100%; max-width:100%; background-image: url('/images/index/hqdefault.webp');"></lite-youtube>
              </div>
            </div>
            <div class="for-support-inner">
              <div class="tl">詳しくは「よくある質問」を<br class="pc_none">ご覧ください</div>
              <div class="link"><a href="/support/">よくある質問をみる</a></div>
            </div>
          </div>
        </section>
        <!--sectioncont-->
        <section class="banner banner-top">
          <div class="tl">予約アプリを使ってみる</div>
          <div class="banner-link">
            <a href="https://apps.apple.com/jp/app/id1667789310" target="_blank"><img src="/images/howto/store-apple.webp?20230612" alt=""></a>
            <a href="https://play.google.com/store/apps/details?id=jp.co.itforce.yobuzo" target="_blank"><img src="/images/howto/store-google.webp?20230612" alt=""></a>
          </div>
        </section>
        <!--sectioncont-->
        <div class="informationcont">
          <div class="top-information">
            <div class="title-area"><img src="/images/index/information.webp" alt="一般社団法人 日本在宅介護協会"></div>
            <div class="text-area">
              <div class="top-text">
              「よぶぞー」は「日本在宅介護協会」の特別会員として、在宅介護サービスの質的向上を目指しています。
              </div>
              <div class="for-site"><a href="https://zaitaku-kyo.gr.jp/" target="_blank">日本在宅介護協会</a></div>
            </div>
          </div>
        </div>
        <section class="sectioncont" id="content5">
          <div class="flexaboutcont">
            <div class="textcont">
              <h2 class="tl">介護タクシー<span>（※）</span>とは</h2>
              <div class="tx">
                要支援・要介護認定を受けている方、障がいのある方、その他単独で公共交通機関の利用ができない方を対象に移送サービスを提供しているタクシーです。
                <ul>
                  <li>車いすやストレッチャーのまま乗車できる福祉車両等があります。</li>
                  <li>ほとんどのドライバーが介護福祉関連の資格を持っています。</li>
                  <li>通院からお買い物や旅行まで、どんな用途でもご利用いただけます。</li>
                  <li>ご家族やお友達と一緒に乗車できます。</li>
                  <li>院内や外出先での付き添いもお願いできます。</li>
                  <li>介護保険が適用される介護タクシーもあります。</li>
                </ul>
                <span>※正式名称：一般乗用旅客自動車運送事業（福祉輸送事業限定）</span>
              </div>
            </div>
            <div class="phbox"><img data-src="/images/index/ph01.webp" alt="" class="object-fit-img top-photo lazyload scanimation" width="0" height="0" /></div>
          </div>
        </section>
      </section>
      <div class="plus-banner">
        <div class="tl">介護タクシー事業者の方はこちら</div>
        <a href="/taxi/">
          <img class="sp_none" src="/images/index/banner-plus_pc.webp" alt="介護タクシー配車受付アプリ よぶぞーPLUS">
          <img class="pc_none" src="/images/index/banner-plus_sp.webp" alt="介護タクシー配車受付アプリ よぶぞーPLUS">
        </a>
      </div>
    </section>
    <!--maincontainer-->
    <!--footer-->
    <footer>
      <div class="copy font-inter">&copy;IT FORCE, Inc. All Rights Reserved.</div>
      <nav>
        <div class="box"><a href="/company/">運営会社</a></div>
        <div class="box"><a href="/privacy/">プライバシーポリシー</a></div>
        <div class="box"><a href="/terms/">利用規約</a></div>
        <div class="box"><a href="/support/">お問い合わせ</a></div>
      </nav>
    </footer>
    <!--//footer-->
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>
    <script>
      lazyload();
    </script>
  </body>
</html>
