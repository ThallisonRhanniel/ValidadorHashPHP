$(document).ready(function () {
    $('#form').validate({
        rules:{
            id:{
                required: true,
                number: true
            },
            hash:{
                required: true
            }
        },
        messages:{
            id:{
                required: "Este campo é obrigatório",
                number: "Apenas números são validos."
            },
            hash:{
                required: "Este campo é obrigatório"
            }
        },
        submitHandler: function( form ){
            $.ajax({
                url: 'acao-formulario.php',
                type: 'post',
                dataType: 'html',  // Tipo do retorno
                data: {
                    'metodo': $('#metodo').val(),
                    'id': $('#id').val(),
                    'hash': $('#hash').val(),
                    'texto': $('#texto').val()
                }
            }).done(function(data){ // data = retorno do metodo
               //$('.preload').fadeOut(2000, function () {
               //     $('.modal-content').fadeOut(1000);
                //})
                $('#id').val('');
                $('#hash').val('');
                $('#texto').val(data);
            });


            return false;
        }
    });
});

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
    ajaxStop: function() { $body.removeClass("loading"); }
});