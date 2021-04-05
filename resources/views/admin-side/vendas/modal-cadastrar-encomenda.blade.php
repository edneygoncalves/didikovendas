<!-- Modal -->
<div class="modal fade" id="modalCadastrarEncomenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Encomenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card card-primary">
                    <form id="submitForm">
                        @csrf
                        <input type="hidden" name="venda_id" value="{{ $venda->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Produto</label>
                                <select name="produto_id">
                                    @foreach ($produtos as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Fornecedor</label>
                                <select name="fornecedor_id">
                                    @foreach ($fornecedores as $fornecedor)
                                        <option value="{{ $fornecedor->id }}">{{ $fornecedor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label>Custo</label>
                                    <input name="custo" type="text" class="form-control col-sm-4">
                                </div>
                                <div class="form-input">
                                    <label>Venda</label>
                                    <input name="venda" type="text" class="form-control col-sm-4">

                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
