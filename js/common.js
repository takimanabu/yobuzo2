$(document).ready(function () {
  $(document).on("opening", ".remodal", function () {
    $(".remodal video")[0].muted = true;
    $(".remodal video")[0].play();
    $(".remodal video")[0].pause();
    $(".remodal video")[0].currentTime = 0;
    $(".remodal video")[0].muted = false
  });
  $(document).on("opened", ".remodal", function () {
    $(".remodal video")[0].currentTime = 0;
    $(".remodal video")[0].play()
  });
  $(document).on("closed", ".remodal", function () {
    $(".remodal video")[0].pause();
    $(".remodal video")[0].currentTime = 0
  });
  if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
    $(function () {
      $(".tel").each(function () {
        var b = $(this).html();
        if ($(this).children().is("img")) {
          $(this).html($("<a>").attr("href", "tel:" + $(this).children().attr("alt").replace(/-/g, "")).append(b + "</a>"))
        } else {
          $(this).html($("<a>").attr("href", "tel:" + $(this).text().replace(/-/g, "")).append(b + "</a>"))
        }
      })
    })
  }
  $(".menu").on("click", function () {
    $(".menu-trigger", this).toggleClass("active");
    $("nav.fixednav").toggleClass("active");
    $("header .headarea").toggleClass("active")
  })
});
$(window).on("load resize", function () {
  objectFitImages("img.object-fit-img")
});
$(window).on("load resize scroll", function () {
  var b = $(window).scrollTop() + (window.innerHeight / 1.4);
  $(".scanimation").each(function (a) {
    if (b > $(this).offset().top) {
      $(this).addClass("active")
    }
  });
  //スクロール判定
  if ($(window).scrollTop() > 300) {
    $("header, .smartbanner, #maincontainer").addClass("active");
    $(".smartbanner__button__label").text("アプリのダウンロードはこちら");
  } else {
    $("header, .smartbanner, #maincontainer").removeClass("active");
    $(".smartbanner__button__label").text("表示");
  }
});
jQuery.event.special.touchstart = {
  setup: function (c, a, b) {
    a.includes("noPreventDefault") ? this.addEventListener("touchstart", b, {
      passive: !1
    }) : this.addEventListener("touchstart", b, {
      passive: !0
    })
  }
}, jQuery.event.special.touchmove = {
  setup: function (c, a, b) {
    a.includes("noPreventDefault") ? this.addEventListener("touchmove", b, {
      passive: !1
    }) : this.addEventListener("touchmove", b, {
      passive: !0
    })
  }
}, jQuery.event.special.wheel = {
  setup: function (c, a, b) {
    this.addEventListener("wheel", b, {
      passive: !0
    })
  }
}, jQuery.event.special.mousewheel = {
  setup: function (c, a, b) {
    this.addEventListener("mousewheel", b, {
      passive: !0
    })
  }
};

$(function () {
  //ハンバーガーメニュー
  $('.hum').click(function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('nav').addClass('open');
    } else {
      $('nav').removeClass('open');
    }
  });

  //バナーを閉じたらバナー領域削除
  document.addEventListener('smartbanner.exit', () => {
    $("header").removeClass("smartBn smartbanner-maincontainer");
    $("#maincontainer").removeClass("smartBn smartbanner-maincontainer");
  });

  document.addEventListener('smartbanner.view', () => {
     //iOSとAndroid判定
    var agent = navigator.userAgent;
    if (agent.search(/iPhone/) != -1) {
      $("header.smartBn").removeClass("smartbanner-header");
      $("#maincontainer.smartBn").removeClass("smartbanner-maincontainer");
    } else if (agent.search(/Android/) != -1) {   
      $("header.smartBn").addClass("smartbanner-header");
      $("#maincontainer.smartBn").addClass("smartbanner-maincontainer");
    }
  });
});


