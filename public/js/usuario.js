/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/usuario.js ***!
  \*********************************/
var base = location.protocol + '//' + location.host;
$(document).ready(function () {
  var languages = {
    'es': 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
  };
  $('#tb-rols').DataTable({
    "processing": true,
    "responsive": true,
    "language": {
      "decimal": "",
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
      "infoFiltered": "(Filtrado de _MAX_ total entradas)",
      "infoPostFix": "",
      "thousands": ",",
      "lengthMenu": "Mostrar _MENU_ Entradas",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "zeroRecords": "Sin resultados encontrados",
      "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }
  });
});
/******/ })()
;