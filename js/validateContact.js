

function validar() {
  let nombre, apellido, correo, mensaje , telefono, expresionR;

  nombre = document.getElementById("nombre").value;
  apellido = document.getElementById("apellido").value;
  correo = document.getElementById("correo").value;
  mensaje = document.getElementById("mensaje").value;
  telefono = document.getElementById("telefono").value;
  expresionR = /\w+@+\w+\.+[a-z]/;

  if (
    nombre == "" &&
    apellido == "" &&
    correo == "" &&
    mensaje ==""&&
    telefono == ""
  ) {
    alert("Debes llenar el formulario para continuar");
    return false;
  }

  if (nombre == "") {
    alert("Falta ingresar nombre");
    return false;
  } else {
    if (nombre.length > 30) {
      alert("El nombre solo puede tener 30 caracteres");
      return false;
    }
  }
  if (apellido == "") {
    alert("Falta ingresar apellido");
    return false;
  } else {
    if (nombre.length > 30) {
      alert("El apellido solo puede tener 30 caracteres");
      return false;
    }
  }
  if (correo == "") {
    alert("Falta ingresar correo");
    return false;
  } else {
    if (correo.length > 25) {
      alert("El correo solo puede tener 25 caracteres");
      return false;
    }
  }
  if (mensaje == "") {
    alert("Falta ingresar tu mensaje");
    return false;
  } 
  if (telefono == "") {
    alert("Falta ingresar telefono");
    return false;
  } else {
    if (telefono.length > 10) {
      alert("El telefono solo puede tener 10 caracteres");
      return false;
    } else {
      if (isNaN(telefono)) {
        alert("El telefono debe de ser numerico");
        return false;
      }
    }
  }
  if (!expresionR.test(correo)) {
    alert("Correo invalido");
    return false;
  }
}
