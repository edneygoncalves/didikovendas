<script>

    $('.btn-excluir-item').on('click', function(e) {

        e.preventDefault();

        var itemId = $(this).attr('item-id')



        $.ajax({
            url: "{{ $url }}/" + itemId,
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
