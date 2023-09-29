<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/pform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-product-info">
    Launch demo modal
    </button>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-comments">
    Launch demo modal
    </button>

    <!-- Modal PRODUCT INFO-->
    <div class="modal fade" id="modal-product-info" tabindex="-1" role="dialog" aria-labelledby="modal-product-info-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="main-wrapper">
                        <div class="wrapper" id="form-contact">
                            <form action="">
                                <h2>¡Pregunta por nuestros productos!</h2>
                                <label for="product-name">Nombre del producto</label>
                                    <input type="text" name="productName" placeholder="campo obligatorio">
                                <label for="marca-lab">Marca / Laboratorio</label>
                                    <input type="text" name="marca-lab" placeholder="opcional">
                                    <div class="select-container">
                                        <select name="tipo-consulta" id="tipo-consulta">
                                            <option value="none" selected="true" disabled>Tipo de consulta</option>
                                            <option value="1">DISPONIBILIDAD DEL PRODUCTO</option>
                                            <option value="2">PRECIO DEL PRODUCTO</option>
                                            <option value="3">Otro </option>
                                        </select>
                                    </div>
                                <label for="descripcion-duda" style="margin-bottom:5px;">Detalles</label>
                                <textarea name="descripcion-duda" id="descripcion-duda" rows="5" placeholder="¡Explaya tu duda sobre el producto!"></textarea>
                                <label for="email">Correo electrónico</label>
                                    <input type="email" name="email" placeholder="ingresa tu email (obligatorio)">
                                <button class="btn-submit-form" id="btn-enviar-producto-info">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal COMMENTS RECOMENDATIONS-->
    <div class="modal fade" id="modal-comments" tabindex="-1" role="dialog" aria-labelledby="modal-comments-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="main-wrapper">
                        <div class="wrapper" id="form-contact">
                            <form action="">
                                <h2>¡Tu opinión es importante!</h2>
                                <!-- <label for="nombre-usuario">nombre</label>
                                    <input type="text" name="nombre-usuario" placeholder="Ingresa tu nombre"> -->
                                    <!-- <div class="select-container">
                                        <select name="tipo-persona" id="tipo-persona">
                                            <option value="none" selected="true" disabled>Tipo de consulta</option>
                                            <option value="1">DISPONIBILIDAD DEL PRODUCTO</option>
                                            <option value="2">PRECIO DEL PRODUCTO</option>
                                            <option value="3">Otro </option>
                                        </select>
                                    </div> -->
                                <label for="descripcion-comentario" style="margin-bottom:5px;">¡Déjanos tu comentario!</label>
                                <textarea name="descripcion-comentario" id="descripcion-duda" rows="3" placeholder="Dudas, comentarios, observaciones..."></textarea>

                                <button class="btn-submit-form" id="btn-enviar-comentario">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>