$(document).ready(function () {
  $("#windows").hover(
    function () {
      $(this).attr("src", "win/third.png");
    },
    function () {
      $(this).attr("src", "win/second.png");
    }
  );
  preload.stop(250);
  if ("ontouchstart" in window == true) {
    $(".carousel-control").addClass("touch");
    $("body").addClass("touch");
  }
  $("body").css("--navbar-width", getScrollbarWidth() + "px");
  AOS.init({
    delay: 50, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
  });
});

var pf = navigator.platform;
var win = ["OS/2", "Pocket PC", "Windows", "Win16", "Win32", "WinCE"];
var android = ["Linux armv7l", "null", "Android"];
var ios = [
  "iPhone",
  "iPod",
  "iPad",
  "iPhone Simulator",
  "iPod Simulator",
  "iPad Simulator",
  "Pike v7.6 release 92",
  "Pike v7.8 release 517",
];

// When Documents fully loaded
$(document).ready(function () {
  checkCollapse();
});

function checkCollapse() {
  // Check if Cookie isn't 0
  if (getCookie("collapse") != 0) {
    // Check if platform is Windows
    if (win.includes(pf)) {
      // Collapse the Windows Section
      $("#windowscontent").collapse("show");
      // Check if platform is Android
    } else if (android.includes(pf)) {
      // Collapse the Android Section
      $("#androidcontent").collapse("show");
      // Check if platform is IOS
    } else if (ios.includes(pf)) {
      // Collapse the IOS Section
      $("#ioscontent").collapse("show");
    }
    //Check if Cookies are enabled
    if (navigator.cookieEnabled) {
      // Create new Date
      var CookieEx = new Date();
      // Update the var CookieEx to the Date + 10 Years
      CookieEx.setFullYear(CookieEx.getFullYear() + 10);
      // Create the Cookie that exists 10 years
      document.cookie = "collapse=0; expires=" + CookieEx.toUTCString() + ";";
    }
  }
}

function getCookie(cookieName) {
  var name = cookieName + "=";
  var allCookieArray = document.cookie.split(";");
  for (var i = 0; i < allCookieArray.length; i++) {
    var temp = allCookieArray[i].trim();
    if (temp.indexOf(name) == 0)
      return temp.substring(name.length, temp.length);
  }
}

// other stuff
$("body").attr("id", "top"),
  $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (t) {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var a = $(this.hash);
        (a = a.length ? a : $("[name=" + this.hash.slice(1) + "]")).length &&
          (t.preventDefault(),
          $("html, body").animate(
            { scrollTop: a.offset().top },
            700,
            function () {
              var t = $(a);
              if ((t.focus(), t.is(":focus"))) return !1;
              t.attr("tabindex", "-1"), t.focus();
            }
          ));
      }
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

function getScrollbarWidth() {
  // Creating invisible container
  const outer = document.createElement("div");
  outer.style.visibility = "hidden";
  outer.style.overflow = "scroll"; // forcing scrollbar to appear
  outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps
  document.body.appendChild(outer);

  // Creating inner element and placing it in the container
  const inner = document.createElement("div");
  outer.appendChild(inner);

  // Calculating difference between container's full width and the child width
  const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;

  // Removing temporary elements from the DOM
  outer.parentNode.removeChild(outer);

  return scrollbarWidth;
}

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
