$(document).ready(function () {
    APP.ValidacionGeneral('form-general');
    $('#icono').on('change', function () {
        $('#mostrar-icono').removeClass().addClass($(this).val());
    });
});