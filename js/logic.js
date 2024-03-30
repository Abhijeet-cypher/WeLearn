const navbar = document.querySelector(".navbar");
let top1 = navbar.offsetTop;
function stickynavbar() {
  if (window.scrollY >= top1) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
  console.log("done");
}
window.addEventListener("scroll", stickynavbar);

