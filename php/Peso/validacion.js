document.addEventListener("DOMContentLoaded", function () {
    var nombreInput = document.getElementById("nombre");
    var pesoInput = document.getElementById("peso");
    var estaturaInput = document.getElementById("estatura");

    function showAlert(input) {
        alert("El valor no puede ser negativo: " + input.value);
        input.value = ""; // Limpia el campo
    }

    function validateInput(input) {
        if (input.value < 0) {
            showAlert(input);
        }
    }

    nombreInput.addEventListener("mouseover", function () {
        nombreInput.style.borderColor = "red";
    });

    pesoInput.addEventListener("mouseover", function () {
        pesoInput.style.borderColor = "red";
    });

    estaturaInput.addEventListener("mouseover", function () {
        estaturaInput.style.borderColor = "red";
    });

    nombreInput.addEventListener("mouseout", function () {
        nombreInput.style.borderColor = "";
    });

    pesoInput.addEventListener("mouseout", function () {
        pesoInput.style.borderColor = "";
    });

    estaturaInput.addEventListener("mouseout", function () {
        estaturaInput.style.borderColor = "";
    });

    pesoInput.addEventListener("input", function () {
        validateInput(pesoInput);
    });

    estaturaInput.addEventListener("input", function () {
        validateInput(estaturaInput);
    });
});
