jQuery(document).ready(function ($) {
  // Main Menu
  $(".btn-menu").click(function () {
    $("header")
      .toggleClass("overlay")
      .find(".menu-nav-wrap")
      .toggleClass("active");
  });
  $(".btn-menu-close").click(function () {
    $("header")
      .removeClass("overlay")
      .find(".menu-nav-wrap")
      .removeClass("active");
  });
  $("body, html").click(function (e) {
    if ($(e.target).closest(".btn-menu, .menu-nav-wrap").length === 0) {
      $("header")
        .removeClass("overlay")
        .find(".menu-nav-wrap")
        .removeClass("active");
    }
  });

  // Platform Toggles
  if (document.querySelector("section.platform")) {
    let button1 = document.querySelector(".platform .buttons a:nth-child(1)");
    let button2 = document.querySelector(".platform .buttons a:nth-child(2)");
    let button3 = document.querySelector(".platform .buttons a:nth-child(3)");
    let button4 = document.querySelector(".platform .buttons a:nth-child(4)");

    $(".platform .toggles li").on("click touch", function () {
      $(".platform .toggles li.active").removeClass("active");
      $(this).addClass("active");

      let newMac = $(this).data("mac");
      let newWindows = $(this).data("windows");
      let newPlay = $(this).data("play");
      let newIos = $(this).data("ios");

      $(button1).attr("href", newMac);
      $(button2).attr("href", newWindows);
      $(button3).attr("href", newPlay);
      $(button4).attr("href", newIos);
    });
  }

  // Media Boxes Swiper
  if (document.querySelector(".media-boxes .swiper")) {
    const mediaSwipers = document.querySelectorAll(".media-boxes .swiper");
    Array.prototype.forEach.call(mediaSwipers, (el) => {
      var mediaSwiper = new Swiper(el, {
        speed: 800,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
          nextEl: el.querySelector(".swiper-nav .next"),
          prevEl: el.querySelector(".swiper-nav .prev"),
        },
        breakpoints: {
          700: {
            spaceBetween: 30,
            slidesPerView: 2,
          },
          1080: {
            spaceBetween: 30,
            slidesPerView: 3,
          },
          1440: {
            spaceBetween: 60,
            slidesPerView: 3,
          },
        },
      });
    });
  }

  // Open & Close Disclaimer Modal
  $(".disclaimer-toggle").on("click touch", function (e) {
    e.preventDefault();
    $(".disclaimer:not(.open)").addClass("open");
  });

  $(".disclaimer").on("click touch", function (e) {
    if (!e.target.closest(".disclaimer-inner")) {
      $(".disclaimer").removeClass("open");
    }
  });

  // Move Content Image Title on Mobile
  if (window.innerWidth < 1024 || window.innerWidth < window.innerHeight) {
    $(".content-image .text .title").each(function () {
      let titleSlot = $(this).parents(".content-image").find(".video-col");
      $(this).prependTo(titleSlot);
    });
  }

  // Day / Night Switcher
  $(".mode .toggle-input").click(function () {
    // Change Body Class "theme-dark"
    $("body").toggleClass("theme-dark");
    // Change Body Attr "data-day"
    let day = $("body").attr("data-day");
    typeof day !== "undefined" && day !== false
      ? $("body").removeAttr("data-day")
      : $("body").attr("data-day", "");
    // Update Scroll for "is-inview"
    scroll.update();
    // localStorage set mode
    localStorage.getItem("dnmode") == "night"
      ? localStorage.setItem("dnmode", "day")
      : localStorage.setItem("dnmode", "night");
  });

  // Play / pause music
  $(".music-controls").click(function () {
    $(this).toggleClass("play");
    var audio = $(".music-controls audio")[0];
    audio.paused ? audio.play() : audio.pause();
  });

  // Scroll to anchor
  var hash = window.location.hash;
  if (hash)
    $("html, body").animate({ scrollTop: $(hash).offset().top - 100 }, 500);
  $('a[href*="#"]:not(.wpml-ls-item-toggle)').click(function () {
    var url = $(this).attr("href");
    var index = url.indexOf("#");
    if (index !== -1) {
      var hash = url.substring(index);
      $("html, body").animate({ scrollTop: $(hash).offset().top - 100 }, 500);
    }
  });

  // Process Challenge Type
  $(".content-scrolls .toggles li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
    $(".content-scrolls .scrolls-box").hide();
    $(
      '.content-scrolls .scrolls-box[data-type="' + $(this).data("type") + '"]'
    ).show();
  });

  // Home wrap bricks element
  if ($("body").hasClass("home"))
    $(".home .bricks-elem").wrapAll('<div class="bricks"/>');

  // Comparison Firms Tab
  $(".comparison .toggles li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
    $(".comparison .comparison-firm").removeClass("active");
    $(
      '.comparison .comparison-firm[data-firm="' + $(this).data("firm") + '"]'
    ).addClass("active");
  });

  // Product Table Mobile
  var productTableMobileSwiper = new Swiper(".product-table-mobile-swiper", {
    navigation: {
      nextEl: ".product-table-mobile-next",
      prevEl: ".product-table-mobile-prev",
    },
  });

  // Comparison Table Mobile
  var comparisonTableMobileSwiper = new Swiper(
    ".comparison-table-mobile-swiper",
    {
      navigation: {
        nextEl: ".comparison-table-mobile-next",
        prevEl: ".comparison-table-mobile-prev",
      },
    }
  );

  // Challenge Type | Account Type | Account Size on Load
  $(window).on("load", function () {
    // Challenge Type
    var challenge_type = $(".toggles li[challenge_type].active").attr(
      "challenge_type"
    );
    $(".toggles li[account_type]").each(function () {
      var account_type = $(this).attr("account_type");
      if (
        !$(
          ".product-table[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "]"
        ).length
      )
        $(this).hide();
    });
    // Account Type
    var account_type = $(".toggles li[account_type]:visible")
      .first()
      .addClass("active")
      .attr("account_type");
    $(".toggles li[account_size]").each(function () {
      var account_size = $(this).attr("account_size");
      if (
        !$(
          ".product-table[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "][account_size=" +
            account_size +
            "]"
        ).length
      )
        $(this).hide();
    });
    // Account Size
    var account_size = $(".toggles li[account_size]:visible")
      .first()
      .addClass("active")
      .attr("account_size");
    // Product Table
    $(
      ".product-table[challenge_type=" +
        challenge_type +
        "][account_type=" +
        account_type +
        "][account_size=" +
        account_size +
        "]"
    ).addClass("active");
  });

  // Challenge Type
  $(".toggles li[challenge_type]").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
    var challenge_type = $(this).attr("challenge_type");
    // Account Type
    $(".toggles li[account_type]").each(function () {
      var account_type = $(this).attr("account_type");
      $(
        ".product-table[challenge_type=" +
          challenge_type +
          "][account_type=" +
          account_type +
          "]"
      ).length
        ? $(this).show()
        : $(this).hide();
    });
    $(".toggles li[account_type]").removeClass("active");
    var account_type = $(".toggles li[account_type]:visible")
      .first()
      .addClass("active")
      .attr("account_type");
    // Account Size
    $(".toggles li[account_size]").each(function () {
      var account_size = $(this).attr("account_size");
      $(
        ".product-table[challenge_type=" +
          challenge_type +
          "][account_type=" +
          account_type +
          "][account_size=" +
          account_size +
          "]"
      ).length
        ? $(this).show()
        : $(this).hide();
    });
    $(".toggles li[account_size]").removeClass("active");
    var account_size = $(".toggles li[account_size]:visible")
      .first()
      .addClass("active")
      .attr("account_size");
    // Product Table
    $(
      ".product-table[challenge_type=" +
        challenge_type +
        "][account_type=" +
        account_type +
        "][account_size=" +
        account_size +
        "]"
    )
      .addClass("active")
      .siblings()
      .removeClass("active");
    // Disable Quick Comparison
    $(".table__tab[quick_comparison]").removeClass("active");
    $(".comparison-table").hide();
    $(".product-table.active .table:not(.comparison-table)").show();
    if ($(window).width() < 992) {
      for (let i = 0; i < productTableMobileSwiper.length; i++)
        productTableMobileSwiper[i].slideTo(0);
      for (let i = 0; i < comparisonTableMobileSwiper.length; i++)
        comparisonTableMobileSwiper[i].slideTo(0);
    }
  });

  // Account Type
  $(".toggles li[account_type]").click(function () {
    // Challenge Type
    var challenge_type = $(".toggles li[challenge_type].active").attr(
      "challenge_type"
    );
    // Account Type
    $(this).addClass("active").siblings().removeClass("active");
    var account_type = $(".toggles li[account_type].active").attr(
      "account_type"
    );
    // Account Size
    $(".toggles li[account_size]").each(function () {
      var account_size = $(this).attr("account_size");
      $(
        ".product-table[challenge_type=" +
          challenge_type +
          "][account_type=" +
          account_type +
          "][account_size=" +
          account_size +
          "]"
      ).length
        ? $(this).show()
        : $(this).hide();
    });
    $(".toggles li[account_size]").removeClass("active");
    var account_size = $(".toggles li[account_size]:visible")
      .first()
      .addClass("active")
      .attr("account_size");
    // Product Table
    $(
      ".product-table[challenge_type=" +
        challenge_type +
        "][account_type=" +
        account_type +
        "][account_size=" +
        account_size +
        "]"
    )
      .addClass("active")
      .siblings()
      .removeClass("active");
    // Disable Quick Comparison
    $(".table__tab[quick_comparison]").removeClass("active");
    $(".comparison-table").hide();
    $(".product-table.active .table:not(.comparison-table)").show();
    if ($(window).width() < 992) {
      for (let i = 0; i < productTableMobileSwiper.length; i++)
        productTableMobileSwiper[i].slideTo(0);
      for (let i = 0; i < comparisonTableMobileSwiper.length; i++)
        comparisonTableMobileSwiper[i].slideTo(0);
    }
  });

  // Account Size
  $(".toggles li[account_size]").click(function () {
    // Challenge Type
    var challenge_type = $(".toggles li[challenge_type].active").attr(
      "challenge_type"
    );
    // Account Type
    var account_type = $(".toggles li[account_type].active").attr(
      "account_type"
    );
    // Account Size
    $(this).addClass("active").siblings().removeClass("active");
    var account_size = $(".toggles li[account_size].active").attr(
      "account_size"
    );
    // Product Table
    $(
      ".product-table[challenge_type=" +
        challenge_type +
        "][account_type=" +
        account_type +
        "][account_size=" +
        account_size +
        "]"
    )
      .addClass("active")
      .siblings()
      .removeClass("active");
    // Disable Quick Comparison
    $(".table__tab[quick_comparison]").removeClass("active");
    $(".comparison-table").hide();
    $(".product-table.active .table:not(.comparison-table)").show();
    if ($(window).width() < 992) {
      for (let i = 0; i < productTableMobileSwiper.length; i++)
        productTableMobileSwiper[i].slideTo(0);
      for (let i = 0; i < comparisonTableMobileSwiper.length; i++)
        comparisonTableMobileSwiper[i].slideTo(0);
    }
  });

  // Checkout Update Product Variation
  $(window).on("load", function () {
    var challenge_type = $("#order_review [challenge_type]").attr(
      "challenge_type"
    );
    var account_size = $("#order_review [account_size]").attr("account_size");
    var account_type = $("#order_review [account_type]").attr("account_type");
    var platform = $("#order_review [platform]").attr("platform");
    var broker = $("#order_review [broker]").attr("broker");
    $("form[name=checkout] input[value=" + challenge_type + "]").prop(
      "checked",
      true
    );
    $("form[name=checkout] input[value=" + account_size + "]").prop(
      "checked",
      true
    );
    $("form[name=checkout] input[value=" + account_type + "]").prop(
      "checked",
      true
    );
    $("form[name=checkout] input[value=" + platform + "]").prop(
      "checked",
      true
    );
    $("form[name=checkout] input[value=" + broker + "]").prop("checked", true);
    $(
      ".chooseChallengeTable > div[challenge_type=" +
        challenge_type +
        "][account_type=" +
        account_type +
        "][account_size=" +
        account_size +
        "]"
    ).addClass("active");
    $(".checkout-toggles [account_type]").each(function () {
      var account_type = $(this).attr("account_type");
      if (
        !$(
          ".chooseChallengeTable > div[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "]"
        ).length
      )
        $(this).hide();
    });
    $(".checkout-toggles [account_size]").each(function () {
      var account_size = $(this).attr("account_size");
      if (
        !$(
          ".chooseChallengeTable > div[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "][account_size=" +
            account_size +
            "]"
        ).length
      )
        $(this).hide();
    });
    if (challenge_type == "knights-challenge" || platform == "mt5")
      $("[broker=purple-trading]").hide();
  });
  $("body").on(
    "change",
    "input[name=challenge_type], input[name=account_size], input[name=account_type], input[name=platform], input[name=broker]",
    function () {
      var challenge_type = $(
        ".checkout-toggles [challenge_type] input:checked"
      ).val();
      var platform = $(".checkout-toggles [platform] input:checked").val();
      if ($(this).is("[name=challenge_type]")) {
        var challenge_type = $(
          ".checkout-toggles [challenge_type] input:checked"
        ).val();
        $(".checkout-toggles [account_type]").each(function () {
          var account_type = $(this).attr("account_type");
          if (
            $(
              ".chooseChallengeTable > div[challenge_type=" +
                challenge_type +
                "][account_type=" +
                account_type +
                "]"
            ).length
          )
            $(this).show();
          else $(this).hide();
        });
        $(".checkout-toggles [account_type]:visible:first")
          .find("input")
          .prop("checked", true);
        var account_type = $(
          ".checkout-toggles [account_type] input:checked"
        ).val();
        $(".checkout-toggles [account_size]").each(function () {
          var account_size = $(this).attr("account_size");
          if (
            $(
              ".chooseChallengeTable > div[challenge_type=" +
                challenge_type +
                "][account_type=" +
                account_type +
                "][account_size=" +
                account_size +
                "]"
            ).length
          )
            $(this).show();
          else $(this).hide();
        });
        $(".checkout-toggles [account_size]:visible:first")
          .find("input")
          .prop("checked", true);
        var account_size = $(
          ".checkout-toggles [account_size] input:checked"
        ).val();
        $(".checkout-toggles [broker]:visible:first")
          .find("input")
          .prop("checked", true);
        challenge_type == "knights-challenge" || platform == "mt5"
          ? $("[broker=purple-trading]").hide()
          : $("[broker=purple-trading]").show();
        $(".chooseChallengeTable > div").removeClass("active");
        $(
          ".chooseChallengeTable > div[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "][account_size=" +
            account_size +
            "]"
        ).addClass("active");
      } else if ($(this).is("[name=account_type]")) {
        var challenge_type = $(
          ".checkout-toggles [challenge_type] input:checked"
        ).val();
        var account_type = $(
          ".checkout-toggles [account_type] input:checked"
        ).val();
        $(".checkout-toggles [account_size]").each(function () {
          var account_size = $(this).attr("account_size");
          if (
            $(
              ".chooseChallengeTable > div[challenge_type=" +
                challenge_type +
                "][account_type=" +
                account_type +
                "][account_size=" +
                account_size +
                "]"
            ).length
          )
            $(this).show();
          else $(this).hide();
        });
        $(".checkout-toggles [account_size]:visible:first")
          .find("input")
          .prop("checked", true);
        var account_size = $(
          ".checkout-toggles [account_size] input:checked"
        ).val();
        $(".chooseChallengeTable > div").removeClass("active");
        $(
          ".chooseChallengeTable > div[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "][account_size=" +
            account_size +
            "]"
        ).addClass("active");
      } else if ($(this).is("[name=account_size]")) {
        var challenge_type = $(
          ".checkout-toggles [challenge_type] input:checked"
        ).val();
        var account_type = $(
          ".checkout-toggles [account_type] input:checked"
        ).val();
        var account_size = $(
          ".checkout-toggles [account_size] input:checked"
        ).val();
        $(".chooseChallengeTable > div").removeClass("active");
        $(
          ".chooseChallengeTable > div[challenge_type=" +
            challenge_type +
            "][account_type=" +
            account_type +
            "][account_size=" +
            account_size +
            "]"
        ).addClass("active");
      } else if ($(this).is("[name=platform]")) {
        if (platform == "mt5") {
          $(".checkout-toggles [broker]:visible:first")
            .find("input")
            .prop("checked", true);
          $("[broker=purple-trading]").hide();
        } else $("[broker=purple-trading]").show();
      }
      var challenge_type = $("input[name=challenge_type]:checked").val();
      var account_size = $("input[name=account_size]:checked").val();
      var account_type = $("input[name=account_type]:checked").val();
      var platform = $("input[name=platform]:checked").val();
      var broker = $("input[name=broker]:checked").val();
      var data = {
        action: "checkout_update_product_variation",
        challenge_type: challenge_type,
        account_size: account_size,
        account_type: account_type,
        platform: platform,
        broker: broker,
      };
      $.ajax({
        url: ajax_params.ajax_url,
        data: data,
        type: "POST",
        success: function (data) {
          $("body").trigger("update_checkout");
        },
      });
    }
  );

  $(".review-text.resize").textfill({
    minFontPixels: 10,
    maxFontPixels: 40,
  });
  // 	updateTextFill();

  // Spoilers
  $(".product-table-desktop .table__expand").each(function () {
    if ($(this).find(".row > .empty").length > 3) {
      $(this).prev().removeAttr("data-spoiler");
    }
  });
  $(".product-table-mobile .table__expand").each(function () {
    if ($(this).find(".row > .empty").length) {
      $(this).prev().removeAttr("data-spoiler");
    }
  });
  $(".product-table-desktop [data-spoiler]").click(function () {
    $(this).toggleClass("_active").next().slideToggle();
  });
  $(".product-table-mobile [data-spoiler]").click(function () {
    $(this).toggleClass("_active").next().toggle();
    var index = $(this).next().index();
    var height = $(this).next().find(".row > div").outerHeight();
    $(this).next().find(".row").height(height);
    $(this)
      .closest(".product-table-mobile")
      .find(
        ".product-table-mobile-swiper .table__body > .row:nth-child(" +
          index +
          ")"
      )
      .next()
      .height(height)
      .toggle();
  });

  // Brokers
  $("button[data-broker]").click(function () {
    $(".button-group[data-broker]").removeClass("active");
    $('.button-group[data-broker="' + $(this).data("broker") + '"]').addClass(
      "active"
    );
  });

  // Price Table Mobile
  var topMatchTd;
  var previousValue = "";
  jQuery(".table__expand").each(function () {
    var firstEl = jQuery(this).first().find(".col-xxs-3:first");
    jQuery(this)
      .find(".col-xxs-3")
      .each(function (i) {
        if (jQuery(this).text() === previousValue) {
          var index = i + 1;
          jQuery(topMatchTd).removeClass("col-xxs-3");
          if (index > 3) {
            jQuery(firstEl).remove();
            jQuery(topMatchTd).addClass("col-xxs-12");
          }
          jQuery(this).not(firstEl).remove();
        } else {
          topMatchTd = jQuery(this);
        }
        previousValue = jQuery(this).text();
      });
  });

  // Quick Comparison
  $(".table__tab[quick_comparison]").click(function () {
    $(this).toggleClass("active");
    var table = $(".product-table.active");
    var comparison_table = $(
      '.comparison-table[challenge_type="' + table.attr("challenge_type") + '"]'
    );
    comparison_table.toggle();
    table
      .find(".table:not(.comparison-table)")
      .toggle()
      .after(comparison_table);
  });
});

