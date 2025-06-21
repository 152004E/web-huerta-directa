let ciudadSelect = document.getElementById("Select-ciudad");
let localidadSelect  = document.getElementById("localidades");
let localidadSpan  = document.getElementById("localSpan");
 

ciudadSelect.addEventListener("change", function () {
  if (ciudadSelect.value === "bogota") {
    localidadSelect.style.display = "block";
    localidadSpan.style.display = "block";
  } else {
    localidadSelect.style.display = "none";
    localidadSpan.style.display = "none";
  }
});