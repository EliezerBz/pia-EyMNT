const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');

menuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    menuToggle.classList.toggle('open');
    if (menuToggle.classList.contains('open')) {
        menuToggle.innerHTML = '&times;';
    } else {
        menuToggle.innerHTML = '&#9776;';
    }
});

// Script para la vista previa de la imagen
document.getElementById('upload-img').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview-img');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block'; // Mostrar la imagen
        }
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.style.display = 'none'; // Ocultar si no hay imagen
    }
});