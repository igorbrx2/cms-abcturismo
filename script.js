// MUDAR BOTOES DO MENU DE ACORDO COM A PÁGINA QUE ESTÁ

  // Obtém o caminho da URL atual
  var path = window.location.pathname;

  // Obtém o nome da página atual a partir do caminho da URL
  var currentPage = path.split('/').pop();

  // Obtém o elemento do botão do header correspondente à página atual
  var button;

  switch (currentPage) {
    case 'home':
      button = document.querySelector('#menu li:nth-child(1) a');
      break;
    case 'sobre':
      button = document.querySelector('#menu li:nth-child(2) a');
      break;
    case 'pacotes':
      button = document.querySelector('#menu li:nth-child(3) a');
      break;
    case 'blog':
      button = document.querySelector('#menu li:nth-child(4) a');
      break;
    default:
      // Se a página atual não corresponder a nenhuma das páginas conhecidas, não faz nada
      break;
  }

  // Adiciona a classe de destaque ao botão da página atual
  if (button) {
    button.classList.add('destaque');
  }


// EVIDENCIAR AO CLICAR (DEPOIMENTOS, PACOTES ETC)

$("[data-group]").each(function () {
  var $allTarget = $(this).find("[data-target]"),
    $allClick = $(this).find("[data-click]"),
    activeClass = "active";

  $allTarget.first().addClass(activeClass);
  $allClick.first().addClass(activeClass);

  $allClick.click(function (e) {
    e.preventDefault();

    var id = $(this).data("click"),
      $target = $('[data-target="' + id + '"]');

    $allClick.removeClass(activeClass);
    $allTarget.removeClass(activeClass);

    $target.addClass(activeClass);
    $(this).addClass(activeClass);
  });
});

// GIRAR DEPOIMENTOS ENQUANTO NÃO ESTIVEREM CLICADOS

$(document).ready(function () {
  var $allTarget = $("[data-group='depoimentos']").find("[data-target]");
  var $allClick = $("[data-group='depoimentos']").find("[data-click]");
  var activeClass = "active";
  var currentIndex = 0;
  var autoRotateInterval;

  function activateItem(index) {
    $allClick.removeClass(activeClass);
    $allTarget.removeClass(activeClass);

    $allTarget.eq(index).addClass(activeClass);
    $allClick.eq(index).addClass(activeClass);
  }

  function startAutoRotate() {
    autoRotateInterval = setInterval(function () {
      currentIndex++;
      if (currentIndex === $allTarget.length) {
        currentIndex = 0;
      }
      activateItem(currentIndex);
    }, 3000);
  }

  function stopAutoRotate() {
    clearInterval(autoRotateInterval);
  }

  $allClick.click(function (e) {
    e.preventDefault();
    stopAutoRotate();

    var id = $(this).data("click");
    var index = $allClick.index(this);

    activateItem(index);

    setTimeout(startAutoRotate, 7000);
  });

  startAutoRotate();
});


// CONTROLADOR DE CARROSSEL (PREV E NEXT BTN)

document.addEventListener("DOMContentLoaded", function () {
  const prevBtn = document.querySelector(".pre-btn");
  const nextBtn = document.querySelector(".nxt-btn");
  const content = document.querySelector("#carrossel-pcts");

  const scrollAmount = 620; // Ajuste conforme necessário
  const scrollSpeed = 500; // Ajuste conforme necessário

  prevBtn.addEventListener("click", function () {
    content.scrollTo({
      left: content.scrollLeft - scrollAmount,
      behavior: "smooth",
    });
  });

  nextBtn.addEventListener("click", function () {
    content.scrollTo({
      left: content.scrollLeft + scrollAmount,
      behavior: "smooth",
    });
  });
});
// ROLAR PARA CIMA AO CLICAR (PACOTES)

window.addEventListener("scroll", function () {
  let scroll = document.querySelector(".pct-item");
  scroll.classList.toggle("active", window.scrollY > 250);
});

function backTop() {
  window.scrollTo({
    top: 320,
    behavior: "smooth",
  });
}

// BARRA DE PESQUISA

function search() {
  var input = document.getElementById("searchInput").value;
  input = input.toLowerCase();

  var x = document.getElementsByClassName("post-card");

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
      x[i].style.display = "none";
    } else {
      x[i].style.display = "list-item";
    }
  }
}

// MENU MOBILE

class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = "navLinkFade 0.5s ease forwards 0.3s");
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(".btn-mobile", "#menu", "#menu li");
mobileNavbar.init();
