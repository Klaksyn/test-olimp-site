const selected = document.querySelector('.selected');
const unselect = document.querySelector('.unselect');

unselect.addEventListener('click', (event) => {
    event.preventDefault();
    selected.classList.replace('selected', 'unselect');
    unselect.classList.replace('unselect', 'selected');
})