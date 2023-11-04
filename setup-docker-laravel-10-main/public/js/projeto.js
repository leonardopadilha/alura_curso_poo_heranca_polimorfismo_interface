function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    alert(rotaUrl)
    alert(idDoRegistro)

    if (confirm('Deseja confirmar a exclusão?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            Headers: {},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI( {
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            console.log(data);
        }).fail(function (data) {
            $.unblockUI();
            alert("Não foi possível buscar os dados");
        })
    }
}