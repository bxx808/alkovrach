const modal = document.getElementById('modal_link');
const openBtn = document.querySelector('.read-more');
const closeBtn = document.querySelector('.close');

openBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Закрывать модальное окно при клике вне содержимого
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
