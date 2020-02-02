<div class="ml-auto mr-auto m-3 col-md-5 border p-2">
<?=$resultado?>

    <form action="" method="post" class="">

        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Buscar..." id="buscarnombre" name="nombre" autocomplete="off" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <select class="browser-default custom-select" name="tipo" multiple required>
                    <option value="Averia">Averia</option>
                    <option value="Instalación">Instalación</option>
                    <option value="Cambio De Domicilio">Cambio De Domicilio</option>
                    <option value="OTROS">OTROS</option>
                </select>
            </div>
        </div>

        
        <div class="form-group row">
            <div class="col-md-12">
                <textarea class="form-control" rows="3" name="descripcion"></textarea>
            </div>
        </div>



        <div class="form-group row">
            <div class="col-md-12">
            <input type="hidden" name="crado_por" value="<?=$_SESSION['usuario']?>">
                <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
            </div>
        </div>




    </form>


</div>


<script>
    $(document).ready(function () {

        $('#buscarnombre').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "ajax/agregarIncidenciaAjax.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    dataType: "json",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                })
            }
        });

    });
</script>