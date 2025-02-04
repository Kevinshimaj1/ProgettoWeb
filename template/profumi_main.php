<div class="container mt-4">
    <div class="row">
        <aside class="col-md-3 bg-white border rounded p-3 mb-4">
            <h2 class="text-success fs-4">Filtri</h2>
            <h3 class="fs-5">Prezzo</h3>
            <div class="mb-3">
                <div class="d-flex justify-content-between small mb-2">
                    <label id="displayMinPrice" for="minPriceInput">€ 0</label>
                    <label id="displayMaxPrice" for="maxPriceInput">€ 200</label>
                </div>
                <input type="range" class="form-range" id="minPriceInput" min="0" max="200" value="0">
                <input type="range" class="form-range" id="maxPriceInput" min="0" max="200" value="200">
            </div>
            
            <div class="d-flex justify-content-end">
                <button class="btn text-secondary d-flex align-items-center"
                        id="resetFiltersButton"
                        style="transition: color 0.3s ease;"
                        onmouseover="this.classList.add('text-success')" 
                        onfocus="this.classList.add('text-success')"
                        onmouseleave="this.classList.remove('text-success')">
                    &#x21bb; Ripristina filtri
                </button>
                <button class="btn btn-success" id="applyFiltersButton">Filtra</button>
            </div>          
        </aside>

        <section class="col-md-9">
            <h2 class="text-success">Prodotti</h2>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col text-center">
                    <!-- riferimento alla pagina che gestisce il singolo prodotto -->
                    <a href="">  
                        <!-- immagine prodotto dinamico + modifica ALT -->
                        <img src="" alt="" class="img-fluid">
                    </a>
                    <p></p>
                </div>
            </div>
        </section>
    </div>
</div>