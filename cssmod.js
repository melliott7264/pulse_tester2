// script to set height of #what-we-do-container to 160% of .outerHeight() of #bar-behind
// must also center #do-graphic on #what-we-do-container
jQuery(document).ready(function ($) {
  console.log("Calculating height and padding-top for #what-we-do-conatiner");
  $("#what-we-do-container").css({
    height: $("#bar-behind").outerHeight() * 1.6 + "px", // set height to 160% of #bar-behind
  });
  $("#what-we-do-container").css({
    "padding-top": $("#bar-behind").outerHeight() * 0.30 + "px", // to center #bar-behind in #what-we-do-container
  });
  $("#do-graphic").css({
    top:
      ($("#what-we-do-container").outerHeight() -
        $("#do-graphic").outerHeight()) /
        2 +
      "px", // to center #do-graphic in #what-we-do-container
  });
});
