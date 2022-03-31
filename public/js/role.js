/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/role.js ***!
  \******************************/
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
document.addEventListener('DOMContentLoaded', function () {
  btn_confirm = document.getElementsByClassName('btn-confirm');

  for (i = 0; i < btn_confirm.length; i++) {
    btn_confirm[i].addEventListener('click', confirm_object);
  }
});

function confirm_object(e) {
  e.preventDefault();
  var object = this.getAttribute('data-object');
  var path = this.getAttribute('data-path');
  var url = base + '/' + object + '/' + path;
  var title, text, icon, text_buton;
  title = "¿Quiere Eliminar Este Elemento?";
  text = "Recuerda que esta Acción Eliminara el Rol";
  icon = "warning";
  text_buton = "Si, Eliminar";
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: text_buton
  }).then(function (result) {
    if (result.isConfirmed) {
      window.location.href = url;
    } else {
      Swal.fire("Has Canselado La Acción!");
    }
  });
}
/******/ })()
;