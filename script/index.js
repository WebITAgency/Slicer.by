document.addEventListener("DOMContentLoaded", ready);

function ready() {
  let sliderTitle = document.getElementsByClassName("slider__title")[0];
  sliderTitle.style.left = "calc(50% - " + Math.round(sliderTitle.offsetWidth / 2) + "px)";
}