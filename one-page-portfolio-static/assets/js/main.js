
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
  const targetDiv = document.getElementById("extended-bio");
  const btn = document.getElementById("learn-more");
  btn.onclick = function() {
    if (targetDiv.style.display === "block") {
      targetDiv.style.display = "none";
    } else {
      targetDiv.style.display = "block";
    }
  };


//My practice section
const myPractice = document.getElementById("services");

 // Dropdown functionality for Who and Why section
  const who_why_img = document.querySelector(".who-why-img");
  const who_why_dropdown = document.getElementById("who-and-why");

  // DropDown functionality for How I help section
  const howImage = document.querySelector(".how-img");
  const howDropdown = document.getElementById("how-i-help");

  //Dropdown functionality for What to Expect
  const whatImage = document.querySelector(".what-img");
  const whatDropDown = document.getElementById("what-to-expect");

  function displayDropdown(targetItem,e){
    e.preventDefault();
    who_why_dropdown.style.display="none";
    howDropdown.style.display="none";
    whatDropDown.style.display="none";
    fadeIn(targetItem);
    const coords = targetItem.getBoundingClientRect();
    window.scrollTo(coords.left + window.pageXOffset, coords.top + pageYOffset);
  }

  function closeDropdown(targetItem){
    fadeOut(targetItem);
    const myPracticeCoords = myPractice.getBoundingClientRect();
    window.scrollTo(myPracticeCoords.left + window.pageXOffset, myPracticeCoords.top + pageYOffset);
  }

  who_why_img.addEventListener("click", function(e){
    displayDropdown(who_why_dropdown,e);  
  });

  howImage.addEventListener("click", function(e){
    displayDropdown(howDropdown,e);
  });

  whatImage.addEventListener("click", function(e){
    displayDropdown(whatDropDown,e);
  });

  function closeWhoWhy(){
    closeDropdown(who_why_dropdown);
  }

  function closeHow(){
    closeDropdown(howDropdown);
  }

  function closeWhat(){
    closeDropdown(whatDropDown);
  }
  
