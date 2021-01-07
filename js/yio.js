class preloadClass {
  constructor() {
    this.stop = function (delay, func) {
      $("body").css("--navbar-width", yio.ScrollbarWidth + "px");
      setTimeout(() => {
        if (document.querySelector(".preload") != null) {
          // Remove Preloader after the site loaded lmao
          document.querySelector(".preload").classList.add("preload-finish");
          // Make overflow Visible because the preloader has hidden
          document.querySelector("body").style.overflow = "visible";
        }

        if ("ontouchstart" in window == true) {
          window.touch = true;
        } else {
          window.touch = false;
        }

        if (typeof func == "function") func();
        yio.agent();
      }, delay);
    };

    this.restart = function () {
      if (document.querySelector(".preload") != null) {
        // Adds Preloader
        document.querySelector(".preload").classList.remove("preload-finish");
        // Makes the overflow hidden, what did you thought, dumb ass
        document.querySelector("body").style.overflow = "hidden";
      }
    };
  }
}

class Yio {
  constructor() {
    this.founder = "m2v";
    this.preload = new preloadClass();
    this.ScrollbarWidth = ScrollbarWidth();
  }

  cookie(n, c, e, t) {
    if (
      n != undefined &&
      c === undefined &&
      e === undefined &&
      t === undefined
    ) {
      var name = n + "=";
      var allCookieArray = document.cookie.split(";");
      for (var i = 0; i < allCookieArray.length; i++) {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name) == 0)
          return temp.substring(name.length, temp.length);
      }
      return null;
    } else if (
      n != undefined &&
      c != undefined &&
      e != undefined &&
      e != undefined &&
      t != undefined
    ) {
      // Create a Cookie
      // * Format: Cookiename, Content, Expire (in years and INT), type (checks if the cookie is for the language)
      // If e is undefined, set it to 1 year
      e = 1;
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
  }

  agent() {
    var request = new XMLHttpRequest();

    request.open(
      "GET",
      "https://api.duckduckgo.com/?q=useragent&format=json",
      true
    );

    request.onload = function () {
      var data = JSON.parse(this.response);
      window.agent = data["Answer"].replace(/Your user agent: /g, "");
      return window.agent;
    };
    request.send();
    return window.agent;
  }
}

let yio = new Yio();

function ScrollbarWidth() {
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
