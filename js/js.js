const closeBtn = document.getElementById("closeBtn");
const bgBackground = document.getElementById("bg-contact");
const bgContact = document.getElementById("kontaktformular");
const rueckruf = document.getElementById("rueckruf");
const carouselIndicator = document.getElementById("carousel-indicator");
const bgc = document.getElementById("bg-contact");
var path = window.location.pathname;
var pagename = path.split("/").pop();
const navitem5 = document.querySelector(".navitem5");
const wrapper = document.getElementsByClassName("wrapper");

// Kontaktformular verstecken / zeigen
closeBtn.addEventListener("click", function() {
  // Display none setzen
  bgBackground.classList.add("d-none");
  bgContact.classList.add("d-none");
  carouselIndicator.classList.remove("d-none");
});

// Kontakthintergrundgröße berechnen und einfügen
window.onload = function() {
  bgc.style.height = document.body.scrollHeight + "px";
};

//wenn größe geändert
window.addEventListener("resize", function() {
  bgc.style.height = document.body.scrollHeight + "px";
});

//aktive seite bestimmen und Nav setzen

if (pagename == "index.php") {
  const index = document.querySelector(".navitem1");
  index.classList.add("active");
} else if (pagename == "ueber-uns.php") {
  const index = document.querySelector(".navitem2");
  index.classList.add("active");
} else if (
  pagename == "gasanbieter_wechseln.php" ||
  pagename == "unsere_leistungen.php" ||
  pagename == "stromanbieter_wechseln.php"
) {
  const index = document.querySelector(".navitem3");
  index.classList.add("active");
} else if (pagename == "stromtarifvergleich.php") {
  const index = document.querySelector(".navitem4");
  index.classList.add("active");
} else if (
  pagename == "wissenswertes.php" ||
  pagename == "oekogas.php" ||
  pagename == "oekostrom.php" ||
  pagename == "preiserhoehung.php"
) {
  const index = document.querySelector(".navitem5");
  index.classList.add("active");
}

if (rueckruf) {
  rueckruf.addEventListener("click", function() {
    // Display true setzen
    bgBackground.classList.remove("d-none");
    bgContact.classList.remove("d-none");
    carouselIndicator.classList.add("d-none");
  });
}
