// script to set height of #what-we-do-container to 160% of .outerHeight() of #bar-behind
// must also center #do-graphic on #what-we-do-container
$(window).on('load', function() {
  // if #do-graphic is less than or equal to the calculated height of the #what-we-do-container
  if ($("#bar-behind").outerHeight() * 1.6 >= $("#do-graphic").outerHeight()) {
    $("#what-we-do-container").css({
      height: $("#bar-behind").outerHeight() * 1.6 + "px", // set height of #what-we-do-container to 160% of #bar-behind
    });
    $("#what-we-do-container").css({
      "padding-top": $("#bar-behind").outerHeight() * 0.3 + "px", // to center #bar-behind in #what-we-do-container
    });
    if ($("#bar-behind").outerWidth() >= 768) {
      $("#do-graphic").css({
        top:
          ($("#bar-behind").outerHeight() - $("#do-graphic").outerHeight()) /
            2 +
          "px", // to center #do-graphic in #bar-behind container
      });
    }
  }
  // #do-graphic is larger than the calculated height of #what-we-do-container
  else {
    $("#what-we-do-container").css({
      height: $("#do-graphic").outerHeight() + "px",
      // set #what-we-do-container height to #do-graphic height + 40
      "padding-top":
        ($("#do-graphic").outerHeight() - $("#bar-behind").outerHeight()) / 2 +
        "px", // set height to #do-graphic, center #bar-behind in #what-we-do-container
    });
    if ($("#bar-behind").outerWidth() >= 768) {
      $("#do-graphic").css({
        top:
          ($("#bar-behind").outerHeight() -
            $("#what-we-do-container").outerHeight()) /
            2 +
          "px", // to center #do-graphic in #bar-behind
      });
    }
  }
});

$(window).resize(function () {
  location.reload();
});

