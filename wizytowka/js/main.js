const day = document.querySelector("#day");
const night = document.querySelector("#night");
const langBtnPL = document.querySelector("#langBtnPL");
const langBtnEN = document.querySelector("#langBtnEN");
const main_pl = document.querySelector("#main_pl");
const main_en = document.querySelector("#main_en");
console.log(10);

let isPL = true;

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
