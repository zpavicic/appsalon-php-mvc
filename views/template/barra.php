<div class="barra">
    <p>Bienvenido <?php echo $nombre ?? '' ?></p>
    <a class="boton" href="/logout">Cerrar sesión</a>
</div>

<?php if(isset($_SESSION['admin'])){ ?>
    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver citas</a>
        <a class="boton" href="/servicios">Ver servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo servicio</a>
    </div>
<?php } ?>