document.addEventListener('DOMContentLoaded', function () {
    const burgerBtn = document.getElementById('burger-btn');
    const burgerMenu = document.getElementById('burger-menu');


    function disableScroll() {

        const scrollY = window.scrollY || document.documentElement.scrollTop;


        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollY}px`;
        document.body.style.width = '100%';
        document.body.style.overflow = 'hidden';
    }


    function enableScroll() {

        const scrollY = document.body.style.top;
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.width = '';
        document.body.style.overflow = '';


        window.scrollTo(0, parseInt(scrollY || '0') * -1);
    }


    function toggleMenu() {
        burgerBtn.classList.toggle('change');
        burgerMenu.classList.toggle('active');

        // Блокировка/разблокировка скролла
        if (burgerMenu.classList.contains('active')) {
            disableScroll();
        } else {
            enableScroll();
        }
    }

    burgerBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleMenu();
    });


    const menuItems = burgerMenu.querySelectorAll('a');
    menuItems.forEach(item => {
        item.addEventListener('click', function () {
            toggleMenu();
        });
    });


    document.addEventListener('click', function (event) {
        if (burgerMenu.classList.contains('active') &&
            !burgerMenu.contains(event.target) &&
            !burgerBtn.contains(event.target)) {
            toggleMenu();
        }
    });


    window.addEventListener('resize', function () {
        if (window.innerWidth > 1024 && burgerMenu.classList.contains('active')) {
            toggleMenu();
        }
    });
});
