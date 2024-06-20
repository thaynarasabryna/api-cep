$(document).ready(function() {
    $('#form-cep').on('submit', function(event) {
        event.preventDefault();
        var cep = $('#cep').val();
        console.log(cep);
        console.log(/^\d{5}-?\d{3}$/g.test(cep));

        if (cep === '') {
            $('#form-endereco').html('');
        } else if (/^\d{5}-?\d{3}$/g.test(cep)) {
            $.ajax({
                type: 'POST',
                url: 'action.php',
                data: {cep: cep},
                beforeSend: function() {
                    $('#form-endereco').html(`<div style="margin-top:10px;" class="spinner-border text-primary" role="status"><span class="sr-only"></span></div>`);
                }, 
                success: function(response) {
                    $('#form-endereco').html(response);
                },
                error: function() {
                    $('#form-endereco').html('Erro ao buscar o CEP.');
                }
            });
        } else {
            $('#form-endereco').html('Formato de CEP inválido! Insira no formato XXXXX-XXX.');
        }
    });
});