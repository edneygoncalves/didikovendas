@extends('adminlte::page')

@section('title', 'Cadastrar Produtos')

@section('content_header')
    <h1>Cadastrar Produtos</h1>
@stop

@section('content')



    <div class="card card-info">
        <div class="card-body">

            <form id="submitForm">
            @csrf
                <div class="form-group">


                  <label>Categoria| Subcategoria</label>
                  <select class="form-control select2">
                    <option selected="selected" name="subcategoria_id">Selecione uma subcategoria</option>
                    @foreach ($categorias as $categoria)
                        @foreach ($categoria->subcategorias as $subcategoria)
                            <option value="{{ $subcategoria->id }}">{{ $categoria->name }}| {{ $subcategoria->name }}</option>
                        @endforeach
                    @endforeach
                  </select>


                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nome">
                </div>

                <div class="input-group mb-3">
                    <label>Valor</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="valor" class="form-control" placeholder="valor atual">
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" name="descricao" rows="3" ></textarea>
                </div>

                <div class="form-group">
                    <label>Foto</label>
                    <canvas style="border:1px solid grey; width: 200px; height: 200px;" id="my_canvas" width="300" height="300"></canvas>
                    <input id="inputHiddenFoto" type="hidden" name="foto" class="form-control" placeholder="foto">

                </div>

                <button class="input-group input-group-sm" type="submit">Enviar</button>

            </form>

        </div>
        <!-- /.card-body -->
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>


<script>
    var CLIPBOARD = new CLIPBOARD_CLASS("my_canvas", true);

    /**
     * image pasting into canvas
     *
     * @param {string} canvas_id - canvas id
     * @param {boolean} autoresize - if canvas will be resized
     */
    function CLIPBOARD_CLASS(canvas_id, autoresize) {
        var _self = this;
        var canvas = document.getElementById(canvas_id);
        var ctx = document.getElementById(canvas_id).getContext("2d");

        //handlers
        document.addEventListener('paste', function (e) { _self.paste_auto(e); }, false);

        //on paste
        this.paste_auto = function (e) {
            if (e.clipboardData) {
                var items = e.clipboardData.items;
                if (!items) return;

                //access data directly
                var is_image = false;
                for (var i = 0; i < items.length; i++) {
                    if (items[i].type.indexOf("image") !== -1) {
                        //image
                        var blob = items[i].getAsFile();
                        var URLObj = window.URL || window.webkitURL;
                        var source = URLObj.createObjectURL(blob);
                        this.paste_createImage(source);
                        is_image = true;
                    }
                }
                if(is_image == true){
                    e.preventDefault();
                }
            }
        };
        //draw pasted image to canvas
        this.paste_createImage = function (source) {
            var pastedImage = new Image();
            pastedImage.onload = function () {
                if(autoresize == true){
                    //resize
                    canvas.width = pastedImage.width;
                    canvas.height = pastedImage.height;
                }
                else{
                    //clear canvas
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                }
                ctx.drawImage(pastedImage, 0, 0);

                $('#inputHiddenFoto').val(canvas.toDataURL());




            };
            pastedImage.src = source;
        };
    }

</script>

@include('admin-side.components.submit-form',[
    'url' => route('produtos.store'),
    'redirect' => route('produtos.index')
])


@stop
