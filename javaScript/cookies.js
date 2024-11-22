// Función para establecer una cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (1000 * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Función para obtener el valor de una cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Función para mostrar u ocultar el banner de cookies según el estado de la cookie
function checkCookie() {
    var userAcceptance = getCookie('cookiesAccepted');
    var banner = document.getElementById('cookie-banner');
    
    if (!userAcceptance) {
        banner.style.display = 'block'; // Mostrar el banner si la cookie no está aceptada
    } else {
        banner.style.display = 'none'; // Ocultar el banner si la cookie está aceptada
    }
}

// Función para establecer una cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Función para obtener el valor de una cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Función para mostrar u ocultar el banner de cookies según el estado de la cookie
function checkCookie() {
    var userAcceptance = getCookie('cookiesAccepted');
    var banner = document.getElementById('cookie-banner');
    
    if (!userAcceptance) {
        banner.style.display = 'block'; // Mostrar el banner si la cookie no está aceptada
    } else {
        banner.style.display = 'none'; // Ocultar el banner si la cookie está aceptada
    }
}

// Manejar el evento de clic en "Aceptar Cookies"
document.getElementById('accept-cookies').addEventListener('click', function() {
    console.log('Botón "Aceptar Cookies" clicado'); // Mensaje de depuración
    setCookie('cookiesAccepted', 'true', 30); // Establecer la cookie de aceptación por 30 días
    checkCookie(); // Llamar a la función para verificar las cookies después de aceptarlas
});