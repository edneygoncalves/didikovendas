<script>

$('#submitForm').submit(function(e) {

    e.preventDefault();




    var form = $('#submitForm')[0];

    var inputs = new FormData(form);




    $.ajax({
        url: "{{ $url }}",
        type: "POST",
        data: inputs,
        timeout: 10000,
        processData: false,  // Important!
        contentType: false,

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            if (data.cod_erro == false) {
                swal({
                    title: 'Sucesso!',
                    text: data.mensagem,
                    type: 'success'
                }).then(function() {
                    window.location.href = "{{ $redirect }}";
                });
            } else {
                swal({
                    type: 'error',
                    title: 'Erro',
                    text: data.mensagem
                });
            }
        },
        error: function(x, t, m) {
            swal({
                type: 'error',
                title: 'Erro',
                text: 'Ocorreu um erro. Tente novamente'
            });
        }
    });


});

</script>
