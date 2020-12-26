let InfoToggle = 0;
$(".info").click(() => {
  if (InfoToggle === 0) {
    $(".page-2").removeClass("slide-out");
    $(".page-2").addClass("slide-in");
    InfoToggle = 1;
  } else if (InfoToggle === 1) {
    $(".page-2").removeClass("slide-in");
    $(".page-2").addClass("slide-out");
    InfoToggle = 0;
  }
});

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
});
