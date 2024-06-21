<!-- seccion1.php -->
<div class="container">
    <div id="cursos-container" class="row">
        <!-- Los cursos se cargarán aquí dinámicamente -->
    </div>
</div>

<script type="text/template" id="curso-template">
    <div class="curso col-md-3">
        <h2 class="titulo-curso"></h2>
        <p class="descripcion-curso"></p>
        <div style="display: flex; align-items: center;">
            <button type="button" class="btn btn-primary like-button">▲</button>
            <h2 id="numerodelike" style="margin: 0 10px;"></h2>
            <button type="button" class="btn btn-primary dislike-button ml-2">▼</button>
            <h2 id="numerodedislike" style="margin: 0 10px;"></h2>
        </div>
        <a href="#" class="ver-lecciones-link">Ver lecciones</a>
    </div>
</script>