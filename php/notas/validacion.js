window.addEventListener('DOMContentLoaded', function() {
    // Obtener referencias a los campos de entrada
    var parcial1Input = document.querySelector('input[name="parcial1"]');
    var parcial2Input = document.querySelector('input[name="parcial2"]');
    var parcial3Input = document.querySelector('input[name="parcial3"]');
    var finalInput = document.querySelector('input[name="final"]');
    var trabajoInput = document.querySelector('input[name="trabajo"]');
  
    // Asignar eventos de mouseover y mouseout a los campos
    parcial1Input.addEventListener('mouseover', cambiarColorRojo);
    parcial1Input.addEventListener('mouseout', cambiarColorOriginal);
    parcial2Input.addEventListener('mouseover', cambiarColorRojo);
    parcial2Input.addEventListener('mouseout', cambiarColorOriginal);
    parcial3Input.addEventListener('mouseover', cambiarColorRojo);
    parcial3Input.addEventListener('mouseout', cambiarColorOriginal);
    finalInput.addEventListener('mouseover', cambiarColorRojo);
    finalInput.addEventListener('mouseout', cambiarColorOriginal);
    trabajoInput.addEventListener('mouseover', cambiarColorRojo);
    trabajoInput.addEventListener('mouseout', cambiarColorOriginal);
  
    // Cambiar color de fondo a rojo
    function cambiarColorRojo(event) {
      var campo = event.target;
      campo.style.backgroundColor = 'red';
    }
  
    // Volver al color de fondo original
    function cambiarColorOriginal(event) {
      var campo = event.target;
      campo.style.backgroundColor = '';
    }
  
    // Validar la entrada de números negativos y mostrar alerta
    parcial1Input.addEventListener('input', validarNegativos);
    parcial2Input.addEventListener('input', validarNegativos);
    parcial3Input.addEventListener('input', validarNegativos);
    finalInput.addEventListener('input', validarNegativos);
    trabajoInput.addEventListener('input', validarNegativos);
  
    // Validar número negativo y mostrar alerta
    function validarNegativos(event) {
      var campo = event.target;
      var valor = parseFloat(campo.value);
      if (valor < 0) {
        campo.value = '';
        alert('No se permiten numeros negativos');
      }
    }
  });
  