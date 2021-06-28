
  function fadeIn(fadeTarget) {
    var op = 0.01;
    fadeTarget.style.opacity = op;
    fadeTarget.style.display = 'block';
    var fadeEffect = setInterval(function() {
      fadeTarget.style.opacity = op;
      if (op < 1) {
        op += 0.01;
        fadeTarget.style.opacity = op;
      } else {
        clearInterval(fadeEffect);
      }
    }, 1);
  }

  function fadeOut(fadeTarget) {
    var op = 1;
    fadeTarget.style.opacity = op;
    var fadeEffect = setInterval(function() {
      if (fadeTarget.style.opacity > 0) {
        fadeTarget.style.opacity -= 0.01;
      } else {
        clearInterval(fadeEffect);
        fadeTarget.style.display = 'none';
      }
    }, 8);
  }

  function openNav() {
    fadeIn(document.getElementById("myNav"));
  }

  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    fadeOut(document.getElementById("myNav"));
  }




  // Learn More Button Toggle
  const targetDiv = document.getElementById("qualifications");
  const btn = document.getElementById("learn-more");
  btn.onclick = function() {
    if (targetDiv.style.display === "block") {
      targetDiv.style.display = "none";
    } else {
      targetDiv.style.display = "block";
    }
  };
