<article class="restaurant-card">

    <div class="card-image {{ $image }}"></div>

    <div class="card-body">

        <div class="card-title-row">
            <h3>{{ $name }}</h3>
        </div>

        <p class="food-type">
            <span>{{ $type }}</span>
            @if (strtolower(trim($type)) === 'churros')
                <span class="food-churro" aria-hidden="true"></span>
            @elseif (strtolower(trim($type)) === 'marquesitas')
                <span class="food-marquesita" aria-hidden="true"></span>
            @elseif (strtolower(trim($type)) === 'mexicana')
                <span class="food-mexicana" aria-hidden="true"></span>
            @elseif (strtolower(trim($type)) === 'yucateca')
                <span class="food-yucateca" aria-hidden="true"></span>
            @elseif (strtolower(trim($type)) === 'mediterránea')
                <span class="food-mediterranea" aria-hidden="true"></span>
            @endif
        </p>

        <div class="meta-row">
            <span>★ {{ $rating }}</span>
            <span>({{ $reviews }} reseñas)</span>
        </div>

        <div class="meta-row location-row">
            <span>◎</span>
            <span>{{ $location }}</span>
        </div>

        <div class="price-row">
            <span>{{ $price }}</span>
        </div>

        <button class="card-button">
            Ver más
        </button>

    </div>

</article>