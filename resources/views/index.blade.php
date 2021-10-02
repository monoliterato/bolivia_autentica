@include('/header_and_footer/header-rota')
<h1>index</h1>
<!--ENLACE A HOJA DE ESTILOS-->
<link rel="stylesheet" href="{{ asset('css/principal.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider_de_tarjetas/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider_de_tarjetas/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider_de_tarjetas/owl.theme.default.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider_de_tarjetas/uikit.min.css') }}">
<script src="{{ asset('js/slider_de_tarjetas/script.js') }}"></script>

<script src="{{ asset('js/slider_de_tarjetas/jquery.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/uikit.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/uikit-icons.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/owl.carousel.js') }}"></script>

<!---------------------------->





@foreach ($ventas as $venta)
<p>{{ $venta->cantidad_de_boletos }}</p>
<p>{{ $venta->id_venta }}</p>
<p>asdasd</p>
@endforeach

<div class="contenedor_slider_de_tarjetas">

  <div class="uk-section">
    <div class="owl-carousel owl-theme ">

        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">sumatoria</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">sumatoria</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">sumatoria</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">sumatoria</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
        <div class="item">
            <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
                <h3 class="uk-card-title">Credit Card Name</h3>
                <p>Current Balance</p>
                <h3>$000,000,000.00</h3>
            </div>

        </div>
    </div>
   </div>

</div>


<div class="envoltorio_pandemia">

 <div class="contenedor_anuncio_pandemia">
     <div class="degradado_anuncio_pandemia"></div>
      <div class="contenedor_texto_pandemia">
       <p class="texto_pandemia_titulo">Te cuidamos</p>
       <p class="texto_pandemia_cuerpo">En Bolivia Autentica nos preocupa tu salud por ello contamos con los más altos niveles de bioseguridad.</p>
      </div>

  </div>

</div>


<div class="envoltorio_categorias">
    <div class="conjunto_categorias">
    <div class="categoria categoria_primera">

        <div class="degradado_de_categoria"></div>
        <p class="nombre_categoria"> <img src="{{ asset('img/ICONOS/aventura.png') }}" alt="" class="icono_categoria"> aventura</p>

    </div>
    <div class="categoria categoria_segunda">

        <div class="degradado_de_categoria"></div>
        <p class="nombre_categoria"> <img src="{{ asset('img/ICONOS/aventura.png') }}" alt="" class="icono_categoria"> aventura</p>

    </div>
    <div class="categoria categoria_tercera">

        <div class="degradado_de_categoria"></div>
        <p class="nombre_categoria"> <img src="{{ asset('img/ICONOS/aventura.png') }}" alt="" class="icono_categoria"> aventura</p>

    </div>
    <div class="categoria categoria_cuarta">

        <div class="degradado_de_categoria"></div>
        <p class="nombre_categoria"> <img src="{{ asset('img/ICONOS/aventura.png') }}" alt="" class="icono_categoria"> aventura</p>

    </div>
    <div class="categoria categoria_quinta">

        <div class="degradado_de_categoria"></div>
        <p class="nombre_categoria"> <img src="{{ asset('img/ICONOS/aventura.png') }}" alt="" class="icono_categoria"> aventura</p>

    </div>
    </div>
</div>



<div class="envoltorio_anuncios">
<div class="envoltorio_contenido_anuncios">
    <div class="envoltorio_imagenes_grandes">
        <div class="primera_imagen">
            <p class="titulo_imagen">Titulo Imagen</p>
            <p class="descripcion_imagen">Descripcion Imagen</p>
            <p class="fecha_imagen">Fecha Imagen</p>
        </div>
        <div class="segunda_imagen">
            <p class="titulo_imagen">Titulo Imagen</p>
            <p class="descripcion_imagen">Descripcion Imagen</p>
            <p class="fecha_imagen">Fecha Imagen</p>
        </div>
    </div>
    <div class="envoltorio_imagenes_pequenas">
         <div class="tercera_imagen">
          <div class="envoltorio_texto_peque">
             <p class="titulo_imagen">adadasd</p>
             <p class="fecha_imagen">fecha</p>
            </div>
        </div>
         <div class="tercera_imagen">
          <div class="envoltorio_texto_peque">
             <p class="titulo_imagen"></p>
             <p class="fecha_imagen"></p>
            </div>
        </div>
         <div class="tercera_imagen">
          <div class="envoltorio_texto_peque">
             <p class="titulo_imagen"></p>
             <p class="fecha_imagen"></p>
            </div>
        </div>

    </div>

    </div>
</div>
</div>


<!--ENLACES A JAVASCRIPT-->

<script src="{{ asset('js/slider_de_tarjetas/script.js') }}"></script>

<script src="{{ asset('js/slider_de_tarjetas/jquery.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/uikit.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/uikit-icons.min.js') }}"></script>
<script src="{{ asset('js/slider_de_tarjetas/owl.carousel.js') }}"></script>

<!------------------------>
@include('/header_and_footer/footer')


