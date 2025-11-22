document.addEventListener("DOMContentLoaded", function() {
    const navOptions = document.querySelectorAll('.price-list__table__nav__opt');
    const contentOptions = document.querySelectorAll('.price-list__table__content__opt');

    navOptions.forEach((navOption, index) => {
        navOption.addEventListener('click', () => {
            contentOptions.forEach(contentOption => contentOption.classList.remove('active'));
            contentOptions[index].classList.add('active');
            
            navOptions.forEach(navOption => navOption.classList.remove('active'));
            navOptions[index].classList.add('active');
        });
    });
});