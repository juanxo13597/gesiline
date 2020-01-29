$(document).ready( function () {

    $('#clientes').DataTable({
        "language": {
            "url": "assets/js/datatablespain.json"
        },
        "order": [[ 0, "desc" ]]
    });
} );