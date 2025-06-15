// Прокрутка к форме регистрации при клике на кнопку "Вперёд!"
document.addEventListener("DOMContentLoaded", () => {
  const scrollBtn = document.querySelector(".cta-button");

  if (scrollBtn) {
    scrollBtn.addEventListener("click", (e) => {
      e.preventDefault();
      const contactSection = document.getElementById("contact");
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: "smooth" });
      }
    });
  }

  // Прокрутка к началу при клике на логотип
  const logo = document.querySelector(".logo");
  if (logo) {
    logo.addEventListener("click", (e) => {
      e.preventDefault();
      const home = document.getElementById("home");
      if (home) {
        home.scrollIntoView({ behavior: "smooth" });
      }
    });
  }

  // Прокрутка к форме при нажатии на кнопки "Записаться"
  const formSection = document.getElementById("contact");
  document.querySelectorAll(".to-form").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      if (formSection) {
        formSection.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // Слайдер: точки и авто-прокрутка
  const slides = document.querySelectorAll(".story-slide");
  const dots = document.querySelectorAll(".story-pagination .dot");
  let currentSlide = 0;

  function showSlide(index) {
    currentSlide = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === currentSlide);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === currentSlide);
    });
  }

  // Переход при клике по точкам
  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      showSlide(i);
    });
  });

  // Автоматическая смена слайдов каждые 5 секунд
  setInterval(() => {
    showSlide(currentSlide + 1);
  }, 5000);

  // Показать первый слайд при загрузке
  showSlide(0);
});

