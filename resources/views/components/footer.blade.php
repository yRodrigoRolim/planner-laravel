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



<script>
    function previewFile() {
        const fileInput = document.getElementById('fileInput');
        const preview = document.getElementById('preview');
        const removeBtn = document.getElementById('removeBtn');
        const textContent = document.getElementById('textContent');
        const dropText = document.getElementById('dropText');

        const file = fileInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onloadend = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                dropText.style.display = 'none';
                removeBtn.style.display = 'block';
                textContent.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    }

    function removeFile() {
        const fileInput = document.getElementById('fileInput');
        const preview = document.getElementById('preview');
        const removeBtn = document.getElementById('removeBtn');
        const dropText = document.getElementById('dropText');
        const textContent = document.getElementById('textContent');


        fileInput.value = '';
        preview.src = '';
        preview.style.display = 'none';
        removeBtn.style.display = 'none';
        textContent.style.display = 'none';
        dropText.style.display = 'block';
    }


    const Nameinput = document.getElementById('inputname');
    const textContent = document.getElementById('textContent');

    Nameinput.addEventListener("input", () => {
        textContent.textContent  = Nameinput.value;
    });

</script>


</body>

</html>
