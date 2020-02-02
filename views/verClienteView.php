<div class="mr-auto ml-auto col-md-4 p-3 border">


    <form action="" method="post">
        <?=$message?>
        <input type="text" class="btn btn-outline-primary col" value="Editar" id="boton_editar">

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="editar_cliente_nombre" value="<?=$data['nombre']?>" disabled>
        </div>

        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" class="form-control" name="direccion" id="editar_cliente_direccion" value="<?=$data['direccion']?>" disabled>
        </div>

        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control" name="telefono" id="editar_cliente_telefono" value="<?=$data['telefono']?>" disabled>
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
    $("#editar_cliente_nombre").removeAttr('disabled');
    $("#editar_cliente_direccion").removeAttr('disabled');
    $("#editar_cliente_telefono").removeAttr('disabled');

    $("#boton_guardar").removeClass("invisible");
    $("#boton_editar").addClass("invisible");
    
});
</script>