document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('#menu-heading');
    const desplegable = document.querySelector('#desplegable');
    menu.addEventListener('click', () => {
        desplegable.classList.toggle('show');
    });
});
