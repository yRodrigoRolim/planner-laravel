<script>
    // Pega a referência da imagem do banner
    const bannerElement = document.getElementById('image_banner');

    const galleryImages = document.querySelectorAll('.gallery-image-cards');

    let StatusFunc = true;

    galleryImages.forEach(item => {
        item.addEventListener('mouseover', (event) => {
            const img = item.querySelector('img');
            const imgSrc = img.src;
            if (imgSrc != image_banner.src && StatusFunc == true) {
                bannerElement.classList.add("animate-banneropacity");
                StatusFunc = false;
                setTimeout(() => {
                    bannerElement.src = imgSrc;
                }, 150);
                setTimeout(() => {
                    bannerElement.classList.remove("animate-banneropacity");
                    StatusFunc = true;
                }, 300);
            }
        });
    });
</script>

<script>
    window.addEventListener('scroll', function() {
        const parallax = document.getElementById('image_banner');
        const scrollPosition = window.scrollY;
        parallax.style.transform = `translateY(${scrollPosition * 1}px)`;
    });
</script>


<script>
    const container = document.getElementById('sortableContainer');
    new Sortable(container, {
        animation: 150,
        onStart(evt) {
            StatusFunc = false;
        },
        onEnd(evt) {
            StatusFunc = true;
        },
        draggable: '.card',
    });
</script>

</body>

</html>