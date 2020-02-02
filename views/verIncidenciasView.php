<div class="border-bottom border-primary">
<center> <h1 class="display-4 text-primary">Activos</h1> </center>
</div>
<div class="p-3">

<table class="table table-hover" id="incidencias">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <?=$data?>
    </tbody>
</table>
</div>

<div class="border"> </div>
<div class="border-bottom border-info">
<center> <h1 class="display-4 text-info">Historial</h1> </center>
</div>


<div class="p-3">
<table class="table table-hover" id="incidencias_historial">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <?=$data_historial?>
    </tbody>
</table>
</div>





<script>
    $('#incidencias').DataTable({
        "language": {
            "url": "assets/js/datatablespain.json"
        },
        "order": [[ 0, "desc" ]]
    });

    $('#incidencias_historial').DataTable({
        "language": {
            "url": "assets/js/datatablespain.json"
        },
        "order": [[ 0, "desc" ]]
    });

</script>