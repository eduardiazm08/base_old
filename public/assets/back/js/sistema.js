var APP = function(){
    return{
        ValidacionGeneral: function (id, reglas, mensajes) {
            const formulario = $('#', id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'div', //contenedor mensaje de error
                errorClass: 'invalid-feedback', //clase del mensaje de error
                focusInvalid: false, //no enfoque la última entrada inválida
                ignore: '',
                highLight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhigLight: function (element) {  
                    $(element).removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {  
                    if(element.clasest('.bootstrap-select').length > 0){
                        element.clasest('.bootstrap-select').find('.bs-placeholder').after(error);
                    }
                    else if($('#').is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }
                    else{
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function (event, validater){ },
                submitHandler: function (form) { return true; }
            });
        },
    }
}();