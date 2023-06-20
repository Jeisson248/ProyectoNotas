body {
    font - family: Arial, sans - serif;
}

                h2 {
    color: #333;
}

                form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background - color: #f5f5f5;
    border: 1px solid #ccc;
    border - radius: 5px;
}

                label {
    display: block;
    margin - bottom: 10px;
    font - weight: bold;
}

input[type = "text"],
    input[type = "number"] {
    width: 100 %;
    padding: 8px;
    border: 1px solid #ccc;
    border - radius: 3px;
}

                .error {
    border - color: red;
}

button[type = "submit"] {
    display: block;
    margin - top: 10px;
    padding: 8px 12px;
    background - color: #333;
    color: #fff;
    border: none;
    border - radius: 3px;
    cursor: pointer;
}

                .resultado {
    margin - top: 20px;
    padding: 10px;
    background - color: #f5f5f5;
    border: 1px solid #ccc;
    border - radius: 5px;
}

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("formulario");
    var nombreInput = document.getElementById("nombre");
    var cantidadInput = document.getElementById("cantidad");
    var precioInput = document.getElementById("precio");
    var errorDiv = document.getElementById("errorDiv");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        var nombre = nombreInput.value;
        var cantidad = parseFloat(cantidadInput.value);
        var precio = parseFloat(precioInput.value);

        errorDiv.innerHTML = "";

        if (nombre.trim() === "") {
            errorDiv.innerHTML += "<p class='error'>El nombre del vendedor es requerido</p>";
        }

        if (isNaN(cantidad) || cantidad <= 0) {
            errorDiv.innerHTML += "<p class='error'>La cantidad de automóviles vendidos debe ser un número positivo</p>";
        }

        if (cantidad < 0) {
            alert("La cantidad de automóviles vendidos no puede ser negativa");
            cantidadInput.focus();
            return; // Detener el envío del formulario
        }

        if (isNaN(precio) || precio <= 0) {
            errorDiv.innerHTML += "<p class='error'>El precio total de los automóviles vendidos debe ser un número positivo</p>";
        }

        if (errorDiv.innerHTML === "") {
            // Si no hay errores, puedes enviar el formulario aquí
            form.submit();
        }
    });
});
