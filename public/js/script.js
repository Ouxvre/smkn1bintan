const splash = document.getElementById("splash");
let splashHidden = false;

function hideSplash() {
  if (!splashHidden) {
    splash.classList.add("hide");
    splashHidden = true;
    setTimeout(() => {
      splash.style.display = "none";
    }, 800); // sesuai durasi animasi
  }
}

// Auto hilang saat scroll pertama kali
window.addEventListener("scroll", () => {
  if (!splashHidden) {
    hideSplash();
  }
});

// teks welcome

const lines = [
  { id: "line1", text: "SELAMAT DATANG DI" },
  { id: "line2", text: "SMK NEGERI 1" },
  { id: "line3", text: "BINTAN UTARA" },
];

function typeSmooth(lineIndex = 0, charIndex = 0) {
  if (lineIndex >= lines.length) return;

  const { id, text } = lines[lineIndex];
  const container = document.getElementById(id);

  if (charIndex === 0) container.innerHTML = "";

  if (charIndex < text.length) {
    const span = document.createElement("span");
    span.className = "typing-letter";

    span.innerHTML = text[charIndex] === " " ? "&nbsp;" : text[charIndex];

    container.appendChild(span);

    setTimeout(() => span.classList.add("show"), 10);
    setTimeout(() => typeSmooth(lineIndex, charIndex + 1), 80);
  } else {

    setTimeout(() => typeSmooth(lineIndex + 1, 0), 300);
  }
}

window.addEventListener("DOMContentLoaded", () => {
  typeSmooth();
});

//slider wok
let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".carousel");
let SliderDom = carouselDom.querySelector(".carousel .list");
let thumbnailBorderDom = document.querySelector(".carousel .thumbnail");
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(".item");
let timeDom = document.querySelector(".carousel .time");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};
let runTimeOut;
let runNextAuto = setTimeout(() => {
  next.click();
}, timeAutoNext);
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(".carousel .list .item");
  let thumbnailItemsDom = document.querySelectorAll(
    ".carousel .thumbnail .item"
  );

  if (type === "next") {
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    next.click();
  }, timeAutoNext);
}

// news and event

const tabs = document.querySelectorAll(".tabs button");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabs.forEach((t) => t.classList.remove("active"));
    contents.forEach((c) => (c.style.display = "none"));

    tab.classList.add("active");
    document.getElementById(tab.dataset.target).style.display = "block";
  });
});

// berita
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".tab-content").forEach(tab => {
    const container = tab.querySelector(".articles-container");
    if (!container) return;

    const prevBtn = tab.querySelector(".prev");
    const nextBtn = tab.querySelector(".next");

    let currentIndex = 0;
    const cardWidth = 280; // card + gap
    let visibleCards = 3;
    let totalCards = container.children.length;

    // Clone elemen untuk efek infinite
    const firstClones = [];
    const lastClones = [];

    for (let i = 0; i < visibleCards; i++) {
      const firstClone = container.children[i].cloneNode(true);
      const lastClone = container.children[totalCards - 1 - i].cloneNode(true);
      container.appendChild(firstClone);
      container.insertBefore(lastClone, container.firstChild);
      firstClones.push(firstClone);
      lastClones.push(lastClone);
    }

    // update total cards setelah clone
    totalCards = container.children.length;

    // posisi awal geser ke depan (karena ada clone di awal)
    currentIndex = visibleCards;
    container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    function updateVisibleCards() {
      if (window.innerWidth <= 640) {
        visibleCards = 1;
      } else if (window.innerWidth <= 992) {
        visibleCards = 2;
      } else {
        visibleCards = 3;
      }
    }

    function updateSlider(animate = true) {
      if (!animate) {
        container.style.transition = "none";
      } else {
        container.style.transition = "transform 0.5s ease";
      }
      container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", () => {
        currentIndex++;
        updateSlider();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", () => {
        currentIndex--;
        updateSlider();
      });
    }

    // trik looping
    container.addEventListener("transitionend", () => {
      if (currentIndex >= totalCards - visibleCards) {
        currentIndex = visibleCards; // balik ke awal clone
        updateSlider(false);
      } else if (currentIndex <= 0) {
        currentIndex = totalCards - visibleCards * 2; // balik ke akhir clone
        updateSlider(false);
      }
    });

    window.addEventListener("resize", () => {
      updateVisibleCards();
      updateSlider(false);
    });

    updateVisibleCards();
  });

  // Tab switching
  const tabs = document.querySelectorAll(".tabs button");
  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(btn => btn.classList.remove("active"));
      tab.classList.add("active");

      document.querySelectorAll(".tab-content").forEach(content => {
        content.style.display = "none";
      });

      document.getElementById(tab.dataset.target).style.display = "block";
    });
  });
});
