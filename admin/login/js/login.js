window.addEventListener("load", function () {
  preload.stop(250);
});

document.querySelector(".submit").addEventListener("click", function () {
  // u = username
  // uc = username error code
  // p = password
  // pc = password error code
  const u = document.querySelector(".username"),
    uc = document.querySelector(".user-code"),
    p = document.querySelector(".password"),
    pc = document.querySelector(".password-code");

  // username errors
  if (u.value.length == 0) {
    u.classList.add("input-error");
    uc.innerHTML = "Username is too short.";
  } else if (u.value.length > 0) {
    u.classList.remove("input-error");
    uc.innerHTML = "";
  }
  // Password errors
  if (p.value.length == 0) {
    p.classList.add("input-error");
    pc.innerHTML = "Password is required.";
  } else if (p.value.length < 8 && p.value.length > 0) {
    p.classList.add("input-error");
    pc.innerHTML = "Password is too short";
  } else if (p.value.length >= 8) {
    p.classList.remove("input-error");
    pc.innerHTML = "";
  }

  // If everything is ok
  if (u.value.length > 0 && p.value.length >= 8) {
    document.querySelector(".login-form").submit();
    return 0;
  }
});
