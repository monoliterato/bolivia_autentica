<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="{{ asset('https://aframe.io/releases/1.2.0/aframe.min.js') }}"></script>


</head>

<body>




    <a-scene>
        <a-entity id="incremento" Animation="property:rotation ; to:0 360 0 ;loop:true ;dur:100000;easing: linear;">


            <a-sky src="{{ asset('img/REFERENCIALES/rota.jpeg') }}"></a-sky>
        </a-entity>
    </a-scene>




</html>
