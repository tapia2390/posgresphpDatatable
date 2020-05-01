$(document).ready(function() {
    $('#tabla_paginar').DataTable({
        "ajax": '../ajax/data/arrays.txt',
        language: {
            "processing": "Procesando...",
            "search": "Buscar:",
            "lengthMenu": "",
            "info": "Mostrando START a END de TOTAL registros",
            "infoEmpty": "Mostrando 0 de 0 registros",
            "infoFiltered": "(se han filtrado MAX registros)",
            "infoPostFix": "",
            "loadingRecords": "Cargando...",
            "zeroRecords": "Ningún registro coincide con la búsqueda",
            "emptyTable": "Sin registros",
            "paginate": {
                "first": "Primero",
                "previous": "Anterior",
                "next": "Siguiente",
                "last": "Último"
            },
            "aria": {
                "sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
                "sortDescending": ": aktywuj, by posortować kolumnę malejąco"
            }
        }
    });
} );


