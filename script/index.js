// Инициализация слайдера
glide = new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    autoplay: 7000,
    hoverpause: true,
    keyboard: true,
  })
  .mount();


// Редирект со слайдера
document.querySelector(".slider__topic-btn").addEventListener('click', () => {
  document.location.href =
    document.getElementsByClassName("slider__item-content")[glide.index]
    .getAttribute("data-href");
});

