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

function validarRegistro() {
  const password = document.getElementById("passwordRegistro").value;

  const tieneMayuscula = /[A-Z]/.test(password);
  const tieneMinuscula = /[a-z]/.test(password);
  const tieneNumero = /[0-9]/.test(password);
  const longitudValida = password.length >= 8;

  if (!tieneMayuscula || !tieneMinuscula || !tieneNumero || !longitudValida) {
    alert("La contraseña debe contener al menos:\n- 8 caracteres\n- 1 letra mayúscula\n- 1 letra minúscula\n- 1 número");
    return false;
  }

  return true;
}


