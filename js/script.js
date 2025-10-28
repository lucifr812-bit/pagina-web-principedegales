document.addEventListener('DOMContentLoaded', () => {
    const carouselSlide = document.querySelector('.carousel-slide');
    const images = carouselSlide.querySelectorAll('img');
    let currentIndex = 0;

    // Función para cambiar a la siguiente imagen
    const changeSlide = () => {
        currentIndex++;
        if (currentIndex >= images.length) {
            currentIndex = 0; // Reinicia al inicio si llega al final
        }
        carouselSlide.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    // Configuración de intervalo 
    setInterval(changeSlide, 5000); // Cambia cada 3 segundos
});

