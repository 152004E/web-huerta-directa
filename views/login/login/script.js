const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});
console.log("js");
function validarCorreo(idCorreo) {
  const correo = document.getElementById(idCorreo).value;
  const patronEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!patronEmail.test(correo)) {
    alert("Por favor ingresa un correo electrónico válido.");
    return false;
  }
  return true;
}
