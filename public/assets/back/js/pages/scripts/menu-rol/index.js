$(document).ready(function () {
    $('.menu_rol').on('change', function () {
        var data = {
            menus_id: $(this).data('menus'),
            roles_id: $(this).val(),
            _token: $('input[name=_token]').val()
        };
        if ($(this).is(':checked')) {
            data.estado = 1
        } else {
            data.estado = 0
        }
        const url = $(this).data('url');
        ajaxRequest(url, data);
    });

    function ajaxRequest(url, data) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                console.log(respuesta.respuesta);
            }
        });
    }
});
