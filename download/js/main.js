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
