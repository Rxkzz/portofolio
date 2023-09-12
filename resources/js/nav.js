
  document.addEventListener("DOMContentLoaded", function () {
    // Get references to the button and the dropdown menu
    var userMenuButton = document.getElementById("user-menu-button");
    var userMenuDropdown = document.querySelector(".relative.ml-3 > div > .absolute");

    // Toggle the dropdown menu when the button is clicked
    userMenuButton.addEventListener("click", function () {
      userMenuDropdown.classList.toggle("hidden");
    });

    // Close the dropdown menu when clicking outside of it
    document.addEventListener("click", function (event) {
      if (!userMenuButton.contains(event.target) && !userMenuDropdown.contains(event.target)) {
        userMenuDropdown.classList.add("hidden");
      }
    });
  });



