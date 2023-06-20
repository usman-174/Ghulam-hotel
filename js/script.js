
document.querySelector(".contact-btn").addEventListener("click", function() {
  // Code to be executed when the button is clicked
  alert("Your Message has been delivered.");
  // You can add more functionality or perform other actions here
});
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when scrolling down
window.onscroll = function () {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
};

// Scroll to the top when the button is clicked
scrollToTopBtn.addEventListener("click", function () {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});
const liveButton = document.querySelector("button.live-btn");
  if(liveButton){

    liveButton.addEventListener("click", function () {
      this.classList.add("attention");
      
      // Remove the 'attention' class after the animation completes
      setTimeout(() => {
        this.classList.remove("attention");
      }, 1000);
    });
  }
  function redirectToBookRoom(id) {
    window.location.href = 'book_room.php?id=' + id;
  }

 