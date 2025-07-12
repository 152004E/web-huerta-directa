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