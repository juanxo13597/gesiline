<div class="mr-auto ml-auto col-md-4 p-3 border">


    <form action="" method="post">
        <?=$message?>
        <input type="text" class="btn btn-outline-primary col" value="Editar" id="boton_editar">

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" value="<?=$data['nombre']?>" disabled>
        </div>

        <div class="form-group">
            <label for="nombre">Direccion:</label>
            <input type="text" class="form-control" value="<?=$data['direccion']?>" disabled>
        </div>

        <div class="form-group">
            <label for="direccion">Tipo:</label>
            <input type="text" class="form-control" value="<?=$data['tipo']?>" disabled>
        </div>

        <div class="form-group">
            <label for="telefono">Descripcion:</label>
            <textarea name="descripcion" class="form-control" id="editar_incidencia_descripcion" cols="30" rows="4" disabled><?=$data['descripcion']?></textarea>
        </div>

        <div id="editar_estado" class="form-group invisible">
            <label for="telefono">Estado:</label>
            <select class="browser-default custom-select" name="estado" required="">
                    <option disabled selected value="<?=$data['estado']?>"><?=$res = ($data['estado'] == 1) ? "Activo" : "Terminado";?></option>
                    <option value="1">Activo</option>
                    <option value="0">Terminado</option>
                </select>
        </div>

        <input type="submit" class="btn btn-outline-primary col invisible" id="boton_guardar" name="guardar" value="Guardar">
    </form>



</div>
<div class="border-top text-center text-info">
    <?=$fechas?>
</div>

<script>
$("#boton_editar").click(function (e) { 
    console.log("editar activado");
    $("#editar_incidencia_descripcion").removeAttr('disabled');

    $("#boton_guardar").removeClass("invisible");
    $("#editar_estado").removeClass("invisible");
    $("#boton_editar").addClass("invisible");
    
});
</script>