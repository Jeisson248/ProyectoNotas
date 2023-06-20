window.onload = function() {
    var form = document.querySelector('form');
    form.onsubmit = function(event) {
        event.preventDefault();
        var numero = document.getElementById('numero').value;
        alert("El número tiene " + numero.length + " dígitos.");
    };
};
