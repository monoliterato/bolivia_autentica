@include('/header_and_footer/header')
<h1>ARTICULOS</h1>

<!--ENLACE A ESTILOS -->

<link rel="stylesheet" href="{{ asset('css/articulos.css') }}">

<!-- -->

<div class="contenido-articulos">
    <p class="titulo_articulos_pequeno">NUESTROS USUARIOS</p>
    <p class="titulo_articulos">COMPARTEN SUS EXPERIENCIAS</p>

    <div class="clasificaciones">
        <div class="clase">
            <p class="texto-clase">GUIAS DE VIAJE</p>
        </div>
        <div class="clase">
            <p class="texto-clase">RESEÑAS</p>
        </div>
        <div class="clase">
            <p class="texto-clase">ARTICULOS</p>
        </div>

    </div>

    <div class="tarjeta-articulo"></div>

    <div class="tarjeta-articulo">
        <div class="contenedor_botones_administrador">
            <a class="boton_administrador editar" onclick="formulario()" href="#top">Editar
            </a>
            <div class="boton_administrador eliminar">Eliminar</div>
        </div>
        <div class="contenido_tarjeta_articulo">

            <p class="titulo_tarjeta_articulo">titulo del articulo</p>
            <p class="fecha_tarjeta_articulo">Lorem ipsum dolor </p>
            <p class="descripcion_tarjeta_articulo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, veritatis commodi dolorem delectus quaerat placeat quae laboriosam praesentium, iure eius nulla deserunt magni dolorum iusto reprehenderit sequi eaque cumque. Laboriosam?Tempore iure, ratione itaque alias mollitia porro veritatis esse obcaecati eius amet voluptates animi vero fuga sequi eaque asperiores ut, qui error voluptatem, repellendus sapiente! Impedit dignissimos deleniti nihil non?</p>
        </div>

        <div class="imagen_tarjeta_articulo"></div>
    </div>
    <div class="tarjeta-articulo"></div>
    <div class="tarjeta-articulo"></div>
    <div class="tarjeta-articulo"></div>
    <div class="tarjeta-articulo"></div>

    <a class="anadir_articulo" onclick="formulario()" href="#top">
        <p >+</p>
        <p>AÑADIR ARTICULO</p>
    </a>




</div>


<div class="opaco" id="formulario" >
<div class="contenedor_edicion_administrador">

    <p class="division_completa_administrador">Título del Artículo</p>
    <input type="text" class="division_completa_administrador">
    <p class="division_completa_administrador">Fecha de Publicación del Artículo</p>
    <input type="date" class="division_completa_administrador">
    <p>Breve Descripción del Artículo</p>
    <p>Contenido del Artículo</p>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <p class="division_completa_administrador">Imagen Principal</p>
    <p>Primera Imagen</p>
    <p>Segunda Imagen</p>
      <div class="botones_registro">
                <td><button type="button" class="registro cancelar" onclick="ocultar_formulario()">Cancelar</button></td>
                <td><button type="button" class="registro guardar">Guardar</button></td>
            </div>

</div>
</div>

<!--ENLACE SCRIPTS -->
<script src="{{ asset('js/articulos.js') }}"></script>
<!-- -->
@include('/header_and_footer/footer')
