@include('/header_and_footer/header')


<link rel="stylesheet" href="{{ asset('css/detalle_paquete.css') }}">


<div class="contenedor_paquete_unico">

    <div class="contenido_paquete">
        <div class="contenedor_imagenes">
            <div class="imagen_principal"></div>
            <div class="imagenes_pequenas">
                <div class="miniatura"></div>
                <div class="miniatura"></div>
                <div class="miniatura"></div>
                <div class="miniatura"></div>
            </div>
        </div>


            <div class="contenedor_caracteristicas_paquetes">
                <div class="caracteristicas_paquete">
                    <div class="logo_circular"></div>
                </div>
                <div class="caracteristicas_paquete">
                    <div class="logo_circular"></div>
                </div>
                <div class="caracteristicas_paquete">
                    <div class="logo_circular"></div>
                </div>
                <div class="caracteristicas_paquete">
                    <div class="logo_circular"></div>
                </div>

            </div>
            <div class="detalles_paquete">
                    <div class="lugares_a_visitar">
                        <p class="titulo_detalles">LUGARES A VISITAR</p>
                    </div>
                    <div class="incluye">
                        <p class="titulo_detalles">INCLUYE</p>
                    </div>
                    <div class="incluye">
                        <p class="titulo_detalles">NO INCLUYE</p>

                    </div>
            </div>

    </div>


</div>
@include('/header_and_footer/footer')
