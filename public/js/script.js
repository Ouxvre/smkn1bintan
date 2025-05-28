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

  if (charIndex === 0) container.innerHTML = ""; // Reset sebelum mengetik

  if (charIndex < text.length) {
    const span = document.createElement("span");
    span.className = "typing-letter";

    // Tambahkan spasi dengan non-breaking space
    span.innerHTML = text[charIndex] === " " ? "&nbsp;" : text[charIndex];

    container.appendChild(span);

    // Delay kemunculan
    setTimeout(() => span.classList.add("show"), 10);
    setTimeout(() => typeSmooth(lineIndex, charIndex + 1), 80);
  } else {
    // Selesai baris ini → lanjut baris berikutnya
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
