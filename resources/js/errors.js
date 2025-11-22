document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('focus', () => {
            const errorElement = field.nextElementSibling;

            if (errorElement && errorElement.classList.contains('error')) {
                errorElement.textContent = ''; // Czyści komunikat o błędzie
            }
        });
    });
});