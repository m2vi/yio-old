$(document).ready(function () {
  yio.preload.stop(250, () => {
    AOS.init({
      delay: 50, // values from 0 to 3000, with step 50ms
      duration: 1000, // values from 0 to 3000, with step 50ms
      easing: "ease", // default easing for AOS animations
    });
    if (window.touch == true) {
      $(".carousel-control").addClass("touch");
      $("body").addClass("touch");
    }
  });
  MarkSelectedLanguage();
});

$(".menu-toggle").click(function (e) {
  var $this = $(this);

  if ($("body").hasClass("show-sidebar")) {
    $("body").removeClass("show-sidebar");
    $this.removeClass("active");
  } else {
    $("body").addClass("show-sidebar");
    $this.addClass("active");
  }

  e.preventDefault();
});

// click outisde offcanvas
$(document).mouseup(function (e) {
  var container = $(".sidebar");
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    if ($("body").hasClass("show-sidebar")) {
      $("body").removeClass("show-sidebar");
      $("body").find(".js-menu-toggle").removeClass("active");
    }
  }
});

$(".lang").click(function () {
  yio.cookie("lang", $(this).attr("language"), 1, "l");
});

// Change the Cookie Button with the Flags of the Country
function MarkSelectedLanguage() {
  switch (yio.cookie("lang")) {
    case "en":
      $("[language$='en']").addClass("selected");
      break;
    case "de":
      $("[language$='de']").addClass("selected");
      break;
  }
}
