(function () {
  const toggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".main-navigation");
  const heroTitle = document.querySelector("#hero-title");
  const heroCopy = document.querySelector(".hero-copy");
  const dots = Array.from(document.querySelectorAll(".hero-dot"));
  const controls = Array.from(document.querySelectorAll(".hero-control"));

  if (toggle && navigation) {
    toggle.addEventListener("click", function () {
      const isOpen = navigation.classList.toggle("is-open");
      document.body.classList.toggle("menu-open", isOpen);
      toggle.setAttribute("aria-expanded", String(isOpen));
    });
  }

  const slides = [
    {
      title: "Impulsando el Desarrollo Económico de Nicaragua",
      copy: "Promoviendo la industria, el comercio y las inversiones para un futuro próspero",
    },
    {
      title: "Protegemos tus Derechos como Consumidor",
      copy: "Garantizando transparencia y calidad en el mercado nicaragüense",
    },
    {
      title: "Servicios Institucionales más Ágiles",
      copy: "Digitalizando trámites para empresas, consumidores e inversionistas",
    },
  ];

  let activeSlide = 0;

  function renderSlide(index) {
    if (!heroTitle || !heroCopy || !dots.length) {
      return;
    }

    activeSlide = (index + slides.length) % slides.length;
    heroTitle.textContent = slides[activeSlide].title;
    heroCopy.textContent = slides[activeSlide].copy;
    dots.forEach(function (dot, dotIndex) {
      dot.classList.toggle("is-active", dotIndex === activeSlide);
    });
  }

  controls.forEach(function (control, index) {
    control.addEventListener("click", function () {
      renderSlide(activeSlide + (index === 0 ? -1 : 1));
    });
  });
})();
