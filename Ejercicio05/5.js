function encontrarMayor() {
    // Obtener los números ingresados por el usuario
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let num3 = parseFloat(document.getElementById("num3").value);

    // Encontrar el mayor número
    let mayor = num1;
    if (num2 > mayor) {
      mayor = num2;
    }
    if (num3 > mayor) {
      mayor = num3;
    }

    // Mostrar el resultado en la página
    let resultado = document.getElementById("resultado");
    resultado.innerHTML = "El mayor número es " + mayor;
    if (mayor === num1) {
      resultado.style.color = "green";
    } else if (mayor === num2) {
      resultado.style.color = "blue";
    } else {
      resultado.style.color = "red";
    }
  }