const day = document.querySelector("#day");
const night = document.querySelector("#night");
const langBtnPL = document.querySelector("#langBtnPL");
const langBtnEN = document.querySelector("#langBtnEN");
const main_pl = document.querySelector("#main_pl");
const main_en = document.querySelector("#main_en");
const logoWP = document.querySelectorAll('.logoWP');
const logoGH = document.querySelector('#logoGH');

let isPL = true;
let isDark = false;
langBtnPL.addEventListener("click", () => {
  console.log(101);

  if (isPL) {
    main_pl.style.display = "none";
    main_en.style.display = "block";
    langBtnPL.style.display = "none";
    langBtnEN.style.display = "block";
    isPL = false;
  }
});
langBtnEN.addEventListener("click", () => {
  console.log(102);

  if (!isPL) {
    main_en.style.display = "none";
    main_pl.style.display = "block";
    langBtnEN.style.display = "none";
    langBtnPL.style.display = "block";
    isPL = true;
  }
});

day.addEventListener("click", function () {
  if (isDark) {
    day.style.display = "none";
    night.style.display = "block";
    document.body.classList.remove("dark-mode");
    logoWP.forEach((el) => {
      el.style.filter = "brightness()";
    });
    logoGH.style.filter = "brightness()";
    isDark = false;
  }
});
night.addEventListener("click", function () {
  if (!isDark) {
    night.style.display = "none";
    day.style.display = "block";
    document.body.classList.add("dark-mode");
    logoWP.forEach((el) => {
      el.style.filter = "brightness(5)";
    });
    logoGH.style.filter = "brightness(10)";
    isDark = true;
  }
});