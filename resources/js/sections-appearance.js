document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll('.fade-in, .slide-in');

    const observerOptions = {
        root: null, // To track in viewport
        rootMargin: '0px',
        threshold: 0.3 // 10% of the section is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Optional: Stop observing once it becomes visible
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});