jQuery(window).on("resize", function () {
  updateTextFill();
  // 	jQuery('.review-text.resize').textfill({
  // 		minFontPixels: 10,
  // 		maxFontPixels: 40,
  // 		debug: true
  // 	});
});

function updateTextFill() {
  jQuery(".review-text.resize")
    // 		.height(jQuery('.review-text.resize').width()/1.5)
    .textfill({
      maxFontPixels: 40,
    });
}

jQuery(document).ready(function ($) {
  $done = false;

//   $(window).scroll(function () {
//     if (!$done) {
//       console.log("The page has fully loaded.");
//       const container = document.getElementById("lottie_day");
//       const lottiePlayer = document.createElement("dotlottie-player");
//       const lottiePlayer2 = document.createElement("dotlottie-player");
//       const lottiePlayer3 = document.createElement("dotlottie-player");
//       const lottiePlayer4 = document.createElement("dotlottie-player");
//       lottiePlayer.setAttribute("autoplay", true);
//       lottiePlayer.setAttribute("loop", true);
//       lottiePlayer.src = "dragon.lottie";
//       lottiePlayer2.setAttribute("autoplay", true);
//       lottiePlayer2.setAttribute("loop", true);
//       lottiePlayer2.src = "horse.lottie";
//       lottiePlayer3.setAttribute("autoplay", true);
//       lottiePlayer3.setAttribute("loop", true);
//       lottiePlayer3.src = "knight.lottie";
//       container.appendChild(lottiePlayer);
//       $done = true;
//       // container.appendChild(lottiePlayer2);
//       // container.appendChild(lottiePlayer3);
//     }
//   });
});
