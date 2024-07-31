document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var btn = document.getElementById('openModalButton'); // Asegúrate de tener un botón para abrir el modal
    var span = document.getElementsByClassName('close')[0];

    // Abre el modal
    btn.onclick = function() {
        modal.style.display = 'block';
    }

    // Cierra el modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var email = document.getElementById('email').value;
    var responseMessage = document.getElementById('response-message');

    fetch('subscribe.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email: email })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            responseMessage.innerText = 'Te has suscrito correctamente.';
            responseMessage.style.color = 'green';
        } else {
            responseMessage.innerText = 'Ha ocurrido un error: ' + data.message;
            responseMessage.style.color = 'red';
        }
    })
    .catch(error => {
        responseMessage.innerText = 'Ha ocurrido un error inesperado.';
        responseMessage.style.color = 'red';
    });
});
});