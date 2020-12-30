// After fully loaded
window.addEventListener("load", () => {
  preload.stop(150);
  // Insert AOS
  AOS.init({
    offset: 180,
    delay: 100,
    duration: 800,
    anchorPlacement: "bottom-bottom",
  });
  // Add Attr to Body
  document.body.setAttribute("id", "top");

  if ("ontouchstart" in window == true) $("#touch").addClass("touch");
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
