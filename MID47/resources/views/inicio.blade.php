<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>MID 47</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <div class="page-shell">

        <x-header />

        <main class="main-content">

            <x-navegacion />

            <x-hero />

            <section class="filters">
                <x-filtros />
            </section> 

            <section class="section-block">
             <h2>Restaurantes destacados</h2>

                <div class="card-grid three-up">

                    <x-restaurantCard
                        name="Micaela Mar & Leña"
                        type="Mediterránea"
                        rating="4.9"
                        reviews="152"
                        location="Calle 47 x 52 y 54 · Centro"
                        price="$300-900"
                        image="image-one"
                    />

                    <x-restaurantCard
                        name="La Libertad Centro"
                        type="Yucateca"
                        rating="4.7"
                        reviews="98"
                        location="Calle 47 x 49 y 52 x 54, centro"
                        price="$200-300"
                        image="image-two"
                    />

                    <x-restaurantCard
                        name="Ánima"
                        type="Mexicana"
                        rating="4.9"
                        reviews="156"
                        location="Calle 47 # 43 B x 52 y 54"
                        price="$200-500"
                        image="image-three"
                    />

                 </div>
             </section>

            <section class="section-block">
                <h2>Dentro del corredor</h2>
                <div class="card-grid three-up">
                     <x-restaurantCard
                        name="EJEMPLO"
                        type="Mexicana"
                        rating="5.0"
                        reviews="67"
                        location="direccion ejemplo"
                        price="$"
                        image="image-three"
                    />
                </div>
            </section>

            <section class="section-block">
                <h2>Alrededores</h2>
                <div class="card-grid three-up">
                     <x-restaurantCard
                        name="EJEMPLO"
                        type="Mexicana"
                        rating="5.0"
                        reviews="67"
                        location="direccion ejemplo"
                        price="$"
                        image="image-three"
                    />
                </div>
            </section>
            <section class="section-block">
                <h2>Puestos cercanos</h2>
                <div class="card-grid three-up">
                     <x-restaurantCard
                        name="Lonchería Punto Y Coma"
                        type="Mexicana"
                        rating="5.0"
                        reviews="127"
                        location="C. 60 x 528C, Centro"
                        price="$100-200"
                        image="image-four"
                    />

                    <x-restaurantCard
                        name="Marquesitas Santa Ana"
                        type="Marquesitas"
                        rating="4.0"
                        reviews="328"
                        location="Calle 47 por 56 y 60, Centro"
                        price="$100-200"
                        image="image-three"
                    />

                    <x-restaurantCard
                        name="Marquesitas El Tony (Sucursal La Plancha)"
                        type="Marquesitas"
                        rating="4.0"
                        reviews="98"
                        location="Calle 43 x Av. 1o. de Mayo, Centro, 97000"
                        price="$80"
                        image="image-three"
                    />

                    <x-restaurantCard
                        name="Marquesitas La Nueva Tradición"
                        type= "Marquesitas"
                        rating="4.0"
                        reviews="707"
                        location="Calle 37 y calle 39, C. 56 477, Centro, 97000 Mérida, Yuc."
                        price="$30-70"
                        image="image-three"
                    />

                    <x-restaurantCard
                        name="Churreria Montejo"
                        type="Churros"
                        rating="4.7"
                        reviews="67"
                        location="C. 41 253, Fraccionamiento La Castellana, 97204 Mérida, Yuc."
                        price="$100"
                        image="image-three"
                    />

                </div>
            </section>

            <section class="section-block">
                <h2>Eventos</h2>
                <div class="card-grid three-up">
                     <x-restaurantCard
                        name="Mérida Restaurant Fest 2026"
                        type="Mexicana"
                        rating="5.0"
                        reviews="67"
                        location="direccion ejemplo"
                        price="$"
                        image="image-three"
                    />
        
                     <x-restaurantCard
                        name="October Fest 2026"
                        type="Mexicana"
                        rating="5.0"
                        reviews="67"
                        location="direccion ejemplo"
                        price="$"
                        image="image-three"
                    />
                </div>
            </section>

        </main>

        <x-footer />

    </div>

</body>
</html>