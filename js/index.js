$(function () {
  var d = $('.sectioncont').length;
  $('.sectioncont').each(function (a) {
    $(this).attr('id', 'content' + (a + 1));
  });
  var e = $('.navin .box a');
  f();
  function f() {
    var l = new Array();
    for (var c = 0; c < e.length; c++) {
      var k = e.eq(c).attr('href');
      if (k.charAt(0) == '#') {
        if ($(k).length) {
          var i = $(k).offset().top - 1 - $('header').height();
        }
        var b = i + $(k).outerHeight(true) - 1;
        l[c] = [i, b];
      }
    }
    var a = $(window).scrollTop();
    for (var c = 0; c < l.length; c++) {
      if (l[c][0] <= a && l[c][1] >= a) {
        e.removeClass('active');
        e.eq(c).addClass('active');
        c == l.length;
      }
    }
  }
  $(window).on('load scroll resize', function () {
    f();
  });
  $('.slidebgbox').each(function (f) {
    var c = $(window).scrollTop() - $(this).offset().top + window.innerHeight;
    var a = c / 10;
    $(this).css('background-position', 'center top -' + a + 'px');
  });
});
$(window).on('load resize scroll', function () {
  var g = $(window).width();
  if (g > 768) {
    var e = $('.maincont').offset().top - $('header').height() - $(window).height() / 2 + $('.navin .inbox').height() / 2 + 90;
    var d = $('footer').offset().top - 220 - $('.navin').height();
    var b = 0;
    $(document).scroll(function () {
      b = $(this).scrollTop();
      if (e <= b) {
        $('.navin').addClass('fixed');
      } else {
        if (e >= b) {
          $('.navin').removeClass('fixed');
        }
      }
      if (d <= b) {
        $('.navin').addClass('none');
      } else {
        $('.navin').removeClass('none');
      }
    });
  }
});
