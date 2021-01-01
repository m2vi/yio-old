$(document).ready(function () {
  preload.stop(150);
  $("table tr").click(function () {
    window.location = $(this).data("href");
  });
});
