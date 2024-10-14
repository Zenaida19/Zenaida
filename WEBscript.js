function filterImages() {
    const yearInput = document.getElementById("search-year").value;
    const gallery = document.querySelector(".gallery");
    const images = JSON.parse(localStorage.getItem("images")) || [];

    gallery.innerHTML = ""; // Limpiar la galería actual

    images.forEach(image => {
        // Extraer el año de la fecha seleccionada
        const uploadYear = image.date.split("-")[0];

        // Si el año coincide o el campo está vacío, mostrar la imagen
        if (uploadYear.includes(yearInput) || yearInput === "") {
            const newItem = document.createElement("div");
            newItem.className = "gallery-item";
            newItem.onclick = function() { openModal(this.querySelector('img')); };
            newItem.innerHTML = `
                <img src="${image.src}" alt="${image.description}">
                <p>${image.description}</p>
                <p>Fecha de subida: ${image.date}</p>
            `;
            gallery.appendChild(newItem);
        }
    });
    function toggleSearch() {
        const searchInput = document.getElementById("search-year");
        const isVisible = searchInput.style.display === "block";
        searchInput.style.display = isVisible ? "none" : "block"; // Alternar visibilidad
    
        if (!isVisible) {
            searchInput.focus(); // Enfocar el campo de búsqueda cuando se muestre
        }
    }
    
    function filterImages() {
        const yearInput = document.getElementById("search-year").value;
        const gallery = document.querySelector(".gallery");
        const images = JSON.parse(localStorage.getItem("images")) || [];
    
        gallery.innerHTML = ""; // Limpiar la galería actual
    
        images.forEach(image => {
            // Extraer el año de la fecha seleccionada
            const uploadYear = image.date.split("-")[0];
    
            // Si el año coincide o el campo está vacío, mostrar la imagen
            if (uploadYear.includes(yearInput) || yearInput === "") {
                const newItem = document.createElement("div");
                newItem.className = "gallery-item";
                newItem.onclick = function() { openModal(this.querySelector('img')); };
                newItem.innerHTML = `
                    <img src="${image.src}" alt="${image.description}">
                    <p>${image.description}</p>
                    <p>Fecha de subida: ${image.date}</p>
                `;
                gallery.appendChild(newItem);
            }
        });
    }
    
}
