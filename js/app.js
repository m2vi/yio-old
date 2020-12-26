$(document).ready(function () {
  preload.stop(250);
  AOS.init({
    delay: 50, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
  });
  if ("ontouchstart" in window == true) {
    $(".carousel-control").addClass("touch");
    $("body").addClass("touch");
  }
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

//?   ******************
//?   *     COOKIE     *
//?   ******************

// Create a Cookie
// * Format: Cookiename, Content, Expire (in years and INT), type (checks if the cookie is for the language)
function cCookie(n, c, e, t) {
  // If e is undefined, set it to 1 year
  if (e === undefined) e = 1;
  // Get the Int in E
  e = parseInt(e);
  // Make Date
  let CookieEx = new Date();
  // Calculate date() + e
  CookieEx.setFullYear(CookieEx.getFullYear() + e);
  // Convert to UTC
  CookieEx.toUTCString();
  // If the cookie is for language
  if (t == "l") {
    // Create the Cookie
    document.cookie = n + "=" + c + "; expires=" + CookieEx + "; path=/";
  } else {
    // Create the Cookie
    document.cookie = n + "=" + c + "; expires=" + CookieEx + ";";
  }
  // Reload the Site
  location.reload();
}

$(".lang").click(function () {
  cCookie("lang", $(this).attr("language"), 1, "l");
});

// Change the Cookie Button with the Flags of the Country
function MarkSelectedLanguage() {
  switch (getCookie("lang")) {
    case "en":
      $("[language$='en']").addClass("selected");
      break;
    case "de":
      $("[language$='de']").addClass("selected");
      break;
  }
}

// A get Cookie Function from ... Stackoverflow
// I don't know how it does something
function getCookie(p) {
  var name = p + "=";
  var allCookieArray = document.cookie.split(";");
  for (var i = 0; i < allCookieArray.length; i++) {
    var temp = allCookieArray[i].trim();
    if (temp.indexOf(name) == 0)
      return temp.substring(name.length, temp.length);
  }
  return null;
}
