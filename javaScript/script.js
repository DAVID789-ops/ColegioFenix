const buttonsInfo = {
    1: [],
    2: [
        { label: 'Cuarto', info: 'Cuarto Primaria', info2: "Q350", info3: "Q400", info4: ["Ciencias Naturales y Tecnología.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Educación Física.", "Expresión Artística.", "Formación Ciudadana.", "Matemáticas.", "Poductividad y Desarrollo."] },
        { label: 'Quinto', info: 'Quinto Primaria', info2: "Q350", info3: "Q400", info4: ["Ciencias Naturales y Tecnología.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Educación Física.", "Expresión Artística.", "Formación Ciudadana.", "Matemáticas.", "Poductividad y Desarrollo."] },        
        { label: 'Sexto', info: 'Sexto Primaria', info2: "Q350", info3: "Q400", info4: ["Ciencias Naturales y Tecnología.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Educación Física.", "Expresión Artística.", "Formación Ciudadana.", "Matemáticas.", "Poductividad y Desarrollo."] }
    ],
    3: [
        { label: 'Primero', info: 'Primero Básico', info2: "Q400", info3: "Q450", info4: ["Ciencias Naturales.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Expresión Artística.", "Educación Física.", "Emprendimiento Para La Productividad.", "Matemáticas.", "Tecnología del Aprendizaje y la Comunicación."] },
        { label: 'Segundo', info: 'Segundo Básico', info2: "Q400", info3: "Q450", info4: ["Ciencias Naturales.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Expresión Artística.", "Educación Física.", "Emprendimiento Para La Productividad.", "Matemáticas.", "Tecnología del Aprendizaje y la Comunicación."] },
        { label: 'Tercero', info: 'Tercero Básico', info2: "Q400", info3: "Q450", info4: ["Ciencias Naturales.", "Ciencias Sociales.", "Comunicación y Lenguaje L1, Idioma Español.", "Comunicación y Lenguaje L2, Idioma Maya.", "Comunicación y Lenguaje L3, Idioma Extranjero.", "Expresión Artística.", "Educación Física.", "Emprendimiento Para La Productividad.", "Matemáticas.", "Tecnología del Aprendizaje y la Comunicación."] }
    ],
    4: [
        { label: 'Primer Año', info: 'Básico Por Madurez Primer Año', info2: "Q400", info3: "Q450", info4: ["Ciencias Naturales.", "Ciencias Sociales, Formación Ciudadana e Interculturalidad.", "Comunicación y Lenguaje, Idioma Español.", "Cultura e Idiomas Mayas.", "Comunicación y Lenguaje, Idioma Extranjero.", "Educación Artística.", "Educación Física.", "Emprendimiento Para La Productividad.", "Matemáticas."] },      
        { label: 'Segundo Año', info: 'Básico Por Madurez Segundo Año', info2: "Q400", info3: "Q450", info4: ["Ciencias Naturales.", "Ciencias Sociales, Formación Ciudadana e Interculturalidad.", "Comunicación y Lenguaje, Idioma Español.", "Cultura e Idiomas Mayas.", "Comunicación y Lenguaje, Idioma Extranjero.", "Educación Artística.", "Educación Física.", "Emprendimiento Para La Productividad.", "Matemáticas."] }
    ],
    5: [
        { label: 'Cuarto', info: '<p>Cuarto</p><p>Bachillerato en Computación</p> Con Orientación Comercial.', info2: "Q450", info3: "Q500", info4: ["Ciencias Naturales, Física.", "Comunicación y Lenguaje, Comunicación y Literatura.", "Comunicación y Lenguaje, Idioma Inglés.", "Contabilidad y Auditoria, Contabilidad I.", "Estudios Sociales.", "Matemáticas, Estadística.", "Matemáticas, Lógica Matemática.", "Matemática, Matemática I.", "Tecnología, Computación I.","Tecnología Programación I."] },
        { label: 'Quinto', info: '<p>Quinto</p><p>Bachillerato en Computación</p> Con Orientación Comercial.', info2: "Q475", info3: "Q500", info4: ["Administración.", "Contabilidad y Auditoria, Contabilidad II.", "Educación Estética.", "Ética y Relaciones Humanas.", "Invetigación, Seminario.", "Problemas Socioeconómicos.", "Comunicación y Lenguaje, Inglés Técnico.", "Contabilidad y Auditoria, Contabilidad II.",  "Matemática, Matemática II.","Tecnología Programación II."]  }
    ],
    6: [
        { label: 'Click Aquí', info: 'Diversificado Por Madurez', info2: "Q475", info3: "Q500", info4: ["Ciencias Naturales.", "Ciencias Sociales y Formación Ciudadana.", "Comunicación y Lenguaje L3, Idioma Inglés.", "Comunicación y Lenguaje, Lengua y Literatura.", "Comunicación y Lenguaje Tecnología de la Información y Comunicación.", "Educación Física.", "Expresión Artística.", "Filosofía.", "Investigación, Seminario.", "Matemáticas.", "Psicología."] }
    ],
};

function updateButtons() {
    const select = document.getElementById('optionSelect');
    const optionId = select.value;
    const buttonContainer = document.getElementById('buttonContainer');
    const infoDisplay1 = document.getElementById('infoDisplay1');
    const infoDisplay2 = document.getElementById('infoDisplay2');
    const infoDisplay3 = document.getElementById('infoDisplay3');
    const infoDisplay4 = document.getElementById('infoDisplay4');
    
    buttonContainer.innerHTML = '';

    buttonsInfo[optionId].forEach(button => {
        const buttonElement = document.createElement('button');
        buttonElement.textContent = button.label;
        buttonElement.className = 'boton botones__ingles';
        buttonElement.onclick = () => {
            infoDisplay1.innerHTML = `<p>${button.info}</p>`;
            infoDisplay2.innerHTML = `<p>${button.info2}</p>`;
            infoDisplay3.innerHTML = `<p>${button.info3}</p>`;
            infoDisplay4.innerHTML = '<ul>' + button.info4.map(item => `<li>${item}</li>`).join('') + '</ul>';
        };
        buttonContainer.appendChild(buttonElement);
    });

    infoDisplay1.innerHTML = '<p>Selecciona Un Grado</p>';
    infoDisplay2.innerHTML = '<p>-----</p>';
    infoDisplay3.innerHTML = '<p>-----</p>';
    infoDisplay4.innerHTML = '<p>-----</p>';
}

// Fin del dinamismo


    // Pop_up formulario
function openPopup() {
    document.getElementById("pop_up1").style.display = "block";
}

function closePopup() {
    document.getElementById("pop_up1").style.display = "none";
}

function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var telefono = document.getElementById("telefono").value;
    var hora = document.getElementById("hora").value;

    if (nombre === "" || telefono === "" || hora === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }
    return true;
}

document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

    var formData = new FormData(document.getElementById("formulario")); // Crear objeto FormData con los datos del formulario

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/guardar.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("pop_up1").style.display = "none"; // Ocultar pop-up1
            document.getElementById("pop_up2").style.display = "block"; // Mostrar pop-up2
            setTimeout(function() {
                document.getElementById("pop_up2").style.display = "none"; // Ocultar pop-up2 después de 3 segundos
            }, 3000);
        }
    };
    xhr.send(formData); // Enviar los datos del formulario como formData
});

// Función para validar que el campo de teléfono solo acepte números
document.getElementById("telefono").addEventListener("input", function(event) {
    var input = event.target;
    var valor = input.value;
    input.value = valor.replace(/\D/g, ''); // Reemplaza cualquier caracter que no sea un dígito por nada
});

