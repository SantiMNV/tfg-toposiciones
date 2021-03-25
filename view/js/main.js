
let backToTopBtn = null;
document.onload = principal()


function principal() {
  console.log("Conectado")
  backToTopBtn = document.getElementById("backToTopBtn");
  backToTopBtn.addEventListener("click", topFunction)
  window.onscroll = function () { scrollFunction() };
}


// Show btn when scroll is 20 down
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// Scroll to top when user clicks
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}