<script>

    $('.btn-excluir-item').submit(function(e) {

        e.preventDefault();

        var itemId = $(this).val()



        $.ajax({
            url: "{{ $url }}",
            type: "DELETE",
            timeout: 10000,
            processData: false,  // Important!
            contentType: false,

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.cod_erro == false) {

                        if(!data.redirect){
                            window.location.href = "{{ $redirect }}";
                            return 1;
                        }
                        window.location.href = data.redirect;
                } else {
                    alert('erro');
                }
            },
            error: function(x, t, m) {

                alert('erro');
            }
        });


    });

    </script>
