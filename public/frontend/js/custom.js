$(function () {
  document.addEventListener("DOMContentLoaded", function () {
    const loginImage = document.getElementById("login-image");
    const modalOverlay = document.getElementById("reveal-overlay");
    const closeModal = document.querySelector(".reveal-header__close");

    if (loginImage && modalOverlay && closeModal) {
      // Hide modal initially
      modalOverlay.style.display = "none";

      // Show modal when login image is clicked
      loginImage.addEventListener("click", function () {
        modalOverlay.style.display = "block";
      });

      // Hide modal when close button is clicked
      closeModal.addEventListener("click", function () {
        modalOverlay.style.display = "none";
      });
    }
  });

});