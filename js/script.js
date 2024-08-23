$(document).ready(function() {
    $('#formSugerir').on('submit', function(event) {
        let camposVacios = false;

        $('#nombre_libro, #autor_libro, #descripcion_libro, #editorial_libro, #recomendacion').each(function() {
            if ($(this).val().trim() === '') {
                camposVacios = true;
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '');
            }
        });

        $('#genero_libro, #idioma_libro').each(function() {
            if ($(this).val() === '') {
                camposVacios = true;
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '');
            }
        });

        const anioPublicacion = $('#anio_publicacion').val();
        if (anioPublicacion === '' || isNaN(anioPublicacion) || anioPublicacion <= 0) {
            camposVacios = true;
            $('#anio_publicacion').css('border', '2px solid red');
        } else {
            $('#anio_publicacion').css('border', '');
        }

        if (camposVacios) {
            alert("Por favor, verifique que los campos estén completos.");
            event.preventDefault(); 
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('show-menu');
    });
});

