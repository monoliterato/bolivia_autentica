
@include('/header_and_footer/header')


<!-- CONTENIDO-->




<link rel="stylesheet" href="{{ asset('css/paquete.css') }}">

<div class="tarjetas">

    <div class="transicion"></div>
    <div class="imagen-fondo"></div>
    <div class="transicion-final"></div>
    <div class="contenido-tarjetas">
        <h1 class="titulo-tarjetas">EXPERIENCIAS INCREIBLES <br> LUGARES MAGICOS </h1>
        <div class="clasificaciones">
            <div class="clase">
                <p class="texto-clase">AVENTURA</p>
            </div>
            <div class="clase">
                <p class="texto-clase">TURISMO VIVENCIAL</p>
            </div>
            <div class="clase">
                <p class="texto-clase">AVENTURA</p>
            </div>
            <div class="clase"  >
                <p class="texto-clase" >AVENTURA</p>
            </div>
        </div>
<div class="tarjeta_administrador"  >


    <a class="tarjeta" style="  background: transparent url('img/REFERENCIALES/TARJETA.jpg') 0% 0% no-repeat padding-box; background-size: cover;" href="{{ route('detalles_paquete') }}" >

        <p class="texto-tarjeta titulo-tarjeta">LAGO TITICACA UN DIA MAS </p>
        <p class="texto-tarjeta">VISITA EL LAGO Y DISFRUTA DE UNAS VACACIONES ESPECTACULARES EN COMPAÑIA DE TUS AMIGOS Y FAMILIA</p>
        <div class="contenedor-reserva">
            <div class="precio"></div>
            <button class="reserva"> <p class="texto-reserva">RESERVA AHORA</p> </button>
        </div>

    </a>
    <div class="contenedor_botones_administrador">
        <a class="boton-administrador editar" onclick="formulario()" href="#top"><p class="texto_administrador">EDITAR</p></a>
    <div class="boton-administrador eliminar"><p class="texto_administrador">ELIMINAR</p></div>
    </div>
</div>


<div class="tarjeta_administrador">


    <div class="tarjeta" style="  background: transparent url('img/REFERENCIALES/TARJETA.jpg') 0% 0% no-repeat padding-box; background-size: cover;">

        <p class="texto-tarjeta titulo-tarjeta">LAGO TITICACA UN DIA MAS </p>
        <p class="texto-tarjeta">VISITA EL LAGO Y DISFRUTA DE UNAS VACACIONES ESPECTACULARES EN COMPAÑIA DE TUS AMIGOS Y FAMILIA</p>
        <div class="contenedor-reserva">
            <div class="precio"></div>
            <button class="reserva"> <p class="texto-reserva">RESERVA AHORA</p> </button>
        </div>

    </div>
    <div class="contenedor_botones_administrador">
        <div class="boton-administrador editar" onclick="formulario()"><p class="texto_administrador">EDITAR</p></div>
    <div class="boton-administrador eliminar"><p class="texto_administrador">ELIMINAR</p></div>
    </div>
</div>











        <a class="tarjeta_administrador"  onclick="formulario()" href="#top">


            <div class="anadir_paquete" >
                <div class="punteado">
                    <p class="anadir">+</p>
                    <p class="texto_anadir_paquete">AÑADIR PAQUETE </p>
                </div>

            </div>

        </a>








        </div>
    </div>



<!-- comienzo del formulario de edición-->

    <div class="opaco" id="formulario" >
        <div class="contenedor_creacion">
<p class="division_completa_administrador titulo_edicion">Por Rellene los campos con la información correspondiente</p>
<P class="division_completa_administrador">Nombre del Paquete</P>
<input type="text" class="division_completa_administrador" placeholder="INCLUYA LOS DIAS ">
<P class="division_completa_administrador">Categoría</P>
<select name="" id="" class="division_completa_administrador">
    <option value="Aventura">Aventura</option>
    <option value="Turismo Vivencial">Turismo Vivencial</option>
    <option value=""></option>
    <option value=""></option>
</select>
<P class="division_completa_administrador">Duración</P>
<input type="text" class="division_completa_administrador">
<P class="division_completa_administrador">Precio</P>
<input type="date" class="division_completa_administrador">
<P class="division_completa_administrador" >Ubicación Geográfica</P>
<input type="text" class="division_completa_administrador" placeholder="ej.   Norte de Potosí, Sur de tarija (OPCIONAL)">
<P class="division_completa_administrador">Grado de Riesgo</P>
<select name="" id="" class="division_completa_administrador">
    <option value="Exigente Fisicamente">Exigente Fisicamente</option>
    <option value="Exigencia Física Mínima">Exigencia Física Mínima</option>
    <option value="No Requiere Exigencia Física">No Requiere Exigencia Física Alguna</option>
</select>

<P>Descripción breve del paquete</P>
<P>Descripción detallada del paquete</P>
<textarea name="" id="" cols="30" rows="25"></textarea>
<textarea name="" id="" cols="30" rows="25"></textarea>
<P class="division_completa_administrador">Lugares a Visitar</P>
<div class="numero_de_filas">
   <td><button type="button">Agregar Fila</button></td>
    <td><button type="button">Eliminar Fila</button></td>
    <td><button type="button">Añadir Día</button></td>
    <td><button type="button">Eliminar Día</button></td>
</div>
<div class="contenedor_tabla division_completa_administrador">
    <table class="tabla">
        <tr>

              <td ><p >HORARIO</p></td>
              <td><P >ACTIVIDAD</P></td>
        </tr>
        <tr>

            <td><input class="tabla" type="text"></td>
            <td><input class="tabla" type="text"></td>
        </tr>
        <tr>

                <td><input class="tabla" type="text"></td>
                <td><input  class="tabla" type="text"></td>

        </tr>

    </table>
</div>
<P>Incluye</P>
<P>No Incluye</P>
<textarea name="" id="" cols="30" rows="10"></textarea>
<textarea name="" id="" cols="30" rows="10"></textarea>
<p>Imagen Principal</p>
<p>Primera Imagen</p>
<p>Segunda Imagen</p>
<p>Tercera Imagen</p>
<p>Cuarta Imagen</p>
<p class="division_completa_administrador titulo_vista_previa">VISTA PREVIA</p>



            <div class="tarjeta_vista_previa" style="  background: transparent url('img/REFERENCIALES/TARJETA.jpg') 0% 0% no-repeat padding-box; background-size: cover;">

                <p class="texto-tarjeta titulo-tarjeta">LAGO TITICACA UN DIA MAS </p>
                <p class="texto-tarjeta">VISITA EL LAGO Y DISFRUTA DE UNAS VACACIONES ESPECTACULARES EN COMPAÑIA DE TUS AMIGOS Y FAMILIA</p>
                <div class="contenedor-reserva">
                    <div class="precio"></div>
                    <button class="reserva"> <p class="texto-reserva">RESERVA AHORA</p> </button>
                </div>

            </div>



            <div class="botones_registro">
                <td><button type="button" class="registro cancelar" onclick="ocultar_formulario()">Cancelar</button></td>
                <td><button type="button" class="registro guardar">Guardar</button></td>
            </div>
        </div>



    </div>

<!-- fin del formulario de edición-->



    <script src="{{ asset('js/paquetes.js') }}"></script>

<!-- FIN DEL CONTENIDO-->


@include('/header_and_footer/footer')
