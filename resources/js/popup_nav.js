const openBtns = document.querySelectorAll('.orderCallBtn');
const modal = document.getElementById('modal');
const closeBtn = document.getElementById('closeModal');

// Функция для открытия модального окна
function openModal() {
    modal.style.display = 'flex';
    // Дополнительно: закрыть бургер-меню при открытии модалки
    const burgerMenu = document.getElementById('burger-menu');
    if (burgerMenu.classList.contains('active')) {
        burgerMenu.classList.remove('active');
        document.getElementById('burger-btn').classList.remove('change');
    }
}

// Функция для закрытия модального окна
function closeModal() {
    modal.style.display = 'none';
}

// Добавляем обработчик для каждой кнопки
openBtns.forEach(btn => {
    btn.addEventListener('click', openModal);
});

closeBtn.addEventListener('click', closeModal);

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

// Закрытие по клавише ESC
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && modal.style.display === 'flex') {
        closeModal();
    }
});
