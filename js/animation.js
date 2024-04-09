//--------------------------
// writing-animation
//----------------------------
function waControl() {
  $(".writing-animation").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");
    } else {
      $(this).removeClass("appeartext");
    }
  });
}

// load---after loding the screen
$(window).on("load", function () {
  //add span
  var element = $(".writing-animation");
  element.each(function () {
    var text = $(this).text();
    var textbox = "";
    text.split("").forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox +=
            '<span style="animation-delay:.' + i + 's;">' + t + "</span>";
        } else {
          var n = i / 10;
          textbox +=
            '<span style="animation-delay:' + n + 's;">' + t + "</span>";
        }
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  waControl();
});

//--------------------------
// 1p-scroll-animation
//----------------------------
$.scrollify({
  section: "1p-scroll",
  scrollbars: "false",
  interstitialSection: "#header,#fv,#footer",
  easing: "swing",
  scrollSpeed: 300,

  //page-nation
  before: function (i, panels) {
    var ref = panels[i].attr("data-section-name");
    $(".pagination .active").removeClass("active");
    $(".pagination")
      .find('a[href="#' + ref + '"]')
      .addClass("active");
  },
  afterRender: function () {
    var pagination = '<ul class="pagination">';
    var activeClass = "";
    $(".1p-scroll").each(function (i) {
      activeClass = "";
      if (i === $.scrollify.currentIndex()) {
        activeClass = "active";
      }
      pagination +=
        '<li><a class="' +
        activeClass +
        '" href="#' +
        $(this).attr("data-section-name") +
        '"><span class="hover-text">' +
        $(this).attr("data-section-name").charAt(0).toUpperCase() +
        $(this).attr("data-section-name").slice(1) +
        "</span></a></li>";
    });
    pagination += "</ul>";

    $("#scroll-1").append(pagination); //はじめのエリアにページネーションを表示
    $(".pagination a").on("click", $.scrollify.move);
  },
});
