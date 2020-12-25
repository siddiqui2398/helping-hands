if (window.matchMedia('(max-width: 640px)').matches) { 
    const navbar = document.getElementById('navbar');
    const navDrop = document.getElementById('navbar_drop');

    navDrop.addEventListener('click', () => {
        if(navbar.style.display != 'block') {
            navbar.style.display = 'block';
            navDrop.innerHTML = 'x';
        } else {
            navbar.style.display = 'none';
            navDrop.innerHTML = '&#9776';
        }
    })
} 